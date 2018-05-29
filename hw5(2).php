<?php
/**
 * Created by PhpStorm.
 * User: simonov
 * Date: 24.05.2018
 * Time: 2:15
 */

$link = 'http://api.openweathermap.org/data/2.5/forecast';
$city = '499099';
$appid = '7e6f586e16e9c5e03b6ac9187492deb4';

$api = "$link?id=$city&appid=$appid";
$respond = file_get_contents($api);
if ($respond === false) {
    exit('Не удалось получить данные');
}
$respond = json_decode($respond);
if ($respond === null) {
    exit('Ошибка декодирования json');
}

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
        <td>
            Temperature: <?php if (!empty($respond->list[0]->main->temp)) {
                echo $respond->list[0]->main->temp .' °C';
            } else {
                echo 'Не удалось получить данные';
            } ?>
        </td>
    </tr>
    <tr>
        <td>
            Cloudiness: <?php if (!empty($respond->list[0]->weather[0]->description)) {
                echo $respond->list[0]->weather[0]->description;
            } else {
                echo 'Не удалось получить данные';
            } ?>
        </td>
    </tr>
    <tr>
        <td>
            Pressure: <?php if (!empty($respond->list[0]->main->pressure)) {
                echo $respond->list[0]->main->pressure .' hpa';
            } else {
                echo 'Не удалось получить данные';
            } ?>
        </td>
    </tr>
    <tr>
        <td>
            Humidity: <?php if (!empty($respond->list[0]->main->humidity)) {
                echo $respond->list[0]->main->humidity . '%';
            } else {
                echo 'Не удалось получить данные';
            } ?>
        </td>
    </tr>
</table>
</body>
</html>
