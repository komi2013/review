<?php defined('SYSPATH') or die('No direct script access.');

class MyORM extends Kohana_ORM {

	public function __construct($id = NULL, $table, $pk = NULL)
	{
    $this->_object_name = $this->_table_name = $table;
    $this->_primary_key = $pk;
     
		$this->_initialize();
		if ($id !== NULL)
		{
			if (is_array($id))
			{
				foreach ($id as $column => $value)
				{
					// Passing an array of column => values
					$this->where($column, '=', $value);
				}

				$this->find();
			}
			else
			{
				// Passing the primary key
				$this->where($this->_object_name.'.'.$this->_primary_key, '=', $id)->find();
			}
		}
		elseif ( ! empty($this->_cast_data))
		{
      
			// Load preloaded data from a database call cast
			$this->_load_values($this->_cast_data);

			$this->_cast_data = array();
		}
	}


	public static function factory($table, $primary_key = 'id')
	{
    return new MyORM(NULL,$table,$primary_key);
	}

	/**
	 * Prepares the model database connection, determines the table name,
	 * and loads column information.
	 *
	 * @return void
	 */
	protected function _initialize()
	{
		// Set the object name and plural name
// 		$this->_object_name = strtolower(substr(get_class($this), 6));
//     if ($this->_table_name)
//     {
//       $this->_object_name = $this->_table_name;
//     }
		$this->_object_plural = Inflector::plural($this->_object_name);

		if ( ! $this->_errors_filename)
		{
			$this->_errors_filename = $this->_object_name;
		}

		if ( ! is_object($this->_db))
		{
			// Get database instance
			$this->_db = Database::instance($this->_db_group);
		}
    
		if (empty($this->_table_name))
		{
			// Table name is the same as the object name
			$this->_table_name = $this->_object_name;

			if ($this->_table_names_plural === TRUE)
			{
				// Make the table name plural
				$this->_table_name = Inflector::plural($this->_table_name);
			}
		}

		foreach ($this->_belongs_to as $alias => $details)
		{
			$defaults['model'] = $alias;
			$defaults['foreign_key'] = $alias.$this->_foreign_key_suffix;

			$this->_belongs_to[$alias] = array_merge($defaults, $details);
		}

		foreach ($this->_has_one as $alias => $details)
		{
			$defaults['model'] = $alias;
			$defaults['foreign_key'] = $this->_object_name.$this->_foreign_key_suffix;

			$this->_has_one[$alias] = array_merge($defaults, $details);
		}

		foreach ($this->_has_many as $alias => $details)
		{
			$defaults['model'] = Inflector::singular($alias);
			$defaults['foreign_key'] = $this->_object_name.$this->_foreign_key_suffix;
			$defaults['through'] = NULL;
			$defaults['far_key'] = Inflector::singular($alias).$this->_foreign_key_suffix;

			$this->_has_many[$alias] = array_merge($defaults, $details);
		}

		// Load column information
		$this->reload_columns();

		// Clear initial model state
		$this->clear();
	}

	protected function _load_result($multiple = FALSE)
	{
		$this->_db_builder->from(array($this->_table_name, $this->_object_name));

		if ($multiple === FALSE)
		{
			// Only fetch 1 record
			$this->_db_builder->limit(1);
		}

		// Select all columns by default
		$this->_db_builder->select($this->_object_name.'.*');

		if ( ! isset($this->_db_applied['order_by']) AND ! empty($this->_sorting))
		{
			foreach ($this->_sorting as $column => $direction)
			{
				if (strpos($column, '.') === FALSE)
				{
					// Sorting column for use in JOINs
					$column = $this->_object_name.'.'.$column;
				}

				$this->_db_builder->order_by($column, $direction);
			}
		}

		if ($multiple === TRUE)
		{
			// Return database iterator casting to this object type
			$result = $this->_db_builder->as_object()->execute($this->_db);


			$this->reset();

			return $result;
		}
		else
		{
			// Load the result as an associative array
			$result = $this->_db_builder->as_assoc()->execute($this->_db);

			$this->reset();

			if ($result->count() === 1)
			{
				// Load object values
				$this->_load_values($result->current());
			}
			else
			{
				// Clear the object, nothing was found
				$this->clear();
			}

			return $this;
		}
	}

	public function clear()
	{
		// Create an array with all the columns set to NULL
    if (count($this->_table_columns))
    {
  		$values = array_combine(array_keys($this->_table_columns), array_fill(0, count($this->_table_columns), NULL));
    }
    else
    {
      throw new Kohana_Exception('table columns is 0 '.$this->_table_name);
    }
		// Replace the object and reset the object status
		$this->_object = $this->_changed = $this->_related = $this->_original_values = array();

		// Replace the current object with an empty one
		$this->_load_values($values);

		// Reset primary key
		$this->_primary_key_value = NULL;

		$this->reset();

		return $this;
	}

}
