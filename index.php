<?php setcookie('pseudo', 'test_cook', time() + 365*24*3600, null, null, false, true); ?>

<?php
$monfichier = fopen('compteur.txt', 'r+');
 
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues++; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
 
fclose($monfichier);
 
echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?>

<?php
// Le mot de passe n'a pas été envoyé ou n'est pas bon
if (!isset($_POST['mot_de_passe']) OR $_POST['mot_de_passe'] != "kangourou")
{
	// Afficher le formulaire de saisie du mot de passe
	?>
	    <p>Veuillez entrer le mot de passe pour obtenir les codes d'acc&egrave;s au serveur central de la NASA :</p>
        <form action="index.php" method="post">
        	<p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
        	</p>
        </form>
        <p>Cette page est r&eacute;serv&eacute;e au personnel de la NASA. Si vous ne travaillez pas &agrave; la NASA, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
	<?php
}
// Le mot de passe a été envoyé et il est bon
else
{
	// Afficher les codes secrets
	?>
        <h1>Voici les codes d'acc&eacute;s :</h1>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
        
        <p>
        Cette page est r&eacute;serv&eacute;e au personnel de la NASA. N'oubliez pas de la visiter r&eacute;guli&egrave;rement car les codes d'acc&egrave;s sont chang&eacute;s toutes les semaines.<br />
        La NASA vous remercie de votre visite.
        </p>
    <?php
}
?>

<!--<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page protégée par mot de passe</title>
    </head>
    <body>
        <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
        <form action="secret.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
    </body>
</html>

<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre pr&eacute; :
</p>

<form action="bonjour.php" method="post">
<p>
    <input type="text" name="prenom" />
    <input type="submit" value="Valider" />
</p>
</form>

<textarea name="message" rows="8" cols="45">
	Votre message ici.
</textarea>

<p>
<select name="choix">
	<option></option>
    <option value="choix1">Choix 1</option>
    <option value="choix2">Choix 2</option>
    <option value="choix3">Choix 3</option>
    <option value="choix4">Choix 4</option>
</select>
</p>

<input type="checkbox" name="case" id="case" checked="checked" /> <label for="case">Ma case &agrave; cocher</label>
<br />

Aimez-vous les frites ?
<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
<input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>

<input type="hidden" name="pseudo" value="Lol cach&eacute;" />

<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
</form>