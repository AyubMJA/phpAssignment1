<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" />
    <title>Calendar</title>
</head>
<body>
    <main>
        <div class="row">
            <div class="col-1-of-2">
                <h1>This is the calendar inputs</h1>
                <form action="calendar.php" method="post">
                    <input type="text" name="month">
                    <input type="text" name="day">
                    <input type="text" name="year">
                    <button type="submit" value="submit">Submit</button>
                </form>
            </div>
            <div class="col-1-of-2">
                <h1>This is where the calendar outputs</h1>

                <?php
                include 'calendarClass.php';

                $m = $_POST['month'];
                $d = $_POST['day'];
                $y = $_POST['year'];

                $C = new CalendarX($m[0],$d[1],$y[2]);

                echo $C->get_Month();
                echo $C->get_Day();
                echo $C->get_Year();


                ?>

            </div>
        </div>
    </main>    
</body>
</html>