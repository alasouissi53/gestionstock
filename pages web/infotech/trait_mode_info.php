<html>
<head>
  <title>plan de cablage coffret flex</title>
    <style type="text/css">
<!--
body {
	background-color: #CCCC99;
}
-->
</style>
</head>
  	  <body menubar=0, scrollbars=0,toolbar=0, resizable=0, topmargin=0>
<br><br><br><br><br>
<DIV ALIGN="center">

<H2> Selectionner l'information à modifier </H2>

<?
		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");

        $rq="SELECT DISTINCT info3 FROM info_tech ORDER BY info3";
        $result=mysql_query($rq)
   			or die ("requete impossible");

echo "<form action='trait_mode_infos.php' method='POST'><select name='info3'>\n";

while ($ligne=mysql_fetch_array($result))
	{
    extract($ligne);
    if ($info3<>"")

   		 echo "<option  value='$info3'>$info3\n";

    }
    echo "</select>";
    echo "<input type='submit'".
    	 "value=\"choisissez un commentaire\"></form>";

?>

</body>
</html>