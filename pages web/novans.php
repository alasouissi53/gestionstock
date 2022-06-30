<?php
$ans=date("m d");
$anneee="a20".date("y");
echo "$ans<br>";
if ($ans=="01 01")
{
echo "connection bdd pour initialiser la base mois";
		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");

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

    $req="UPDATE mois1 SET prod='$prod',janvier='0',fevrier='0',mars='0',avril='0',mai='0',juin='0',juillet='0',aout='0',septembre='0',octobre='0',novembre='0',decembre='0' WHERE ID='$i'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
$i++;
}
}

?>