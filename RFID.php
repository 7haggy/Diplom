<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Пропуск</title>
    <link rel="stylesheet" href="styles.css" >
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
    <div class="page">
        <div>
            <h2>Пропуск</h2>
        </div>
        <div>
            <form class="contact_form" action="" method="get" >
                <select class="dropdown" name="items" id="sel" >
                    <option value="0">Выбрать</option>
                    <option value="1">Пропуск-RFID</option>
                    <option value="2">Пропуск "Штрих-код"</option>
                    <option value="3">Авто-пропуск</option>
                    <option value="4">Временный пропуск</option>
                </select>
                <ul>
                    <li>
                        <label for="nomer">Номер заявки:</label>
                        <input type="number" name="nomer"  placeholder="1" required />
                    </li>
                    <li>
                        <label for="DZayav">Дата заявки:</label>
                        <input type="date" name="DZayav" required />
                    </li>
                    <li>
                        <label for="zayavOt">Заявка от:</label>
                        <input type="text" name="zayavOt" placeholder="Петров А.С." required/>
                    </li>
                    <li>
                        <label for="prin">Принял решение:</label>
                        <input type="text" name="prin" placeholder="Сергеев Ф.А." required/>
                    </li>
                    <li>
                        <label for="Dprin">Дата принятия решения:</label>
                        <input type="date" name="Dprin" required />
                    </li>
                    <li>
                        <label for="Dvidach">Дата выдачи:</label>
                        <input type="date" name="Dvidach" required />
                    </li>
                    <li>
                        <label for="srok">Срок действия до:</label>
                        <input type="date" name="srok" placeholder="30.02.2017" required/>
                    </li>
                    <li>
                        <label for="Dpolych">Дата получения:</label>
                        <input type="date" name="Dpolych" required/>
                    </li>
                    <li>
                        <label for="kemPol">Кем получен:</label>
                        <input type="text" name="kemPol" placeholder="Егоров А.К." required/>
                    </li>
                    <li>
                        <label for="kemPod">Кем подписан:</label>
                        <input type="text" name="kemPod"  placeholder="Воронцов В.В." required />
                    </li>
                    <li>
                        <label for="kemVoz">Кем возвращен:</label>
                        <input type="text" name="kemVoz" placeholder="Голубев С.П." required />
                    </li>
                    <li>
                        <label for="Dvoz">Дата возврата:</label>
                        <input type="date" name="Dvoz" required/>
                    </li>
                    <li id="li" name="invisib">
                        <label for="Vavtop">Вид автопропуска:</label>
                        <input type="text" name="Vavtop" placeholder="Стоянка" />
                    </li>
                    <li id="li" name="invisib">
                        <label for="mesto">Место стоянки:</label>
                        <input type="text" name="mesto" placeholder="ул.Ворошиловская" />
                    </li>
                    <li id="li"  name="invisib">
                        <label for="Vavto">Вид автомобиля:</label>
                        <input type="text" name="Vavto" placeholder="Служебный" />
                    </li>
                    <li>
                        <label for="primech">Примечание:</label>
                        <input type="text" name="primech" required/>
                    </li>
                    <li>
                        <button class="submit" type="submit" name="add">Добавить</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
<?php require_once('PHP/getPropusk.php'); ?>
<script>
    $('#sel').change(function(){
        var text = $("#sel").val();
        if (text==3){
            $('li[name=invisib]').show();
        }
        else{
            $('li[name=invisib]').hide();
        }
    });
</script>
</html>

