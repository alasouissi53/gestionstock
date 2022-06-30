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

$link="SELECT prod FROM stock" ;
$result = mysql_query($link);
$num_rows = mysql_num_rows($result);
$num=$num_rows+1;

$nom=$_POST['nom'];
$quant=$_POST['quant'];
$seuil=$_POST['seuil'];
$clas=$_POST['clas'];
$info1=$_POST['info1'];
$info2=$_POST['info2'];
$info3=$_POST['info3'];
$info4=$_POST['info4'];
$info5=$_POST['info5'];
$nom=$nom."_".$info3;
$i=1;   $id1=0;
while ($i<$num)
{
			$req="SELECT prod FROM stock WHERE ID='$i'" ;
            $resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$prod = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($prod);

if ($prod=="")
{
$id1=$i;
$i=$num ;
}
$i++;
}

if ($id1==0)
{
	$req="INSERT INTO stock (ID,prod,quant,temp1,seuil,temp3,temp4,temp5,temp6,temp7)
	VALUES ('$num','$nom','$quant','$info1','$seuil','$clas','$info2','$info3','$info4','$info5')";
	$resultat = mysql_query($req)
	or die ("la requete ne peut etre execute3");

	$req="INSERT INTO annee1 (ID,prod,a2005,a2006,a2007,a2008,a2009,a2010,a2011,a2012)
	VALUES ('$num','$nom','0','0','0','0','0','0','0','0')";
	$resultat = mysql_query($req)
	or die ("la requete ne peut etre execute3");

	$req="INSERT INTO mois1 (ID,prod,janvier,fevrier,mars,avril,mai,juin,juillet,aout,septembre,octobre,novembre,decembre)
	VALUES ('$num','$nom','0','0','0','0','0','0','0','0','0','0','0','0')";
	$resultat = mysql_query($req)
	or die ("la requete ne peut etre execute3");
}
else
{
 	$req="UPDATE stock SET prod='$nom',quant='$quant',temp1='$info1',seuil='$seuil',temp3='$clas',temp4='$info2',temp5='$info3',temp6='$info4',temp7='$info5' WHERE ID='$id1'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");

 	$req="UPDATE annee1 SET prod='$nom',a2005='0',a2006='0',a2007='0',a2008='0',a2009='0',a2010='0' WHERE ID='$id1'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");

 	$req="UPDATE mois1 SET prod='$nom',janvier='0',fevrier='0',mars='0',avril='0',mai='0',juin='0',juillet='0',aout='0',septembre='0',octobre='0',novembre='0',decembre='0' WHERE ID='$id1'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
}
    }
     else
     {
     echo "il y a une erreur sur le mots de passe ou sur le login";
     }
?>

</body>

</html>