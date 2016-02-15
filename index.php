<!doctype html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
	<body>
	<div>
	<?php
		$time = date("H:i");

		if ($time >= 0 && $time  <= 5) {
			echo "Goedenacht!" ; 
			echo '<body style="background-image:url(night.png)">';
			echo '<title>' . "Goede Nacht!" . '</title>';
		}
				elseif ($time >= 6 && $time <= 11) {
			echo "Goedemorgen!<br>
			Het is nu $time" ; 
			echo '<body style="background-image:url(morning.png)">';
			echo '<title>' . "Goedemorgen!" . '</title>';
		}
				elseif ($time >= 12 && $time <= 17) {
			echo "Goedemiddag!" ; 
			echo '<body style="background-image:url(afternoon.png)">';
			echo '<title>' . "Goedemiddag" . '</title>';
		}
				else
			echo "Goedeavond!" ; 
			echo '<body style="background-image:url(evening.png)">';
			echo '<title>' . "Goedeavond!" . '</title>';
		


	?>	
		</div>
	</body>

</html>