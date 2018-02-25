<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Music Viewer</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="viewer.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div id="header">

		<h1>190M Music Playlist Viewer</h1>
		<h2>Search Through Your Playlists and Music</h2>
	</div>


	<div id="listarea">
		<ul id="musiclist">


			<!-- exercise 3, needed glob and substr -->
			
			<!-- <?php
			$path = file("songs/mypicks.txt");
			foreach ($path as $filename) { ?>
			<li class="playlistitem"> 
				<a href="<?= $filename ?>"><?= $filename ?></a> 
			</li>
			<?php } ?> --> 

			<!-- exercise 1,2,4 -->	
			<?php
			$path = "songs/";
			foreach (glob($path."*.mp3") as $filename) { ?>
			<li class="mp3item"> 
				<a href="<?= $filename ?>"><?= substr($filename, 6); ?></a> 
				<?php 
				if (filesize($filename)>0 and filesize($filename)<1024) {
					echo "(".filesize($filename)."b".")";
				}elseif (filesize($filename)>=1025 and filesize($filename)<1048576) {
					echo "(".round(filesize($filename)/1024 , 2)."Kb".")";
				}elseif (filesize($filename)>=1048576) {
					echo "(".round(filesize($filename)/1048576 , 2)."Mb".")";
				} 
				?>
			</li>
			<?php } ?>
			
			<hr>
			
			<?php
			$path = "songs/";
			foreach (glob($path."*.txt") as $filename) { ?>
			<li class="playlistitem"> 
				<a href="<?= $filename ?>"><?= substr($filename, 6); ?></a>
			</li>
			<?php } ?>
		</ul>
	</div>
</body>
</html>
