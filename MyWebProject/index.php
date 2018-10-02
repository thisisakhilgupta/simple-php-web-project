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
ini_set('display_errors', 1);

if (isset($_SESSION['Logged_in']))
    unset($_SESSION['Logged_in'])
    ?>
<html>
    <head>
        <title>My Web Project</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <script type="text/javascript" src='script.js'></script>
    </head>

    <body>
        <table width="100%" height="15%" >
            <tr>
                <td><h2>**This is a PHP project**</h2></td>
                <td width="200px"></td>
                <td>

                    <form method="post" action="checklogin.php">

                        Username :
             <input type="text" name="username" class="textbox">
                        Password :
             <input type="password" name="password" class="textbox">
<input type="submit" value="Login" class="circle"
 onclick="return checkLogin(this.form);">
                    </form>
                </td>
            </tr>
        </table>
    <center><h3 id="error"></h3></center>


    <?php
    if (!empty($_GET["result"])) {
        echo "<center><div style='height: 25px;width: 280px; background-color:red'> 
<b>Wrong username or password</b></div></center>";
    }
    ?>


    <hr>

    <?php
    if (!empty($_GET["username"])) {
        echo "<center><div style='height: 40px; width: 400px; background-color:red'><b>Same username already exist in our database</b></div></center>";
    }
    ?>

    <table width="100%">
        <tr>
            <td width="800px" align="center"><h1>**Welcome**</h1></td>

            <td>

                <form method="post" action="checkregistration.php">

                    <h1>Create Account</h1>
                    <table>
                        <tr>
                            <td>First Name</td>
                            <td><input type="text" name="name" class="textbox"></td>
                        </tr>
                        <tr height="20px" >
                            <td></td>
                            <td id="name"></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type="text" name="lastname" class="textbox"></td>
                        </tr>
                        <tr height="20px" >
                            <td></td>
                        </tr>

                        <tr>
                            <td>User name</td>
                            <td><input type="text" autocomplete="off" name="username" id="checkusername" class="textbox" onkeyup="return checkUsername();"></td>
                        </tr>

                        <tr height="20px" >
                            <td></td>
                            <td id="username"></td>
                        </tr>

                        <tr>
                            <td>Date of Birth :</td>

                            <td><select name="bday" class="dob">
                                    <option>Day</option>
                                    <?php
                                    for ($i = 1; $i <= 31; $i++) {
                                        ?>
                                        <option>
                                            <?php
                                            echo $i;
                                        }
                                        ?>

                                    </option>
                                </select>

                                <select name="bmonth" class="dob">
                                    <option>Month</option>
                                    <option>Jan</option>
                                    <option>Feb</option>
                                    <option>Mar</option>
                                    <option>Apr</option>
                                    <option>May</option>
                                    <option>Jun</option>
                                    <option>Jul</option>
                                    <option>Aug</option>
                                    <option>Sep</option>
                                    <option>Oct</option>
                                    <option>Nov</option>
                                    <option>Dec</option>

                                </select>


                                <select name="byear" class="dob">
                                    <option>Year</option>
                                    <?php
                                    for ($i = 2016; $i >= 1920; $i--) {
                                        ?>
                                        <option>
                                            <?php
                                            echo $i;
                                        }
                                        ?>
                                    </option>
                                </select>
                            </td>
                        </tr>

                        <tr height="20px" >
                            <td></td>
                            <td id="dob"></td>
                        </tr>

                        <tr>
                            <td>Gender :</td>
                            <td>
                                Female<input type="radio"  name="gender" value="Female">
                                Male<input type="radio" name="gender" value="Male">
                                Other<input type="radio" name="gender" value="other">
                            </td>
                        </tr>

                        <tr height="20px" >
                            <td></td>
                            <td id="gender"></td>
                        </tr>

                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password" class="textbox"></td>
                        </tr>

                        <tr height="20px" >
                            <td></td>
                            <td id="password"></td>
                        </tr>

                        <tr>
                            <td>Re-Enter Password:</td>
                            <td><input type="password" name="cpassword" class="textbox"></td>
                        </tr>

                        <tr height="20px" >
                            <td></td>
                            <td id="cpassword"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="checkbox" name="terms"><a href="terms&condition.php" target="_blank">I agree terms & conditions</a>
                            </td>
                        </tr>


                        <tr>
                            <td><input type="submit" value="Create" class="circle" onclick="return checkRegistration(this.form);"></td>
                            <td><input type="reset" value="Clear" class="circle"></td>
                        </tr>

                    </table>


                </form>
            </td>
        </tr>
    </table>

    <hr>
    <br><br>
    <hr>

</body>
</html>
