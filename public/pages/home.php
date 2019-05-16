<?php
include '../lib/photobox.php';

$photodir = __DIR__.'/../photos/home';

$photo_url_dir = "/photos/home/";


photobox($photodir, $photo_url_dir);

?>

		<div class="lowerbanner">
			WHAT IS OCCURING <br />
			BRUCE BANNER RINGS <br />
			TOTALLY AWESOME <br />
		</div>

		<div class="tabgroup">
			<div class="tabheader">
				<h2><a href="layout.php?page=temple">TEMPLE</a></h2>
			</div>
			<div class="tabheader">
				<h2><a href="layout.php?page=library">LIBRARY</a></h2>
			</div>

			<div style="clear: both"></div>
		</div> <!-- tabgroup -->
