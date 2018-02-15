
<html>
<head>
<script language="javascript" type="text/javascript">
<?php
$value = $_GET['value'];
echo "var value = $value";
$my_file = 'red.txt';
$handle = fopen($my_file, 'w');
$data = $value;
fwrite($handle, $data);
fclose($handle);


?>


function update()
{

var temp = event.keyCode;

if(temp == 38||temp==40)
{
		if(temp==38)
					{
						value = value+50;
						
					}
		if(temp==40)
					{
						value = value-50;
					}
					
		window.location= "redclient.php?value="+value;
}


}
</script>
<body onkeydown="update()">
<?php
echo "$value";
?>
</body>
</html>