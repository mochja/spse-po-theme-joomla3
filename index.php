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
		<jdoc:include type="modules" name="position-2" style="none" />
	</section>

	<aside id="panel-right">
		<div class="panel">
			<jdoc:include type="modules" name="position-7" style="well" />
		</div>
<!--		<section>
			<h3>Bleskovky</h3>
			<article class="flash">
				<header>Kritériá prijímacieho konania</header>
				<p>Zverejnili sme kritériá prijímacieho konania pre školský rok 2013/2014.</p>
				<p><a href="#">Výsledková listina</a></p>
			</article>
			<article class="flash">
				<header>Dievčatá a chlapci 9. ročníkov ZŠ</header>
				<p>Naša škola pre Vás pred prijímacími skúškami pripravila 5 grátis stretnutí Odpoludnie s matematikou..</p>
			</article>
			<article class="flash">
				<header>NAG2013</header>
				<p>Prinášame výsledky.</p>
			</article>
		</section>
		<section>
			<h3>Rýchla navigácia</h3>
		</section>
		<section>
			<h3>Anketa</h3>
		</section> -->

	</aside>

	<footer>
		<p>2013</p>
	</footer>
</div>
</body>
</html>