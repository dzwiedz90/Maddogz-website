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
	<div id="content_s">
		MADDOGZ</br>
		<div id="glowna_content_s">Stoner band</div>
	</div>
	<div id="menu_duze">
		<?php
			require("menu.php");
		?>
		<div id="tresc">
			MADDOGZ</br>
			<div id="glowna_content">Stoner band</div>
		</div>
	</div>
	<!--####################MENUSY####################-->
</body>


</html>