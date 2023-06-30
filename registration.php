<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "webproject";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['submit'])) 
{
    $student_id = $_POST['id'];
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone'];
    $address = $_POST['address'];
    $date_of_birth = $_POST['date-of-birth'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO student (student_id, stu_first_name, stu_last_name, stu_email_id, stu_phone_number, stu_address, stu_dateofbirth, stu_gender)
    VALUES ('$student_id', '$first_name', '$last_name', '$email', '$phone_number', '$address', '$date_of_birth', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
    header("Location:StudentPage.php");

} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
