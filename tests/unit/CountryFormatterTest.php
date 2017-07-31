<?php

use CountryDefiniteArticle\CountryFormatter;

class CountryFormatterTest extends \PHPUnit_Framework_TestCase
{
	public function testFormatsCountryThatNeedsArticle()
	{
		$originalCountry = "United States";
		$formattedCountry = CountryFormatter::format($originalCountry);

		$this->assertEquals("the United States", $formattedCountry);
	}
	
	public function testFormatsCountryThatDoesNotNeedArticle()
	{
		$originalCountry = "Japan";
		$formattedCountry = CountryFormatter::format($originalCountry);

		$this->assertEquals("Japan", $formattedCountry);
	}

	
}