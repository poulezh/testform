<form name="form" action="handler.php" class="form" method="post" enctype="multipart/form-data">
            <div class="title_block">
                <h1 class="title">ЗАЯВКА НА УСЛУГУ</h1>
                <span class="x"></span>
    
            </div>
            <div class="form_top">
                <div class="form_item">
                    <input type="text" name="name" class="input_name" autocomplete="off" required>
                    <label for="name">Ваше имя</label>
                </div>
                <div class="form_item">
                    <input type="text" name="phone" class="input_phone"autocomplete="off" required>
                    <label for="phone">Телефон *</label>
                </div>
            </div>


            <div class="form_item">
                <input type="text" class="input_mail" name="mail" autocomplete="off" required >
                <label for="mail">E-mail</label>
            </div>
            <div class="formselectwrap" required>
                <select required name="select" id="select_item" >
                    <option> Выберите услугу</option>
                    <option value="1"> услуга 1</option>
                    <option value="2"> услуга 2</option>
                    <option value="3"> услуга 3</option>
                    <option value="4"> услуга 4</option>
                </select>
               
            </div>
            <div class="form_item">
                <textarea required  name="message" id="textarea" class="textarea_form" ></textarea>
                <label for="textarea">Коментарий</label>
            </div>
            <div class="footer_block">
                <p class="text">Нажимая на кнопку, Вы даете согласие<br> на обработку <a href="#">персональных данных</a> </p>
                <button class="btn" type="submit">Оставить заявку</button>
            </div>
        </form>