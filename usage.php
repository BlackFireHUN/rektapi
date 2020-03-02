<?php
if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    exit;
}
?>
<html>
	<head>
		<title>ReKt</title>
		
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
		<link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
		<link rel="icon" href="/favicon.png" type="image/x-icon">
	</head>
	<body>
		<h1>Originaly designed for node.js</h1>
		<pre><code>
		const superagent = require("superagent");

		const link = "https://link to your site thingy/{endpoint}";
		superagent.get(link).end((err, response) => {
			  console.log(response.body.url)
		  });	
		</code></pre>
		<h2>ENDPOINT'S</h2>
		<pre><code>
			
		</code></pre>
	</body>
</html>
