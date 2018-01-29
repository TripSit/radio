<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Tripradio Player</title>
    
    <script type="text/javascript" src="http://www.shoutcheap.com/flashplayer/skins/swfobject.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
    <link href="/styles.css" rel="stylesheet">
    <script src="/tripradio.js"></script>
</head>

<body>
	<div class="container">
	    <div id="bighdr">
	        <img src="https://wiki.tripsit.me/images/4/40/Tripradio_logo.png" />
	    </div>
	    <div id="info">
	        <p><img class="loader" src='ajax.gif' /></p>
	    </div>
	    <div id="radio">
		    <script type="text/javascript">
			    var s1 = new SWFObject('http://www.shoutcheap.com/flashplayer/skins/player.swf',
				        'player',"600","23","9","#000000");
				        
				var flashVars = "skin=http://www.shoutcheap.com/flashplayer/skins/test.swf" +
				"&title=Live Stream&type=sound" +
				"&file=http://radio.tripsit.me:8000/tripradio%3Ftype%3D.m3u" +
				"&duration=60000&id=scplayer&autostart=true";
				        
				s1.addParam('allowfullscreen','true');
				s1.addParam('allowscriptaccess','always');
				s1.addParam("flashvars",flashVars);
				s1.write("radio");
		    </script>
	    </div>
	    <div id="buttons">
	        <a class="btn btn-small" href="http://radio.tripsit.me:8000/tripradio.m3u"><i class="icon-music"></i> Listen with your local media player!</a> &nbsp;
	        <a class="btn btn-small" href="http://chat.tripsit.me/?nick=Listener?#home,#music"><i class="icon-music"></i> Chat with other listeners!</a>
	        <a class="btn btn-small pull-right" href="https://wiki.tripsit.me/wiki/Radio"><i class="icon-info-sign"></i> More info</a>
	    </p>
	</div>
</body>
</html>
