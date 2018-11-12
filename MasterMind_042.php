
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset=utf-8>
		<title>MasterMind vs.042</title>
		<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
		<script src="JS-MM_042.js"></script>
		<script src="JS-MMfuncties_042.js"></script>
		<script src="JQuery-MM_042.js"></script>
		<link rel="stylesheet" href="CSS-MM_042.css">

<?php
session_start()
?>

</head>
	
	<body>
		<div id="spelbord">
			<div id="gaatjes1"><script>drawrondjes();</script></div>
			<div id="gaatjes2"><script>drawpinnetjes();</script></div>
			<div id="cover"></div>
			<div id="covertgl"></div>
		</div>
		<div id="knoppen"><script>drawbuttons();</script></div>
		<div id="doosjes">
			<div id="kleurenpalet"> <div id="hulppalet"><script>drawcolors();</script></div></div>
			<div id="pinnen"><script>drawblackwhite();</script></div>
		</div>
		<div id="formulier" method="POST" >
			<p>your name:<input required id ="name" name="name" type="text" /></p>
			<p>email-adress:<input id ="email" name="email" type="email" /></p>
			<br/><hr/>
			<p><u><i>game parameters</i></u></p>
			<p>number of positions:
			<select required id="npos">
				<option value="4pos">4</option>
				<option value="5pos" selected="true">5</option>
				<option value="6pos">6</option>
			</select></p>
			<p>number of colors:
			<select required id="nkleur">
				<option value="6kleur">6</option>
				<option value="7kleur">7</option>
				<option value="8kleur" selected="true">8</option>
				<option value="9kleur">9</option>
			</select></p>
			<p>allow empty position(s)<input type="checkbox" id="legepos" name="legepos" value="leeg"  checked></p>
			<p>allow multiple colors<input type="checkbox" id="multkleur" name="multkleur" value="leeg"  checked></p>
			<br/><hr/>
			<p><u><i>your comments</i></u></p>
			<p><input type="textarea" id="textarea" ></p>
			<hr/>
			<input type="submit" id="invoeren" name="invoeren" value="Submit">
		</div>
		<div id="nieuwspel">
			<p><input type="button" id="nwspelknop"value="Another Game" onClick="window.location.reload()"></p>
		</div>
	</body>
</html>