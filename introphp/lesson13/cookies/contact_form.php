<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>

<?php

    require("./template_top.inc");

    if ($_GET['error'] == "1") {
       $error_code = 1;  //this means that there's been an error and we need to notify the customer
    } else {
       $error_code = 0;
    }

?>

<body>
    <h3>Contact ACME Corporation</h3>
    <?
        if ($error_code) {
           echo "<div style='color:red'>Please help us with the following:</div>";
        }
    ?>
    <form action="contact.php" method="GET">
        <table>
            <tr>
                <td align="right">Name:</td>
                <td align="left">
                    <?
                        if ($_COOKIE['name']) {
                            echo $_COOKIE['name'];
                        }
                        else {
                    ?>
                        <input type="text" name="name" value="<? echo $_GET['name']; ?>" size="25">
                        <input type="checkbox" name="remember" /> Remember me on this computer
                    <?
                        }
                        if ($error_code && !($_GET['name'] || $_COOKIE['name'])) {
                            echo "<b>Please include your name.</b>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td align="right">Email:</td>
                <td align="left">
                    <?
                        if ($_COOKIE['email']) {
                            echo $_COOKIE['email'];
                        }
                        else {
                    ?>
                        <input type="text" name="email" value="<? echo $_GET['email']; ?>" size="25">
                    <?
                        }
                        if ($error_code && !($_GET['email'] || $_COOKIE['email'])) {
                            echo "<b>Please include your email address.</b>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td align="right">Type of Request:</td>
                <td align="left">
                    <select name="whoami">
                        <option value="">Please Choose...</option>
                        <option value="newcustomer" <? if ($_GET['whoami'] == "newcustomer") { echo " selected"; } ?> />
                            I am interested in becoming a new customer
                        </option>
                        <option value="customer" <? if ($_GET['whoami'] == "customer") { echo " selected"; } ?> />
                            I am a customer with a general question
                        </option>
                        <option value="support" <? if ($_GET['whoami'] == "support") { echo " selected"; } ?> />
                            I need technical help using the website
                        </option>
                        <options value="billing" <? if ($_GET['whoami'] == "billing") { echo " selected"; } ?> />
                            I have a billing question
                        </options>
                    </select>
                    <?
                        if ($error_code && !($_GET['whoami'])) {
                            echo "<b>Please choose a request type.</b>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td align="right">Subject:</td>
                <td align="left">
                    <input type="text" name="subject" value="<? echo $_GET['subject']; ?>" size="50" max="50">
                    <?
                        if ($error_code && !($_GET['subject'])) {
                            echo "<b>Please add a subject for your request.</b>";
                        }      
                    ?>
                </td>
            </tr>
            <tr> 
                <td align="right" valign="top">Message:</td>
                <td align="left">
                    <textarea name="message" cols="50" rows="8">
                        <? echo $_GET['message']; ?>
                    </textarea>
                    <?
                        if ($error_code && !($_GET['message'])) {
                            echo "<b>Please fill in a message for us.</b>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">How did you hear about us?
                    <ul>
                        <input type="radio" name="found" value="wordofmouth">Word of Mouth<br/>
                        <input type="radio" name="found" value="search">Online Search<br/>
                        <input type="radio" name="found" value="article">Printed publication/article<br/>
                        <input type="radio" name="found" value="website">Online link/article<br/>
                        <input type="radio" name="found" value="other">Other     
                    </ul>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="hidden" name="update1" value="off">
                    <input type="checkbox" name="update1" id="" checked="checked">Please email me updates about your products. <br>
                    <input type="hidden" name="update2" value="off">
                    <input type="checkbox" name="update2" id="">Please email me updates about products from third-party partners.
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form> 

<?
    require("./template_bottom.inc");
?>    
</body>
</html>