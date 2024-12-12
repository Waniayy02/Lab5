<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
    // Variables for your details
    $name = "Nur Ariffin Mohd Zin";
    $matric_number = "A123456";
    $course = "Bachelor of Computer Science (Multimedia)";
    $year_of_study = "Year 3";
    $address = "No. 12, Jalan Felda, 86000 Kluang, Johor";
    ?>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Field</th>
            <th>Details</th>
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
