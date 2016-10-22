<html>
<head>
<?php 
$read = exec("sudo python bell.py");
if($read =="1")
{
header("refresh:2;url = nplay.html");
}
else if($read == "0")
{
header("refresh:2;");
}
else
{
echo("dsadasdyolo");
} ?>
</head>
<body>
<H1 style="text-align:center">Bell Thing</H1>
</body>
</html>
