<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
foreach($result as $row)
{
?>
<div>
    <img src="<?=$row->myimage1?>">
    <img src="<?=$row->myimage2?>">
    <img src="<?=$row->myimage3?>">
    <img src="<?=$row->myimage4?>">
    <img src="<?=$row->myimage5?>">
</div>
<?php
}
?>
</body>
</html>