<?php require_once('connect.php'); ?>
<?php
if (isset($_GET['add'])){
$fam = $_GET['fam'];
$name = $_GET['name'];
$otch = $_GET['otch'];
$date = $_GET['date'];
$organ = $_GET['organ'];
$podrazd = $_GET['podrazd'];
$dolshn = $_GET['dolshn'];
$nomer = $_GET['nomer'];
$naznach = $_GET['naznach'];
$podp = $_GET['podp'];
$nach = $_GET['nach'];
$okonch = $_GET['okonch'];
$nom_yvoln = $_GET['nom_yvoln'];
$data_yvoln = $_GET['data_yvoln'];

mysql_query('SET NAMES utf8');

$organiz = "INSERT INTO organ (nazv)
            VALUES ('$organ')";
$sql=mysql_query($organiz);
$id=mysql_insert_id();

$podrazdelenie = "INSERT INTO podrazdelenie (nazv_podrazd,idO)
                  VALUES ('$podrazd,$id')";
$sql=mysql_query($podrazdelenie);

$people = "INSERT INTO people (fam,imya,otch,data_r,idP) 
           VALUES ('$fam','$name','$otch','$date','$id')";
$sql=mysql_query($people);

$dolshnost = "INSERT INTO dolshnost (nazv_dol,nom_nazn,data_nazn,data_podp_kont,nachalo_deistv,data_okonch,nom_yvoln,data_yvol,idS)
           VALUES ('$dolshn','$nomer','$naznach','$podp','$nach','$okonch','$nom_yvoln','$data_yvoln','$id')";
$sql=mysql_query($dolshnost);

if ($sql)
{echo '<script>alert("Сотрудник успешно добавлен!")</script>';}
else
{echo '<script>alert("Ошибка!")</script>';}
MYSQL_CLOSE();
}
?>