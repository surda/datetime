<?php declare(strict_types=1);

namespace Surda\Utils;

use DateTimeImmutable;

class DateTimeImmutableHelper
{
    // Year ---------------------
    public static function firstDayOfPrevYear(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify('last year January 1st');
    }

    public static function lastDayOfPrevYear(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify('last year December 31st');
    }

    // Month ---------------------

    public static function firstDayOfPrevMonth(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify('first day of previous month');
    }

    public static function lastDayOfPrevMonth(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify('last day of previous month');
    }

    public static function firstDayOfNextMonth(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify('first day of next month');
    }

    public static function lastDayOfNextMonth(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify('last day of next month');
    }

    public static function firstDayOfMonth(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify(sprintf('first day of %s', $datetime->format('F Y')));
    }

    public static function lastDayOfMonth(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify(sprintf('last day of %s', $datetime->format('F Y')));
    }

    public static function days(DateTimeImmutable $datetime): int
    {
        return (int) self::lastDayOfMonth($datetime)->format('t');
    }

    public static function day(DateTimeImmutable $datetime): int
    {
        return (int) $datetime->format('j');
    }

    public static function month(DateTimeImmutable $datetime): int
    {
        return (int) $datetime->format('h');
    }

    public static function year(DateTimeImmutable $datetime): int
    {
        return (int) $datetime->format('Y');
    }

    // Week ---------------------

    public static function firstDayOfPrevWeek(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify('monday last week');
    }

    public static function lastDayOfPrevWeek(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify('sunday last week');
    }

    public static function firstDayOfThisWeek(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify('monday this week');
    }

    public static function lastDayOfThisWeek(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify('sunday this week');
    }

    public static function firstDayOfNextWeek(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify('monday next week');
    }

    public static function lastDayOfNextWeek(DateTimeImmutable $datetime): DateTimeImmutable
    {
        return $datetime->modify('sunday next week');
    }


}