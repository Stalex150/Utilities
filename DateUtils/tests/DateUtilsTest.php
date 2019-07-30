<?php

declare (strict_types = 1);

namespace Lukas\App;
use DateTime;

require_once(__DIR__ . '/../src/DateUtils.php');

use PHPUnit\Framework\TestCase;

class DateUtilsTest extends TestCase
{   
    public static function testFormatDate()
    {
        $dateTime = new DateUtils();
        self::assertEquals('03.12.2018', $dateTime->formatDate(date('2018-12-03 13:06:34.3870')));
    }
    
    public static function testFormatDateTimeTest()
    {
        $dateTime = new DateUtils();
        self::assertEquals('03.12.2018 13:06:34', $dateTime->formatDateTime(date('2018-12-03 13:06:34.3870')));
    }
}