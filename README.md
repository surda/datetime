# WebLoader

[![Build Status](https://travis-ci.org/surda/webloader.svg?branch=master)](https://travis-ci.org/surda/webloader)
[![Licence](https://img.shields.io/packagist/l/surda/webloader.svg?style=flat-square)](https://packagist.org/packages/surda/webloader)
[![Latest stable](https://img.shields.io/packagist/v/surda/webloader.svg?style=flat-square)](https://packagist.org/packages/surda/webloader)
[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat)](https://github.com/phpstan/phpstan)

## Installation

The recommended way to is via Composer:

```
composer require surda/datetime
```

## Nette DI setup

```neon
services:
	nette.latteFactory:
		setup:
			- addFilter(firstDayOfPrevYear, ['Surda\Utils\DateTimeImmutableHelper', 'firstDayOfPrevYear'])
			- addFilter(lastDayOfPrevYear, ['Surda\Utils\DateTimeImmutableHelper', 'lastDayOfPrevYear'])
			- addFilter(firstDayOfPrevMonth, ['Surda\Utils\DateTimeImmutableHelper', 'firstDayOfPrevMonth'])
			- addFilter(lastDayOfNextMonth, ['Surda\Utils\DateTimeImmutableHelper', 'lastDayOfNextMonth'])
			- addFilter(firstDayOfMonth, ['Surda\Utils\DateTimeImmutableHelper', 'firstDayOfMonth'])
			- addFilter(lastDayOfPrevMonth, ['Surda\Utils\DateTimeImmutableHelper', 'lastDayOfPrevMonth'])
			- addFilter(firstDayOfNextMonth, ['Surda\Utils\DateTimeImmutableHelper', 'firstDayOfNextMonth'])
			- addFilter(lastDayOfMonth, ['Surda\Utils\DateTimeImmutableHelper', 'lastDayOfMonth'])
			- addFilter(firstDayOfPrevWeek, ['Surda\Utils\DateTimeImmutableHelper', 'firstDayOfPrevWeek'])
			- addFilter(lastDayOfPrevWeek, ['Surda\Utils\DateTimeImmutableHelper', 'lastDayOfPrevWeek'])
			- addFilter(firstDayOfThisWeek, ['Surda\Utils\DateTimeImmutableHelper', 'firstDayOfThisWeek'])
			- addFilter(lastDayOfThisWeek, ['Surda\Utils\DateTimeImmutableHelper', 'lastDayOfThisWeek'])
			- addFilter(firstDayOfNextWeek, ['Surda\Utils\DateTimeImmutableHelper', 'firstDayOfNextWeek'])
			- addFilter(lastDayOfNextWeek, ['Surda\Utils\DateTimeImmutableHelper', 'lastDayOfNextWeek'])			
			- addFilter(days, ['Surda\Utils\DateTimeImmutableHelper', 'days'])
			- addFilter(day, ['Surda\Utils\DateTimeImmutableHelper', 'day'])
			- addFilter(month, ['Surda\Utils\DateTimeImmutableHelper', 'month'])
			- addFilter(year, ['Surda\Utils\DateTimeImmutableHelper', 'year'])
```
