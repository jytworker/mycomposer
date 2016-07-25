<?php

namespace mycomposer;

/**
 * 这是一个处理字符串的类
 * /
class StringUtils
{
	public static function isEmpty($str)
	{
		return is_null($str) || ""==trim($str);
	}
}
