<?php
if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    exit;
}
?>
<html>
	<head>
		<title>ReKt</title>
		
		<link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="./css/style.css">
		<link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
		<link rel="icon" href="/favicon.png" type="image/x-icon">
	</head>
	<body>
		<div class="c-content">
			<div id="changeText" class="nicetuxt"></div>
		
				<button type="button" style="margin-bottom: 10px;" onclick="document.location.href='usage.php';" class="btn btn-lg btn-outline-danger">Letme see!</button>
		</div>
					<script>	
				var text = ["EVERYONE NEED'S SOME <b><a class=\"tuxt\">REKT</a></b> IN THEIR LIFE!", "EVERYONE NEED'S SOME <b><a class=\"tuxt\">API</a></b> IN THEIR LIFE!", "EVERYONE NEED'S SOME <b><a class=\"tuxt\">LEWDNESS</a></b> IN THEIR LIFE!"];
				var counter = 0;
				var elem = document.getElementById("changeText");
				var inst = setInterval(change, 1000);

				function change() {
				  elem.innerHTML = text[counter];
				  counter++;
				  if (counter >= text.length) {
					counter = 0;
					// clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
				  }
				}
			</script>
	</body>
</html>