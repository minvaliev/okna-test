<?php

if (isset($_COOKIE['utm_source'])) {
    $utm_source = $_COOKIE['utm_source'];
    $utm_medium = $_COOKIE['utm_medium'];
    $utm_content = $_COOKIE['utm_content'];
    $utm_campaign = $_COOKIE['utm_campaign'];
    $utm_term = $_COOKIE['utm_term'];
    $referrer = $_SERVER['HTTP_REFERER'];
}
else {
    setcookie('utm_source', $_GET['utm_source'], time()+10800);
    setcookie('utm_medium', $_GET['utm_medium'], time()+10800);
    setcookie('utm_content', $_GET['utm_content'], time()+10800);
    setcookie('utm_campaign', $_GET['utm_campaign'], time()+10800);
    setcookie('utm_term', $_GET['utm_term'], time()+10800);
    setcookie('referrer', $_SERVER['HTTP_REFERER'], time()+10800);
}

if (isset($_POST['submit_1'])) {
    $myarray['utm']['utm_source'] = $utm_source;
    $myarray['utm']['utm_medium'] = $utm_medium;
    $myarray['utm']['utm_content'] = $utm_content;
    $myarray['utm']['utm_campaign'] = $utm_campaign;
    $myarray['utm']['utm_term'] = $utm_term;
    $myarray['utm']['referrer'] = $referrer;
    $myarray['contact']['name'] = $_POST['name_1'];
    $myarray['contact']['phone'] = $_POST['phone_1'];
    $myarray['contact']['email'] = $_POST['email_1'];
    $myarray['fields']['height'] = $_POST['height_1'];
    $myarray['fields']['width'] = $_POST['width_1'];
    $myarray['fields']['profile'] = $_POST['profile_1'];
    $myarray['fields']['number'] = $_POST['number_1'];
    $myarray['fields']['mechanism'] = $_POST['mechanism_1'];
    $myarray['form']['id'] = $_POST['id_1'];
    $myarray['form']['page'] = 'http://' . $_SERVER['SERVER_NAME'];;
    $myjson = json_encode($myarray);

    $options = ['http' => [
        'method' => 'POST',
        'header' => 'Content-type:application/x-www-form-urlencoded',
        'content' => http_build_query(['json' => $myjson])
    ]];
    $context = stream_context_create($options);
    $response = file_get_contents('https://webhook.site/83c865c0-b099-4140-824e-4eea1c9fdd2d', false, $context);

}

if (isset($_POST['submit_2'])) {
    $myarray['utm']['utm_source'] = $utm_source;
    $myarray['utm']['utm_medium'] = $utm_medium;
    $myarray['utm']['utm_content'] = $utm_content;
    $myarray['utm']['utm_campaign'] = $utm_campaign;
    $myarray['utm']['utm_term'] = $utm_term;
    $myarray['utm']['referrer'] = $referrer;
    $myarray['contact']['name'] = $_POST['name_2'];
    $myarray['contact']['phone'] = $_POST['phone_2'];
    $myarray['contact']['email'] = $_POST['email_2'];
    $myarray['fields']['height'] = $_POST['height_2'];
    $myarray['fields']['width'] = $_POST['width_2'];
    $myarray['fields']['profile'] = $_POST['profile_2'];
    $myarray['fields']['number'] = $_POST['number_2'];
    $myarray['fields']['mechanism'] = $_POST['mechanism_2'];
    $myarray['form']['id'] = $_POST['id_2'];
    $myarray['form']['page'] = 'http://' . $_SERVER['SERVER_NAME'];;
    $myjson = json_encode($myarray);

    $options = ['http' => [
        'method' => 'POST',
        'header' => 'Content-type:application/x-www-form-urlencoded',
        'content' => http_build_query(['json' => $myjson])
    ]];
    $context = stream_context_create($options);
    $response = file_get_contents('https://webhook.site/83c865c0-b099-4140-824e-4eea1c9fdd2d', false, $context);

}

