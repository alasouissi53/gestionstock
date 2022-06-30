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
<?
		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");
$mois1=date("m");
$annee1="20".date("y");
$anneee="a20".date("y");
$link="SELECT prod FROM mois1" ;
$result = mysql_query($link);
$num_rows = mysql_num_rows($result);
$num=$num_rows+1;


 ?>
<center>  <b></b>
<h2>TABLEAU D'EVOLUTION DES STOCKS   </h2>
<table  border="1" cellspacing="1" cellpadding="1">
  <tr bordercolor="#FF9900" align='center'>
    <th width="100" bgcolor="#FFCC99" scope="col"><b></b></th>
    <th width="100" bgcolor="#FFCC99" scope="col"><b>janvier</b></th>
    <th width="100" bgcolor="#FFCC99" scope="col"><b>fevrier</b></th>
    <th width="100" bgcolor="#FFCC99" scope="col"><b>mars</b></th>
	<th width="100" bgcolor="#FFCC99" scope="col"><b>avril</b></th>
    <th width="100" bgcolor="#FFCC99" scope="col"><b>mai</b></th>
    <th width="100" bgcolor="#FFCC99" scope="col"><b>juin</b></th>
    <th width="100" bgcolor="#FFCC99" scope="col"><b>juillet</b></th>
    <th width="100" bgcolor="#FFCC99" scope="col"><b>aout</b></th>
	<th width="100" bgcolor="#FFCC99" scope="col"><b>septembre</b></th>
    <th width="100" bgcolor="#FFCC99" scope="col"><b>octobre</b></th>
	<th width="100" bgcolor="#FFCC99" scope="col"><b>novembre</b></th>
	<th width="100" bgcolor="#FFCC99" scope="col"><b>decembre</b></th>
  </tr><?
          echo "<br><br><br><h2>nous sommes en $annee1</h2>";

          for ($i=1;$i<$num;$i++)
          {

            $req="SELECT prod, janvier, fevrier, mars, avril, mai, juin, juillet, aout, septembre, octobre, novembre, decembre FROM mois1 WHERE ID='$i'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);

$prod=$data['prod'];$janvier=$data['janvier'];$fevrier=$data['fevrier'];$mars=$data['mars'];$avril=$data['avril'];$mai=$data['mai'];
$juin=$data['juin'];$juillet=$data['juillet'];$aout=$data['aout'];$septembre=$data['septembre'];$octobre=$data['octobre'];$novembre=$data['novembre'];
$decembre=$data['decembre'];

if ($prod!="")
{

 ?> <tr bordercolor="#FF9900" align='center'>
 	<td bgcolor="#FFCC99"><b><? echo "$prod";?></b></td>
 	<td bgcolor="#FFCC99"><b><? echo "$janvier";?></b></td>
 	<td bgcolor="#FFCC99"><b><? echo "$fevrier";?></b></td>
 	<td bgcolor="#FFCC99"><b><? echo "$mars";?></b></td>
 	<td bgcolor="#FFCC99"><b><? echo "$avril";?></b></td>
 	<td bgcolor="#FFCC99"><b><? echo "$mai";?></b></td>
 	<td bgcolor="#FFCC99"><b><? echo "$juin";?></b></td>
 	<td bgcolor="#FFCC99"><b><? echo "$juillet";?></b></td>
 	<td bgcolor="#FFCC99"><b><? echo "$aout";?></b></td>
 	<td bgcolor="#FFCC99"><b><? echo "$septembre";?></b></td>
 	<td bgcolor="#FFCC99"><b><? echo "$octobre";?></b></td>
 	<td bgcolor="#FFCC99"><b><? echo "$novembre";?></b></td>
 	<td bgcolor="#FFCC99"><b><? echo "$decembre";?></b></td>
    <?

        }
           }

 ?>

 </tr>
</table>

<?
      echo "<br><br><h2>En $annee1 vous avez utilisez les quantités suivantes</h2>";





     ?>
<center>
<table  border="1" cellspacing="1" cellpadding="1">
  <tr bordercolor="#FF9900" align='center'>
    <th width="100" bgcolor="#FFCC99" scope="col"><b>produit</b></th>
    <th width="100" bgcolor="#FFCC99" scope="col"><b>quantité</b></th>
  </tr>


  <?
  if ($annee1==2006)
  {
          for ($i=1;$i<$num;$i++)
          {
            $req="SELECT a2006 FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

            $req="SELECT prod FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);
            ?>
        <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prod";?></th>
    <td bgcolor="#FFCC99"><? echo "$a2006";?></td>
     </tr>


  <?
  }
  }
    if ($annee1==2007)
  {
          for ($i=1;$i<$num;$i++)
          {
            $req="SELECT a2007 FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

            $req="SELECT prod FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);
            ?>
        <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prod";?></th>
    <td bgcolor="#FFCC99"><? echo "$a2007";?></td>
     </tr>


  <?
  }
  }
    if ($annee1==2008)
  {
          for ($i=1;$i<$num;$i++)
          {
            $req="SELECT a2008 FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

            $req="SELECT prod FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);
            ?>
        <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prod";?></th>
    <td bgcolor="#FFCC99"><? echo "$a2008";?></td>
     </tr>


  <?
  }
  }
    if ($annee1==2009)
  {
          for ($i=1;$i<$num;$i++)
          {
            $req="SELECT a2009 FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

            $req="SELECT prod FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);
            ?>
        <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prod";?></th>
    <td bgcolor="#FFCC99"><? echo "$a2009";?></td>
     </tr>


  <?
  }
  }
    if ($annee1==2010)
  {
          for ($i=1;$i<$num;$i++)
          {
            $req="SELECT a2010 FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

            $req="SELECT prod FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);
            ?>
        <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prod";?></th>
    <td bgcolor="#FFCC99"><? echo "$a2010";?></td>
     </tr>


  <?
  }
  }
    if ($annee1==2011)
  {
          for ($i=1;$i<$num;$i++)
          {
            $req="SELECT a2011 FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

            $req="SELECT prod FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);
            ?>
        <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prod";?></th>
    <td bgcolor="#FFCC99"><? echo "$a2011";?></td>
     </tr>


  <?
  }
  }
    if ($annee1==2012)
  {
          for ($i=1;$i<$num;$i++)
          {
            $req="SELECT a2012 FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);

            $req="SELECT prod FROM annee1 WHERE ID='$i'" ;
  	  		$resultat = mysql_query($req)
   	  			or die ("la requete ne peut etre execute1");
	 		$ligne = mysql_fetch_array($resultat,MYSQL_ASSOC);
	 		extract($ligne);
            ?>
        <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prod";?></th>
    <td bgcolor="#FFCC99"><? echo "$a2012";?></td>
     </tr>


  <?
  }
  }
  ?>

  </table>
  <br><br>
pour vour les quantités utilisées classées par année
<form  action="evolstockan.php"  TARGET="un" method="post">
<select name="ans">
<option value="2005">2005
<option value="2006">2006
<option value="2007">2007
<option value="2008">2008
<option value="2009">2009
<option value="2010">2010
</select>
<input type="submit" value="VALIDER"></form>
 </center>

</body>
</html>