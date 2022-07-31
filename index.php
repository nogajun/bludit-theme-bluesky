<!doctype html>
<html lang="<?php echo Theme::lang() ?>">

<head>
	<?php include(THEME_DIR_PHP . 'head.php'); ?>
</head>

<body>
	<!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

	<!-- header -->
	<?php include(THEME_DIR_PHP . 'header.php'); ?>

	<div class="container-lg px-md-3 py-3 py-lg-4 my-0 my-xl-4 bg-white shadow-sm">
		<div class="row row-cols-1 row-cols-xl-2">
			<!-- main -->
			<main class="col col-xl-8">
				<?php
				switch ($WHERE_AM_I) {
					case 'page':
						include(THEME_DIR_PHP . 'page.php');
						break;
					case 'tag':
						include(THEME_DIR_PHP . 'home.php');
						break;
					case 'category':
						include(THEME_DIR_PHP . 'home.php');
						break;
					default:
						include(THEME_DIR_PHP . 'home.php');
				}
				?>
			</main>

			<!-- sidebar -->
			<aside class="col col-xl-4 sidebar">
				<?php include(THEME_DIR_PHP . 'sidebar.php'); ?>
			</aside>
		</div>
	</div>

	<!-- footer -->
	<?php include(THEME_DIR_PHP . 'footer.php'); ?>

  <script defer src="<?php echo HTML_PATH_THEME_JS . 'bootstrap.min.js' ?>"></script>

	<!-- Load Bludit Plugins: Site Body End -->
	<?php Theme::plugins('siteBodyEnd'); ?>
</body>

</html>