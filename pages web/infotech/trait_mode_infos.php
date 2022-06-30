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
<?php
$info3=$_POST['info3'];

		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");

            $req="SELECT info1,info2 FROM info_tech WHERE info3='$info3'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);
            $info1=$data['info1'];$info2=$data['info2'];

           if ($info2==1)
           {$aff="visible";}
           else {$aff="invisible";}

?>
<center>

<form  action="\chimie\infotech\trait_mod_infos1.php"  TARGET="un"  method="POST">
<input type="hidden" name="nom1" value=<? echo "$info3";?>>
<table  border bgcolor=#CC9900>
 <input type="hidden" name="aff" value="1">
 <tr  bordercolor=#FF9900 align="center">
<td bgcolor=#FFCC99><b>nom du fichier</b></td>
<td bgcolor=#FFCC99><input type="text" name="nom" value=<? echo "$info3";?>></td>
</tr>
<tr  bordercolor=#FF9900 align="center">
<td bgcolor=#FFCC99><b>information à afficher</b></td>
<td bgcolor=#FFCC99><b><textarea name="text" cols=50 rows=10 wrap=virtual ><?
    $file = fopen("$info1","r");

	while(!feof($file))
	{
	$buffer=fgets($file,4096);
    echo $buffer;
	}
	fclose($file);
	?></textarea></b></td>
</tr>
<tr>
<td bgcolor=#FFCC99><b>activation du fichier</b></td>
<td bgcolor=#FFCC99>
<select name="act" value=<? echo "$info2";?>>
                     <option value='1'>Activé
                     <option value='0'>Non activé

    	    		 </select>
                   état : <?  echo "$aff";?>
                     </td>
</table> <br><br>
<table  border="1" cellspacing="1" cellpadding="1">
  <tr bordercolor="#FF9900" align='center'>
      <th width="134" bgcolor="#FFCC99" scope="col"><b>login</b></th>
      <td bgcolor="#FFCC99"><?echo "<input type='text' name='log'>";?></td>
  </tr>
  <tr bordercolor="#FF9900" align='center'>
      <th width="116" bgcolor="#FFCC99" scope="col"><b>mots de passe</b></th>
      <td bgcolor="#FFCC99"><?echo "<input type='password' name='pass'>";?></td>
  </tr>
</table>   <br><br>
<input type="submit" value="valider">
 </form>

</body>

</html>