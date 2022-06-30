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
<?



$test=$_POST['test'];
		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");


if ($test=="")
{
?><h2>selestionner la catégorie d'article </h2>
<form action="traitsup.php" method="POST"><select name="test">
	<option  value="Ré">Réactifs
	<option  value="Co">Consommables
	<option  value="Pi">Pièces détachées
	</select>
	<input type="submit" value="choisissez un produit"></form><?
 }
if ($test!="")
{
?>
<h2>selestionner l'article </h2>
<?
        $rq="SELECT DISTINCT prod FROM stock WHERE temp3='$test' ";
        $result=mysql_query($rq)
   			or die ("requete impossible");
echo "<form action='traitsup1.php' method='POST'><select name='prod'>\n";

while ($ligne=mysql_fetch_array($result))
	{
    extract($ligne);
    if ($prod<>"")

   		 echo "<option  value='$prod'>$prod\n";

    }
    echo "</select>";
    ?> <br> <br>
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
<?
    echo "<input type='submit'".
    	 "value=\"valider\"></form>";
         }
         ?>
</center>
</body>

</html>