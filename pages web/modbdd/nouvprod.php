<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #CCCC99;
}
-->
</style></head>

<body>
 <center>
<table>
 <form action="traitnouv.php" method="post"><br>
 <tr><td><b>Catégorie</b></td><td>  <select name="clas">
	<option  value="Ré">Réactifs
	<option  value="Co">Consommables
	<option  value="Pi">Pièces détachées
	</select> </td></tr>
 <tr><td><b>Designation</b></td><td> <input type="text" name="nom"></td></tr>
 <tr><td><b>Référence</b> </td><td> <input type="text" name="info1"></td></tr>
 <tr><td><b>Marque</b></td><td>  <input type="text" name="info2"></td></tr>
 <tr><td><b>Unité de vente</b> </td><td> <input type="text" name="info3"></td></tr>
<tr><td><b>Seuil d'alert</b> </td><td> <input type="text" name="seuil"></td></tr>
<tr><td><b>Stock </b></td><td> <input type="text" name="quant"></td></tr>
<tr><td><b>information complémentaire 1</b></td><td> <input type="text" name="info4"></td></tr>
<tr><td><b>information complémentaire 2</b></td><td> <input type="text" name="info5"></td></tr>
</table> <br>
<table  border="1" cellspacing="1" cellpadding="1">
  <tr bordercolor="#FF9900" align='center'>
      <th width="134" bgcolor="#FFCC99" scope="col"><b>login</b></th>
      <td bgcolor="#FFCC99"><?echo "<input type='text' name='log'>";?></td>
  </tr>
  <tr bordercolor="#FF9900" align='center'>
      <th width="116" bgcolor="#FFCC99" scope="col"><b>mots de passe</b></th>
      <td bgcolor="#FFCC99"><?echo "<input type='password' name='pass'>";?></td>
  </tr>
</table> <br>
 <input type="submit" value="valider">
 </form>
<?php


?>
 </center>
</body>

</html>