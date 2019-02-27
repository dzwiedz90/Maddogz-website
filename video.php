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
		<div id="video">
		<table>
			<tr>
				<td><iframe class="video" src="https://www.youtube.com/embed/VOtgXhrUtBc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
				<td><iframe class="video" src="https://www.youtube.com/embed/bw3FGT38mTc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
				<td><iframe class="video" src="https://www.youtube.com/embed/TxaY7Bdr5oY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
			</tr>
			<tr class="tr">
				<td><iframe class="video" src="https://www.youtube.com/embed/7DhGYfxFGuM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
				<td><iframe class="video" src="https://www.youtube.com/embed/MDveEpAqkYI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
				<td><iframe class="video" src="https://www.youtube.com/embed/cvfr6iY7UAI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
			</tr>
			<tr>
				<td><iframe class="video" src="https://www.youtube.com/embed/z5eMfbFhlx8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
				<td><iframe class="video" src="https://www.youtube.com/embed/wyC82CGqz0Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
				<td><iframe class="video" src="https://www.youtube.com/embed/GLLW4Po_KlI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
			</tr>
		</table>
		</div>
		<div id="video_s">
			<iframe class="video_s" src="https://www.youtube.com/embed/VOtgXhrUtBc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<iframe class="video_s" src="https://www.youtube.com/embed/z5eMfbFhlx8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<iframe class="video_s" src="https://www.youtube.com/embed/bw3FGT38mTc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<iframe class="video_s" src="https://www.youtube.com/embed/TxaY7Bdr5oY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<iframe class="video_s" src="https://www.youtube.com/embed/wyC82CGqz0Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
</body>


</html>