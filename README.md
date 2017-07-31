# PHP Crowdflower API integration.
[![Build Status](https://travis-ci.org/dadeg/php-country-definite-article.svg?branch=master)](https://travis-ci.org/dadeg/php-country-definite-article)

This package allows for adding the definite article ("the") to country names if required for proper English. Example: "United States" becomes "the United States."

## Installation
```
  composer require dadeg/php-country-definite-article
```

## Getting Started
```php
use CountryDefiniteArticle\CountryFormatter;
$countryWithDefiniteArticleAdded = CountryFormatter::format("United States");
```