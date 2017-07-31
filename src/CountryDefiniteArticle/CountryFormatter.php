<?php

namespace CountryDefiniteArticle;

class CountryFormatter {
	
	const countryFragmentsThatNeedDefiniteArticle = [
		"Bahamas",
		"Islands",
		"Republic",
		"Comoros",
		"Gambia",
		"Isle of Man",
		"Ivory Coast",
		"Maldives",
		"Netherlands",
		"Philippines",
		"United Arab Emirates",
		"United Kingdom",
		"United States"
	];
	
	private function __construct()
	{
	
	}
	
	public static function format(string $countryName) : string
	{
		$countryFormatter = new CountryFormatter();
		return $countryFormatter->addDefiniteArticleIfNeeded($countryName);
		
	}
	
	private function addDefiniteArticleIfNeeded(string $countryName)
	{
		foreach (self::countryFragmentsThatNeedDefiniteArticle as $fragment) {
			if (stristr($countryName, $fragment)) {
				return "the " . $countryName;
			}
		}
		return $countryName;
	}
}