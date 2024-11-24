<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            border: 1px solid black;
            padding: 10px;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php 
        $name = "farah Nur Ain Binti Arzhar";
        $matric_number = "CI230080";
        $course = "Web Development";
        $year_of_study = "Year 2";
        $address = "Taman Iriz, Haji khadir Parit Raja";
    ?>

    <table>
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
