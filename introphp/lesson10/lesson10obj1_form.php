<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>

<?php

if (isset($_GET['error'])) {
   $error_code = $_GET['error'];  //this means that there's been an error and we need to notify the customer
} else {
   $error_code = 0;
}

?>

<body>
    <h3>User Sign Up</h3>
    <?
        if ($error_code) {
           echo "<div style='color:red'>Please help us with the following:</div>";
        }
    ?>
    <form action="lesson10obj1.php" method="GET">
        <table>
            <tr>
                <td align="right">Name:</td>
                <td align="left">
                    <input type="text" name="name" value="<? echo $_GET['name']; ?>" size="25">
                    <?
                        if ($error_code && !($_GET['name'])) {
                            echo "<b>Please include your name.</b>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td align="right">Email:</td>
                <td align="left">
                    <input type="text" name="email" value="<? echo $_GET['email']; ?>" size="25">
                    <?
                        if ($error_code == "1" && !($_GET['email'])) {
                            echo "<b>Please include your email address.</b>";
                        }
                        elseif ($error_code == "2") {
                            echo "<b>Please enter a valid email address.</b>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form> 
</body>
</html>