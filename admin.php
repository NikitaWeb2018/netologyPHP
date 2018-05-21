<?php

$uploaddir = '/Applications/MAMP/hw7/tests/';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir .
    $_FILES['userfile']['name'])) {
    print "Файл загружен.";
    echo "</br>", "Ссылка на list.php:", "</br>", '<a href="list.php">http://localhost:63342/hw7/list.php</a>';
} else {
    print "Загрузите файл";
}
?>


<html>
<head>
    <title>Form</title>
    <meta charset="utf-8">
</head>
<body>
<form enctype="multipart/form-data" action="admin.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000">
    JSON file: <input name="userfile" type="file">
    <input type="submit" value="Отправить">
</form>
</body>
</html>

