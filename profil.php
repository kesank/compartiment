<?php
include('inc/haut.inc.php'); 
include('inc/header.inc.php'); 
include('inc/nav.inc.php'); 

if(isset($_SESSION['pseudo'])){
	extract($_SESSION);
}
else{
	header('location:connexion.php');
}

?>
<!-- CONTENU HTML de la page -->

<section>
	<h1>Profil de <?= $pseudo ?></h1>

	<ul>
		<li>Prénom : <?= $prenom ?> </li>
		<li>Nom : <?= $nom ?> </li>
		<li>Adresse : <?= $adresse ?> </li>
		<li>Téléphone : <?= $telephone ?> </li>
		<li>Email : <?= $email ?> </li>
	</ul>
	
	
</section>



<?php
include('inc/footer.inc.php');
?>