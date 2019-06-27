<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЯЭксперт</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/popups.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <div id="preload"><span class="load"></span></div>
    <?php include "pop.html"; ?>

    <header>
        <div class="navbar">
          <a href="#" class="logo"></a>
          <ul class="menu">
            <a href="#" class="link_menu">
              <li>ГЛАВНАЯ</li>
            </a>
            <a href="about.php" class="link_menu">
              <li>О НАС</li>
            </a>
            <a href="select.php" class="link_menu">
              <li>НАЙТИ ЭКСПЕРТА</li>
            </a>
            <a href="expert.php" class="link_menu">
              <li>СТАТЬ ЭКСПЕРТОМ</li>
            </a>
            <a href="contacts.php" class="link_menu">
              <li>КОНТАКТЫ</li>
            </a>
            <a href="#" class="burger">
              <i class="fas fa-bars"></i>
            </a>
          </ul>
          <div class="profile">
            <div class="prof_phwh">
              <div id="user_photo"></div>
                <div id="user_who"></div>
            </div>
            <div class="user_in">
              <div id="user_name"></div>
              <div id="user_balance"></div>
            </div>
          </div>
        </div>
      </header>
    <div class="head_preview">

        <div class="head_text">
            <div class="top_text">Найти эксперта<br>быстро и просто</div>
            <div class="bottom_text">получите консультацию от проверенных экспертов анонимно, позвонив<br>или написав письмо</div>
            <a href="#" class="head_button">НАЙТИ ЭКСПЕРТА</a>
            <a href="#how_work" class="to_down"><i class="fas fa-sort-down"></i></a>

        </div>

    </div>


    <div class="how_work" id="how_work">
        <h1>Как это работает</h1>

        <div style="text-align: center">
            <div class="how_blocks">
                <div class="how_block"><i class="fas fa-user-graduate"></i>
                    <h2>Зарегистрируйтесь на сайте
                    </h2>
                </div>
                <div class="how_block"><i class="fas fa-question"></i>
                    <h2>Задайте вопрос эксперту</h2>
                </div>
                <div class="how_block"><i class="fas fa-money-bill"></i>
                    <h2>Оплатите услугу после согласия эксперта, по установленной экспертом ставке</h2>
                </div>
                <div class="how_block"><i class="fas fa-briefcase"></i>
                    <h2>Получите решение вашей проблемы по телефону, в письме, в чате</h2>
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
        </div>

        <h1>Мы помогаем решать проблемы</h1>
        <h2>Поддерживаем наших клиентов в быстром и<br> успешном развитии бизнеса</h2>

        <div class="experts_gl">
            <div class="experts_gl_block">
                <div class="expert1"><i class="fas fa-circle online"></i></div>
                <div class="expert_info">
                    <div class="expert_name">Василенко Алексей</div>

                    <div class="expert_prof">
                        Бизнес консультации. Управление инновациями в компании. Стратегический маркетинг.
                        Степени MBA, BBA, CFA
                        #бизнесконсультант #бизнесэксперт #маркетинг #PR

                        <a class="tn expert_button"><div class="">Написать эксперту</div></a>

                    </div>

                </div>
            </div>


            <div class="experts_gl_block">
                <div class="expert2"><i class="fas fa-circle offline"></i></div>
                <div class="expert_info">
                    <div class="expert_name">Смирнов Василий</div>

                    <div class="expert_prof">
                        Управление проектами в сфере строительства. 12 лет работы в ОАО "МостСтройОтряд". Консультирование по стройматериалам.
                        #строительство #стройматериалы #управление #учётвстроительстве

                        <a class="tn expert_button"><div class="">Написать эксперту</div></a>

                    </div>

                </div>
            </div>


            <div class="experts_gl_block">
                <div class="expert3"><i class="fas fa-circle online"></i></div>
                <div class="expert_info">
                    <div class="expert_name">Григорьев Лев</div>

                    <div class="expert_prof">
                        Консультации по отношениям с фондами. Бизнес ангел на протяжении 5 лет. Ментор Сколково. Помощь в получении инвестиций.
                        #бизнесконсультант #бизнесэксперт #инвестиции #фонд

                <a class="tn expert_button" id="chat"><div class="">Написать эксперту</div></a>
                    </div>

                </div>
            </div>

        </div>

        <h1 style="padding-top: 30px;">В КАКОЙ СФЕРЕ МЫ МОЖЕМ ВАМ ПОМОЧЬ</h1>
        <center>
            <div class="list_help">
                <a href="#" class="block_help"><i class="fas fa-tools"></i>
                    <h2>Промышленное производство
                    </h2>
                </a>

                <a href="#" class="block_help"><i class="fas fa-project-diagram"></i>
                    <h2>Бизнес
                    </h2>
                </a>
                <a href="#" class="block_help"><i class="fas fa-user-tie"></i>
                    <h2>Карьера
                    </h2>
                </a>
                <a href="#" class="block_help"><i class="fas fa-book"></i>
                    <h2>Образование
                    </h2>
                </a>

                <a href="#" class="block_help"><i class="fas fa-birthday-cake"></i>
                    <h2>Организация мероприятий
                    </h2>
                </a>
                <a href="#" class="block_help"><i class="fas fa-file-invoice-dollar"></i>
                    <h2>Финансы
                    </h2>
                </a>
                <a href="#" class="block_help"><i class="fas fa-running"></i>
                    <h2>Фитнес
                    </h2>
                </a>
                <a href="#" class="block_help"><i class="fas fa-heartbeat"></i>
                    <h2>Здоровье
                    </h2>
                </a>

                <a href="#" class="block_help"><i class="fas fa-bullhorn"></i>
                    <h2>PR & РЕКЛАМА
                    </h2>
                </a>
                <a href="#" class="block_help"><i class="fas fa-balance-scale"></i>
                    <h2>Законодательство
                    </h2>
                </a>
                <a href="#" class="block_help"><i class="fas fa-door-closed"></i>
                    <h2>Недвижимость
                    </h2>
                </a>
                <a href="#" class="block_help"><i class="fas fa-plane"></i>
                    <h2>Иммиграция
                    </h2>
                </a>


                <a href="#" class="expert_button m60 full">ВСЕ КАТЕГОРИИ</a>

            </div>
        </center>

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
    <div class="footer">
        <div class="container row">
          <div class="col col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <a href="#" style="color:#ffffff;font-size:20px;">
              <img src="img/logo_footer.png" class="logo_footer" imgfield="img" style="max-width: 170px;" alt="Получить консультацию">
            </a>
            <div class="sociallinks">
              <div class="sociallinks_item">
                <a href="2" target="_blank">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><desc>Facebook</desc><path style="fill:#525252;" d="M47.761,24c0,13.121-10.638,23.76-23.758,23.76C10.877,47.76,0.239,37.121,0.239,24c0-13.124,10.638-23.76,23.764-23.76C37.123,0.24,47.761,10.876,47.761,24 M20.033,38.85H26.2V24.01h4.163l0.539-5.242H26.2v-3.083c0-1.156,0.769-1.427,1.308-1.427h3.318V9.168L26.258,9.15c-5.072,0-6.225,3.796-6.225,6.224v3.394H17.1v5.242h2.933V38.85z"></path></svg>
                </a>
              </div>
          <div class="sociallinks_item">
            <a href="2" target="_blank">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><desc>Twitter</desc><path style="fill:#525252;" d="M47.762,24c0,13.121-10.639,23.76-23.761,23.76S0.24,37.121,0.24,24c0-13.124,10.639-23.76,23.761-23.76  S47.762,10.876,47.762,24 M38.031,12.375c-1.177,0.7-2.481,1.208-3.87,1.481c-1.11-1.186-2.694-1.926-4.455-1.926  c-3.364,0-6.093,2.729-6.093,6.095c0,0.478,0.054,0.941,0.156,1.388c-5.063-0.255-9.554-2.68-12.559-6.367  c-0.524,0.898-0.825,1.947-0.825,3.064c0,2.113,1.076,3.978,2.711,5.07c-0.998-0.031-1.939-0.306-2.761-0.762v0.077  c0,2.951,2.1,5.414,4.889,5.975c-0.512,0.14-1.05,0.215-1.606,0.215c-0.393,0-0.775-0.039-1.146-0.109  c0.777,2.42,3.026,4.182,5.692,4.232c-2.086,1.634-4.712,2.607-7.567,2.607c-0.492,0-0.977-0.027-1.453-0.084  c2.696,1.729,5.899,2.736,9.34,2.736c11.209,0,17.337-9.283,17.337-17.337c0-0.263-0.004-0.527-0.017-0.789  c1.19-0.858,2.224-1.932,3.039-3.152c-1.091,0.485-2.266,0.811-3.498,0.958C36.609,14.994,37.576,13.8,38.031,12.375"></path></svg>
                </a>
          </div>
          <div class="sociallinks_item">
            <a href="2" target="_blank">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><desc>VK</desc><path style="fill:#525252;" d="M47.761,24c0,13.121-10.639,23.76-23.76,23.76C10.878,47.76,0.239,37.121,0.239,24c0-13.123,10.639-23.76,23.762-23.76C37.122,0.24,47.761,10.877,47.761,24 M35.259,28.999c-2.621-2.433-2.271-2.041,0.89-6.25c1.923-2.562,2.696-4.126,2.45-4.796c-0.227-0.639-1.64-0.469-1.64-0.469l-4.71,0.029c0,0-0.351-0.048-0.609,0.106c-0.249,0.151-0.414,0.505-0.414,0.505s-0.742,1.982-1.734,3.669c-2.094,3.559-2.935,3.747-3.277,3.524c-0.796-0.516-0.597-2.068-0.597-3.171c0-3.449,0.522-4.887-1.02-5.259c-0.511-0.124-0.887-0.205-2.195-0.219c-1.678-0.016-3.101,0.007-3.904,0.398c-0.536,0.263-0.949,0.847-0.697,0.88c0.31,0.041,1.016,0.192,1.388,0.699c0.484,0.656,0.464,2.131,0.464,2.131s0.282,4.056-0.646,4.561c-0.632,0.347-1.503-0.36-3.37-3.588c-0.958-1.652-1.68-3.481-1.68-3.481s-0.14-0.344-0.392-0.527c-0.299-0.222-0.722-0.298-0.722-0.298l-4.469,0.018c0,0-0.674-0.003-0.919,0.289c-0.219,0.259-0.018,0.752-0.018,0.752s3.499,8.104,7.573,12.23c3.638,3.784,7.764,3.36,7.764,3.36h1.867c0,0,0.566,0.113,0.854-0.189c0.265-0.288,0.256-0.646,0.256-0.646s-0.034-2.512,1.129-2.883c1.15-0.36,2.624,2.429,4.188,3.497c1.182,0.812,2.079,0.633,2.079,0.633l4.181-0.056c0,0,2.186-0.136,1.149-1.858C38.281,32.451,37.763,31.321,35.259,28.999"></path></svg>
            </a>
          </div>
          <div class="sociallinks_item">
            <a href="5" target="_blank">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve"><desc>Youtube</desc><path style="fill:#525252;" d="M24 0.0130005C37.248 0.0130005 47.987 10.753 47.987 24C47.987 37.247 37.247 47.987 24 47.987C10.753 47.987 0.0130005 37.247 0.0130005 24C0.0130005 10.753 10.752 0.0130005 24 0.0130005ZM35.815 18.093C35.565 16.756 34.452 15.758 33.173 15.635C30.119 15.439 27.054 15.28 23.995 15.278C20.936 15.276 17.882 15.432 14.828 15.625C13.544 15.749 12.431 16.742 12.182 18.084C11.898 20.017 11.756 21.969 11.756 23.92C11.756 25.871 11.898 27.823 12.182 29.756C12.431 31.098 13.544 32.21 14.828 32.333C17.883 32.526 20.935 32.723 23.995 32.723C27.053 32.723 30.121 32.551 33.173 32.353C34.452 32.229 35.565 31.084 35.815 29.747C36.101 27.817 36.244 25.868 36.244 23.919C36.244 21.971 36.101 20.023 35.815 18.093ZM21.224 27.435V20.32L27.851 23.878L21.224 27.435Z"></path></svg>
            </a>
          </div>
          <div class="sociallinks_item">
            <a href="3" target="_blank">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px" viewBox="0 0 30 30" xml:space="preserve"><desc>Instagram</desc><path style="fill:#525252;" d="M15,11.014 C12.801,11.014 11.015,12.797 11.015,15 C11.015,17.202 12.802,18.987 15,18.987 C17.199,18.987 18.987,17.202 18.987,15 C18.987,12.797 17.199,11.014 15,11.014 L15,11.014 Z M15,17.606 C13.556,17.606 12.393,16.439 12.393,15 C12.393,13.561 13.556,12.394 15,12.394 C16.429,12.394 17.607,13.561 17.607,15 C17.607,16.439 16.444,17.606 15,17.606 L15,17.606 Z"></path><path style="fill:#525252;" d="M19.385,9.556 C18.872,9.556 18.465,9.964 18.465,10.477 C18.465,10.989 18.872,11.396 19.385,11.396 C19.898,11.396 20.306,10.989 20.306,10.477 C20.306,9.964 19.897,9.556 19.385,9.556 L19.385,9.556 Z"></path><path style="fill:#525252;" d="M15.002,0.15 C6.798,0.15 0.149,6.797 0.149,15 C0.149,23.201 6.798,29.85 15.002,29.85 C23.201,29.85 29.852,23.202 29.852,15 C29.852,6.797 23.201,0.15 15.002,0.15 L15.002,0.15 Z M22.666,18.265 C22.666,20.688 20.687,22.666 18.25,22.666 L11.75,22.666 C9.312,22.666 7.333,20.687 7.333,18.28 L7.333,11.734 C7.333,9.312 9.311,7.334 11.75,7.334 L18.25,7.334 C20.688,7.334 22.666,9.312 22.666,11.734 L22.666,18.265 L22.666,18.265 Z"></path></svg>
            </a>
          </div>
        </div>
        <div class="text">© 2019 Iexpert</div>
      </div>
          <div class="col col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <div class="title title_uppercase" style="color: #525252;">Получить консультацию</div>
            <div class="descr descr_xxs" style="color: #ffffff;">
              <ul>
                <li><u><a href="#">Промышленное производство</a></u></li>
                <li><u><a href="#">Бизнес</a></u></li>
                <li><u><a href="#">Карьера</a></u></li>
                <li><u><a href="#">Образование</a></u></li>
                <li><u><a href="#">Организация мероприятий</a></u></li>
                <li><u><a href="#">Финансы</a></u></li>
                <li><u><a href="#">Фитнес</a></u></li>
                <li><u><a href="#">Здоровье</a></u></li>
                <li><u><a href="#">PR&amp;Реклама</a></u></li>
                <li><u><a href="#">Законодательство</a></u></li>
                <li><u><a href="#">Недвижимость</a></u></li>
                <li><u><a href="#">Эмиграция</a></u></li>
              </ul>
            </div>
          </div>
          <div class="col col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <div class="title title_uppercase" style="color: #525252;">основа</div>
            <div class="descr descr_xxs" style="color: #ffffff;">
              <ul>
                <li><u><a href="#">Найти э</a>ксперта</u></li>
                <li><u><a href="#">Стать экспертом</a></u></li>
                <li><u><a href="#">Как это устроенно</a></u></li>
                <li><u><a href="#">Помощь</a></u></li>
                <li><u><a href="#">Контакты</a></u></li>
              </ul>
            </div>
          </div>
      <div class="col col-xs-12 col-sm-12 col-md-6 col-lg-3">
        <div class="title title_uppercase" style="color: #525252;">Польза</div>
        <div class="descr descr_xxs" style="color: #ffffff;">
          <ul>
            <li><a href="#"><u>Статьи</u></a></li>
            <li><a href="#"><u>Видеоматериалы</u></a></li>
            <li><a href="#"><u>Условия использования</u></a></li>
            <li><a href="#"><u>Политика конфиденциальности</u></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="chat" style="display:none">
    <div class="chat-header">
      <span class="header-label">Чат</span>
      <i class="fas fa-times close"></i>
    </div>
    <div id="chat-content"></div>
    <div class="editor">
      <input type="text" id="message" placeholder="Введите сообщение..." />
      <a id="send" class="btn btn-icon btn-big right"><i class="fas fa-arrow-right"></i></a>
    </div>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/chat.js"></script>
</body>

</html>
