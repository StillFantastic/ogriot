<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $path = "test_up.jpg";
        $name = "饅頭";
        $count = "10個";
        $tmp = "27度";
        $hum = "40%";
        $mat = "過熟";
        $response = "{\"name\":\"".$name."\",\"count\":\"".$count."\",\"tmp\":\"".$tmp."\",\"hum\":\"".$hum."\",\"mat\":\"".$mat."\"}";
        echo $response;
    }
?>