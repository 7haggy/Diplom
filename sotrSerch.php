<html>
    <head>
        <title>Поиск сотрудника</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form class="form-wrapper cf" method="get">
            <input type="text" name="fam" placeholder="Фамилия..." >
            <input type="text" name="name" placeholder="Имя..." >
            <input type="text" name="otch" placeholder="Отчество..." >
            <input type="submit" name="poisk" value="Поиск">
        </form>
    </body>
    <?php require_once('PHP/getPropusk.php'); ?>
    <?php
    if (isset($_GET['poisk'])){
    $name = $_GET['name'];
    $fam = $_GET['fam'];
    $otch = $_GET['otch'];
    if ($name != "" and $name != " ") {
        $query_serch .= 'AND UPPER(`imya`) LIKE "' . strtoupper($name) . '" ';
    }
    if ($fam != "" and $fam != " ") {
        $query_serch .= 'AND UPPER(`fam`) LIKE "' . strtoupper($fam) . '"';
    }
    if ($otch != "" and $otch != " ") {
        $query_serch .= 'AND UPPER(`otch`) LIKE "' . strtoupper($otch) . '"';
    }
    $query = " ";
    $result_set = mysql_query($query);
    if (mysql_num_rows($result_set) > 0){ ?>
    <table id='grid' border='1' cellspacing='0' cellpadding='15' width='90%' height='130'>
        <?php
        while ($row = mysql_fetch_array($result_set)) {
            echo "<tr >
                    <td>$row[0]</td>
                    <td>$row[0]</td>
                    <td>$row[0]</td>
                    <td>$row[0]</td>
                    <td>$row[0]</td>
                    <td>$row[0]</td>
                    <td>$row[0]</td>
                    <td>$row[0]</td>
                    <td>"; ?>
                    <a class="button" href="?id=<?php echo $row['id'] ?>">Редактировать</a>
                  </tr>

        <?php }}
        else {
            echo '<script>alert("Сотрудник не найден!")</script>';
         }
        }
        ?>
</html>