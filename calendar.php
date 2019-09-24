<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
</head>
<body>
    <?php
    include "calendarClass.php";

    $users = [];
    array_push($users, new Calendar("January","6","1994"));
    echo "<h1>$users[0]</h1>";
    ?>


</body>
</html>