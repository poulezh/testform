<!-- <?php
    $mail = ($_POST["mail"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "YTGHFDBKIMYJT VSKJ";
      echo $emailErr;
    }    
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
    <link rel="stylesheet" href="./src//style.css">
    <script src="./src//main.js" defer></script>
    <title>TestForm</title>
</head>
<body>

    <form name="form" action="handler.php" class="form" method="post" enctype="multipart/form-data">
    <div class="title_block">
        <h1 class="title">ЗАЯВКА НА УСЛУГУ</h1>
        <span class="x"></span>

    </div>
    <div class="form_top">
        <div class="form_item">
            <input type="text" name="name" class="input_name" autocomplete="off" required value=<?php echo $_POST['name']; ?>>
            <label for="name">Ваше имя</label>
        </div>
        <div class="form_item">
            <input type="text" name="phone" class="input_phone"autocomplete="off" required value=<?php echo $_POST['phone']; ?>>
            <label for="phone">Телефон *</label>
        </div>
    </div>


    <div class="form_item">
        <input type="text" class="input_mail" name="mail" autocomplete="off" required value=<?php echo $_POST['mail']; ?>>
        <label for="mail">E-mail</label>
    </div>
    <div class="formselectwrap" required>
        <select required name="select" id="select_item" >
            <option ><?php echo $_POST['select']; ?></option>

        </select>
    </div>
    <div class="form_item">
        <textarea required  name="message" id="textarea" class="textarea_form" ><?php echo $_POST['message']; ?></textarea>
        <label for="textarea">Коментарий</label>
    </div>
    <div class="footer_block">
        <p class="text">Нажимая на кнопку, Вы даете согласие<br> на обработку <a href="#">персональных данных</a> </p>
        <button class="btn" type="submit">Отправить заявку</button>
    </div>
</form>

   
  







    
    
</body>
</html>