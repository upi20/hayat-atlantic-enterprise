<script>
    function date_calc(from, add) {
        const day = 86400000;
        const date_from = new Date(from);
        const from_timestamp = date_from.getTime();
        return new Date(from_timestamp + (day * add));
    }
</script>
<?php

$date = date_create("2013-3-15");
$date2 = date_create("2013-3-15");
var_dump($date->diff($date2)->d + 1);
die;
date_add($date, date_interval_create_from_date_string("40 days"));
echo date_format($date, "Y-m-d");
?>