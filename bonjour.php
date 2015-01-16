<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, h&eacute; h&eacute;. Tu t'appelles <?php echo $_POST['prenom']; ?> !</p>

<p>Si tu veux changer de pr&eacute;nom, <a href="index.php">clique ici</a> pour revenir &agrave; la page formulaire.php.</p>

<p>Je sais comment tu t'appelles, h&eacute; h&eacute;. Tu t'appelles <?php echo htmlspecialchars($_POST['prenom']); ?> !</p>

<!--<?php
/*if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
{
	// 1 : On force la conversion en nombre entier
	$_GET['repeter'] = (int) $_GET['repeter'];

	// 2 : Le nombre doit être compris entre 1 et 100
	if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 100) 
	{	
		for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
		{
			echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
		}
	}
	else
	{
		echo 'Le nombre de r&eacute;p&eacute;titions doit &ecirc;tre compris entre 1 et 100 !';
	}
}
else
{
   echo 'Il faut renseigner un nom, un prénom et un nombre de r&eacute;p&eacute;titions !';
}
?>*/