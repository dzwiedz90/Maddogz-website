<!DOCTYPE HTML>
    
<html lang="pl">
    
    
<head>
    <?php
		require("head.php");
	?>
	<!-- Background pattern from Subtle Patterns -->
	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script>
		$(document).ready(function() {
		$("#click1").click(function () { 
		$("#wydarzenie1").slideToggle('normal');
		});
		});
	</script>
</head>
    

    
<body>
	<!--####################MENUSY####################-->
	<div id="menu_male">
		<div id="click1"><button class="button">MENU</button></div>
		<div id="wydarzenie1"style="display: none;">
			<?php
			require("menu_s.php");
			?>
		</div>
	</div>
	<div id="menu_duze">
		<?php
			require("menu.php");
		?>
	</div>
	<!--####################MENUSY####################-->
	<div id="content">
		<div id="logo">
			MADDOGZ</br>
			Stoner band
		</div>
		<div id="audio">
			<h3>Utwór z najnowszego EP zespołu Maddogz:</h1></br>
			Maddogz - Otwórz mi drzwi</br></br>
			Otwórz mi drzwi jest jednym z trzech utworów znajdujących się na EP-ce nagranej pod koniec 2017 roku.</br></br>
			<audio class="audio" controls>
				<source src="audio/n8.wav" type="audio/wav">
				Your browser does not support the audio element.
			</audio> 
		</div>
	</div>
</body>


</html>