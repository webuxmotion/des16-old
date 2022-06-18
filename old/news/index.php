<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "xhtml11.dtd">
<html>
<head>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251" />
	<TITLE>News - des16</TITLE>
	<link rel="icon" type="image/png" href="/favicon.png">
	<link rel="stylesheet" href="/styles.css">
</head>
<body>
	<?php include '../shared/header.php'; ?>

	<div class="g-wrapper">
		<?php if($_SERVER["REQUEST_URI"] == '/news/') : ?>
			<h1>Новости</h1>
		<div class="c-news">
			<a href="/news/palermo-cms" class="c-newPreview">
				<h3>Своя ЦМС-ка - Palermo CMS</h3>
				<p>Команда студии работает над созданием своей системы управления...</p>
			</a>
		</div>
		<?php endif;?>

		<?php
		$n = $_SERVER["REQUEST_URI"];
		switch ($n) {
			case '/news/palermo-cms':
					include './articles/palermo-cms.php';
					break;
			case '/news/':
					break;
			default:
					echo '404';
		 }
		?>
	</div>

</body>
</html>
