<html>
	
	<head>
		<title>OAO</title>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/jcarousel/jquery.jcarousel.js"></script>

<script>

(function($) {
	$(function() {
		$('.jcarousel').jcarousel({
			// Configuration goes here
		});

		$('.jcarousel-control-prev')
			.on('jcarouselcontrol:active', function() {
				$(this).removeClass('inactive');
			})
			.on('jcarouselcontrol:inactive', function() {
				$(this).addClass('inactive');
			})
			.jcarouselControl({
				target: '-=1'
			});

		$('.jcarousel-control-next')
			.on('jcarouselcontrol:active', function() {
				$(this).removeClass('inactive');
			})
			.on('jcarouselcontrol:inactive', function() {
				$(this).addClass('inactive');
			})
			.jcarouselControl({
				target: '+=1'
			});
	});
})(jQuery);



</script>


   <link rel="stylesheet" type="text/css" href="/css/jcarousel.basic.css">

		<link href="oaostyle.css" rel="stylesheet" type="text/css" />

<?php

$pages = array(
	'home' => array(
		'contentfile' => 'home.php',
		'bgimage' => 'cosmos_rainbow.jpg',
	),

	'coven' => array(
		'contentfile' => 'coven.php',
		'bgimage' => 'old_home_page_background.png',
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
	'temple' => array(
		'contentfile' => 'temple.php',
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
	'localinfo' => array(
		'contentfile' => 'localinfo.php',
	),
	'psychicline' => array(
		'contentfile' => 'psychicline.php',
	),
	'blogmagick' => array(
		'contentfile' => 'blogmagick.php',
	),
	'blogseasons' => array(
		'contentfile' => 'blogseasons.php',
	),
	'blogrecipies' => array(
		'contentfile' => 'blogrecipies.php',
	),
	'blogastrology' => array(
		'contentfile' => 'blogastrology.php',
	),
	'bloghermetics' => array(
		'contentfile' => 'bloghermetics.php',
	),
	'blogpermaculture' => array(
		'contentfile' => 'blogpermaculture.php',
	),
	'bloglit' => array(
		'contentfile' => 'bloglit.php',
	),
	'blogpop' => array(
		'contentfile' => 'blogpop.php',
	),


	'newphotos' => array(
		'contentfile' => 'newphotos.php',
	),
	'oldphotos' => array(
		'contentfile' => 'oldphotos.php',
	),
	'ritualphotos' => array(
		'contentfile' => 'ritualphotos.php',
	),
);


		$page_content = '';
		$page_contentfile = false;


		if (array_key_exists('page', $_REQUEST)
			&&
			$_REQUEST['page'] != ''
		) {
			$request_page = $_REQUEST['page'];
		} else {
			$request_page = 'home';
		}


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


?>

<style type="text/css">
.mainbody {
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

<!--
	old (1st banner):
	<img class="bannerimage" src="/graphics/banner.png" alt="Opus Aima Obscur&aelig;">
-->
	<img class="bannerimage" src="/graphics/oao_banner2.jpg" alt="Opus Aima Obscur&aelig;">

	<div class="mainbody">

		<div class="maintext">



<?php
		$dropdowns = array(
			array(
				'top' => 'HOME',
				'menu' => array(
					array(
						'title' => 'Home',
						'link' => 'home'
					),
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
					array(
						'title' => 'Temple',
						'link' => 'temple'
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
						'link' => 'localinfo'
					),
					array(
						'title' => 'Psychic Line',
						'link' => 'psychicline'
					),
				),
			),
			array(
				'top' => "BLOGS",
				'menu' => array(
					array(
						'title' => 'MAGICK',
						'link' => 'blogmagick'
					),
					array(
						'title' => 'Seasons',
						'link' => 'blogseasons'
					),
					array(
						'title' => 'Recipies',
						'link' => 'blogrecipies'
					),
					array(
						'title' => 'Astrology',
						'link' => 'blogastrology'
					),
					array(
						'title' => 'Hermetics',
						'link' => 'bloghermetics'
					),
					array(
						'title' => 'Permaculture',
						'link' => 'blogpermaculture'
					),
					array(
						'title' => 'Lit & Poetry',
						'link' => 'bloglit'
					),
					array(
						'title' => 'Pop Culture',
						'link' => 'blogpop'
					),
				),
			),
			array(
				'top' => "PHOTOS",
				'menu' => array(
					array(
						'title' => 'NEW',
						'link' => 'newphotos'
					),
					array(
						'title' => 'OLD',
						'link' => 'oldphotos'
					),
					array(
						'title' => 'RITUAL',
						'link' => 'ritualphotos'
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
		$startoffset = 0;
		foreach ($dropdowns as $dropdown) {

			?>
			<div class="menu">
			<div class="top">
				<?php
			
				$toptxt = $dropdown['top'];

				$tophtml = "";

				$chars = str_split($toptxt);

				// loop rainbow colors with css class for each color / character

				$colors = array(
					"red",
					"orange",
					"yellow",
					"green",
					"blue",
					"indigo",
					"violet");


				$offset = 0;

				foreach ($chars as $char) {
					$color = $colors[$offset];


					$tophtml .= '<span class="menuletter ' . $color . '">' . $char . '</span>';
					$offset ++;

					if ($offset >= count($colors)) {
						$offset = 0;
					}
				}

				echo $tophtml;
				?>
			</div>
				<ul class="dropdown">
					<?php 
					foreach ($dropdown['menu'] as $menu) {
					?>
						<li>
							<a href="<?php echo $_SERVER['PHP_SELF'] . '?page=' . $menu['link']; ?>">
	<?php


							// loop rainbow colors for each letter
			
							$titletxt = $menu['title'];

							$html = "";

							$chars = str_split($titletxt);
							$offset = $startoffset;

							$startoffset ++;

							if ($startoffset >= count($colors)) {
								$startoffset = 0;
							}

							foreach ($chars as $char) {
								$color = $colors[$offset];


								$html .= '<span class="' . $color . '">' . $char . '</span>';
								$offset ++;

								if ($offset >= count($colors)) {
									$offset = 0;
								}
							}

							echo $html;
	?>
	</a>
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
<div class="contentbody">
<?php


	if ($page_contentfile) {
		include ('pages/' . $page_contentfile);
	} else {
		echo $page_content;
	}

?>


</div> <!-- contentbody -->

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





		</div> <!-- maintext -->

		</div> <!-- mainbody -->


	</body>
</html>

