
		<?php
			$fn = basename($_SERVER['PHP_SELF']);
		?>
		
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="#"><img class="coop-logo" src="img/coop-logo.png" alt="coop logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
				<a class="nav-item nav-link <?= ($fn=='index.php')?'active':''?>" href="index.php">Hjem</a>
				<a class="nav-item nav-link <?= ($fn=='guide.php')?'active':''?>" href="guide.php">Video Guide</a>
				<a class="nav-item nav-link <?= ($fn=='discount.php')?'active':''?>" href="discount.php">Tilbud</a>
				<?php 
				if(empty($_SESSION['pid'])) { ?>
					<a class="nav-item nav-link <?= ($fn=='login.php')?'active':''?>" href="#" data-toggle="modal" data-target="#login-modal">Log ind</a>
				<?php } else { ?>
					<a class="nav-item nav-link <?= ($fn=='login.php')?'active':''?>" href="php/logout.php">Log ud</a>
				<?php } ?>	
				</div>
			</div>
		</nav>