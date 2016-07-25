<?php

namespace mycomposer;

class StringUtils
{
	public static function isEmpty($str)
	{
		return is_null($str) || ""==trim($str);
	}
}