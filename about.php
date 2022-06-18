<?php $currentPage = 'about';
$demo = 'demo2';?>

<?php include './shared/head.php' ?>

	<body class="demo-2">
		<?php include './shared/header.php' ?>

		<?php include './shared/svg-hidden.php' ?>

		<main class="main main--demo-2">
			<div class="content content--demo-2">
				<div class="demo-title demo-title--demo-2">About</div>
			</div>
		</main>

		<?php include './shared/global-menu.php' ?>

		<svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
			<path class="shape-overlays__path"></path>
			<path class="shape-overlays__path"></path>
			<path class="shape-overlays__path"></path>
			<path class="shape-overlays__path"></path>
		</svg>

		<?php include './shared/demos.php' ?>

		<?php include './shared/scripts.php' ?>
		<script src="js/demo2.js"></script>
	</body>
</html>
