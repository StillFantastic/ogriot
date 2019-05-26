<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $num = rand(1,10);
        if($num < 5){
            $path = "test_up.jpg";
        $name = "饅頭";
        $count = "10個";
        $tmp = "27度";
        $hum = "40%";
        $mat = "過熟";
        $response = "{\"name\":\"".$name."\",\"count\":\"".$count."\",\"tmp\":\"".$tmp."\",\"hum\":\"".$hum."\",\"mat\":\"".$mat."\",\"path\":\"".$path."\"}";
        echo $response;
        $num = 0;
        }
        else{
            $path = "meow.jpg";
        $name = "妞妞";
        $count = "3個";
        $tmp = "24度";
        $hum = "37%";
        $mat = "微熟";
        $response = "{\"name\":\"".$name."\",\"count\":\"".$count."\",\"tmp\":\"".$tmp."\",\"hum\":\"".$hum."\",\"mat\":\"".$mat."\",\"path\":\"".$path."\"}";
        echo $response;
        $num = 1;
        }
    }
?>