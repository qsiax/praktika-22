<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript" src="script/register.js"></script>
    <script type="text/javascript" src="script/validation.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <title>Praktika</title>
</head>
<body>

    <div class="auth">
        <div class="auth_body">
            <div class="auth__close" onclick="blurPopup()"></div>
            <div class="auth__title">Вход</div>
            <form action="auth.php" method="post">
                <input type="text" name="login" placeholder="Логин">
                <input type="password" name="pass" placeholder="Пароль">
                <div class="auth__text">Вы еще не зарегистрировались? <a onclick="authPopup()">Тогда создайте новый профиль</a></div>
                <button type="submit" name="submit">Войти</button>
            </form>
        </div>
    </div>

    <div class="signup">
        <div class="signup_body">
            <div class="signup__close" onclick="signupPopup()"></div>
            <div class="signup__title">Регистрация</div>
            <form method="post" id="register-form" class="form-signin" action="register.php">
                <div id="error">
                </div>
                <input type="login" name="user_name" id="user_name" placeholder="Логин">
                <input type="email" name="user_email" id="user_email" placeholder="E-mail">
                <input type="password" name="password" id="password" placeholder="Пароль">
                <input type="password" name="cpassword" id="cpassword" placeholder="Подтвердите пароль">
                <div class="signup__text">У вас уже есть аккаунт? <a onclick="authPopup()">Войти в профиль</a></div>
                <button type="submit" name="btn-save" id="btn-submit">
                <span class="glyphicon glyphicon-log-in"></span>&nbsp;    Зарегистрироваться
                </button>
            </form>

        </div>
    </div>

    <div class="wrapper-bg"></div>
    <div class="wrapper">
        <section class="home">
            <div class="home__container _container">
                <div class="home__body">
                    <header class="header">
                        <div class="header__container _container">
                            <div class="header__body">
                                <div class="header__block">
                                    <div class="header__navigation">
                                        Главная / О нас / <span>Педагогический состав</span>
                                    </div>
                                </div>
                                <div class="header__block">
                                    <div class="header__logo"></div>
                                </div>
                                <div class="header__block">
                                    <div class="header__search"></div>
                                   <?php
                                    if($_COOKIE['users'] == ''):
                                    ?>
                                        <div onclick="blurPopup()" class="header__profile"></div>
                                    <?php else: ?>
                                        <div onclick="headerPopup()" class="header__profile"></div>
                                        <div class="header__popup">
                                            <div class="header__popup-login"><?=$_COOKIE['users']?></div>
                                            <a class="header__popup-exit" href="exit.php">Выйти</a>
                                        </div>
                                    <? endif; ?> 
                                    <div class="header__btn"></div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="home__block">
                        <div class="home__heading">
                            <span>Коллектив</span>
                            ГБПОУ РС(Я)
                            Покровский
                            колледж
                        </div>
                        <div class="home__text">Все задачи поставленные колледжем требует кропотливой, неустанной, творческой работы от коллектива колледжа, который нацелен на подготовку компетентных, конкурентоспособных специалистов рабочих профессий для промышленности нашей республики.</div>
                    </div>
                    <div class="home__item-wrapper swiper">
                        <div class="home__item-body swiper-wrapper">
                            <div class="home__item swiper-slide">
                                <div class="home__item-img"></div>
                                <div class="home__item-title">Николай Николаевич</div>
                                <div class="home__item-text">Директор</div>
                            </div>
                            <div class="home__item swiper-slide">
                                <div class="home__item-img"></div>
                                <div class="home__item-title">Николай Николаевич</div>
                                <div class="home__item-text">Директор</div>
                            </div>
                            <div class="home__item swiper-slide">
                                <div class="home__item-img"></div>
                                <div class="home__item-title">Николай Николаевич</div>
                                <div class="home__item-text">Директор</div>
                            </div>
                            <div class="home__item swiper-slide">
                                <div class="home__item-img"></div>
                                <div class="home__item-title">Николай Николаевич</div>
                                <div class="home__item-text">Директор</div>
                            </div>
                            <div class="home__item swiper-slide">
                                <div class="home__item-img"></div>
                                <div class="home__item-title">Николай Николаевич</div>
                                <div class="home__item-text">Директор</div>
                            </div>
                        </div>
                    </div>
                    <div class="home__item-arrow-next"></div>
                    <div class="home__item-arrow-prev"></div>
 
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="footer__container _container">
                <div class="footer__body">
                    <div class="footer__wrapper">
                        <div class="footer__form-title">Рассылка</div>
                        <input class="footer__form-input" type="email"></input>
                        <div class="footer__form-block">
                            <div class="footer__form-text">Для получения специальных предложений и новостей</div>
                            <div class="footer__form-icon"></div>
                        </div>
                    </div>
                    <div class="footer__wrapper">
                        <div class="footer__item-wrapper">
                            <div class="footer__item-block">
                                <div class="footer__item">
                                    <div class="footer__item-title">Новости</div>
                                        <a class="footer__item-text">Мероприятия</a>
                                        <a class="footer__item-text">Спорт</a>
                                        <a class="footer__item-text">Учеба</a>
                                    </div>
                                    <div class="footer__item">
                                        <div class="footer__item-title">Сведения</div>
                                        <a class="footer__item-text">О колледже</a>
                                        <a class="footer__item-text">Документы</a>
                                        <a class="footer__item-text">
                                            Противодействие
                                            коррупции
                                        </a>
                                        <a class="footer__item-text">Антитеррор</a>
                                    </div>
                                    <div class="footer__item">
                                        <div class="footer__item-title">Студенту</div>
                                        <a class="footer__item-text">Расписание</a>
                                        <a class="footer__item-text">Общежитие</a>
                                        <a class="footer__item-text">Контроль</a>
                                        <a class="footer__item-text">Практика</a>
                                        <a class="footer__item-text">Устройство</a>
                                    </div>
                                </div>
                                <div class="footer__item-block">
                                    <div class="footer__item">
                                        <div class="footer__item-title">Абитуриенту</div>
                                        <a class="footer__item-text">Профориентация</a>
                                        <a class="footer__item-text">
                                            Режим работы
                                            комиссии
                                        </a>
                                        <a class="footer__item-text">Приём студентов</a>
                                        <a class="footer__item-text">
                                            Список
                                            абитуриентов
                                        </a>
                                    </div>
                                    <div class="footer__item">
                                        <div class="footer__item-title">Контакты</div>
                                        <a class="footer__item-text">Обращение гражданам</a>
                                    </div>
                                    <div class="footer__item">
                                        <div class="footer__item-title">Курсы</div>
                                        <a class="footer__item-text">Курсы</a>
                                        <a class="footer__item-text">Курсы ПДО</a>
                                        <a class="footer__item-text">Расписание</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="footer__copyright">© Все права защищены ГБПОУ РС(Я) "Покровский колледж" 2022</div>
                    </div>
                </div>
        </footer>
    </div>



    <script src="script/app.js"></script>
    <script>
        function blurPopup() {
            var wrapper = document.querySelector('.wrapper');
            var wrapperBg = document.querySelector('.wrapper-bg');
            var auth = document.querySelector('.auth');

            auth.classList.toggle('active');
            wrapper.classList.toggle('active');
            wrapperBg.classList.toggle('active');
        };
        function authPopup() {
            var signup = document.querySelector('.signup');
            var auth = document.querySelector('.auth');

            auth.classList.toggle('active');
            signup.classList.toggle('active');
        };
        function signupPopup() {
            var signup = document.querySelector('.signup');
            var wrapper = document.querySelector('.wrapper');
            var wrapperBg = document.querySelector('.wrapper-bg');

            signup.classList.toggle('active');
            wrapper.classList.toggle('active');
            wrapperBg.classList.toggle('active');
        }
        function headerPopup() {
            var headerPopup = document.querySelector('.header__popup');

            headerPopup.classList.toggle('active');
        }
    </script>

</body>
</html>