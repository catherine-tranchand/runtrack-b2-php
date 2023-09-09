<?php



function find_one_student(string $email):array {
    $result = [];

    $servername = "localhost";
    $dbname = "lp_official";
    $dbusername = "root";
    $dbpassword = "root";
    $conn = null;


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully  ";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


    $query = "SELECT * FROM student WHERE email = :email";
    $stmt = $conn->prepare($query);
    $stmt->execute([":email" => $email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}

$oneStudent = find_one_student("arobin@louis.com");
var_dump($oneStudent);

?>