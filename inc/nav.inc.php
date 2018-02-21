<!-- Début du Nav -->
<nav>
	<a href="accueil.php">Accueil</a>
	<a href="actualite.php">Actualité</a>
	<a href="quisommesnous.php">Qui sommes nous ?</a>
	<a href="contact.php">Contact</a>
	
	<?php if(isset($_SESSION['pseudo'])) : ?>
	<a href="profil.php">profil</a>
	<?php endif; ?>
	
</nav>
<!-- Fin du nav -->