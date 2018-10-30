<!--HTML Basics-->
<!--Author: Tracy Karol-->
<!doctype html>
<html lang="en">
	<head>
		<title>About Me</title>
		<meta charset="UTF-8">
		<meta name="author" content="Tracy Karol">
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<link rel="stylesheet" type="text/css" href="aboutme.css" />
		<link rel="stylesheet" type="text/css" href="../csci445.css" />
	</head>
	<body>
		 <?php
            $selectedPage = 'aboutme';
            require '../templateHeader.php';?>
		<section>
			<h2 class="section_header">Welcome!</h2>
			<span>I'm a computer science major and I'm a senior here at <abbr title="Colorado School of Mines">CSM</abbr>. Continue reading to get to know me!
			</span>
			<br/>
			<br/>
			<small>Or you could just skip to the <a href="#end">end.</a></small>
		</section>
		<hr/>
		<section>
			<h2 class="section_header">Info About Me</h2>
			<strong>My favorite things:</strong>
			<ul>
				<li>YouTube</li>
				<li>Cats</li>
				<li>Sleep</li>
			</ul>
			<p>Here is my favorite cat, Angel!</p>
			<img src="../images/cat.jpg" alt="Picture of Angel">
			<br/>
			<span style="font-size: 18px">You should also check out my favorite YouTuber's</span>
			<a style="font-size: 18px" href="https://www.youtube.com/user/jacksfilms" target="blank"> channel!</a>
		</section>
		<hr/>
		<section>
			<h2 class="section_header">Here's a fun code loop</h2>
			<code>while(alarm.isSnoozed()){ sleep(); }</code>
		</section>
		<hr/>
		<section>
			<h2 class="section_header">A quote about life</h2>
			<q>I am always doing what I cannot do yet, in order to learn how to do it</q>
			<p id="quote_credit"> -Vincent Van Gogh</p>
		</section>
		<hr/>
		<section>
			<h2 class="section_header">Some interesting tables</h2>			
			<table class="friends_table">
				<caption>My Friends</caption>
				<thead>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Natalie</td>
						<td>Stewart</td>
					</tr>
					<tr>
						<td>Tori</td>
						<td>Begler</td>
					</tr>
					<tr>
						<td>Loan</td>
						<td>Tran</td>
					</tr>
				</tbody>
			</table>
			<br/>
			<table class="schedule_table">
				<caption>My Schedule</caption>
				<thead>
					<tr>
						<th>Class</th>
						<th>Time</th>
						<th>Room</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>CSCI 400</td>
						<td>9:30AM-10:45AM</td>
						<td>MZ 235</td>
					</tr>
					<tr>
						<td>CSCI 470</td>
						<td>11:00AM-12:15PM</td>
						<td>BB W270</td>
					</tr>
					<tr>
						<td>CSCI 471</td>
						<td>2:00PM-3:00PM</td>
						<td>GA 206A</td>
					</tr>
				</tbody>
			</table>
			<br/>
			<table class="books_table">
				<caption>Favorite Books</caption>
				<thead>
					<tr>
						<th>Title</th>
						<th>Author</th>
						<th>Page Count</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>The Fault in Our Stars</td>
						<td rowspan="2">John Green</td>
						<td>313</td>
					</tr>
					<tr>
						<td>Turtles All The Way Down</td>
						<td>286</td>
					</tr>
					<tr>
						<td>It Get's Worse</td>
						<td>Shane Dawson</td>
						<td>Unknown</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3">Reading is fun!</td>
					</tr>
				</tfoot>
			</table>
		</section>
		<hr/>
		<?php require '../templateFooter.php';?>
	</body>
</html>


