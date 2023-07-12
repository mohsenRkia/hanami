<?php

use Carbon\Carbon;
use Morilog\Jalali\CalendarUtils;

function ShamsiToMiladi($shamsi_year,$shamsi_month,$shamsi_day){
    $arrayMiladi = CalendarUtils::toGregorian($shamsi_year,$shamsi_month,$shamsi_day);
    $dateTime = Carbon::createFromFormat('Y-m-d H', $arrayMiladi[0].'-'.$arrayMiladi[1].'-'.$arrayMiladi[2].' 06')->toDateTimeString();
    return $dateTime;
}
