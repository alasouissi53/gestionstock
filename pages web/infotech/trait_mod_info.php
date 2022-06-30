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
if ($pass==$passe and $pass!="" and $logs!="" and $logs=="admin")
{

$link="SELECT ID FROM info_tech" ;
$result = mysql_query($link);
$num_rows = mysql_num_rows($result);
$num=$num_rows+1;

$mois=date("m");$jours=date("d");
$test=$_POST['test'];
$nom=$_POST['nom'];
$aff=$_POST['aff'];
$file = fopen("C:/Program Files/EasyPHP1-7/www//chimie/infotech/doc/"."$nom"."_$mois"."_$jours".".txt","w");
fputs($file,"$test");
fclose($file);

$lien="C:/Program Files/EasyPHP1-7/www//chimie/infotech/doc/"."$nom"."_$mois"."_$jours".".txt";
$a=0;

for ($i=1;$i<$num;$i++)
{
$req = "SELECT info1 FROM info_tech WHERE ID='$i'";
$query = mysql_query($req) or die ("il y a un probleme avec le login");
$data = mysql_fetch_array($query, MYSQL_ASSOC);
 $vide=$data['info1'];

 if ($vide=="")
 {
  	$req="UPDATE info_tech SET info1='$lien',info3='$nom',info2='1' WHERE ID='$i'" ;
  	$resultat = mysql_query($req)
   	or die ("la requete ne peut etre execute flex");
    $a=1;
    $i=$num;
 }
}

if ($a==0)
{
                 $req="INSERT INTO info_tech (ID,info1,info2,info3,info4)
					VALUES ('$num','$lien','1','$nom','')";
				 $resultat = mysql_query($req)
  			    		or die ("la requete ne peut etre execute3");
}
 include("info_tech.php");
}
else
{
echo "il y a une erreur sur le nom ou le mots de passe";
}
?>

</body>

</html>