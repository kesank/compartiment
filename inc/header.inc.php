<!-- Début du header -->
<header>
	<img src="logo.png" />
	<h1>Mon sur site!</h1>
	
	

	<div style="position: absolute; right: 40px; top: 40px;">
	
		<!-- Forme contracté de PHP : -->
		<?php if(isset($_SESSION['pseudo'])) : ?>
			Bonjour <?= $_SESSION['pseudo'] ?> !<br/>
			<a href="deconnexion.php">deconnexion</a>
		<?php else :  ?>
			<a href="connexion.php">Connectez-vous</a>
		<?php endif; ?>
		
		<!-- Forme normale de PHP : -->
		<?php 
		// if(isset($_SESSION['pseudo'])){
			// echo 'Bonjour ' . $_SESSION['pseudo'] . ' !<br/>';
			// echo '<a href="connexion.php">deconnexion</a>';
		// }
		// else{
			// echo '<a href="connexion.php">Connectez-vous</a>';
		// }
		?>
		
	</div>
	
	
	
	
</header>
<!-- Fin du header -->