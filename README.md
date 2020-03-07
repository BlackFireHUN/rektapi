# rektapi
originally designed for serving images to discord bot's... u can use it as u wish tho..

## install & usage
make a directory inside the rektapi's root dir/img/{yourendpointdir}
put a copy of /img/index.php to your endpoint's dir...
put an /img/ dir to your endpoints dir
put images into your endpoints /img/ dir

u can call it by: yourdomain.com/rektapi/img/{yourendpointdir}

it will output a json like so:
```json
{"url":"http:\/\/cdn.blackfire.hu\/img\/meme\/img\/meme0084.png"}
```

using the api with node js:
```js
		const superagent = require("superagent");

		const link = "https://yourdomain.com/rektapi/img/{yourendpointdir}";
		superagent.get(link).end((err, response) => {
			  console.log(response.body.url)
		  });	
```

link and other stuff

https://rektapi.blackfire.hu

## AUTHOR
[BlackFire](https://blackfire.hu/) 
[Pippo1101](https://github.com/Pippo1101)


