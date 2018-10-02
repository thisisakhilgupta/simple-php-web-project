<!--
/**
 * ExtendTree
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL)
 * This is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 *
 * DISCLAIMER**
 *
 * @category   PHP basic Fronend Web project 
 * @package    ExtendTree-Simple PHP Web project
 * @license    http://opensource.org/licenses/OSL-3.0  Open Software License (OSL)
 * @Website    http://www.extendtree.com/
 */
-->

<?php

$username = $_POST['username'];
$password = $_POST['password'];
/* * ****DB Connection Start***** */
$servername = "localhost";
$db_user = "root";
$db_password = "";
$dbname = "mywebproject";

$connect = new mysqli($servername, $db_user, $db_password, $dbname);

$query = "select*from user_data where username= '$username' and password= '$password' ";
$result = $connect->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $firstname = $row["firstname"];
        $bday = $row["Birth_day"]; 
        $bmonth = $row["Birth_month"]; 
        $gender = $row["Gender"]; 
    }
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['bday'] = $bday;
        $_SESSION['bmonth'] = $bmonth;
        $_SESSION['gender'] = $gender;
        header("Location: userhome.php");
}else{
        mysqli_close($connect);
        header("Location: http://localhost/MyWebProject/index.php?result=failure");

}
?>
