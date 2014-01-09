<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h3>Contact ACME Corporation</h3>
    <form action="contact.php" method="GET">
        <table>
            <tr>
                <td align="right">Name:</td>
                <td align="left">
                    <input type="text" name="name" value="<? echo $_GET['name']; ?>" size="25">
                </td>
            </tr>
            <tr>
                <td align="right">Email:</td>
                <td align="left">
                    <input type="text" name="email" value="<? echo $_GET['email']; ?>" size="25">
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
                </td>
            </tr>
            <tr>
                <td align="right">Subject:</td>
                <td align="left"><input type="text" name="subject" value="<? echo $_GET['subject']; ?>" size="50" max="50"></td>
            </tr>
            <tr> 
                <td align="right" valign="top">Message:</td>
                <td align="left"><textarea name="message" cols="50" rows="10">
                    <? echo $_GET['message']; ?>
                </textarea></td>
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
</body>
</html>