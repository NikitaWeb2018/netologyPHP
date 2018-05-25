<?php

$data = file_get_contents(__DIR__. '/contacts.json');
$contacts = json_decode($data, true);

?>

<html>
<head>
    <title>Список контактов</title>
    <meta charset="utf-8">
    <style>
        table {
            border: 1px solid black;
            text-align: center;
        }

        td {
            width: 150px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Адрес</td>
        <td>Телефон</td>
    </tr>
    <?php foreach ($contacts as $contact) { ?>
    <tr>
        <td><?php echo $contact['firstName']; ?></td>
        <td><?php echo $contact['lastName']; ?></td>
        <td><?php echo $contact['address']; ?></td>
        <td><?php echo $contact['phoneNumber']; ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
