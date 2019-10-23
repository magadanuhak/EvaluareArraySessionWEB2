<?php
	if(isset($_GET['id'])){
		?>
		<div class="alert alert-primary" role="alert">
		  <?=$myArr->show($_GET['id'])?>
		</div>
		<?
	}
?>