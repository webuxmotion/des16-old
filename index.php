<?php
	$currentPage = 'index';
	$demo = 'demo1';
?>

<?php include './shared/head.php' ?>

	<body class="demo-1">
		<?php include './shared/header.php' ?>

		<?php include './shared/svg-hidden.php' ?>

		<main class="main main--demo-1">
			<div class="content content--demo-1">
				<div class="demo-title demo-title--demo-1">DES 16</div>
			</div>
		</main>

		<?php include './shared/global-menu.php' ?>

		<svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
			<path class="shape-overlays__path"></path>
			<path class="shape-overlays__path"></path>
			<path class="shape-overlays__path"></path>
		</svg>

		<?php include './shared/demos.php' ?>

		<?php include './shared/scripts.php' ?>
	</body>
</html>
