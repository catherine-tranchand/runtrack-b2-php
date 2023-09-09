
<?php
function find_all_student(): array {
    $students = [];

    $servername = "localhost";
    $dbname = "lp_official";
    $dbusername = "root";
    $dbpassword = "root";
    $conn = null;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $sql = "SELECT * FROM student";

    foreach ($conn->query($sql) as $row) {
        $students[] = $row;
    }

    return $students;
}

$students = find_all_student(); // Call the function to get the student data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job-O1</title>
</head>
<body>

<h1>Data from Database</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Grade-id</th>
        <th>Email</th>
        <th>Full name</th>
        <th>Birth date</th>
        <th>Gender</th>
    </tr>
    <?php
    // Loop through the database results (stored in $students) and display them in the table
    foreach ($students as $row) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["grade_id"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["fullname"] . "</td>";
        echo "<td>" . $row["birthdate"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
