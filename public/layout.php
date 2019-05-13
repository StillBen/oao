<html>
	
	<head>
		<title>OAO</title>
		<link href="oaostyle.css" rel="stylesheet" type="text/css" />
<?php

$pages = array(
	'home' => array(
		'bgimage' => 'home_page_background.png',
		'contentfile' => 'home.php',
	),

	'coven' => array(
		'contentfile' => 'coven.php',
	),

	'training' => array(
		'contentfile' => 'training.php',
	),

	'library' => array(
		'contentfile' => 'library.php',
	),

	'garden' => array(
		'contentfile' => 'garden.php',
	),

	'kitchen' => array(
		'contentfile' => 'kitchen.php',
	),

	'calendartoday' => array(

		'contentfile' => 'calendartoday.php',
		'bgimage' => 'calander_fairy_brightstar.png',
	),

	'calendarmonth' => array(
		'bgimage' => 'calender_fairy_purple.png',
		'contentfile' => 'calendarmonth.php',
	),

	'astrology' => array(
		'bgimage' => 'calander_teal_starlight.png',
		'contentfile' => 'astrology.php',
	),

	'yearly' => array(
		'bgimage' => 'rose_bg_bluered.png',
		'contentfile' => 'yearly.php',
	),
	'socialmedia' => array(
		'contentfile' => 'socialmedia.php',
	),
	'email' => array(
		'contentfile' => 'email.php',
	),
);


		$page_content = '';
		$page_contentfile = false;


		if (array_key_exists('page', $_REQUEST)
			&&
			$_REQUEST['page'] != ''
		) {
			$request_page = $_REQUEST['page'];

			if (array_key_exists($request_page, $pages)) {
				if (array_key_exists('contentfile', $pages[$request_page])) {
					$page_contentfile = $pages[$request_page]['contentfile'];

				} else if (array_key_exists('content', $pages[$request_page])) {
					$page_content = $pages[$request_page]['content'];
				} else {
					$page_content = '[Content Not Found]';
				}

				if (array_key_exists('bgimage', $pages[$request_page])) {
					$page_bgimage = $pages[$request_page]['bgimage'];
				} else {
					$page_bgimage = '';
				}

				if (array_key_exists('mainbody_bgimage', $pages[$request_page])) {
					$mainbody_bgimage = $pages[$request_page]['mainbody_bgimage'];
				} else {
					$mainbody_bgimage = '';
				}
			} else {
				$page_content = "[Page Not Found]";
			}


		} else {
			$page_content = $pages['home']['content'];
		}

?>

<style type="text/css">
body {
	<?php
		$bgimages_folder = 'bgimages';

		if ($page_bgimage) {
			echo "background: url($bgimages_folder/$page_bgimage);\n";
			echo "background-size: 100% ;\n";
			
		}

		
	?>
}

.mainbody:before {
	<?php

		if ($mainbody_bgimage) {
			echo "background: url($bgimages_folder/$mainbody_bgimage) center center;\n";
			echo "background-size: 100% ;\n";
			
		}

		
	?>
}
</style>



	</head>

	<body>
		<div class="maintext">

		<div class="mainbanner">
		<h1><a href="<?php echo $_SERVER['PHP_SELF'] . '?page=home'; ?>">Opus Aima Obscur&aelig;</a>
			<br /><br />
			[MAIN BANNER]
		</h1>
		</div><!-- mainbanner -->


<?php
		$dropdowns = array(
			array(
				'top' => "HOME",
				'menu' => array(
					array(
						'title' => 'Coven',
						'link' => 'coven'
					),
					array(
						'title' => 'Training',
						'link' => 'training'
					),
					array(
						'title' => 'Library',
						'link' => 'library'
					),
					array(
						'title' => 'Garden',
						'link' => 'garden'
					),
					array(
						'title' => 'Kitchen',
						'link' => 'kitchen'
					),
				),
			),
			array(
				'top' => "CALENDAR",
				'menu' => array(
					array(
						'title' => 'Today',
						'link' => 'calendartoday'
					),
					array(
						'title' => 'Month',
						'link' => 'calendarmonth'
					),
					array(
						'title' => 'Astro',
						'link' => 'astrology'
					),
					array(
						'title' => 'Yearly',
						'link' => 'yearly'
					),
				),
			),
			array(
				'top' => "CONTACT",
				'menu' => array(
					array(
						'title' => 'Social Media',
						'link' => 'socialmedia'
					),
					array(
						'title' => 'Email',
						'link' => 'email'
					),
					array(
						'title' => 'Local Info',
						'link' => ''
					),
					array(
						'title' => 'Psychic Line',
						'link' => ''
					),
				),
			),
			array(
				'top' => "BLOGS",
				'menu' => array(
					array(
						'title' => 'MAGICK',
						'link' => ''
					),
					array(
						'title' => 'Sessions',
						'link' => ''
					),
					array(
						'title' => 'Recipies',
						'link' => ''
					),
					array(
						'title' => 'Astrology',
						'link' => ''
					),
					array(
						'title' => 'Hermetics',
						'link' => ''
					),
					array(
						'title' => 'Permaculture',
						'link' => ''
					),
					array(
						'title' => 'Lit & Poetry',
						'link' => ''
					),
					array(
						'title' => 'Pop Culture',
						'link' => ''
					),
				),
			),
			array(
				'top' => "PHOTOS",
				'menu' => array(
					array(
						'title' => 'NEW',
						'link' => ''
					),
					array(
						'title' => 'OLD',
						'link' => ''
					),
					array(
						'title' => 'RITUAL',
						'link' => ''
					),
				),
			),
			array(
				'top' => "SHOP",
				'menu' => array(
					array(
						'title' => 'Main',
						'link' => ''
					),
					array(
						'title' => 'Food',
						'link' => ''
					),
					array(
						'title' => 'Herbs',
						'link' => ''
					),
					array(
						'title' => 'Crafts',
						'link' => ''
					),
					array(
						'title' => 'Merch',
						'link' => ''
					),
					array(
						'title' => 'Imports',
						'link' => ''
					),

				),
			),
		);

?>
		<div class="topmenu">
<?php
		foreach ($dropdowns as $dropdown) {

			?>
			<div class="menu">
			<div class="top"><?php echo $dropdown['top']; ?></div>
				<ul class="dropdown">
					<?php 
					foreach ($dropdown['menu'] as $menu) {
					?>
						<li>
							<a href="<?php echo $_SERVER['PHP_SELF'] . '?page=' . $menu['link']; ?>"><?php echo htmlentities($menu['title']); ?></a>
						</li>
					<?php
					}
					?>
				</ul>
			</div>
<?php
		}
?>
		</div><!-- topmenu -->


		<div style="clear: both"></div>


<?php


?>
<div class="mainbody">
<?php


	if ($page_contentfile) {
		include ('pages/' . $page_contentfile);
	} else {
		echo $page_content;
	}

?>


</div> <!-- mainbody -->

		<div class="footer">
			<div class="footerlink">
				<a href="">ABOUT</a>
			</div>
			<div class="footerlink">
				<a href="">FACEBOOK</a>
			</div>
			<div class="footerlink">
				<a href="">CAR DONATION PROGRAM</a>
			</div>

			<div style="clear: both"></div>

			<div class="credittext">
				Copyright + Domain Credits
			</div>
		</div>



		</div>
	</body>
</html>

