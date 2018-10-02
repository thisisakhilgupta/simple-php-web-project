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
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: SessionExpire.php");
}
?>
<html>
    <head>
        <title>::Welcome::</title>

        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="cache-control" content="no-store">
        <meta http-equiv="expires" content="0">    

        <link rel="stylesheet" type="text/css" href="styles.css">
        <script type="text/javascript" src="script.js"></script>
        <link rel="shortcut icon" href="icon.jpg" />

    </head>

    <body>


        <div align="right" style="width:100%; height:5%; background-color: brown; font-size: 20px;">

            <?php echo $_SESSION['username']; ?>

            <a href="http://localhost/MyWebProject/Signout.php" >Logout</a><br>
        </div>

        <div align="right" style="font-size: 40px">
            Your B'day:<font color="yellow">

            <?php echo $_SESSION['bday']; ?>-<?php echo $_SESSION['bmonth']; ?>

            </font>
        </div>


    <center>
        <h1>Welcome, <font color="yellow">
            <?php echo $_SESSION['firstname']; ?>
            </font></h1>
        <?php echo $_SESSION['gender']; ?>
    </center>

</body>
</html>
