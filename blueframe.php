<script>
var y = setInterval(function(){
					window.location="blueframe.php?x=5";
			},1000);
</script>
<?php
$my_file = 'blue.txt';
$data =0;
$handle = fopen($my_file, 'r');
$data =fread($handle,5);
fclose($handle);
echo "<p style='font-family:times new roman; font-size:180px;text-align:center;color:blue' id='red'>$data</p>";
?>