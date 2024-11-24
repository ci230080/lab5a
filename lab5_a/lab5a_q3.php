<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function calculateArea($width, $length) {
            return $width * $length;
        }

        $width = 4;
        $length = 2;

        $area = calculateArea($width, $length);
    ?>

    <p><b>The area of a rectangle with a width of <?php echo $width; ?> and a length of <?php echo $length; ?> is <?php echo $area; ?>.</b></p>
</body>
</html>
