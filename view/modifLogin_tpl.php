<?php

// Insertion du code html /////////////////////////////////////////////
echo $strHtml;
// Head ///////////////////////////////////////////////////////////////
include("head.php");

?>

<!-- Affichage formulaire d'ajout -->
		<form action="../ctr/modifLogin.php" method="post">
			<table>
				<h2>Modification du mot de passe</h2>
				<tr>
					<td>Identifiant :</td>
					<td><input name="login" type="text" value='<?php echo $login; ?>' /></td>
				</tr>
				<tr>
					<td>Ancien mot de passe :</td>
					<td><input name="password" type="password" /></td>
				</tr>
				<tr>
					<td>Nouveau mot de passe :</td>
					<td><input name="newpassword" type="password" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Enregistrer"></td>
		
				</tr>
			</table>
		</form>

<!-- Footer -->
<?php include("foot.php"); ?>