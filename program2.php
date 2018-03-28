<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1251">
        <title>PHP_Lesson_2</title>
    </head>
    <body>
        <h2>Fibonacci Sequence</h2>
        <?php
            $x = $_GET['x'];
            //$x = rand(0,100);//for debugging
            $y1 = 1;
            $y2 = 1;
            $message = '';
            do {
                if ($y1 > $x) {
                    $message = 'is not in Fibonacci Sequence';
                } elseif ($y1 == $x) {
                    $message = 'is in Fibonacci Sequence';
                } else {
                    $y3 = $y1;
                    $y1 += $y2;
                    $y2 = $y3;
                }
            } while ($message == '');
            $message = 'x='.$x.' '.$message;
        ?>
        <p><?php echo $message ?></p>
    </body>
</html>
