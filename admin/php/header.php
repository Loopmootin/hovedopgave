		
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
				<?php 
				if(empty($_SESSION['pid'])) { ?>
					<a class="nav-item nav-link <?= ($fn=='login.php')?'active':''?>" href="#" data-toggle="modal" data-target="#login-modal">Log ind</a>
				<?php } else { ?>
					<a class="nav-item nav-link <?= ($fn=='login.php')?'active':''?>" href="#" data-toggle="modal" data-target="#login-modal">Log ud</a>
				<?php } ?>	
				</div>
			</div>
		</nav>