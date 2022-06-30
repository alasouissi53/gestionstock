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

<body>  <br><br>
<?
		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");

$link="SELECT prod FROM mois1" ;
$result = mysql_query($link);
$num_rows = mysql_num_rows($result);
$num=$num_rows+1;

 ?>
<center>
<table  border="1" cellspacing="1" cellpadding="1">
  <tr bordercolor="#FF9900" align='center'>
    <th width="116" bgcolor="#FFCC99" scope="col"><b>Categorie</b></th>
    <th width="116" bgcolor="#FFCC99" scope="col"><b>Designation</b></th>
    <th width="116" bgcolor="#FFCC99" scope="col"><b>Reference</b></th>
    <th width="116" bgcolor="#FFCC99" scope="col"><b>Marque</b></th>
    <th width="116" bgcolor="#FFCC99" scope="col"><b>Unite de vente</b></th>
    <th width="116" bgcolor="#FFCC99" scope="col"><b>Seuil</b></th>
    <th width="116" bgcolor="#FFCC99" scope="col"><b>Stock</b></th>
    <th width="116" bgcolor="#FFCC99" scope="col"><b>Information complementaire 1</b></th>
    <th width="116" bgcolor="#FFCC99" scope="col"><b>Information complementaire  2</b></th>
  </tr><?
$prods=$_POST['prod'];

          for ($i=1;$i<$num;$i++)
          {

 			$req="SELECT prod, quant, temp1, seuil, temp3, temp4, temp5, temp6, temp7  FROM stock WHERE ID='$i'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);

$prod=$data['prod'];
$quant=$data['quant'];
$temp1=$data['temp1'];
$seuil=$data['seuil'];
$temp3=$data['temp3'];
$temp4=$data['temp4'];
$temp5=$data['temp5'];
$temp6=$data['temp6'];
$temp7=$data['temp7'];

if ($temp3=="Ré")
{$temp3="Réactifs";}
if ($temp3=="Co")
{$temp3="Consommables";}
if ($temp3=="Pi")
{$temp3="Pièces détachées";}



       if ($prods==$prod)
       {
$fin=$prod;
$a=strlen($prod);
for ($f=1;$f<$a;$f++)
{
$une=$prod{0};
if ($une=="_")
{
$b=$f-1;
}
$prod=substr($prod,1);
}
$prod=substr($fin,0,$b);

 ?>
  <tr bordercolor="#FF9900" align='center'>
    <td bgcolor="#FFCC99"><? echo "$temp3";?></td>
    <td bgcolor="#FFCC99"><? echo "$prod";?></td>
    <td bgcolor="#FFCC99"><? echo "$temp1";?></td>
    <td bgcolor="#FFCC99"><? echo "$temp4";?></td>
    <td bgcolor="#FFCC99"><? echo "$temp5";?></td>
    <td bgcolor="#FFCC99"><? echo "$seuil";?></td>
    <td bgcolor="#FFCC99"><? echo "$quant";?></td>
    <td bgcolor="#FFCC99"><? echo "$temp6";?></td>
    <td bgcolor="#FFCC99"><? echo "$temp7";?></td>
  </tr>
   <?
   }
       }

 ?>
</table>
 </center>

</body>
</html>