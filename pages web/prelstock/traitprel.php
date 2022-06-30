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
if ($pass==$passe and $pass!="" and $logs!="")
{

$prode=$_POST['prod'];
$mois1=date("m");
if ($mois1=="01")
{$mois="janvier";}
elseif ($mois1=="02")
{$mois="fevrier";}
elseif ($mois1=="03")
{$mois="mars";}
elseif ($mois1=="04")
{$mois="avril";}
elseif ($mois1=="05")
{$mois="mai";}
elseif ($mois1=="06")
{$mois="juin";}
elseif ($mois1=="07")
{$mois="juillet";}
elseif ($mois1=="08")
{$mois="aout";}
elseif ($mois1=="09")
{$mois="septembre";}
elseif ($mois1=="10")
{$mois="octobre";}
elseif ($mois1=="11")
{$mois="novembre";}
elseif ($mois1=="12")
{$mois="decembre";}

$annee1="a20".date("y");
   $quant1=0;
   $a=0;

$un=$_POST['un'];



            $req="SELECT quant FROM stock WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

            $req="SELECT $mois FROM mois1 WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

if ($mois1=="01")
{
if ($un<=$quant)
	{
   	 if ($quant!="")
   		{
  	 $quant1=$quant-$un;
 	  if ($quant1<0)
  	 {$quant1=0;}

  	  $req="UPDATE stock SET quant='$quant1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute stock");

        $janvier1=$janvier+$un;
  	  $req="UPDATE mois1 SET janvier='$janvier1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");

            $req="SELECT $annee1 FROM annee1 WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

      if ($annee1=="a2005")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2005' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2006")
      		{
        $a2006=$a2006+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2006' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2007")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2007' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2008")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2008' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2009")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2009' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2010")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2010' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
          }
 echo "<center><br><br><h2>opération effectuée</h2></center>";      }
     else{echo "Vous voulez en prelever $un mais il ne vous en reste que $quant, cette operation a donc etait annulée";}
}
elseif ($mois1=="02")
{if ($un<=$quant)
	{
   	 if ($quant!="")
   		{
  	 $quant1=$quant-$un;
 	  if ($quant1<0)
  	 {$quant1=0;}

  	  $req="UPDATE stock SET quant='$quant1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute stock");

        $fevrier1=$fevrier+$un;
  	  $req="UPDATE mois1 SET fevrier='$fevrier1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");

            $req="SELECT $annee1 FROM annee1 WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

      if ($annee1=="a2005")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2005' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2006")
      		{
        $a2006=$a2006+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2006' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2007")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2007' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2008")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2008' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2009")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2009' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2010")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2010' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
          }
     echo "<center><br><br><h2>opération effectuée</h2></center>";  }
       else{echo "Vous voulez en prelever $un mais il ne vous en reste que $quant, cette operation a donc etait annulée";} }
elseif ($mois1=="03")
{if ($un<=$quant)
	{
   	 if ($quant!="")
   		{
  	 $quant1=$quant-$un;
 	  if ($quant1<0)
  	 {$quant1=0;}

  	  $req="UPDATE stock SET quant='$quant1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute stock");

        $mars1=$mars+$un;
  	  $req="UPDATE mois1 SET mars='$mars1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");

            $req="SELECT $annee1 FROM annee1 WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

      if ($annee1=="a2005")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2005' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2006")
      		{
        $a2006=$a2006+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2006' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2007")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2007' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2008")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2008' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2009")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2009' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2010")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2010' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
          }
     echo "<center><br><br><h2>opération effectuée</h2></center>";  }
         else{echo "Vous voulez en prelever $un mais il ne vous en reste que $quant, cette operation a donc etait annulée";} }
