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
session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
?>

<html>
    <head>

        <title>:::Signed Out:::</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="shortcut icon" href="icon.jpg" />

    </head>

    <body>
    <center>
        <h1>You are currently Logged out..<br><a href="http://localhost/MyWebProject/index.php">Login</a> to continue..</h1>
    </center>


</body>
</html>
