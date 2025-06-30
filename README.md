# Datetime utils

[![Licence](https://img.shields.io/packagist/l/surda/datetime.svg?style=flat-square)](https://packagist.org/packages/surda/datetime)
[![Latest stable](https://img.shields.io/packagist/v/surda/datetime.svg?style=flat-square)](https://packagist.org/packages/surda/datetime)
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
			- addFilter(lastDayOfPrevMonth, ['Surda\Utils\DateTimeImmutableHelper', 'lastDayOfPrevMonth'])
			- addFilter(firstDayOfMonth, ['Surda\Utils\DateTimeImmutableHelper', 'firstDayOfMonth'])
			- addFilter(lastDayOfMonth, ['Surda\Utils\DateTimeImmutableHelper', 'lastDayOfMonth'])
			- addFilter(firstDayOfNextMonth, ['Surda\Utils\DateTimeImmutableHelper', 'firstDayOfNextMonth'])
			- addFilter(lastDayOfNextMonth, ['Surda\Utils\DateTimeImmutableHelper', 'lastDayOfNextMonth'])
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
