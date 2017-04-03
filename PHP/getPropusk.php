<?php require_once('connect.php'); ?>
<?php
if(isset($_GET['add'])){
    $value  = $_GET["items"];
    $nomer = $_GET['nomer'];
    $DZayav = $_GET['DZayav'];
    $zayavOt = $_GET['zayavOt'];
    $prin = $_GET['prin'];
    $Dprin = $_GET['Dprin'];
    $Dvidach = $_GET['Dvidach'];
    $srok = $_GET['srok'];
    $Dpolych = $_GET['Dpolych'];
    $kemPol = $_GET['kemPol'];
    $kemPod = $_GET['kemPod'];
    $kemVoz = $_GET['kemVoz'];
    $Dvoz = $_GET['Dvoz'];
    $Vavtop = $_GET['Vavtop'];
    $mesto = $_GET['mesto'];
    $Vavto = $_GET['Vavto'];
    $prim = $_GET['primech'];
//    if ($Vavtop ==""){
//        $Vavtop = "x";     Проверка на добавление данных об автопропуске.
//    }
// Добавить id сотрудника
    if ($value == 0){
        echo "<script>alert(\"Вы не выбрали вид пропуска.\");</script>";
    }

    mysql_query('SET NAMES utf8');
    $insert = "INSERT INTO propuski (n_zayav,d_zayav,zayav_ot,prin_resh,d_pr_resh,d_vidach,srok,d_polych,kem_pol,kem_pod,kem_v,data_v,vid_avtop,mesto_st,vid_avto,prim,id_vid) 
               VALUES ('$nomer','$DZayav','$zayavOt','$prin','$Dprin','$Dvidach','$srok','$Dpolych','$kemPol','$kemPod','$kemVoz','$Dvoz','$Vavtop','$mesto','$Vavto','$prim','$value')";
    $sql=mysql_query($insert);
    if ($sql) {
        echo '<script>alert("Пропуск успешно добавлен!")</script>';
    }
    else {
        echo '<script>alert("Ошибка программы!")</script>';
    }
        MYSQL_CLOSE();

}

?>
