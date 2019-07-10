<?php include "header.php"; ?>

<div class="how_work pd-80">
  <div class="expert">
    <div class="cover__filter" style="height: 1400px;background-color: rgb(41, 34, 28);opacity: 0.7;"></div>
    <div class="container">
      <div class="mainblock col-8">
        <div style="height:100vh;">
          <div class="mainwrapper">
            <div class="title title_xs">Зарабатывайте на ваших знаниях уже сегодня</div>
            <div class="descr descr_md" style="padding-top:5px;padding-bottom:5px;">Станьте экспертом</div>
            <div>
              <div>
                <div class="form__successbox text_md" style="display:none;"></div>
                <div class="form__inputsbox">
                  <div class="input-groups">
                    <div class="input-title descr_md">Ваша фамилия</div>
                    <div >
                      <input type="text" id="exp_surname" name="exp_surname" class="input" placeholder="Смирнов" maxlength="40" style="color:#000000;  background-color:#ffffff; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;">
                    </div>
                  </div>
                  <div class="input-groups">
                    <div class="input-title descr_md">Ваше имя</div>
                    <div >
                      <input type="text" name="exp_name" id="exp_name" class="input" placeholder="Иван" maxlength="40" style="color:#000000;  background-color:#ffffff; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;">
                    </div>
                  </div>
                  <div class="input-groups">
                    <div class="input-title descr_md">Ваше отчество</div>
                    <div >
                      <input type="text" name="exp_middlename" id="exp_middlename"  class="input" placeholder="Петрович" maxlength="40" style="color:#000000;  background-color:#ffffff; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;">
                    </div>
                  </div>
                  <div class="input-groups">
                    <div class="input-title descr_md" style="">Ваш e-mail</div>
                    <div >
                      <input type="text" name="exp_mail" id="exp_mail" class="input" placeholder="smirnov@mail.ru" maxlength="30" style="color:#000000;  background-color:#ffffff; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;">
                    </div>
                  </div>
                  <div class="input-groups">
                    <div class="input-title descr_md" style="">Ваш телефон</div>
                    <div >
          		  	    <input type="tel" name="exp_phone" id="exp_phone" class="input js-tilda-mask " placeholder="+7 (999) 999-9999" pattern="[0-9]*" data-tilda-mask="+7 (999) 999-9999" style="color:#000000;  background-color:#ffffff; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;">
                    </div>
                  </div>
                  <div class="input-groups">
                    <div class="input-title descr_md">Выберете категорию</div>
                      <div >
                        <div class="select__wrapper ">
                          <select name="expcategory" id="expcategory" class="select" style="color:#000000;  background-color:#ffffff; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;">
                            <option value="1">Промышленное производство</option>
                            <option value="2">Бизнес</option>
                            <option value="3">Карьера</option>
                            <option value="4">Образование</option>
                            <option value="5">Организация мероприятий</option>
                            <option value="6">Финансы</option>
                            <option value="7">Фитнес</option>
                            <option value="8">Здоровье</option>
                            <option value="9">PR&amp;Реклама</option>
                            <option value="10">Законодательство</option>
                            <option value="11">Недвижимость</option>
                            <option value="12">Эмиграция</option>
                            <option value="13">Другая</option>
                          </select>
                        </div>
                      </div>
                  </div>
                <div class="input-groups">
                  <div class="input-title descr_md">В списке нет моей категории</div>
                  <div >
                    <input type="text" name="exp_newcategory" class="input" placeholder="Категория" style="color:#000000;  background-color:#ffffff; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;">
                  </div>
                </div>
                <div class="input-groups">
                  <div class="input-title descr_md">Пароль</div>
                  <div >
                    <input type="password" name="exp_pas" id="exp_pas" class="input" placeholder="Пароль" maxlength="32" style="color:#000000;  background-color:#ffffff; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px;">
                  </div>
                </div>
				        <div class="form__errorbox-middle">
					        <div class="form__errorbox-wrapper" style="display:none;">
                    <div class="form__errorbox-text text_md"></div>
                  </div>
                </div>
                <div class="form__submit">
                    <button type="button" class="submit" onclick="registr_exp()" style="color:#ffffff;background-color:#ff7300;border-radius:7px; -moz-border-radius:7px; -webkit-border-radius:7px;">Зарегистрироваться</button>
                </div>
              </div>
            </div>
          </div>
		      <div class="form-bottom-text text text_xs">Вы соглашаетесь на обработку персональных данных</div>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="how_block1">
      <div class="how_block1_1">
          <h1>ПЫТАЕТЕСЬ ИСКАТЬ ЭКСПЕРТОВ В ИНТЕРНЕТЕ?</h1>
          <h3>Мы сделали онлайн-консультации простыми.</h3>
          <h3>Не нужно читать сотни блогов и тратить много времени, чтобы ответить на пару вопросов. Просто зайдите в нашу базу экспертов, выберите лучшего для своих задач и быстро получите консультацию.</h3>
          <a href="#" class="tn">
              <div class="how_button">Написать эксперту</div>
          </a>
      </div>

      <div class="how_block1_2">
          <div class="how_ph1"></div>
          <div class="how_ph2"></div>
          <div class="how_ph3"></div>
          <div class="how_ph4"></div>
      </div>

  </div>
  <div class="block_reviews">
      <h1>ОТЗЫВЫ О НАС</h1>
      <center>
          <div class="revs">
              <div class="rev rev_1">
                  <div class="rev1"></div>
                  <div class="rev_text">
                      <h3>Вы профессионалы! Спасибо за уделенное время на решение проблем. Качественно, быстро, эффективно.</h3>
                      <div class="rev_name">Николай Пономарев</div>
                      <div class="rev_dol">Генеральный директор <span>ООО "АгроПром"</span></div>
                      <div class="rev_date"><i class="fas fa-calendar-day"></i>11/5/19 11:43</div>
                  </div>
              </div>
              <div class="rev rev_1">
                  <div class="rev2"></div>
                  <div class="rev_text">
                      <h3>Мы узнали много нового и получили очень дельные советы. Очень рекомендуем обращаться к Олегу Соболеву!</h3>
                      <div class="rev_name">Даниил Калиниченко</div>
                      <div class="rev_dol">Финансовый менеджер в <span>DD agency</span></div>
                      <div class="rev_date"><i class="fas fa-calendar-day"></i>11/5/19 11:43</div>
                  </div>
              </div>
              <div class="rev rev_1">
                  <div class="rev3"></div>
                  <div class="rev_text">
                      <h3>Быстро решили вопрос. Помогли с решением ряда проблем, ответы на которые не найдешь на других ресурсах. Спасибо!</h3>
                      <div class="rev_name">Юлия Санина</div>
                      <div class="rev_dol">Основатель <span>Школа программирования "IQ-школа"</span></div>
                      <div class="rev_date"><i class="fas fa-calendar-day"></i>11/5/19 11:43</div>
                  </div>
              </div>
              <div class="rev rev_1">
                  <div class="rev4"></div>
                  <div class="rev_text">
                      <h3>Идеальный сервис для меня. Грамотные эксперты и быстрое обслуживание.</h3>
                      <div class="rev_name">Саша Коротких</div>
                      <div class="rev_dol">Креативный директор <span>SoSoul magazine</span></div>
                      <div class="rev_date"><i class="fas fa-calendar-day"></i>11/5/19 11:43</div>
                  </div>
              </div>
              <div class="rev rev_2 rev_none">
                  <div class="rev2"></div>
                  <div class="rev_text">
                      <h3>Мы узнали много нового и получили очень дельные советы. Очень рекомендуем обращаться к Олегу Соболеву!</h3>
                      <div class="rev_name">Даниил Калиниченко</div>
                      <div class="rev_dol">Финансовый менеджер в <span>DD agency</span></div>
                      <div class="rev_date"><i class="fas fa-calendar-day"></i>11/5/19 11:43</div>
                  </div>
              </div>
              <div class="rev rev_2 rev_none">
                  <div class="rev3"></div>
                  <div class="rev_text">
                      <h3>Быстро решили вопрос. Помогли с решением ряда проблем, ответы на которые не найдешь на других ресурсах. Спасибо!</h3>
                      <div class="rev_name">Юлия Санина</div>
                      <div class="rev_dol">Основатель <span>Школа программирования "IQ-школа"</span></div>
                      <div class="rev_date"><i class="fas fa-calendar-day"></i>11/5/19 11:43</div>
                  </div>
              </div>
              <div class="rev rev_2 rev_none">
                  <div class="rev4"></div>
                  <div class="rev_text">
                      <h3>Идеальный сервис для меня. Грамотные эксперты и быстрое обслуживание.</h3>
                      <div class="rev_name">Саша Коротких</div>
                      <div class="rev_dol">Креативный директор <span>SoSoul magazine</span></div>
                      <div class="rev_date"><i class="fas fa-calendar-day"></i>11/5/19 11:43</div>
                  </div>
              </div>
              <div class="rev rev_2 rev_none">
                  <div class="rev1"></div>
                  <div class="rev_text">
                      <h3>Вы профессионалы! Спасибо за уделенное время на решение проблем. Качественно, быстро, эффективно.</h3>
                      <div class="rev_name">Николай Пономарев</div>
                      <div class="rev_dol">Генеральный директор <span>ООО "АгроПром"</span></div>
                      <div class="rev_date"><i class="fas fa-calendar-day"></i>11/5/19 11:43</div>
                  </div>
              </div>
          </div>
      </center>
  </div>

  <h1>Остались вопросы?</h1>
  <h2 class="mgb60">Напиши нам! Оставьте отзыв</h2>
  <center>
      <div class="feedback">
          <div class="feedback_left">
              <div class="number">+7 903 40 777 42</div>
              <div class="mail">hello@madeontilda.com</div>
              <div class="address">Ростов-на-Дону, пл. Гагарина 1, к 2</div>
              <div class="icons"><i class="fab fa-twitter-square"></i><i class="fab fa-facebook-square"></i><i class="fab fa-instagram"></i></div>
          </div>
          <div class="feedback_right">
              <input type="text" placeholder="Ваше имя">
              <input type="text" placeholder="Ваш E-mail">
              <textarea id="feed_text" placeholder="Напишите свой вопрос"></textarea>
              <a href="#" class="expert_button mgt-60">Отправить письмо</a>
          </div>
      </div>
  </center>
</div>
</div>
<?php include "footer.php"; ?>
