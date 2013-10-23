<?php defined('SYSPATH') or die('No direct script access.');

class H {
// 	public static function __construct($value, $double_encode = TRUE)
// 	{
// //     echo 'h test';
//     return htmlspecialchars( (string) $value, ENT_QUOTES, Kohana::$charset, $double_encode);
// 	}

// 	public static function __construct($value)
// 	{
// //     echo 'h test';
//     return htmlspecialchars( (string) $value, ENT_QUOTES, Kohana::$charset, $double_encode);
// 	}

	public static function c($value)
	{
    return HTML::chars($value);
	}
	public static function t($value)
	{
    $value = HTML::chars($value);
    $value = Text::auto_p($value);
    return Text::auto_link_urls($value);
	}

}