<?php
include('inc/haut.inc.php'); 

// echo '<pre>'; 
// print_r($_POST);
// echo '</pre>'; 

if($_POST){
	
	if(empty($_POST['pseudo']) || empty($_POST['mdp'])){
		
		$msg .= '<p style="color: white; background: red; padding: 5px;">Veuillez remplir tous les champs !</p>'; 
	}
	else{
		if($_POST['pseudo'] != 'wf3'){
			$msg .= '<p style="color: white; background: red; padding: 5px;">Erreur de pseudo !</p>';
		}
		
		if($_POST['mdp'] != 'freebox'){
			$msg .= '<p style="color: white; background: red; padding: 5px;">Erreur de mot de passe</p>';
		}
	}
	
	// tout est on peut connecter notre utilisateur : 
	if(empty($msg)){
		
		$_SESSION['pseudo'] = 'wf3';
		$_SESSION['nom'] = 'Force';
		$_SESSION['prenom'] = 'web';
		$_SESSION['adresse'] = '4 rue Geoffroy';
		$_SESSION['telephone'] = '0102030405';
		$_SESSION['email'] = 'web.force3@gmail.com';

		header('location:profil.php');
	}
	
	
	
	
}



include('inc/header.inc.php'); 
include('inc/nav.inc.php'); 
?>
<!-- Contenu HTML de cette page -->

<section>
<?= $msg ?>
	<form method="post" action="">
		<label>Pseudo : </label><br/>
		<input type="text" name="pseudo" /><br/><br/>

		<label>Mot de passe: </label><br/>
		<input type="password" name="mdp" /><br/><br/>

		<input type="submit" value="Connexion" />

	</form>
</section>
<?php
include('inc/footer.inc.php');
?>