<?php
header("Content-Type:application/json");
echo file_get_contents("http://weather.livedoor.com/forecast/webservice/json/v1?city=260010");
?>