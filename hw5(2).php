<?php


$api='http://api.openweathermap.org/data/2.5/forecast?id=499099&appid=7e6f586e16e9c5e03b6ac9187492deb4';
$respond = file_get_contents($api);
$respond = json_decode($respond);
$respond->list[0]->main->temp = $respond->list[0]->main->temp -273.15;


//echo "<pre>";
//print_r($respond);
//echo "</pre>";
?>

<html>
<head>
    <title>1.5 Стандартные функции</title>
    <meta charset="utf-8">
</head>
<body>
<table>
    <tr>
        <td>Weather in <?php echo $respond->city->name; ?>:</td>
    </tr>
    <tr>
        <td>Temperature: <?php echo $respond->list[0]->main->temp; ?> °C</td>
    </tr>
    <tr>
        <td>Cloudiness: <?php echo $respond->list[0]->weather[0]->description; ?></td>
    </tr>
    <tr>
        <td>Pressure: <?php echo $respond->list[0]->main->pressure;?> hpa</td>
    </tr>
    <tr>
        <td>Humidity: <?php echo $respond->list[0]->main->humidity;?>%</td>
    </tr>
</table>
</body>
</html>
