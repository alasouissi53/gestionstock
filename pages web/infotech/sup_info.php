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
<br><br>
<center>
<H2> Selectionner l'information à supprimer </H2>


<?
		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");

        $rq="SELECT DISTINCT info3 FROM info_tech ORDER BY info3";
        $result=mysql_query($rq)
   			or die ("requete impossible");

echo "<form action='trait_sup_info.php' method='POST'><select name='info3'>\n";

while ($ligne=mysql_fetch_array($result))
	{
    extract($ligne);
    if ($info3<>"")

   		 echo "<option  value='$info3'>$info3\n";

    }
    echo "</select>";
        ?> <br> <br>
    <table  border="1" cellspacing="1" cellpadding="1">
  <tr bordercolor="#FF9900" align='center'>
      <th width="134" bgcolor="#FFCC99" scope="col"><b>login</b></th>
      <td bgcolor="#FFCC99"><?echo "<input type='text' name='log'>";?></td>
  </tr>
  <tr bordercolor="#FF9900" align='center'>
      <th width="116" bgcolor="#FFCC99" scope="col"><b>mots de passe</b></th>
      <td bgcolor="#FFCC99"><?echo "<input type='password' name='pass'>";?></td>
  </tr>
</table> <br>
<?

    echo "<input type='submit'".
    	 "value=\"Valider votre selection\"></form>";

?>
 </center>
</body>

</html>