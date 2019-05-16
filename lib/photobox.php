<?php

function photobox ($albumdir, $urldir) {
	error_log("in photobox function...");
?>
	<div class="photobox jcarousel-wrapper">

			<a href="#" class="prevphoto jcarousel-control-prev">&lsaquo;</a>
                <div class="mainphoto jcarousel">
                    <ul>
			<?php 

			// read all the files in the photos directory
			error_log("albumdir: " . $albumdir);
			$photofiles = array();
			if ($dh = opendir($albumdir)) {
				while (false !== ($entry = readdir($dh))) {
					if ($entry != '.' && $entry != '..')
						$photofiles[] = $entry;
				}
			} else {
				error_log("error opening directory: " . $albumdir);
			}

			//$photo_prefix = "/photos/";
			$photo_prefix = $urldir;

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

<?php

}



?>

