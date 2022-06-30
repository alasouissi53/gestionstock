<html>

<head>
  <title></title>
          <style type="text/css">
<!--
body {
	background-color: #CCCC99;
}
-->
</style>
</head>

<body>

<?
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
if ($pass==$passe and $pass!="" and $logs!="" and $logs=="admin")
{

$nom=$_POST['info3'];

 $req="SELECT ID,info1 FROM info_tech WHERE info3='$nom'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);
            $ID=$data['ID'];$lien=$data['info1'];

            unlink ("$lien");

 	$req="UPDATE info_tech SET info1='',info2='',info3='' WHERE ID='$ID'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");

 include("info_tech.php");

}
else
{
echo "il y a une erreur dans le mots de passe";
}
?>

</body>

</html>