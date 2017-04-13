<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "varun";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["name"];
$dob = $_POST["dob"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$college = $_POST["college"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$email = $_POST["email"];
$bio = $_POST["bio"];
$inthob = $_POST["inthob"];

$sql = "INSERT into membersEWB (Name, DOB, Age, Gender, College, Contact, Email, Biography, Interests)
VALUES ('$name', '$dob', '$age', '$gender', '$college', '$contact', '$email', '$bio', '$inthob')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully!";
    echo '<br><br>';
    echo '<a href = "http://www.localhost:8080/join1.php">Open Homepage</a>';
} 

else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>