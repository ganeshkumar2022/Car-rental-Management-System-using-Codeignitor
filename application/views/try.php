<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<style>
div
{
	position:relative;
}
div::after
{
content:" ";
position:absolute;
top:100%;
left:50%;
margin-left:-5px;
border-left:6px solid transparent;
border-right:6px solid transparent;
border-top:10px solid red;
}
</style>
</head>
<body>
<div style="background-color:red;padding:10px;border-radius:10px;width:100px;">
<span>hello</span>
</div>
</body>
</html>
