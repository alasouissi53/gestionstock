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
$i=1;
		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");

$link="SELECT ID FROM info_tech" ;
$result = mysql_query($link);
$num_rows = mysql_num_rows($result);
$num=$num_rows+1;
?>


<center>

<table  border="0" cellspacing="1" cellpadding="1">
<?
for ($i=1;$i<$num;$i++)
{

            $req="SELECT info1,info2,info3 FROM info_tech WHERE ID='$i'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);
            $info1=$data['info1'];$info2=$data['info2'];$info3=$data['info3'];

            if ($info2==1)
            {
?>
  <tr bordercolor="#FF9900" align='center'>
    <th width="800" bgcolor="#FFCC99" scope="col"><b>
    <?
     echo "<br>";
    $file = fopen("$info1","r");

	while(!feof($file))
	{
	$buffer=fgets($file,4096);
    echo $buffer;
    echo "<br>";
	}
	fclose($file);
	?>
    <br>
   </b></th>
  </tr>
    <tr >
      <th ><b>
          <br>
   </b></th>
      </tr>
<?
}
}
?> </table><br>
<form action='mod_info.php'>
modifier les informations affichées
<input type='submit' value='valider'>

</body>

</html>