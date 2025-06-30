<?php

namespace Tests\Surda\Utils;

use DateTimeImmutable;
use Surda\Utils\DateTimeImmutableHelper;
use Tester\Assert;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';

/**
 * @testCase
 */
class DateTimeImmutableHelperTest extends TestCase
{
    public function testFirstDayOfPreviousYear()
    {
        Assert::same('2022-01-01', DateTimeImmutableHelper::firstDayOfPrevYear(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-03 00:00:00 000000'))->format('Y-m-d'));
    }

    public function testLastDayOfPreviousYear()
    {
        Assert::same('2022-12-31', DateTimeImmutableHelper::lastDayOfPrevYear(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-03 00:00:00 000000'))->format('Y-m-d'));
    }

    public function testFirstDayOfPreviousMonth()
    {
        Assert::same('2023-04-01', DateTimeImmutableHelper::firstDayOfPrevMonth(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-03 00:00:00 000000'))->format('Y-m-d'));
    }

    public function testLastDayOfPreviousMonth()
    {
        Assert::same('2023-04-30', DateTimeImmutableHelper::lastDayOfPrevMonth(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-03 00:00:00 000000'))->format('Y-m-d'));
        Assert::same('2023-02-28', DateTimeImmutableHelper::lastDayOfPrevMonth(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-03-01 00:00:00 000000'))->format('Y-m-d'));
        Assert::same('2024-02-29', DateTimeImmutableHelper::lastDayOfPrevMonth(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2024-03-01 00:00:00 000000'))->format('Y-m-d'));
    }

    public function testFirstDayOfNextMonth()
    {
        Assert::same('2023-06-01', DateTimeImmutableHelper::firstDayOfNextMonth(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-03 00:00:00 000000'))->format('Y-m-d'));
    }

    public function testLastDayOfNextMonth()
    {
        Assert::same('2023-06-30', DateTimeImmutableHelper::lastDayOfNextMonth(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-03 00:00:00 000000'))->format('Y-m-d'));
        Assert::same('2023-02-28', DateTimeImmutableHelper::lastDayOfNextMonth(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-01-01 00:00:00 000000'))->format('Y-m-d'));
        Assert::same('2024-02-29', DateTimeImmutableHelper::lastDayOfNextMonth(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2024-01-01 00:00:00 000000'))->format('Y-m-d'));
    }

    public function testFirstDayOfThisMonth()
    {
        Assert::same('2023-05-01', DateTimeImmutableHelper::firstDayOfMonth(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-03 00:00:00 000000'))->format('Y-m-d'));
    }

    public function testLastDayOfThisMonth()
    {
        Assert::same('2023-05-31', DateTimeImmutableHelper::lastDayOfMonth(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-03 00:00:00 000000'))->format('Y-m-d'));
        Assert::same('2023-02-28', DateTimeImmutableHelper::lastDayOfMonth(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-02-01 00:00:00 000000'))->format('Y-m-d'));
        Assert::same('2024-02-29', DateTimeImmutableHelper::lastDayOfMonth(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2024-02-01 00:00:00 000000'))->format('Y-m-d'));
    }

    public function testDays()
    {
        Assert::same(31, DateTimeImmutableHelper::days(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2022-12-01 00:00:00 000000')));
        Assert::same(28, DateTimeImmutableHelper::days(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-02-01 00:00:00 000000')));
        Assert::same(29, DateTimeImmutableHelper::days(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2024-02-01 00:00:00 000000')));
    }

    public function testDay()
    {
        Assert::same(1, DateTimeImmutableHelper::day(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2022-12-01 00:00:00 000000')));
        Assert::same(28, DateTimeImmutableHelper::day(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-02-28 00:00:00 000000')));
        Assert::same(29, DateTimeImmutableHelper::day(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2024-02-29 00:00:00 000000')));
    }

    public function testMonth()
    {
        Assert::same(3, DateTimeImmutableHelper::month(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2022-03-01 00:00:00 000000')));
        Assert::same(6, DateTimeImmutableHelper::month(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2022-06-01 00:00:00 000000')));
        Assert::same(12, DateTimeImmutableHelper::month(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2022-12-01 00:00:00 000000')));
    }

    public function testYear()
    {
        Assert::same(2022, DateTimeImmutableHelper::year(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2022-12-01 00:00:00 000000')));
    }

    public function testFirstDayOfPreviousWeek()
    {
        Assert::same('2023-04-24', DateTimeImmutableHelper::firstDayOfPrevWeek(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-03 00:00:00 000000'))->format('Y-m-d'));
    }

    public function testLastDayOfPreviousWeek()
    {
        Assert::same('2023-04-30', DateTimeImmutableHelper::lastDayOfPrevWeek(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-03 00:00:00 000000'))->format('Y-m-d'));
    }

    public function testFirstDayOfThisWeek()
    {
        Assert::same('2023-05-01', DateTimeImmutableHelper::firstDayOfThisWeek(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-03 00:00:00 000000'))->format('Y-m-d'));
    }

    public function testLastDayOfThisWeek()
    {
        Assert::same('2023-05-07', DateTimeImmutableHelper::lastDayOfThisWeek(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-03 00:00:00 000000'))->format('Y-m-d'));
    }

    public function testFirstDayOfNextWeek()
    {
        Assert::same('2023-06-05', DateTimeImmutableHelper::firstDayOfNextWeek(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-31 00:00:00 000000'))->format('Y-m-d'));
    }

    public function testLastDayOfNextWeek()
    {
        Assert::same('2023-06-11', DateTimeImmutableHelper::lastDayOfNextWeek(DateTimeImmutable::createFromFormat('Y-m-d H:i:s u', '2023-05-31 00:00:00 000000'))->format('Y-m-d'));
    }
}

(new DateTimeImmutableHelperTest())->run();
