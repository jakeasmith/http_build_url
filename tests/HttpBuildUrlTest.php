<?php

class HttpBuildUrlTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Test example one.
	 *
	 * @see http://us2.php.net/manual/en/function.http-build-url.php
	 */
	public function testExampleOne()
	{
		$expected = 'ftp://ftp.example.com/pub/files/current/?a=c';
		$actual = http_build_url("http://user@www.example.com/pub/index.php?a=b#files",
			array(
				"scheme" => "ftp",
				"host" => "ftp.example.com",
				"path" => "files/current/",
				"query" => "a=c"
			),
			HTTP_URL_STRIP_AUTH | HTTP_URL_JOIN_PATH | HTTP_URL_JOIN_QUERY | HTTP_URL_STRIP_FRAGMENT
		);

		$this->assertSame($expected, $actual);
	}
}