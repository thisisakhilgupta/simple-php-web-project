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

$username = $_GET['username'];
$servername = "localhost";
$db_user = "root";
$db_password = "";
$dbname = "mywebproject";

$connect = new mysqli($servername, $db_user, $db_password, $dbname);

$query = "select*from user_data where username= '$username'";
$result = $connect->query($query);
if ($result->num_rows > 0) {
    echo "<div style='height: 20px; width: 280px; border: 5px solid red; background-color: red;' >Username Exist..!!</div>";
} else {
    echo "<div style='height: 20px; width: 280px; border: 5px solid green;background-color: green;' >Username Available..!!</div>";
}
mysqli_close($connect);
?>
