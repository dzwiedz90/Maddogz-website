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
		<div id="img">
			<img class="img" src="koncerty_plakaty/lipiany.jpg"> 
			<img class="img" src="koncerty_plakaty/k4.jpg"> 
			<img class="img" src="koncerty_plakaty/barlinek.jpg"> 
			<img class="img" src="koncerty_plakaty/percival.jpg"> 
			<div style="clear: both;"></div>
		</div>
		<div id="img_s">
			<img class="img_s" src="koncerty_plakaty/lipiany.jpg">
			<img class="img_s" src="koncerty_plakaty/percival.jpg">
		</div>
		
		<table>
			<tr>
				<td class="td_koncerty">17.02.2018</td><td class="td_koncerty">Barlinek</td><td class="td_koncerty">Pub Plus</td>
			</tr>
			<tr>
				<td class="td_koncerty">14.01.2018</td><td class="td_koncerty">Lipiany</td><td class="td_koncerty">WOŚP</td>
			</tr>
			<tr>
				<td class="td_koncerty">16.12.2017</td><td class="td_koncerty">Bydgoszcz</td><td class="td_koncerty">Estrada stagebar</td>
			</tr>
			<tr>
				<td class="td_koncerty">11.11.2017</td><td class="td_koncerty">Toruń</td><td class="td_koncerty">Lizard King</td>
			</tr>
			<tr class="tr">
				<td class="td_koncerty">15.07.2017</td><td class="td_koncerty">Lipiany</td><td class="td_koncerty">Zlot militarny</td>
			</tr>
			<tr>
				<td class="td_koncerty">08.07.2017</td><td class="td_koncerty">Szczecin</td><td class="td_koncerty">K4</td>
			</tr>
			<tr>
				<td class="td_koncerty">06.07.2017</td><td class="td_koncerty">Łagów</td><td class="td_koncerty">Zlot motocyklowy</td>
			</tr>
		</table>
	</div>
</body>


</html>