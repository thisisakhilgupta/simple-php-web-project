<!--
/**
 * Akhil Gupta
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL)
 * This is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/OSL-3.0  Open Software License (OSL)
 *
 * DISCLAIMER**
 *
 * @category   Simple PHP Web Project
 * @package    Simple PHP Web project
 * @url       https://www.youtube.com/user/thisisakhilgupta/
 * @author    Akhil Gupta
 */
-->

<?php
$firstname = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$bday = $_POST['bday'];
$bmonth = $_POST['bmonth'];
$byear = $_POST['byear'];
$gender = $_POST['gender'];
$password = $_POST['password'];
/* * ****DB Connection Start***** */
$servername = "localhost";
$db_user = "root";
$db_password = "";
$dbname = "mywebproject";

$connect = new mysqli($servername, $db_user, $db_password, $dbname);

$query = "insert into user_data values ('$firstname', '$lastname', '$username', '$password','$bday', '$bmonth', '$byear', '$gender')";
if ($connect->query($query) === TRUE) {
    header("Location: AccountCreated.php");
} else {
    header("Location: index.php?username=exist");
}

mysqli_close($connect);
/* * ****DB Connection Close***** */
?>

<center><h1>
        <a href='login.php'>Login</a> To Continue..
        <h1></center>
            </html>
