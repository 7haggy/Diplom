<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Сотрудник</title>
	<link rel="stylesheet" href="styles.css" >
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<?php require_once('PHP/connect.php'); ?>
<body>
    <div class="page">
        <form class="contact_form" action="" method="get">
            <ul>
                <li>
                     <h2>Сотрудник</h2>
                </li>
                <li>
                    <label for="fam">Фамилия:</label>
                    <input type="text" name="fam"  placeholder="Петров" required />
                </li>
                <li>
                    <label for="name">Имя:</label>
                    <input type="text" name="name" placeholder="Сергей" required />
                </li>
                <li>
                    <label for="otch">Отчество:</label>
                    <input type="text" name="otch" placeholder="Васильевич" required/>
                </li>
                <li>
                    <label for="date">Дата рождения:</label>
                    <input type="date" name="date" required/>
                </li>
                <li >
                    <label for="organ">Название организации:</label>
                    <select class="sotrsel" id="sel" name="aaa" />
                        <option value="no" >Выбрать</option>
                        <option value="dob" >Добавить</option>
                        <?php
                            mysql_query('SET NAMES utf8');
                            $select = mysql_query("SELECT nazv FROM organ ORDER BY nazv ");
                            for ($i=0; $i<mysql_num_rows($select); $i++) {
                                $sql = mysql_fetch_array($select);
                                echo "<option value=$sql[id]>$sql[nazv]</option>";
                            }
                            ?>
                    </select>
                    <input type="text" id="li" name="org_inp" placeholder="Альфа" />
                </li>
                <li>
                    <label for="podrazd">Название подразделения:</label>
                    <select class="sotrsel" id="podrazd" />
                        <option value="0" >Выбрать</option>
                        <option value="app" >Добавить</option>
                        <?php
                            mysql_query('SET NAMES utf8');
                            $select = mysql_query("SELECT nazv_podrazd FROM podrazdelenie ORDER BY nazv_podrazd ");
                            for ($i=0; $i<mysql_num_rows($select); $i++) {
                                $sql = mysql_fetch_array($select);
                                echo "<option value=$sql[id]>$sql[nazv_podrazd]</option>";
                            }
                            ?>
                        </select>
                        <input type="text" id="li" name="pod_inp" placeholder="Гамма" />
                </li>
                <li>
                    <label for="dolshn">Должность:</label>
                    <input type="text" name="dolshn" placeholder="Охранник" required/>
                </li>
                <li>
                    <label for="nomer">Номер назначения:</label>
                    <input type="number" name="nomer" placeholder="1"required/>
                </li>
                <li>
                    <label for="naznach">Дата назначения:</label>
                    <input type="date" name="naznach" required/>
                </li>
                <li>
                    <label for="podp">Подписание контракта:</label>
                    <input type="date" name="podp" required/>
                </li>
                <li>
                    <label for="nach">Начало действия:</label>
                    <input type="date" name="nach" required/>
                </li>
                <li>
                    <label for="okonch">Окончание действия:</label>
                    <input type="date" name="okonch" required/>
                </li>
                <li>
                    <label for="nom_yvoln">Номер увольнения:</label>
                    <input type="number" name="nom_yvoln" placeholder="1"/>
                </li>
                <li>
                    <label for="data_yvoln">Дата увольнения:</label>
                    <input type="date" name="data_yvoln" />
                </li>
                <li>
                    <button class="submit" type="submit" name="add">Добавить</button>
                </li>
            </ul>
        </form>
    </div>
</body>
<script>
    $('#sel').change(function(){
        var text = $("#sel").val();
        if (text=='dob'){
            $('input[name=org_inp]').show();
        }
        else{
            $('input[name=org_inp]').hide();
        }
    });
    $('#podrazd').change(function(){
        var text = $("#podrazd").val();
        if (text=='app'){
            $('input[name=pod_inp]').show();
        }
        else{
            $('input[name=pod_inp]').hide();
        }
    });
</script>
<?php //require_once('PHP/getPeople.php'); ?>
</html>