<?php 
if (isset($_GET['hints']))
{
	$hints = $_GET['hints'];
}
else{$hints = "nee";}
if ($hints == "all")
{
?>

<div class="hints">
				<h2>Hints</h2>
				<ul>
					<li>Waren Marie en Vincent wel mensen?</li>
					<li>Is er iets gevallen?</li>
					<li>Zijn Marie en Vincent verdronken?</li>
					<li>Zijn Marie en Vincent vermoord?</li>				
				</ul>
			</div>

<?php } ?>