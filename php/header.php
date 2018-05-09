
		<?php
			$fn = basename($_SERVER['PHP_SELF']);
		?>
		
		<div class="menu">
			<div class="menu-item">
				<a class="<?= ($fn=='contact.php')?'selected':''?>" href="contact.php">Kontakt</a>
			</div>

			<div class="menu-item">
				<a class="<?= ($fn=='booking.php')?'selected':''?>" href="booking.php">Billetbestilling</a>
			</div>

			<div class="menu-item">
				<a class="<?= ($fn=='index.php')?'selected':''?>" href="index.php">Hjem</a>
			</div>	
		</div>


		<div class="menu-mobile">
			<div class="menu-item-mobile">
				<a class="<?= ($fn=='contact.php')?'selected':''?>" href="contact.php">Kontakt</a>
			</div>

			<div class="menu-item-mobile">
				<a class="<?= ($fn=='booking.php')?'selected':''?>" href="booking.php">Billetbestilling</a>
			</div>

			<div class="menu-item-mobile">
				<a class="<?= ($fn=='index.php')?'selected':''?>" href="index.php">Hjem</a>
			</div>
			<h2 id="burger-menu">≡</h2>
		</div>