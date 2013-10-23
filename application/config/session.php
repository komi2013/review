<?php defined('SYSPATH') or die('No direct script access.');

return array(
  'native' => array(
    'name' => 'native',
    'lifetime' => 604800, // 7 days
  ),
  'cookie' => array(
    'name' => 'cookie',
    'encrypted' => TRUE,
    'lifetime' => 604800,
  ),
  'database' => array(
      'name' => 'database',
      'encrypted' => TRUE,
      'lifetime' => 43200,
      'group' => 'default',
      'table' => 'sessions',
      'columns' => array(
          'session_id'  => 'session_id',
          'last_active' => 'last_active',
          'contents'    => 'contents'
      ),
      'gc' => 500,
  ),

);
