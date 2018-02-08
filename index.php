<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Tripradio Player</title>
    <link href="/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/tripradio.js"></script>

</head>

<body>

	<div class="container">

	    <div id="bighdr">
	        <img src="tripradionew.png" id="logo">
	    </div>
	    <div id="info">

	    </div>


      <div class="mx-auto" style="width: 300px;">
        <audio controls source src="http://radio.tripsit.me:8000/tripradio" controls="true" volume="1.0">>
                     Your browser does not support the audio element.
        </audio>
      </div>


      <div id="buttons"> <p>
          <a class="btn btn-dark" href="http://radio.tripsit.me:8000/tripradio.m3u">Listen with your local media player!</a>
          <a class="btn btn-dark" href="http://chat.tripsit.me/?nick=Listener?#home,#music">Chat with other listeners!</a>
          <a class="btn btn-dark" href="https://wiki.tripsit.me/wiki/Radio"> More info</a>
      </p>
      </div>


</div>
</body>
</html>