if (isset($_POST['submit_3'])) {
    $myarray['utm']['utm_source'] = $utm_source;
    $myarray['utm']['utm_medium'] = $utm_medium;
    $myarray['utm']['utm_content'] = $utm_content;
    $myarray['utm']['utm_campaign'] = $utm_campaign;
    $myarray['utm']['utm_term'] = $utm_term;
    $myarray['utm']['referrer'] = $referrer;
    $myarray['contact']['name'] = $_POST['name_3'];
    $myarray['contact']['phone'] = $_POST['phone_3'];
    $myarray['contact']['email'] = $_POST['email_3'];
    $myarray['fields']['height'] = $_POST['height_3'];
    $myarray['fields']['width'] = $_POST['width_3'];
    $myarray['fields']['profile'] = $_POST['profile_3'];
    $myarray['fields']['number'] = $_POST['number_3'];
    $myarray['fields']['mechanism'] = $_POST['mechanism_3'];
    $myarray['form']['id'] = $_POST['id_3'];
    $myarray['form']['page'] = 'http://' . $_SERVER['SERVER_NAME'];;
    $myjson = json_encode($myarray);

    $options = ['http' => [
        'method' => 'POST',
        'header' => 'Content-type:application/x-www-form-urlencoded',
        'content' => http_build_query(['json' => $myjson])
    ]];
    $context = stream_context_create($options);
    $response = file_get_contents('https://webhook.site/83c865c0-b099-4140-824e-4eea1c9fdd2d', false, $context);

}

