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
<center><br>
<h2>Entrer la quantité que vous avez prelevée dans le stock</h2>
<?
		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");

$prode=$_POST['prod'];

 ?>
 <form  action="traitprel.php" method="post">

<table  border="1" cellspacing="1" cellpadding="1">
  <tr bordercolor="#FF9900" align='center'>
    <th width="134" bgcolor="#FFCC99" scope="col"><b>article</b></th>
    <th width="116" bgcolor="#FFCC99" scope="col"><b>quantit&eacute;</b></th>

  </tr>

   <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prode";?></th>
    <td bgcolor="#FFCC99"><?
     echo "<input type='text' name='un'>";?></td>
  </tr>
</table> <br>
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
<?echo "<input type='hidden' name='prod' value='$prode'>";?>
<input type="submit" value="valider">
</form>
 </center>
</body>
</html>