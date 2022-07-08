<?php

namespace App\Services\PCRE;

class PCRE
{
	public static function preg_match_run() : bool
	{
		return preg_match('/(INSERT INTO posts)([a-zA-Z0-9\\s{1,}\\({1,}\\){1,}\']+)/', "SELECT * FROM posts; INSERT INTO posts (name, age) VALUES ('asd', 23), ('asd', 24),('asd', 25); SELECT * FROM users; INSERT INTO posts (name, age) VALUES ('asd', 232), ('asd', 234),('asd', 245); SELECT * FROM users;");
	}

	public static function preg_replace_run(string $pattern, string $str) : string
	{
		return preg_replace($pattern, '1$', $str);
	}
}