if (isset($_POST['submit_mod'])) {
    $myarray['utm']['utm_source'] = $utm_source;
    $myarray['utm']['utm_medium'] = $utm_medium;
    $myarray['utm']['utm_content'] = $utm_content;
    $myarray['utm']['utm_campaign'] = $utm_campaign;
    $myarray['utm']['utm_term'] = $utm_term;
    $myarray['utm']['referrer'] = $referrer;
    $myarray['contact']['name'] = $_POST['name_mod'];
    $myarray['contact']['phone'] = $_POST['phone_mod'];
    $myarray['contact']['email'] = $_POST['email_mod'];
    $myarray['form']['page'] = 'http://' . $_SERVER['SERVER_NAME'];;
    $myjson = json_encode($myarray);

    $options = ['http' => [
        'method' => 'POST',
        'header' => 'Content-type:application/x-www-form-urlencoded',
        'content' => http_build_query(['json' => $myjson])
    ]];
    $context = stream_context_create($options);
    $response = file_get_contents('https://webhook.site/83c865c0-b099-4140-824e-4eea1c9fdd2d', false, $context);

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <title>Демонстрационный сайт по внедрению CRM-системы</title>
    <link type="text/css" href="./css/reset.css" rel="stylesheet">
    <link type="text/css" href="./css/common.css" rel="stylesheet">
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</head>
<body>
<div id="nav" class="landingMenu">
    <div class="wrap">
        <ul>
            <li><a href="#header">Главная</a></li>
            <li><a href="#calc">Рассчитать установку</a></li>
        </ul>
        <div class="clr"></div>
    </div>
</div>
<div id="header">
    <div class="wrap">
        <div class="top_header">
            <div class="logo">
                <img src="images/logo.png" alt="" title="">
            </div>
            <div class="mail_h">
                info@crmokna.ru
            </div>
            <div class="phone_h">
                <a class="call_me" data-form="call_me">Заказать обратный звонок</a>
            </div>
            <div class="clr"></div>
        </div>
    </div>
</div>
<div id="benefits">
    <div class="wrap">
        <ul>
            <li>
                <img src="images/ben1.png" alt="" title="" class="wow pulse" data-wow-duration="1500ms"><br>
                <div class="left">
                    12
                </div>
                <div class="right">
                    лет на профессиональном рынке производства пластиковых окон
                </div>
                <div class="clr"></div>
            </li>
            <li>
                <img src="images/ben2.png" alt="" title="" class="wow pulse" data-wow-duration="1200ms"><br>
                <div class="left">
                    9387
                </div>
                <div class="right">
                    оконных конструкций смонтировано
                </div>
                <div class="clr"></div>
            </li>
            <li>
                <img src="images/ben3.png" alt="" title="" class="wow pulse" data-wow-duration="1500ms"><br>
                <div class="left">
                    33
                </div>
                <div class="right">
                    высоко-квалифицированных специалиста в штате
                </div>
                <div class="clr"></div>
            </li>
        </ul>
        <div class="clr"></div>
    </div>
</div>
<div id="calc">
    <div class="wrap">
        <h2>Рассчитать установку пластиковых окон</h2>
        <div class="ben_c">
            <ul>
                <li>
                    <div class="left">
                        <img src="images/ben_c1.png" alt="" title="" class="wow pulse" data-wow-duration="1500ms">
                    </div>
                    <div class="right">
                        <p>по ценам <strong>ниже</strong> среднерыночных <strong>на 10-12%</strong></p>
                    </div>
                    <div class="clr"></div>
                </li>
                <li>
                    <div class="left">
                        <img src="images/ben_c2.png" alt="" title="" class="wow pulse" data-wow-duration="1600ms">
                    </div>
                    <div class="right">
                        <p>с заводской гарантией <strong><br>3 года</strong></p>
                    </div>
                    <div class="clr"></div>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="calc_f">
            <ul>
                <li>
                    <h3><strong>Двухстворчатое<br> окно</strong></h3>
                    <h4><strong>от 4 200</strong><img src="images/rub_w.png" alt="" title=""></h4>
                    <img src="images/calc_f1.png" alt="" title="">
                    <form method="POST">
                        <input type="hidden" name="form_id_1" value="calc_1"/>
                        <input type="hidden" name="catchpoint_1" value="Двухстворчатое окно">
                        <label>Высота, мм</label>
                        <input type="text" name="height_1" placeholder="Введите значение"><br>
                        <label>Ширина, мм</label>
                        <input type="text" name="width_1" placeholder="Введите значение"><br>
                        <label>Профиль</label>
                        <select name="profile_1">
                            <option disabled selected>Выберите из списка</option>
                            <option>REHAU</option>
                            <option>VEKA</option>
                            <option>KBE</option>
                            <option>KRAUSS</option>
                            <option>SALAMANDER</option>
                        </select><br>
                        <label>Кол-во камер</label>
                        <select name="number_1">
                            <option disabled selected>Выберите из списка</option>
                            <option>2 камеры</option>
                            <option>3 камеры</option>
                        </select><br>
                        <label>Механизм</label>
                        <select name="mechanism_1">
                            <option disabled selected>Выберите из списка</option>
                            <option>Поворотный</option>
                            <option>Поворотно-откидной</option>
                            <option>Раздвижной</option>
                        </select><br>
                        <a class="submit_calc" data-form="calc_1"></a>
                        <div class="form" id="calc_1">
                            <input type="hidden" name="id_1" value="calc_1"/>
                            <a class="close"></a>
                            <p class="medium">Введите Ваше имя*</p>
                            <input type="text" name="name_1" class="inp" placeholder="Иван Иванов*"/>
                            <p class="medium">Введите Ваш телефон*</p>
                            <input type="text" name="phone_1" class="inp"
                                   placeholder="+7 (123) 456-78-90*"/>
                            <p class="medium">Введите Ваш Email*</p>
                            <input type="text" name="email_1" class="inp" placeholder="example@email.com*"/>
                            <input type="submit" value="" name="submit_1" class="button"/>
                            <span>Мы заботимся о конфиденциальности<br>Ваших данных</span>
                        </div>
                    </form>
                </li>
                <li>
                    <h3><strong>трехстворчатое<br>окно</strong></h3>
                    <h4><strong>от 5 900</strong><img src="images/rub_w.png" alt="" title=""></h4>
                    <img src="images/calc_f2.png" alt="" title="">
                    <form method="POST" action="" class="feedform3 ie">
                        <input type="hidden" name="form_id_2" value="3"/>
                        <input type="hidden" name="catchpoint_2" value="Трехстворчатое окно">
                        <label>Высота, мм</label>
                        <input type="text" name="height_2" placeholder="Введите значение"><br>
                        <label>Ширина, мм</label>
                        <input type="text" name="width_2" placeholder="Введите значение"><br>
                        <label>Профиль</label>
                        <select name="profile_2">
                            <option disabled selected>Выберите из списка</option>
                            <option>REHAU</option>
                            <option>VEKA</option>
                            <option>KBE</option>
                            <option>KRAUSS</option>
                            <option>SALAMANDER</option>
                        </select><br>
                        <label>Кол-во камер</label>
                        <select name="number_2">
                            <option disabled selected>Выберите из списка</option>
                            <option>2 камеры</option>
                            <option>3 камеры</option>
                        </select><br>
                        <label>Механизм</label>
                        <select name="mechanism_2">
                            <option disabled selected>Выберите из списка</option>
                            <option>Поворотный</option>
                            <option>Поворотно-откидной</option>
                            <option>Раздвижной</option>
                        </select><br>
                        <a class="submit_calc" data-form="calc_2"></a>
                        <div class="form" id="calc_2">
                            <input type="hidden" name="id_2" value="calc_2"/>
                            <a class="close"></a>
                            <p class="medium">Введите Ваше имя*</p>
                            <input type="text" name="name_2" class="inp" placeholder="Иван Иванов*"/>
                            <p class="medium">Введите Ваш телефон*</p>
                            <input type="text" name="phone_2" class="inp"
                                   placeholder="+7 (123) 456-78-90*"/>
                            <p class="medium">Введите Ваш Email*</p>
                            <input type="text" name="email_2" class="inp" placeholder="example@email.com*"/>
                            <input type="submit" value="" name="submit_2" class="button"/>
                            <span>Мы заботимся о конфиденциальности<br>Ваших данных</span>
                        </div>
                    </form>
                </li>
                <li>
                    <h3><strong>Балконный<br>блок</strong></h3>
                    <h4><strong>от 7 300</strong><img src="images/rub_w.png" alt="" title=""></h4>
                    <img src="images/calc_f3.png" alt="" title="">
                    <form method="POST">
                        <!-- Скрытые поля, которые содержат данные из UTM метки -->
                        <input type="hidden" name="form_id_3" value="4"/>
                        <input type="hidden" name="catchpoint_3" value="Балконный блок">
                        <label>Высота, мм</label>
                        <input type="text" name="height_3" placeholder="Введите значение"><br>
                        <label>Ширина, мм</label>
                        <input type="text" name="width_3" placeholder="Введите значение"><br>
                        <label>Профиль</label>
                        <select name="profile_3">
                            <option disabled selected>Выберите из списка</option>
                            <option>REHAU</option>
                            <option>VEKA</option>
                            <option>KBE</option>
                            <option>KRAUSS</option>
                            <option>SALAMANDER</option>
                        </select><br>
                        <label>Кол-во камер</label>
                        <select name="number_3">
                            <option disabled selected>Выберите из списка</option>
                            <option>2 камеры</option>
                            <option>3 камеры</option>
                        </select><br>
                        <label>Механизм</label>
                        <select name="mechanism_3">
                            <option disabled selected>Выберите из списка</option>
                            <option>Поворотный</option>
                            <option>Поворотно-откидной</option>
                            <option>Раздвижной</option>
                        </select><br>
                        <a class="submit_calc" data-form="calc_3"></a>
                        <div class="form" id="calc_3">
                            <input type="hidden" name="id_3" value="calc_3"/>
                            <a class="close"></a>
                            <p class="medium">Введите Ваше имя*</p>
                            <input type="text" name="name_3" class="inp" placeholder="Иван Иванов*"/>
                            <p class="medium">Введите Ваш телефон*</p>
                            <input type="text" name="phone_3" class="inp"
                                   placeholder="+7 (123) 456-78-90*"/>
                            <p class="medium">Введите Ваш Email*</p>
                            <input type="text" name="email_3" class="inp" placeholder="example@email.com*"/>
                            <input type="submit" value="" class="button" name="submit_3"/>
                            <span>Мы заботимся о конфиденциальности<br>Ваших данных</span>
                        </div>
                    </form>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="wrap">
        <div class="copy">
            <p>info@crmokna.ru<br><span class="medium">© 2003-2015</span><br>www.crmokna.ru</p>
        </div>
        <div class="phone_f">
            <a class="call_me" data-form="call_me">Заказать обратный звонок</a>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="form" id="call_me">
    <div class="form_content">
        <a class="close"></a>
        <h3 class="black_f">заказать<br>обратный звонок</h3>
        <form method="POST">
            <input type="hidden" name="id" value="form-id"/>
            <input type="hidden" name="Заказ обратного звонка">
            <p class="medium">Введите Ваше имя*</p>
            <input type="text" name="name_mod" class="inp" placeholder="Иван Иванов*"/>
            <p class="medium">Введите Ваш телефон*</p>
            <input type="text" name="phone_mod" class="inp" placeholder="+7 (123) 456-78-90*"/>
            <p class="medium">Введите Ваш Email*</p>
            <input type="text" name="email_mod" class="inp" placeholder="example@email.com*"/>
            <span>Мы заботимся<br> о конфиденциальности Ваших данных</span>
            <input type="submit" name="submit_mod" id="order2" value="" class="button"/>
        </form>
    </div>
</div>
<div class="over"></div>
</body>
</html>