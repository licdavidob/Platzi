<?php
require("date.php");

echo "get_date_from_timestamp : " . get_date_from_timestamp("2022-04-25") . "\n";
echo "get_short_date_from_timestamp : " . get_short_date_from_timestamp("2022-04-25") . "\n";
echo "get_time_from_timestamp : " . get_time_from_timestamp("18:32:45") . "\n";
echo "get_day_of_the_week : " . get_day_of_the_week(4) . "\n";
echo "translate_time : " . translate_time("1 día", false) . "\n";
echo "add_time : " . add_time("2022-04-23 12:45:34", "1 día + 2 horas + 1 mes") . "\n";
echo "get_full_date : " . get_full_date("2022-03-14 16:35:45") . "\n";
