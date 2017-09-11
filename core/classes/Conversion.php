<?php

class Convertions
{

	CONST YEAR = 2017;

	/**
	 * [weekToDay description]
	 * @param  [int] $week [semaine]
	 * @param  [int] $day  [jour (de 0 à 4)]
	 * @return [date]       [anneemoisjour]
	 */
	public static function weekToDay($week, $day)
	{

		return date( "Ymd", strtotime(self::YEAR."W".$week)+($day*3600*24)); 

	}

	public static function escapeString($string)
	{

	  	return preg_replace('/([\,;])/','\\\$1', $string);

	}

}

?>
