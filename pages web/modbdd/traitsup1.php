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
 $prode=$_POST['prod'];
$link="SELECT prod FROM stock" ;
$result = mysql_query($link);
$num_rows = mysql_num_rows($result);
$num=$num_rows+1;

$i=1;
while ($i<$num)
{

 			$req="SELECT prod FROM stock WHERE ID='$i'" ;
            $resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$prod = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($prod);

if ($prode==$prod)
{
$id1=$i;
$i=$num;
}

$i++;
}

 	$req="UPDATE stock SET prod='',quant='',temp1='',seuil='',temp3='',temp4='',temp5='',temp6='',temp7='' WHERE ID='$id1'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");

 	$req="UPDATE annee1 SET prod='',a2005='',a2006='',a2007='',a2008='',a2009='',a2010='' WHERE ID='$id1'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");

 	$req="UPDATE mois1 SET prod='',janvier='',fevrier='',mars='',avril='',mai='',juin='',juillet='',aout='',septembre='',octobre='',novembre='',decembre='' WHERE ID='$id1'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
     echo "suppression effectuée";
    }
     else
     {
     echo "il y a une erreur sur le mots de passe ou sur le login";
     }
         ?>
</center>
</body>

</html>