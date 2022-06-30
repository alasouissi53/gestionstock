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
<?php
		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");

$logs=$_POST['log'];
$pass=$_POST['pass'];

$req = "SELECT passe FROM passe WHERE log='$logs'";
$query = mysql_query($req) or die ("il y a un probleme avec le login");
$data = mysql_fetch_array($query, MYSQL_ASSOC);

$passe=$data['passe'];
if ($pass==$passe and $pass!="" and $logs!="" and $pass=="admin")
{

$nom=$_POST['nom1'];
$quante=$_POST['quant1'];
$seuile=$_POST['seuil1'];
$type=$_POST['type1'];

$infoe1=$_POST['info1'];
$infoe2=$_POST['info2'];
$infoe3=$_POST['info3'];
$infoe4=$_POST['info4'];
$infoe5=$_POST['info5'];



if ($quante!="")
{
 	$req="UPDATE stock SET quant='$quante' WHERE prod='$nom'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
}
if ($seuile!="")
{
 	$req="UPDATE stock SET seuil='$seuile' WHERE prod='$nom'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
}
if ($type!="")
{
$type1=$type{0}.$type{1};
 	$req="UPDATE stock SET temp3='$type1' WHERE prod='$nom'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
}
if ($infoe1!="")
{
 	$req="UPDATE stock SET temp1='$infoe1' WHERE prod='$nom'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
}
if ($infoe2!="")
{
 	$req="UPDATE stock SET temp4='$infoe2' WHERE prod='$nom'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
}
if ($infoe3!="")
{
 	$req="UPDATE stock SET temp5='$infoe3' WHERE prod='$nom'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
}
if ($infoe4!="")
{
 	$req="UPDATE stock SET temp6='$infoe4' WHERE prod='$nom'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
}
if ($infoe5!="")
{
 	$req="UPDATE stock SET temp7='$infoe5' WHERE prod='$nom'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
}


echo "modification effectuée";
    }
     else
     {
     echo "il y a une erreur sur le mots de passe ou sur le login";
     }
         ?>
</center>
</body>

</html>