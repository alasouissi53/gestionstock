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

		$connexion = mysql_connect("localhost","root","")
   			or die ("probleme de connection");
		$db = mysql_select_db("chimie",$connexion)
  			or die ("probleme de selection de base de donnée");
$mois1=date("m");
$annee1="20".date("y");
$anneee="a20".date("y");
$link="SELECT prod FROM mois1" ;
$result = mysql_query($link);
$num_rows = mysql_num_rows($result);
$num=$num_rows+1;
$ans=$_POST['ans'];

     ?>
 <center>
<table  border="1" cellspacing="1" cellpadding="1">
  <tr bordercolor="#FF9900" align='center'>
    <th width="100" bgcolor="#FFCC99" scope="col"><b>produit</b></th>
    <th width="100" bgcolor="#FFCC99" scope="col"><b>quantité</b></th>
  </tr>
  <?

if ($ans=="2005")
{
      echo "<br><br><h2>En 2005 vous avez utilisez les quantités suivantes</h2>";

          for ($i=1;$i<$num;$i++)
          {
            $req="SELECT a2005, prod FROM annee1 WHERE ID='$i'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);

             $prod=$data['prod'];
			 $a2005=$data['a2005'];
            ?>
        <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prod";?></th>
    <td bgcolor="#FFCC99"><? echo "$a2005";?></td>
     </tr>

  <?
  }
    }
if ($ans=="2006")
{
        echo "<br><br><h2>En 2006 vous avez utilisez les quantités suivantes</h2>";

          for ($i=1;$i<$num;$i++)
          {
            $req="SELECT a2006, prod FROM annee1 WHERE ID='$i'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);

             $prod=$data['prod'];
			 $a2006=$data['a2006'];
            ?>
        <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prod";?></th>
    <td bgcolor="#FFCC99"><? echo "$a2006";?></td>
     </tr>

  <?
  }

    }
if ($ans=="2007")
{
        echo "<br><br><h2>En 2007 vous avez utilisez les quantités suivantes</h2>";

          for ($i=1;$i<$num;$i++)
          {
            $req="SELECT a2007, prod FROM annee1 WHERE ID='$i'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);

             $prod=$data['prod'];
			 $a2007=$data['a2007'];
            ?>
        <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prod";?></th>
    <td bgcolor="#FFCC99"><? echo "$a2007";?></td>
     </tr>

  <?
  }

    }
if ($ans=="2008")
{
        echo "<br><br><h2>En 2008 vous avez utilisez les quantités suivantes</h2>";

          for ($i=1;$i<$num;$i++)
          {
            $req="SELECT a2008, prod FROM annee1 WHERE ID='$i'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);

             $prod=$data['prod'];
			 $a2008=$data['a2008'];
            ?>
        <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prod";?></th>
    <td bgcolor="#FFCC99"><? echo "$a2008";?></td>
     </tr>

  <?
  }

    }
if ($ans=="2009")
{
        echo "<br><br><h2>En 2009 vous avez utilisez les quantités suivantes</h2>";

          for ($i=1;$i<$num;$i++)
          {
            $req="SELECT a2009, prod FROM annee1 WHERE ID='$i'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);

             $prod=$data['prod'];
			 $a2009=$data['a2009'];
            ?>
        <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prod";?></th>
    <td bgcolor="#FFCC99"><? echo "$a2009";?></td>
     </tr>

  <?
  }
    }
if ($ans=="2010")
{
        echo "<br><br><h2>En 2010 vous avez utilisez les quantités suivantes</h2>";

          for ($i=1;$i<$num;$i++)
          {
            $req="SELECT a2010, prod FROM annee1 WHERE ID='$i'" ;
			$query = mysql_query($req);
			$data = mysql_fetch_array($query, MYSQL_ASSOC);

             $prod=$data['prod'];
			 $a2010=$data['a2010'];
            ?>
        <tr bordercolor="#FF9900" align='center'>
    <th bgcolor="#FFCC99" scope="row"><? echo "$prod";?></th>
    <td bgcolor="#FFCC99"><? echo "$a2010";?></td>
     </tr>

  <?
  }
  }
  ?>

   </table>
 </center>

</body>
</html>