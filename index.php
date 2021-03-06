<?php 

/*
 *    RunThisApp allows sharing test builds of iOS apps with testers.
 *    Copyright (C) 2011 Ludovic Landry & Pascal Cans
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

session_start();

?><!doctype html>
<html lang="en-us">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Run This App | iOS Deployment Applications</title>
	<link href="css/style-0001.css" media="screen" type="text/css" rel="stylesheet">
</head>
<body>

    <?php include 'header.php'; ?>
	
	<div id="content" class="box">
		<div class="boxtop"></div>
		<div class="column first">
			<div class="boxheader">			
				<h2>Run This App - First tests</h2>
			</div>
                    <?php if (Membership::isLoggedIn()) { ?>
			<div>
				<p>Click this link to subscribe to the best test program of iOS applications (Tester 1): <br><a href="enroll.php?token=1908FC34-1FFE-C2E2-47A1-924452B5B834">http://www.runthisapp.com/enroll.php?token=1908FC34-1FFE-C2E2-47A1-924452B5B834</a></p>
				<img src="http://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=http://www.runthisapp.com/enroll.php%3Ftoken=1908FC34-1FFE-C2E2-47A1-924452B5B834" />
				<h3 class="underline">&nbsp;</h3>
				<p>Click this link to subscribe to the best test program of iOS applications (Tester 2): <br><a href="enroll.php?token=91FF2445-2B5B-8343-41FF-EC2E247A144D">http://www.runthisapp.com/enroll.php?token=91FF2445-2B5B-8343-41FF-EC2E247A144D</a></p>
				<img src="http://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=http://www.runthisapp.com/enroll.php%3Ftoken=91FF2445-2B5B-8343-41FF-EC2E247A144D" />
			</div>
                    <?php } else { ?>
                        <div>
                                <p>You are currently not connected!<p>
				<p>Run This App is a web project to help iOS developers to easely share their apps to beta testers.<p>
                                <p>Find out more about this opensource project: <a href="https://github.com/lludo/runthisapp">https://github.com/lludo/runthisapp</a><p>
			</div>
                    <?php } ?>
		</div>
		
		<div class="column last">
			<div class="boxheader">
				<h2>Deployment steps</h2>
			</div>
			<div class="function">
				<h6>Send Invitations</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<hr>
			<div class="function">
				<h6>Tester get registered</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<hr>
			<div class="function">
				<h6>They install your app Over-The-Air</h6>				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>	
		<div class="boxbottom"></div>
	</div>
	
</body>
</html>
