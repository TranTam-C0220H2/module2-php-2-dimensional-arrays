<?php
$wightArray = $_GET['wightArray'];
$heightArray = $_GET['heightArray'];
?>
<html xmlns:Location="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
<table border="1">
    <?php for ($i = 0; $i < $wightArray; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < $heightArray; $j++): ?>
                <td>
                    <input type='number' name='value[]'>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
    <input type="submit" value="MAX">
</form>
<?php
$arrNumber = $_POST['value'];
include 'function.php';
echo checkMax($arrNumber);
?>
</body>
</html>
