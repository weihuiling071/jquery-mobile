<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Navbar - jQuery Mobile Demos</title>
	<link rel="stylesheet"  href="../../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../../_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../../_assets/favicon.ico">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="../../../js/jquery.js"></script>
	<script src="../../_assets/js/"></script>
	<script src="../../../js/"></script>
</head>
<body>
<div data-role="page" class="jqm-demos">

    <div data-role="header" class="jqm-header" data-position="fixed">
		<h1 class="jqm-logo"><a href="../../../"><img src="../../_assets/img/jquery-logo.png" alt="jQuery Mobile Framework"></a></h1>
        <a href="#panel-nav" class="jqm-navmenu-link" data-icon="bars" data-iconpos="notext">Navigation</a>
        <a href="#" class="jqm-search-link" data-icon="search" data-iconpos="notext">Search</a>
        <?php include( '../../search.php' ); ?>
    </div><!-- /header -->

    <div data-role="content" class="jqm-content">

				<ul data-role="listview" data-theme="d" data-dividertheme="e" data-filter="true" data-filter-theme="d"data-filter-placeholder="Search friends...">
					<li data-role="list-divider">A</li>
					<li><a href="#">Adam Kinkaid</a></li>
					<li><a href="#">Alex Wickerham</a></li>
					<li><a href="#">Avery Johnson</a></li>
					<li data-role="list-divider">B</li>
					<li><a href="#">Bob Cabot</a></li>
					<li data-role="list-divider">C</li>
					<li><a href="#">Caleb Booth</a></li>
					<li><a href="#">Christopher Adams</a></li>
					<li><a href="#">Culver James</a></li>
					<li data-role="list-divider">D</li>
					<li><a href="#">David Walsh</a></li>
					<li><a href="#">Drake Alfred</a></li>
					<li data-role="list-divider">E</li>
					<li><a href="#">Elizabeth Bacon</a></li>
					<li><a href="#">Emery Parker</a></li>
					<li><a href="#">Enid Voldon</a></li>
					<li data-role="list-divider">F</li>
					<li><a href="#">Francis Wall</a></li>
					<li data-role="list-divider">G</li>
					<li><a href="#">Graham Smith</a></li>
					<li><a href="#">Greta Peete</a></li>
					<li data-role="list-divider">H</li>
					<li><a href="#">Harvey Walls</a></li>
					<li data-role="list-divider">M</li>
					<li><a href="#">Mike Farnsworth</a></li>
					<li><a href="#">Murray Vanderbuilt</a></li>
					<li data-role="list-divider">N</li>
					<li><a href="#">Nathan Williams</a></li>
					<li data-role="list-divider">P</li>
					<li><a href="#">Paul Baker</a></li>
					<li><a href="#">Pete Mason</a></li>
					<li data-role="list-divider">R</li>
					<li><a href="#">Rod Tarker</a></li>
					<li data-role="list-divider">S</li>
					<li><a href="#">Sawyer Wakefield</a></li>
				</ul>

	</div><!-- /content -->

	<div data-role="footer" data-id="foo1" data-position="fixed">
		<div data-role="navbar">
			<ul>
				<li><a href="footer-persist-a.php" data-prefetch="true" data-transition="none">Info</a></li>
				<li><a href="footer-persist-b.php" data-prefetch="true" data-transition="none" class="ui-btn-active ui-state-persist">Friends</a></li>
				<li><a href="footer-persist-c.php" data-prefetch="true" data-transition="none">Albums</a></li>
				<li><a href="footer-persist-d.php" data-prefetch="true" data-transition="none">Emails</a></li>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /footer -->

	<?php include( '../../global-nav.php' ); ?>

	</div><!-- /page -->
	</body>
	</html>