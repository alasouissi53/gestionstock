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
<br><br><h2>Laissser les cases libres quant il n'y a pas de modification à effectuer</h2><br><br>
<?
		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");

$prode=$_POST['prod'];
$prodes=$_POST['prod'];
$fin=$prodes;
$a=strlen($prodes);
for ($i=1;$i<$a;$i++)
{
$un=$prodes{0};
if ($un=="_")
{
$b=$i-1;
}
$prodes=substr($prodes,1);
}
$prodes=substr($fin,0,$b);



 			$req="SELECT quant, temp1, seuil, temp3, temp4, temp5, temp6, temp7  FROM stock WHERE prod='$prode'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);

$quant=$data['quant'];
$temp1=$data['temp1'];
$seuil=$data['seuil'];
$temp3=$data['temp3'];
$temp4=$data['temp4'];
$temp5=$data['temp5'];
$temp6=$data['temp6'];
$temp7=$data['temp7'];

if ($temp3=="re")
{$temp3="Réactifs";}
if ($temp3=="co")
{$temp3="Consommables";}
if ($temp3=="pi")
{$temp3="Pièces détachées";}




         ?>
<table  border bgcolor=#CC9900>
 <form action="traitmod2.php" method="post">
 <tr  bordercolor=#FF9900 align='center'>
<td bgcolor="#FFCC99"><b>Categorie</b></td>
<td bgcolor="#FFCC99"><b><?echo "$temp3";?></b></td>
<td bgcolor="#FFCC99"><input type="text" name="type1"></td>
</tr>
<tr  bordercolor=#FF9900 align='center'>
<td bgcolor="#FFCC99"><b>Designation</b></td>
<td bgcolor="#FFCC99"><b><?echo "$prodes";?></b></td>
<td bgcolor="#FFCC99"><?echo "<input type='hidden' name='nom1' value='$prode'>";?></td>
</tr>
<tr  bordercolor=#FF9900 align='center'>
<td bgcolor="#FFCC99"><b>Reference</b></td>
<td bgcolor="#FFCC99"><b><?echo "$temp1";?></b></td>
<td bgcolor="#FFCC99"><input type="text" name="info1"></td>
</tr>
<tr  bordercolor=#FF9900 align='center'>
<td bgcolor="#FFCC99"><b>Marque</b></td>
<td bgcolor="#FFCC99"><b><?echo "$temp4";?></b></td>
<td bgcolor="#FFCC99"><input type="text" name="info2"></td>
</tr>
<tr  bordercolor=#FF9900 align='center'>
<td bgcolor="#FFCC99"><b>Unite de vente</b></td>
<td bgcolor="#FFCC99"><b><?echo "$temp5";?></b></td>
<td bgcolor="#FFCC99"><input type="text" name="info3"></td>
</tr>
<tr  bordercolor=#FF9900 align='center'>
<td bgcolor="#FFCC99"><b>seuil alarme</b></td>
<td bgcolor="#FFCC99"><b><?echo "$seuil";?></b></td>
<td bgcolor="#FFCC99"><input type="text" name="seuil1"></td>
</tr>
<tr  bordercolor=#FF9900 align='center'>
<td bgcolor="#FFCC99"><b>stock</b></td>
<td bgcolor="#FFCC99"><b><?echo "$quant";?></b></td>
<td bgcolor="#FFCC99"><input type="text" name="quant1"></td>
</tr>
<tr  bordercolor=#FF9900 align='center'>
<td bgcolor="#FFCC99"><b>information complementaire 1</b></td>
<td bgcolor="#FFCC99"><b><?echo "$temp6";?></b></td>
<td bgcolor="#FFCC99"><input type="text" name="info4"></td>
</tr>
<tr  bordercolor=#FF9900 align='center'>
<td bgcolor="#FFCC99"><b>information complementaire 2</b></td>
<td bgcolor="#FFCC99"><b><?echo "$temp7";?></b></td>
<td bgcolor="#FFCC99"><input type="text" name="info5"></td>
</tr>
</table> <br><br>
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


</center>
</body>

</html>