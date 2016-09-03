<head>
<title>Subscriber Count</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
	$(function() {
    startRefresh();
});
<?php
	if(isset($_GET[u])){
		$user = $_GET[u];
	}else{
		header('Location: /tools/youtube.php?u=UCg9pAY2HV9IVSXryhVFpgKA');
	}
	

echo "
$.get('tubename.php?u=" . $user . "', function(data) {
        $('#tubename').html(data);    
    });

function startRefresh() {
    setTimeout(startRefresh,500);
    $.get('subcount.php?u=" . $user . "', function(data) {
        $('.odometer').html(data);    
    });
}";
?>
</script>

<script type="text/javascript">
function getid(){
	var yuid = prompt("Please enter your channel ID", "UCg9pAY2HV9IVSXryhVFpgKA");
	if (yuid != null) {
    window.location.replace('youtube.php?u=' + yuid);
}
}
</script>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<style type="text/css">

body{
	font-family: 'Lobster', cursive;
}

a {
  color: inherit; /* blue colors for links too */
  text-decoration: inherit; /* no underline */
}

#fout {
    margin-top: 25px;
    font-size: 21px;
    text-align: center;
    opacity: 0;

    -webkit-animation: fadein 5s; /* Safari, Chrome and Opera > 12.1 */
       -moz-animation: fadein 5s; /* Firefox < 16 */
        -ms-animation: fadein 5s; /* Internet Explorer */
         -o-animation: fadein 5s; /* Opera < 12.1 */
            animation: fadein 5s;
}

@keyframes fadein {
    from { opacity: 1; }
    to   { opacity: 0; }
}

/* Firefox < 16 */
@-moz-keyframes fadein {
    from { opacity: 1; }
    to   { opacity: 0; }
}

/* Safari, Chrome and Opera > 12.1 */
@-webkit-keyframes fadein {
    from { opacity: 1; }
    to   { opacity: 0; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
    from { opacity: 1; }
    to   { opacity: 0; }
}

/* Opera < 12.1 */
@-o-keyframes fadein {
    from { opacity: 1; }
    to   { opacity: 0; }
}

</style>

<!-- Odometr includes -->
<link rel="stylesheet" href="/tools/odometer-custom.css" />
<script src="http://github.hubspot.com/odometer/odometer.js"></script>

<!-- Extra styles for this example -->
<style>
.odometer {
    font-size: 100px;
}
</style>
</head>

<body style="background-color:#00ffbf;">
<div style="position: absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);">
<center>
<h1>
<p id="fout">click on name to change user!</p>
<a onclick="getid()" href="#"><div id="tubename" style="font-size: 150%; font-family: 'Lobster', cursive;"></div></a>
<div id="odometer" class="odometer" style="font-size: 600%;"></div>
</h1>
<center>
</div>
</body>