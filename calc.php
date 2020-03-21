<?php

    function get_days_number($year, $month, $days_in_month)
    {
        if($year % 4 == 0 && $month == 2)
        {
            return 29;
        }
        return $days_in_month[$month - 1];
    }

    $date_str = $_POST["date"].str_split("/");
    $summ = $_POST["summ"];
    $years = $_POST["years"];
    $use_add = $_POST["add-flag"];
    $summ_add = $_POST["add-summ"];

    $date = array (
        "day" => (int)$date_str[0],
        "month" => (int)$date_str[1],
        "year" => (int)$date_str[2]
    );
    $days_in_month = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    $year = $date["year"];
    $month = $date["month"] + 1;
    $result = $summ;
    $percent = 0.1;

    if($month > 12)
    {
        $month = 1;
        $year++;
    }
    while ($month < $date["month"] && $year < $date["year"] + $years)
    {
        $result += ($result + $use_add == "1" ? $summ_add : 0)
            * get_days_number($month) * $percent
            / ($year % 4 == 0 ? 366 : 365);
        $month++;
        if($month > 12)
        {
            $month = 1;
            $year++;
        }
    }

    $res = json_encode(array("result" => $result));
    die($res);

?>