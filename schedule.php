<!DOCTYPE html>
<html>
	<head>
		<title>Schedule Widget</title>
		<link rel="stylesheet" type="text/css" href="schedule.css" />
	</head>
	<body>
		<div id="container">
			<div id="schedule_area">
				<div class="time_bar">
					<ul>
						<li>10:00</li>
						<li>10:30</li>
						<li>11:00</li>
						<li>11:30</li>
						<li>12:00</li>
						<li>12:30</li>
						<li>1:00</li>
						<li>1:30</li>
						<li>2:00</li>
						<li>2:30</li>
						<li>3:00</li>
						<li>3:30</li>
						<li>4:00</li>
						<li>4:30</li>
					</ul>
				</div>
				<?php
					include("php/xmlsched.php");
					echo "<div class=\"user_bar\" id=\"" . $id . "\" style=\"stroke: " . $color . ";\">\n";
					echo "<h1 style=\"left: calc(" . $shiftIndex * $WIDTH_CONST_PERCENT . "% + 5px);\" />\n";
					echo "<svg width=\"100%\" height=\"20px\">\n";
					for (int counter=0; int < )
				?>
				
				
				<div class="user_bar" id="user1" style="stroke: green;">
					<h1 style="left: calc(7.1% + 5px);">Joe Smith</h1>
					<svg width="100%" height="20px">
						<line x1="7.1%" y1="10px" x2="35.5%" y2="10px" />
						<line x1="42.6%" y1="10px" x2="85.8%" y2="10px" />
					</svg>
				</div>
				<div class="user_bar" id="user2" style="stroke: red;">
					<h1 style="left: calc(14.2% + 5px);">Dave Brown</h1>
					<svg width="100%" height="20px">
						<line x1="14.2%" y1="10px" x2="63.9%" y2="10px" />
					</svg>
				</div>
				<div class="user_bar" id="user3" style="stroke: blue;">
					<h1 style="left: calc(56.8% + 5px);">Bob Jones</h1>
					<svg width="100%" height="20px">
						<line x1="56.8%" y1="10px" x2="92.9%" y2="10px" />
					</svg>
				</div>
			</div>
		</div>
	</body>
</html>