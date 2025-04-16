<!DOCTYPE html>
<html lang="en">
<head>
<title>Studio Cospix</title>
<meta charset="UTF-8">
<!-- <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no" /> -->
<meta name="viewport" content="width=400, initial-scale=0.8, user-scalable=no">

<style>
html,body {
	background:	#07041e;
	color:		#ffffce;
	font-size:	1.5em;
	overflow-x:	hidden:
	width:100%;
}

fieldset {
	border: 0;
}

fieldset div {
	style:		inline-block;
	width:		200px;
	min-height:	1em;
	background:	#280a33;
	margin:		10px;
	float:		left;
	font-size:	20px;
	text-align:	center;
	padding:	0 0 10px 0;
	border-radius: 20px;
}

fieldset span {
	color:		#fff;
	opacity:	0.6;
}

fieldset div:hover {
	background:	#4f0832;
	cursor:		pointer;
	box-shadow: 0 0 20px #B99CAD;
	text-shadow: 2px 2px 4px red, -2px 2px 4px green, 2px -2px 4px blue, -2px -2px 4px yellow;
}

fieldset div:hover svg {
	filter: drop-shadow(1px 1px 1px red) drop-shadow(-1px 1px 1px green) drop-shadow(1px -1px 1px blue) drop-shadow(-1px -1px 1px yellow);
}

svg {
	width:		200px;
	height:		200px;
	margin:		0 0 -20px 0;
	fill:		#fff;
	opacity:	0.6;
}

.switch svg {
	max-width:	160px;
}

.pocket svg {
	max-width:	170px;
}

.mister svg {
	margin:		-10px 0 -10px 0;
	max-width:	150px;
}

.mister svg .stroke {
	stroke:		#fff;
}

.steam-deck svg {
	margin:		10px 0 -30px 0;
	max-width:	160px;
}
</style>

<script>
async function x16(input) {
  const response = await fetch("/x16.php?input="+parseInt(input));
  const data = await response.text();
  console.log(data);
}

</script>

</head>

<fieldset>
<legend>8x4 VGA Matrix</legend>
</fieldset>

<fieldset>
<legend>4x4 HDMI Matrix</legend>
</fieldset>

<fieldset>
<legend>16x1 HDMI Switch</legend>

<div onclick="x16(1)" class="na1">
	<?php readfile('svg/noun-hdmi-3303618.svg'); ?>
	<span>n/a</span>
</div>

<div onclick="x16(2)" class="na2">
	<?php readfile('svg/noun-hdmi-3303618.svg'); ?>
	<span>n/a</span>
</div>

<div onclick="x16(3)" class="super-nt">
	<?php readfile('svg/noun-game-controller-193592.svg'); ?>
	<span>Super Nt</span>
</div>

<div onclick="x16(4)" class="nt-mini-noir">
	<?php readfile('svg/noun-game-controller-193591.svg'); ?>
	<span>Nt Mini Noir</span>
</div>



<div onclick="x16(5)" class="pocket">
	<?php readfile('svg/noun-gameboy-pocket-203673.svg'); ?>
	<span>Analogue Pocket</span>
</div>

<div onclick="x16(6)" class="steam-deck">
	<?php readfile('svg/noun-joystick-2497401.svg'); ?>
	<span>Steam Deck</span>
</div>

<div onclick="x16(7)" class="mister">
	<?php readfile('svg/mister_kun_bw.svg'); ?>
	<span>MiSTer FPGA</span>
</div>

<div onclick="x16(8)" class="playstation-classic">
	<?php readfile('svg/noun-ps1-controller-194141.svg'); ?>
	<span>PlayStation Classic</span>
</div>




<div onclick="x16(9)" class="snes-classic">
	<?php readfile('svg/noun-game-controller-193592.svg'); ?>
	<span>SNES Classic</span>
</div>

<div onclick="x16(10)" class="genesis-classic">
	<?php readfile('svg/noun-game-controller-193792.svg'); ?>
	<span>Genesis Classic</span>
</div>

<div onclick="x16(11)" class="switch" class="switch">
	<?php readfile('svg/noun-nintendo-switch-953469.svg'); ?>
	<span>Nintendo Switch</span>
</div>

<div onclick="x16(12)" class="gamecube">
	<?php readfile('svg/noun-game-controller-193586.svg'); ?>
	<span>GameCube</span>
</div>




<div onclick="x16(13)" class="playstation-4">
	<?php readfile('svg/noun-game-controller-194080.svg'); ?>
	<span>PlayStation 4</span>
</div>

<div onclick="x16(14)" class="playstation-3">
	<?php readfile('svg/noun-ps3-controller-194142.svg'); ?>
	<span>PlayStation 3</span>
</div>

<div onclick="x16(15)" class="xbox-one">
	<?php readfile('svg/noun-xbox-one-controller-195039.svg'); ?>
	<span>XBox One</span>
</div>

<div onclick="x16(16)" class="xbox360">
	<?php readfile('svg/noun-xbox-360-controller-195040.svg'); ?>
	<span>XBox 360</span>
</div>

</fieldset>

<!--
<pre>
Icons provided by:
https://thenounproject.com/eliran.m.bensadoun/
https://thenounproject.com/sriramteja/
https://thenounproject.com/themizarkshow/
https://thenounproject.com/ArtZ91/
https://thenounproject.com/iconicdesign/
https://thenounproject.com/dimanebo/
https://thenounproject.com/vectorstall/
</pre>
-->


<body>
</body>
</html>
