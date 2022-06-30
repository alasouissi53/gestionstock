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
<?
$a=0;
		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");

 $link="SELECT prod FROM mois1" ;
$result = mysql_query($link);
$num_rows = mysql_num_rows($result);
$num=$num_rows+1;

          for ($i=1;$i<$num;$i++)
          {

            $req="SELECT prod, quant, seuil FROM stock WHERE ID='$i'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);

$prod=$data['prod'];
$quant=$data['quant'];
$seuil=$data['seuil'];

		if ($quant<$seuil)
		{
        echo "il faut commander du <b><u>$prod</u></b> car il n'en reste plus que <b><u>$quant</u></b> en stock<br>";
        $a++;
      	}

       }

 		if ($a==0)
		{
        echo "il n'y à rien à commander<br>";
      	}
 ?>
 </center>

</body>
</html>