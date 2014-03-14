<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invite Form</title>
</head>

<body>
    <h3>Party Invitation List</h3>
    
    <form action="invite.php" method="GET">
        <table>
            <th>Name</th>
            <th>Email</th>
            <? for($count=0;$count<=9;$count++) { ?>
                <tr>
                    <td align="left">
                        <input type="text" name="<? echo "name".$count ?>" size="25">
                    </td>
                    <td align="left">
                        <input type="text" name="<? echo "email".$count ?>" size="25">
                    </td>
                </tr>
            <? } ?>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form> 
</body>
</html>