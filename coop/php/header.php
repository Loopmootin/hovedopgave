
		<?php
			$fn = basename($_SERVER['PHP_SELF']);
		?>
		
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="#">COOP.DK</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
				<a class="nav-item nav-link <?= ($fn=='index.php')?'active':''?>" href="#">Hjem</a>
				<a class="nav-item nav-link <?= ($fn=='video.php')?'active':''?>" href="#">Video Guide</a>
				<a class="nav-item nav-link <?= ($fn=='discount.php')?'active':''?>" href="#">Tilbud</a>
				<a class="nav-item nav-link <?= ($fn=='login.php')?'active':''?>" href="#">Login</a>
				</div>
			</div>
		</nav>