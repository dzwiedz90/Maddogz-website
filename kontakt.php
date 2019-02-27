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
	</div>
	
	<div id="social">
            <a href="https://www.facebook.com/maddogzpoland/" target="_blank" class="tilelink"><div class="kontakttile" style="float:left"><div id="kontaktfb"><i class="icon-facebook-squaredd"></i></div></div></a>
            <a href="https://www.youtube.com/user/mateuszp05" target="_blank" class="tilelink"><div class="kontakttile" style="float:left"><div id="kontaktyt"><i class="icon-youtubek"></i></div></div></a>
			<div style="clear:both"></div>
            <div class="kontakttile" style="float:left"><div id="kontaktmenager">Menadzer: Mateusz 510 333 183</div></div>
            <div class="kontakttile" style="float:left"><div id="kontaktmail">maddogzofficial@gmail.com<i class="icon-gmail"></i></div></div>
			<div style="clear:both"></div>
    </div>
	
	<div id="social_small">
            <a href="https://www.facebook.com/maddogzpoland/" target="_blank" class="tilelink"><div class="kontakttile" style="float:left"><div id="kontaktfb"><i class="icon-facebook-squaredd_s"></i></div></div></a>
            <a href="https://www.youtube.com/user/mateuszp05" target="_blank" class="tilelink"><div class="kontakttile" style="float:left"><div id="kontaktyt"><i class="icon-youtubek_s"></i></div></div></a>
			<div style="clear:both"></div>
            <div class="kontakttile" style="float:left; width: 100%;"><div id="kontaktmenager">Menadzer: Mateusz 510 333 183</div></div>
			<div style="clear:both"></div>
    </div>
</body>


</html>