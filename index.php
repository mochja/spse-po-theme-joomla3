<?php
defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$doc->addStyleSheet('templates/' . $this->template . '/css/default.css');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<jdoc:include type="head" />
</head>
<body>
	<div class="container">
	<header>
		<img src="images/logo2.png" alt="" height="200" width="980" />
		<nav>
			<ul>
				<jdoc:include type="modules" name="position-1" />
			</ul>
		</nav>

	</header>

	<aside id="panel-left">
		<div class="panel">
			<jdoc:include type="modules" name="position-4" />
			<jdoc:include type="modules" name="position-6" />
		</div>
	</aside>

	<section id="main">
		<jdoc:include type="modules" name="position-3" />
		<jdoc:include type="message" />
		<jdoc:include type="component" />
		<jdoc:include type="modules" name="position-2" />
	</section>

	<aside id="panel-right">
		<div class="panel">
			<jdoc:include type="modules" name="position-7" />
		</div>
	</aside>

	<footer>
		<p>2013</p>
	</footer>
</div>
</body>
</html>