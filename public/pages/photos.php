<?php

?>


	<div class="photobox jcarousel-wrapper">

			<a href="#" class="prevphoto jcarousel-control-prev">&lsaquo;</a>
                <div class="mainphoto jcarousel">
                    <ul>
			<?php 

			// read all the files in the photos directory
			$photodir = __DIR__.'/../photos';
			$photofiles = array();
			if ($dh = opendir($photodir)) {
				while (false !== ($entry = readdir($dh))) {
					if ($entry != '.' && $entry != '..')
						$photofiles[] = $entry;
				}
			} else {
				error_log("error opening directory: " . $photodir);
			}

			$photo_prefix = "/photos/";

			foreach ($photofiles as $file) {
			?>
				<li><img src="<?php echo $photo_prefix . $file; ?>" alt=""></li>
			<?php
			}
			?>
                    </ul>
                </div> <!-- mainphoto jcarousel -->


                	<a href="#" class="nextphoto jcarousel-control-next">&rsaquo;</a>

			<div style="clear: both"></div>
<!--
                <p class="jcarousel-pagination">

                </p>
-->

	</div> <!-- photobox jcarousel-wrapper -->


