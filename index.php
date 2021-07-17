<!-- <?php

// require_once __DIR__ . '/src/incs/data.php';
// require_once __DIR__ . '/src/incs/function.php';

// if (!empty($_POST)) {
//     debug($_POST);
//     $fields = load($fields);
//     debug(($fields));
//     echo $fields;
//     if ($errors = validate($fields)) {
//         debug($errors);
//         //    
//     } else {
//         echo 'OK';
//     }
// }



?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/style.css">
    <script src="./src//main.js" defer></script>
    <title>TestForm</title>
</head>

<body>
    <form name="form" class="form" method="post" action="handler.php">
        <div class="title_block">
            <h1 class="title">ЗАЯВКА НА УСЛУГУ</h1>
            <span class="x"></span>

        </div>
        <div class="form_top">
            <label class="label">
                <input type="text" name="name" class="input_name" autocomplete="off" >
                <span class="span">Ваше имя</span>

 
            </label>
            <label class="label">
                <input type="text" name="phone" class="input_phone" autocomplete="off" >
                <span class="span">Телефон *</span>
                
            </label>
        </div>

        <label class="label">
            <input type="text" class="input_mail" name="mail" autocomplete="off">
            <span class="span">E-mail *</span>
        </label>
 
        <div class="formselectwrap" >
            <select name="select" id="select_item">
                <option></option>
                <option value="Ремонт холодильников"> Ремонт холодильников</option>
                <option value="Ремонт стиральных машин"> Ремонт стиральных машин</option>
                <option value="Ремонт компьютеров и телефонов"> Ремонт компьютеров и телефонов</option>
                <option value="Заправка картриджей"> Заправка картриджей</option>
            </select>
            <span class="span_select">Выберите услугу</spanfor=>
        </div>




        <div class="form_textarea">
            <textarea required name="message" id="textarea" class="textarea_form"></textarea>
            <label for="message" class=" label_textarea" >Коментарий</label>
        </div>

        <div class="footer_block">
            <p class="text">Нажимая на кнопку, Вы даете согласие<br> на обработку <a href="#">персональных данных</a> </p>
            <button class="btn" type="submit">Отправить</button>
 

        </div>
    </form>
    
</body>
<!-- name /^[а-яё]{30}|[a-z]{30}$/iu -->



</html>