<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mücahit Player</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon"  href="../images/logo.png">
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<audio controls id="myAudio" style="position: fixed;margin-left: -200vw;margin-top: -200vh">
  <source src="" type="audio/mpeg">
</audio>
<div class="player">
    <div class="player__bar">
        <div class="player__album">
        	<?php
        		$say=0;
				$dosyalar = glob("list/*");

				foreach ($dosyalar as $dosya) {
				  $say++;
				  $ekle="";
				  if($say<2){$ekle="active-song";}
				  echo '<div class="player__albumImg '.$ekle.'" data-author="Mucahit Player" data-song="'.substr((str_replace(".mp3", "", str_replace("list/", "", $dosya))), 0,35).'" data data-src="'.$dosya.'"
		                style="background-image: url(img/album.jpg)">
	              </div>';


				}

			?>
            
            <div class="player__albumImg" data-author="Mucahit Player" data-song="Sagopa Kajmer - Serbest.mp3" data data-src="list/Sagopa Kajmer - Serbest.mp3"
                style="background-image: url(img/album.jpg)">
            </div>
        </div>
        <div class="player__controls">

            <div class="player__prev">
                <svg class="icon">
                    <use xlink:href="img/sprite.svg#arrow"></use>
                </svg>
            </div>

            <div class="player__play">
                <svg class="icon play" onclick="playAudio()">
                    <use xlink:href="img/sprite.svg#play"></use>
                </svg>
                <svg class="icon pause">
                    <use xlink:href="img/sprite.svg#pause"></use>
                </svg>
            </div>

            <div class="player__next"  onclick="playAudio()">
                <svg class="icon">
                    <use xlink:href="img/sprite.svg#arrow"></use>
                </svg>
            </div>
        </div>
    </div>
    <div class="player__timeline">
        <p class="player__author"></p>
        <p class="player__song"></p>
        <div class="player__timelineBar">
            <div id="playhead"></div>
        </div>
    </div>
    <div style="position: absolute;width: 100%;text-align: center;"><a href="https://mucahitsendinc.rf.gd">Mücahit Sendinç</a> &copy; Tüm hakları saklıdır 2021 </div>
</div>
<!-- END CONTENT  -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
<script src="js/main.js"></script>
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);


  var x = document.getElementById("myAudio");

	function playAudio() {
	  x.play();
	}

	function pauseAudio() {
	  x.pause();
	}

</script>
</html>
