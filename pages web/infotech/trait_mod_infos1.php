<html>

<head>
  <title></title>
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
if ($pass==$passe and $pass!=""  and $logs=="admin")
{



$text=$_POST['text'];
$nom=$_POST['nom'];
$act=$_POST['act'];
$nom1=$_POST['nom1'];


            $req="SELECT info1 FROM info_tech WHERE info3='$nom1'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);
            $lien=$data['info1'];



$file = fopen("$lien","w");
fputs($file,"$text");
fclose($file);

 	$req="UPDATE info_tech SET info2='$act',info3='$nom' WHERE info1='$lien'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
 include("info_tech.php");
 }
?>

</body>

</html>