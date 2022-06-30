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

<center>
<h2>Entrer une nouvelle information</h2>
<form  action="\chimie\infotech\trait_mod_info.php"  TARGET="un"  method="POST">
<table  border bgcolor=#CC9900>
 <input type="hidden" name="aff" value="1">
 <tr  bordercolor=#FF9900 align="center">
<td bgcolor=#FFCC99><b>nom du fichier</b></td>
<td bgcolor=#FFCC99><input type="text" name="nom"></td>
</tr>
<tr  bordercolor=#FF9900 align="center">
<td bgcolor=#FFCC99><b>information à afficher</b></td>
<td bgcolor=#FFCC99><b><textarea name="test" cols=60 rows=12 wrap=virtual ></textarea></b></td>
</tr>
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
</center>

</body>

</html>