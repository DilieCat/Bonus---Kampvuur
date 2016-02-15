<?php 
if (isset($_GET['style']))
{
	$style = $_GET['style'];
}
else{$style = "smokey";}

?>
<body class="<?php echo $style; ?>">