elseif ($mois1=="04")
{if ($un<=$quant)
	{
   	 if ($quant!="")
   		{
  	 $quant1=$quant-$un;
 	  if ($quant1<0)
  	 {$quant1=0;}

  	  $req="UPDATE stock SET quant='$quant1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute stock");

        $avril1=$avril+$un;
  	  $req="UPDATE mois1 SET mars='$avril1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");

            $req="SELECT $annee1 FROM annee1 WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

      if ($annee1=="a2005")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2005' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2006")
      		{
        $a2006=$a2006+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2006' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2007")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2007' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2008")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2008' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2009")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2009' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2010")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2010' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
          }
     echo "<center><br><br><h2>opération effectuée</h2></center>";  }
       else{echo "Vous voulez en prelever $un mais il ne vous en reste que $quant, cette operation a donc etait annulée";} }
elseif ($mois1=="05")
{if ($un<=$quant)
	{
   	 if ($quant!="")
   		{
  	 $quant1=$quant-$un;
 	  if ($quant1<0)
  	 {$quant1=0;}

  	  $req="UPDATE stock SET quant='$quant1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute stock");

        $mai1=$mai+$un;
  	  $req="UPDATE mois1 SET mars='$mai1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");

            $req="SELECT $annee1 FROM annee1 WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

      if ($annee1=="a2005")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2005' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2006")
      		{
        $a2006=$a2006+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2006' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2007")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2007' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2008")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2008' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2009")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2009' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2010")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2010' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
          }
     echo "<center><br><br><h2>opération effectuée</h2></center>";  }
  else{echo "Vous voulez en prelever $un mais il ne vous en reste que $quant, cette operation a donc etait annulée";} }
elseif ($mois1=="06")
{if ($un<=$quant)
	{
   	 if ($quant!="")
   		{
  	 $quant1=$quant-$un;
 	  if ($quant1<0)
  	 {$quant1=0;}

  	  $req="UPDATE stock SET quant='$quant1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute stock");

        $juin1=$juin+$un;
  	  $req="UPDATE mois1 SET mars='$juin1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");

            $req="SELECT $annee1 FROM annee1 WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

      if ($annee1=="a2005")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2005' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2006")
      		{
        $a2006=$a2006+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2006' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2007")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2007' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2008")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2008' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2009")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2009' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2010")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2010' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
          }
     echo "<center><br><br><h2>opération effectuée</h2></center>";  }
        else{echo "Vous voulez en prelever $un mais il ne vous en reste que $quant, cette operation a donc etait annulée";} }
elseif ($mois1=="07")
{if ($un<=$quant)
	{
   	 if ($quant!="")
   		{
  	 $quant1=$quant-$un;
 	  if ($quant1<0)
  	 {$quant1=0;}

  	  $req="UPDATE stock SET quant='$quant1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute stock");

        $juillet1=$juillet+$un;
  	  $req="UPDATE mois1 SET mars='$juillet1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");

            $req="SELECT $annee1 FROM annee1 WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

      if ($annee1=="a2005")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2005' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2006")
      		{
        $a2006=$a2006+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2006' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2007")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2007' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2008")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2008' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2009")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2009' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2010")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2010' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
          }
     echo "<center><br><br><h2>opération effectuée</h2></center>";  }
        else{echo "Vous voulez en prelever $un mais il ne vous en reste que $quant, cette operation a donc etait annulée";} }
elseif ($mois1=="08")
{if ($un<=$quant)
	{
   	 if ($quant!="")
   		{
  	 $quant1=$quant-$un;
 	  if ($quant1<0)
  	 {$quant1=0;}

  	  $req="UPDATE stock SET quant='$quant1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute stock");

        $aout1=$aout+$un;
  	  $req="UPDATE mois1 SET mars='$aout1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");

            $req="SELECT $annee1 FROM annee1 WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

      if ($annee1=="a2005")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2005' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2006")
      		{
        $a2006=$a2006+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2006' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2007")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2007' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2008")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2008' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2009")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2009' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2010")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2010' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
          }
     echo "<center><br><br><h2>opération effectuée</h2></center>";  }
        else{echo "Vous voulez en prelever $un mais il ne vous en reste que $quant, cette operation a donc etait annulée";} }
