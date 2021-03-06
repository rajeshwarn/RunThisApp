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

require_once __DIR__ . '/../core/Membership.php';

if (!Membership::isLoggedIn()) {
    header('Location: ../index.php');
    die();
}

?><!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Run This App | Add Tester</title>
	<link href="../css/style-0001.css" media="screen" type="text/css" rel="stylesheet">
</head>
<body>

    <?php include __DIR__ . '/../header.php';?>
	
    <form method="POST" action="tester_create.php">
        <p>
            Name: <input type="text" name="name" placeholder="enter tester name"/><br/>
            Email: <input type="text" name="email" placeholder="enter tester email" /><br/>
            <input type="submit" value="add" />
	</p>
    </form>
	
</body>
</html>