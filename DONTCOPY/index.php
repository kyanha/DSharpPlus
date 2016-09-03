<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<!-- this is a private party >:( -->
	<title>Naamloos</title>
	<!-- Style here :3 -->
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<style type="text/css">

		body{
			font-family: 'Varela Round', sans-serif;
			background-size: cover;
		}
		#bottomimg{
			position: absolute;
			right: 0px;
			bottom: 0px;
			width: 300px;
			height: 300;
			background-image:url("images/saiko.png");
			background-size: cover;
			-webkit-animation:spin 1s linear infinite;
			-moz-animation:spin 1s linear infinite;
			animation:spin 1s linear infinite;
		}
				<?php
	if(isset($_GET[konami])){
		echo('
		@-moz-keyframes spin { 0% {right: 100px; bottom: 100px;} 100% { -moz-transform: rotate(360deg); right: 150px; bottom: 150px; } }
@-webkit-keyframes spin { 0% {right: 100px; bottom: 100px;} 100% { -webkit-transform: rotate(360deg); right: 150px; bottom: 150px; } }
@keyframes spin { 0% {right: 100px; bottom: 100px;} 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); right: 150px; bottom: 150px; } }
');
	}
		?>

	</style>
	
	<script type="text/javascript">
if ( window.addEventListener ) {  
  var state = 0, konami = [38,38,40,40,37,39,37,39,66,65];  
  window.addEventListener("keydown", function(e) {  
    if ( e.keyCode == konami[state] ) state++;  
    else state = 0;  
    if ( state == 10 )  
      window.location = "?konami";  //you can write your own code here
    }, true);  
}  
</script>

<?php
if(isset($_GET[konami])){
echo("
<script src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
<script>
$(document).ready(function(){
var header = $('body');

var backgrounds = new Array(
    'url(http://thecatapi.com/api/images/get?format=src&type=jpg)'
  , 'url(http://thecatapi.com/api/images/get?format=src&type=png)'
  , 'url(http://thecatapi.com/api/images/get?format=src&type=gif)'
);

var current = 0;

function nextBackground() {
    current++;
    current = current % backgrounds.length;
    header.css('background-image', backgrounds[current]);
}
setInterval(nextBackground, 500);

header.css('background-image', backgrounds[0]);
});


$(document).ready(function(){
var header = $('body');

var colors = new Array(
    'red'
  , 'blue'
  , 'green'
);

var current = 0;

function nextColor() {
    current++;
    current = current % colors.length;
    header.css('color', colors[current]);
}
setInterval(nextColor, 100);

header.css('background-image', colors[0]);
});

</script>
");
}
?>

</head>

<body>
	<?php
		if(isset($_GET[konami])){
			$strings = array(
    			'chip1.mp3',
    			'chip2.mp3',
    			'chip3.mp3',
    			'chip4.mp3',
    			'chip5.mp3',
			);
		$key = array_rand($strings);
			echo('<embed src="'. $strings[$key] .'" width="180" height="90" loop="true" autostart="true" hidden="true"><audio src="' . $strings[$key] . '"></audio></embed>');
			include('snow.php');
			echo('<a href="http://www.naamloos.xyz">disable konami code</a>');
		}
	?>

	<h1>Naamloos</h1>
	Welcome to my unamusing site.
	<br>
	I am a 16 year old Programmer, Gamer, Weeb and Pixel Artist.
	<br>
	<a href="/linklist.php">(URL list)</a>
	<br>
	<br>
	<a href="https://github.com/naamloosdt"><img src="images/github.png" alt="Github" style="width:20px;height:20px;"></a>
	<a href="https://twitter.com/naamloos_nl"><img src="images/twitter.png" alt="Twitter" style="width:20px;height:20px;"></a>
	<a href="http://ahwshitman.tumblr.com/"><img src="images/tumblr.png" alt="Tumblr" style="width:20px;height:20px;"></a>
	<a href="http://osu.ppy.sh/u/naamloos_nl"><img src="images/osu.png" alt="Osu" style="width:20px;height:20px;"></a>
	<a href="http://steamcommunity.com/id/naamloos_nl"><img src="images/steam.png" alt="Steam" style="width:20px;height:20px;"></a>
	<a href="https://www.youtube.com/channel/UCg9pAY2HV9IVSXryhVFpgKA"><img src="images/youtube.png" alt="YouTube" style="width:20px;height:20px;"></a>
	<a href="https://soundcloud.com/cyberdoge"><img src="images/soundcloud.png" alt="SoundCloud" style="width:20px;height:20px;"></a>
	<a href="https://vine.co/naamloos"><img src="images/vine.png" alt="Vine" style="width:20px;height:20px;"></a>
	<a href="https://discord.gg/0oZpaYcAjfvkDuE4"><img src="images/discord.png" alt="Discord" style="width:20px;height:20px;"></a>
	<a href="http://myanimelist.net/profile/Naamloos"><img src="images/myanimelist.png" alt="MyAnimeList" style="width:20px;height:20px;"></a>
	<div id="bottomimg"></div>
</body>