elseif ($mois1=="09")
{if ($un<=$quant)
	{
   	 if ($quant!="")
   		{
  	 $quant1=$quant-$un;
 	  if ($quant1<0)
  	 {$quant1=0;}

  	  $req="UPDATE stock SET quant='$quant1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute stock");

        $septembre1=$septembre+$un;
  	  $req="UPDATE mois1 SET mars='$septembre1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");

            $req="SELECT $annee1 FROM annee1 WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

      if ($annee1=="a2005")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2005' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2006")
      		{
        $a2006=$a2006+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2006' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2007")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2007' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2008")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2008' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2009")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2009' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2010")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2010' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
          }
     echo "<center><br><br><h2>opération effectuée</h2></center>";  }
        else{echo "Vous voulez en prelever $un mais il ne vous en reste que $quant, cette operation a donc etait annulée";} }
elseif ($mois1=="10")
{if ($un<=$quant)
	{
   	 if ($quant!="")
   		{
  	 $quant1=$quant-$un;
 	  if ($quant1<0)
  	 {$quant1=0;}

  	  $req="UPDATE stock SET quant='$quant1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute stock");

        $octobre1=$octobre+$un;
  	  $req="UPDATE mois1 SET mars='$octobre1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");

            $req="SELECT $annee1 FROM annee1 WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

      if ($annee1=="a2005")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2005' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2006")
      		{
        $a2006=$a2006+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2006' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2007")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2007' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2008")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2008' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2009")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2009' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2010")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2010' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
          }
     echo "<center><br><br><h2>opération effectuée</h2></center>";  }
       else{echo "Vous voulez en prelever $un mais il ne vous en reste que $quant, cette operation a donc etait annulée";} }
elseif ($mois1=="11")
{if ($un<=$quant)
	{
   	 if ($quant!="")
   		{
  	 $quant1=$quant-$un;
 	  if ($quant1<0)
  	 {$quant1=0;}

  	  $req="UPDATE stock SET quant='$quant1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute stock");

        $novembre1=$novembre+$un;
  	  $req="UPDATE mois1 SET mars='$novembre1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");

            $req="SELECT $annee1 FROM annee1 WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

      if ($annee1=="a2005")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2005' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2006")
      		{
        $a2006=$a2006+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2006' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2007")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2007' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2008")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2008' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2009")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2009' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2010")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2010' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
          }
     echo "<center><br><br><h2>opération effectuée</h2></center>";  }
         else{echo "Vous voulez en prelever $un mais il ne vous en reste que $quant, cette operation a donc etait annulée";} }
elseif ($mois1=="12")
{
if ($un<=$quant)
	{
   	 if ($quant!="")
   		{
  	 $quant1=$quant-$un;
 	  if ($quant1<0)
  	 {$quant1=0;}

  	  $req="UPDATE stock SET quant='$quant1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute stock");

        $decembre1=$decembre+$un;
  	  $req="UPDATE mois1 SET decembre='$decembre1' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");

            $req="SELECT $annee1 FROM annee1 WHERE prod='$prode'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

      if ($annee1=="a2005")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2005' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2006")
      		{
        $a2006=$a2006+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2006' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2007")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2007' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2008")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2008' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2009")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2009' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}
      if ($annee1=="a2010")
      		{
        $a2005=$a2005+$un;
  	  $req="UPDATE annee1 SET $annee1='$a2010' WHERE prod='$prode'" ;
  		 $resultat = mysql_query($req)
  	 	or die ("la requete ne peut etre execute mois");
        	}


          }
     echo "<center><br><br><h2>opération effectuée</h2></center>";  }
          else{echo "<center><b><br>Vous vouliez en prélever $un mais il n'en reste plus que $quant en stock,<br> cette opération a donc été annulée</center></b>";}
}
    }
     else
     {
     echo "il y a une erreur sur le mots de passe";
     }
?>



</body>

</html>