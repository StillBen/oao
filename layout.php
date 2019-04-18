<html>
	
	<head>
		<title>OAO</title>
		<link href="oaostyle.css" rel="stylesheet" type="text/css" />
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
						'link' => ''
					),
					array(
						'title' => 'Email',
						'link' => ''
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

$pages = array(
	'home' => <<<ENDHTML

		<div class="photobox">
			<div class="prevphoto">
			Previous Event
			</div>

			<div class="mainphoto">
				[MAINPHOTO]
			</div>

			<div class="nextphoto">
			Next Event
			</div>

			<div style="clear: both"></div>
		</div><!-- photobox -->

		<div class="lowerbanner">
			WHAT IS OCCURING <br />
			BRUCE BANNER RINGS <br />
			TOTALLY AWESOME <br />
		</div>

		<div class="tabgroup">
			<div class="tabheader">
				<h2>TEMPLE</h2>
			</div>
			<div class="tabheader">
				<h2>LIBRARY</h2>
			</div>

			<div style="clear: both"></div>
		</div> <!-- tabgroup -->
ENDHTML
,

	'coven' => <<<ENDHTML


			<div class="banner">
				RIDING THE WHEEL OF THE YEAR<br />
				WETRASTIGUREANDADAPT<br />
				TOGETHER<br />
			</div>

			<ul>
				<li>Private Ceremonies Shamanic</li>
				<li>
					Classes &amp Services<br />
					101 - 103<br />
					Tarot PLR
				</li>
				<li>
					Retreats &amp Travel<br />
					Commances, Temple, Healing Centers and Pagan Gatherings
				</li>
				<li>
					Items of Spiritual<br />
					Necessity + Spellcraft Provided
				</li>
				<li>
					Coven Group Therapy<br />
					every Mon + Thursday 5-7pm
				</li>
			</ul>


ENDHTML
,

	'training' => <<<ENDHTML

			<div class="banner">
				EASTERN<br />
				Hellanic Liberal<br />
				STUDIES<br />
			</div>

			<ul>
				<li>ye olde training</li>
				<li>
					Year of attendance<br />
					getting to know you
				</li>
				<li>
					Year of Self Exploration<br />
					Linguistic Development
				</li>
				<li>
					Year of Service
				</li>
				<li>
					Year of Neophytic Devotion
				</li>
			</ul>


			<div class="banner">
				Clergy Training
			</div>

			<ul>
				<li>
					Neophyte Devotion<br />
					History of Paganism
				</li>
				<li>
					Council + Meditation Training<br />
					Independent Accreditation
				</li>
				<li>
					Ceremonial Leadership<br />
					Shamanic Training<br />
					Sweat - H.S. - Ceremonial Sauce
				</li>
				<li>
					Teaching + Public outreach
				</li>
			</ul>


			<div class="banner">
				Temple Life
			</div>

			<ul>
				<li>Residance</li>
				<li>Community Support</li>
				<li>Vows + Devotions</li>
				<li>Multicultural</li>
			</ul>

			<div class="banner">
				Hermitage + Travel
			</div>

			<ul>
				<li>15 - 17 Years of Service</li>
				<li>Cultural Experience</li>
				<li>Withdrawl from ceremonial life</li>
				<li>Botinal Studies</li>
			</ul>
ENDHTML
,

	'library' => <<<ENDHTML


			<div class="banner">
				A GATHERING PLACE FOR LEARNING<br />
				Haycusep's Library of Maat
			</div>

			<ul>
				<li>OLDYZ But Goodies Open Library Day </li>
				<li>Our Collection</li>
				<li>How to Check Out Books</li>
				<li>Book Club - Coven Led</li>
				<li>Book of the month</li>
				<li>Esoteric Books For Sale</li>
				<li>Book Donations + Library Drop Offs</li>
			</ul>


ENDHTML
,

	'garden' => <<<ENDHTML


			<div class="banner">
				TEMPLE ORCHARD + GARDENS
			</div>

			<ul>
				<li>Map of the Grounds</li>
				<li>Orchard</li>
				<li>South Garden</li>
				<li>West Garden</li>
				<li>North Yard</li>
				<li>May Pole</li>
				<li>Chickens</li>
				<li>Fire Pits</li>
				<li>Back To Wildlands</li>
				<li>Pet Cemetary</li>
			</ul>


ENDHTML
,

	'kitchen' => <<<ENDHTML


			<div class="banner">
				TEMPLE KITCHEN
				WHAT'S COOKIN'
			</div>

			<div class="photobox">
				<div class="prevphoto">
				Last Baked
				</div>

				<div class="mainphoto">
					[PHOTOS]
				</div>

				<div class="nextphoto">
				Next Baked
				</div>

				<div style="clear: both"></div>
			</div><!-- photobox -->

			<div class="lowerbanner">
				Quotes on Atwas in foods
			</div>

			<div class="tabgroup">
				<div class="tabheader">
					<h2>Seasonal Cusiene Guide</h2>
				</div>
				<div class="tabheader">
					<h2>Ediquate</h2>
				</div>

				<div class="tabheader">
					<h2>Recipes</h2>
				</div>

				<div style="clear: both"></div>
			</div> <!-- tabgroup -->

			<div class="credittext">
					credits
			</div>

ENDHTML
,

	'calendartoday' => <<<ENDHTML


			<div class="banner">
				Calender -> Today's Magick Dashboard Lights
			</div>

			<div class="container">
				<div class="astroblock">
					<h1>Astro</h1>
					<div class="box">
						[wheel graphic]
					</div>
				</div>

				<div class="moonsunblock">
					<h1>Moon</h1>
					<div class="box">
						[box]
					</div>

					<h1>Sun</h1>
					<div class="box">
						[box]
					</div>

				</div>

				<div style="clear: both"></div>

			</div>

			<div class="lowerbanner">
				1am Planetary Hours
			</div>

			<div class="container">
				<div class="tarotblock">
				Tarot Card of the Day
				</div>

				<div class="spellblock">
				Spell of the Day
				</div>
				<div style="clear: both"></div>
			</div>

ENDHTML
,

	'calendarmonth' => <<<ENDHTML


			<div class="banner">
				Astro Info <br />
				+<br />
				IMAGE<br />
			</div>

			<div class="box">
				#	
			</div>

ENDHTML
,

	'astrology' => <<<ENDHTML


			<div class="banner">
				Astrology
			</div>

			<pre>
			Zodiac + Moons of the Year
			By Sigil
			v 12 button links to zodiac pages

			plenets + days of the week

			x 7

			venus

			Elehments + Physical Reality

			Triplicity + Cosmology
			</pre>
			


ENDHTML
,

	'yearly' => <<<ENDHTML


			<div class="banner">
				Yearly + Yesteryearly
			</div>

			<pre>
				calendar by month
			</pre>
			
			<div class="lowerbanner">
				Previous Years
			</div>

			<div class="lowerbanner">
				Eastern Hellanic Hollidays
			</div>


ENDHTML
,
		);

?>
<div class="mainbody">
<?php


		if (array_key_exists('page', $_REQUEST)
			&&
			$_REQUEST['page'] != ''
		) {
			$request_page = $_REQUEST['page'];

			if (array_key_exists($request_page, $pages)) {
				echo $pages[$request_page];
			} else {
				echo "Page Not Found.";
			}


		} else {
			echo $pages['home'];
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

