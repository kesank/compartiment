<?php
include('inc/haut.inc.php'); 

unset($_SESSION['pseudo']);
unset($_SESSION['nom']);
unset($_SESSION['prenom']);
unset($_SESSION['adresse']);
unset($_SESSION['telephone']);
unset($_SESSION['email']);

header('location:accueil.php');