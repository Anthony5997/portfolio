<?php

// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'anthony.rita@outlook.com';

// copie ? (envoie une copie au visiteur)
$copie = 'non';

/*
 * cette fonction sert à nettoyer et enregistrer un texte
 */
function Rec($text)
{
	$text = htmlspecialchars(trim($text), ENT_QUOTES);

		$text = stripslashes($text);


	$text = nl2br($text);
	return $text;
};
/*
 * Cette fonction sert à vérifier la syntaxe d'un email
 */
function IsEmail($email)
{
	$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
	return (($value === 0) || ($value === false)) ? false : true;
}
// formulaire envoyé, on récupère tous les champs.
$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
$prenom   = (isset($_POST['prenom']))   ? Rec($_POST['prenom'])   : '';
$nom   = (isset($_POST['nom']))   ? Rec($_POST['nom'])   : '';
$objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';

// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

if (isset($_POST['envoi']))
{
	if ( ($email != '') && ($objet != '') && ($message != '') && ($prenom != '') && ($nom != ''))
	{
		// les 4 variables sont remplies, on génère puis envoie le mail

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From:'.$_POST['prenom'].' '.$_POST['nom'].' <'.$_POST['email'].'>' . "\r\n" .
            'Reply-To:'.$email. "\r\n" .
            'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
            'Content-Disposition: inline'. "\r\n" .
            'Content-Transfer-Encoding: 7bit'." \r\n" .
            'X-Mailer:PHP/'.phpversion();

		// envoyer une copie au visiteur ?
		if ($copie == 'oui')
		{
			$cible = $destinataire.';'.$email;
		}
		else
		{
			$cible = $destinataire;
		};

		// Remplacement de certains caractères spéciaux
		$message = str_replace("&#039;","'",$message);
		$message = str_replace("&#8217;","'",$message);
		$message = str_replace("&quot;",'"',$message);
		$message = str_replace('&lt;br&gt;','',$message);
		$message = str_replace('&lt;br /&gt;','',$message);
		$message = str_replace("&lt;","&lt;",$message);
		$message = str_replace("&gt;","&gt;",$message);
		$message = str_replace("&amp;","&",$message);

		// Envoi du mail
		$num_emails = 0;
		$tmp = explode(';', $cible);

		foreach($tmp as $email_destinataire)

		{
			if (mail($email_destinataire, $objet, $message, $headers))
				$num_emails++;

		}

		if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
		{
            header('Location: ../index.php?mail=Message send!');
		}
		else
		{
			header('Location: ../index.php?mail= The sending fail, please try again.');

		};
	}
	else
	{
		// une des 3 variables (ou plus) est vide ...
		header('Location: ../index.php?mail=Check if all the fields are correctly filled.');
		$err_formulaire = true;
	};
}; // fin du if (!isset($_POST['envoi']))

if (($err_formulaire) || (!isset($_POST['envoi'])))
{
  header('Location: ../index.php?mail=Check if all the fields are correctly filled.');
}
?>