<?php
include 'src/list.php';
include 'src/souar.php';
if (isset($_GET['q'])) { $q = $_GET['q']; }else{ $q = 1; }
$sh = $shaikh[$q]['href'];
function is_url_exist($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if($code == 200){
       $status = true;
    }else{
      $status = false;
    }
    curl_close($ch);
   return $status;
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="Author" content="Azozz ALFiras">
  <meta name="keywords" content="istore,Azozz ALFiras,scothman,apps plus,quran,القران الكريم,موقع للقران الكريم,ادرس ابكر,ابو بكر الشاطري">
  <meta name="description" content="موقع القران الكريم كامل واكثر من 20 قارئ مع التشغيل في الخلفية مجانا">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  <title>الاستماع للقرآن الكريم </title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="font.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">




</head>

<style>

body{
    background: url(imgae/az5.png);
}

.bg {
  background: #111 url(imgae/az1.png) center top no-repeat;
  -webkit-background-size: cover;
  background-size: cover;
  position: relative;
  width: 100%;
}

.b_1 {
  background-image: url(imgae/az1.png);
}

.b_2 {
  background-image: url(imgae/az2.png);
}

.b_3 {
  background-image: url(imgae/az3.png);
}

.b_4 {
  background-image: url(imgae/az4.png);
}

.b_5 {
  background-image: url(imgae/az5.png);
}

.b_6 {
  background-image: url(imgae/az6.png);
}

.b_7 {
  background-image: url(imgae/az7.png);
}

.b_8 {
  background-image: url(imgae/az8.png);
}

.b_9 {
  background-image: url(imgae/az9.png);
}

.b_10 {
  background-image: url(imgae/az10.png);
}


</style>
<body>

<nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="https://a1iraqi.com/"><img src="imgae/pro.png" style="width: 160px;border-radius: 10px;"></a>
<br>
<br>
<br>
<br><br><br><br><br>
        </div>
<br><br>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <?php
for ($i=1; $i < count($shaikh) ; $i++) {
	if ($q == $i) {
		$current = 'current-player';
	}else {
		$current = '';
	}
	echo "<li class=\"$current\"><a href=\"?q=$i\"><img src=\"imgae/$i.jpg\" alt=''> <span>" . $shaikh[$i]['name'] . "</span></a></li>";
}
?>
 <br>
          
        </div>
      </div>
    </nav>


<div class="player-block">
<div id="j_wrapp" class="jp-jplayer"></div>
<div id="j_player" class="jp-audio" role="application" aria-label="media player">
	<div class="jp-type-playlist">
		<div class="bg clfx">
			<div class="s-info">
				<?php
				echo "<img class=\"sh-avatar\" src=\"imgae/$q.jpg\" alt=\"\">";
				echo "<h3>". $shaikh[$q]['name'] . "</h3>";
				 ?>
			 </div>
		<div class="playlist-wrapp">
		<div class="jp-playlist">
			<ul>
				<li>&nbsp;</li>
			</ul>
		</div>
		</div>
	</div>
		<div class="jp-gui jp-interface clfx">
			<div class="jp-progress">
				<div class="jp-seek-bar">
					<div class="jp-play-bar"></div>
				</div>
			</div>
			<div class="jp-time-holder clfx">
				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
				<div class="sepr"> / </div>
				<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
			</div>
			<div class="jp-volume-controls">
				<button class="toggle-left"><i class="fa fa-bars"></i></button>
				<button class="jp-volume-max" role="button" tabindex="0"><i class="fa fa-volume-up"></i></button>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
				<button class="jp-mute" role="button" tabindex="0"><i class="fa fa-volume-off"></i></button>
				<div class="jp-toggles">
					<button class="jp-repeat" role="button" tabindex="0"><i class="fa fa-repeat"></i></button>
					<button class="jp-shuffle" role="button" tabindex="0"><i class="fa fa-random"></i></button>
				</div>
			</div>
			<div class="jp-controls">
				<button class="jp-previous" role="button" tabindex="0"><i class="fa fa-fast-backward"></i></button>
				<button class="jp-next" role="button" tabindex="0"><i class="fa fa-fast-forward"></i></button>
				<button class="jp-play" role="button" tabindex="0"><i class="fa fa-play"></i></button>
			</div>
    <div class="f"></div>
		</div>

		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
		new jPlayerPlaylist({
			jPlayer: "#j_wrapp",
			cssSelectorAncestor: "#j_player"
		}, [
			<?php
			foreach ($soura as $name => $num) {
				//if (is_url_exist("$sh$num") == 1) {
					echo "{ title: \"$name\" , mp3:\" $sh$num.mp3\" },";
				//}
			}
			 ?>
		],
		 {
			 playlistOptions: {
    //autoPlay: true,
    enableRemoveControls: true
  },
			supplied: "oga, mp3",
			wmode: "window",
			useStateClassSkin: true,
			autoBlur: false,
			smoothPlayBar: true,
			keyEnabled: true
		});
});
//]]>
</script>
<script type="text/javascript">
<!--
document.write(unescape('%3c%73%63%72%69%70%74%20%74%79%70%65%3d%22%74%65%78%74%2f%6a%61%76%61%73%63%72%69%70%74%22%20%73%72%63%3d%22%6a%73%2f%73%69%74%65%2e%6a%73%22%3e%3c%2f%73%63%72%69%70%74%3e'));
//-->
</script>
<script type="text/javascript">
<!--
document.write(unescape('%3c%73%63%72%69%70%74%20%74%79%70%65%3d%22%74%65%78%74%2f%6a%61%76%61%73%63%72%69%70%74%22%20%73%72%63%3d%22%6a%73%2f%6a%73%2e%6a%73%22%3e%3c%2f%73%63%72%69%70%74%3e'));
//-->
</script>
</body>

</html>
