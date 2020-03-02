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

		const link = "https://cdn.blackfire.hu/img/{endpoint}";
		superagent.get(link).end((err, response) => {
			  console.log(response.body.url)
		  });	
		</code></pre>
		<h2>ENDPOINT'S</h2>
		<pre><code>
			anal/
			ero/
			femdom/
			kemonomimi/
			ngif/               
			smug/
			baka/
			erofeet/  
			fox_girl/
			keta/
			nsfw_neko_gif/
			solo/
			bj/
			erok/ 
			futanari/
			kiss/
			pat/
			solog/
			blowjob/
			erokemo/
			gasm/
			kuni/
			poke/
			spank/
			boobs/
			eron/
			hentai/
			les/
			pussy/ 
			tickle/
			classic/
			eroyuri/
			holo/ 
			lewd/   
			pussy_jpg/
			tits/	
			cuddle/ 
			feed/    
			holoero/  
			lewdk/    
			pwankg/   
			trap/
			cum/   
			feet/   
			hololewd/  
			lewdkemo/  
			Random_hentai_gif/
			yuri/
			cum_jpg/ 
			feetg/   
			hug/      
			neko/      
			slap/
		</code></pre>
	</body>
</html>