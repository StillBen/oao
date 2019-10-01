			<div class="banner">
				MISSOULA
			</div>

<?php

include_once __DIR__.'/../lib/photobox.php';

$photodir = __DIR__.'/../photos/local';

$photo_url_dir = "/photos/local/";

photobox($photodir, $photo_url_dir);

?>


			<div class="lowerbanner">
				LOCAL
			</div>

			<div class="tabgroup">
				<div class="tabheader">
					<h2>Local Data</h2>
				</div>
				<div class="tabheader">
					<h2>Bus Route</h2>
				</div>


				<div style="clear: both"></div>
			</div> <!-- tabgroup -->

			<div class="credittext">
					credits
			</div>
