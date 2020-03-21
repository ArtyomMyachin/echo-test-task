<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf8"/>
    <title>World bank</title>
    <link rel="stylesheet" href="src/css/style.css"/>
    <link href="http://allfont.ru/allfont.css?fonts=europe-normal" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://atuin.ru/demo/ui-slider/jquery.ui.touch-punch.min.js"></script>
    <script src="./src/scripts/script.js"></script>
    <script src="src/scripts/form.js"></script>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="info">
            <img class="info__logo" src="src/assets/images/logo.png" alt="Logo"/>
            <div class="info__contacts">
                <a class="info__phone" href="tel:88001005005">8-800-100-5005</a>
                <a class="info__phone" href="tel:+73452522000">+7 (3452) 522-000</a>
            </div>
        </div>
        <nav class="main-menu">
            <ul class="main-menu__list">
                <li class="main-menu__item"><a href="#" class="main-menu__link">Кредитные карты</a></li>
                <li class="main-menu__item active-menu-item"><a href="#" class="main-menu__link">Вклады</a></li>
                <li class="main-menu__item"><a href="#" class="main-menu__link">Дебетовая карта</a></li>
                <li class="main-menu__item"><a href="#" class="main-menu__link">Страхование</a></li>
                <li class="main-menu__item"><a href="#" class="main-menu__link">Друзья</a></li>
                <li class="main-menu__item"><a href="#" class="main-menu__link">Интернет-банк</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="main">
    <div class="container">
        <div class="main-wrap">
            <div class="breadcrumbs">
                <span class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">Главная</a></span>
                <span class="breadcrumbs__item">-</span>
                <span class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">Вклады</a></span>
                <span class="breadcrumbs__item">-</span>
                <span class="breadcrumbs__item current-breadcrumb">Калькулятор</span>
            </div>
            <div class="calculator">
                <form action="calc.php" method="post" class="calculator__form">
                    <h1 class="calculator__header">Калькулятор</h1>
                    <div class="calculator-wrap">
                        <div class="calculator__labels">
                            <label for="calculator__date" class="calculator__widget">Дата оформления вклада</label>
                            <label for="calculator__summ" class="calculator__widget">Сумма вклада</label>
                            <label for="calculator__time" class="calculator__widget">Срок вклада</label>
                            <span class="calculator__widget">Пополнение вклада</span>
                            <label for="calculator__summ-add" class="calculator__widget">Сумма пополнения вклада</label>
                        </div>
                        <div class="calculator__inputs">
                            <input type="text" name="date" id="calculator__date" class="calculator__text-field calculator__input" placeholder="дд.мм.гггг"/>
                            <input type="text" name="summ" onchange="changeScrollbar('summ-scrollbar')" min="1000" max="3000000" id="calculator__summ" class="calculator__text-field calculator__input" placeholder="10 000"/>
                            <select id="calculator__time" name="years" class="calculator__select calculator__input">
                                <option value="1" class="calculator__option">1 год</option>
                                <option value="2" class="calculator__option">2 года</option>
                                <option value="3" class="calculator__option">3 года</option>
                                <option value="4" class="calculator__option">4 года</option>
                                <option value="5" class="calculator__option">5 лет</option>
                            </select>
                            <div class="calculator__radios calculator__input">
                                <input type="radio" value="0" name="add-flag" checked> Нет
                                <input type="radio" value="1" name="add-flag"> Да
                            </div>
                            <input type="text" name="add-summ" onchange="changeScrollbar('add-summ-scrollbar')" min="1000" max="3000000" id="calculator__summ-add" class="calculator__text-field calculator__input" placeholder="10 000"/>
                        </div>
                        <div class="calculator__scrollbars">
                            <div class="calculator__scrollbar" id="summ-scrollbar"></div>
                            <div class="calculator__scrollbar-labels">
                                <div class="calculator__scrollbar-label">1 тыс. руб.</div>
                                <div class="calculator__scrollbar-label">3 000 000</div>
                            </div>
                            <div class="calculator__scrollbar" id="add-summ-scrollbar"></div>
                            <div class="calculator__scrollbar-labels">
                                <div class="calculator__scrollbar-label">1 тыс. руб.</div>
                                <div class="calculator__scrollbar-label">3 000 000</div>
                            </div>
                        </div>
                    </div>
                    <div class="calculator__result">
                        <button type="submit" class="calculator__calc-button">Рассчитать</button>
                        <span class="calculator__result-text"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <nav class="footer-menu">
            <ul class="footer-menu__list">
                <li class="footer-menu__item"><a href="#" class="footer-menu__link">Кредитные карты</a></li>
                <li class="footer-menu__item"><a href="#" class="footer-menu__link">Вклады</a></li>
                <li class="footer-menu__item"><a href="#" class="footer-menu__link">Дебетовая карта</a></li>
                <li class="footer-menu__item"><a href="#" class="footer-menu__link">Страхование</a></li>
                <li class="footer-menu__item"><a href="#" class="footer-menu__link">Друзья</a></li>
                <li class="footer-menu__item"><a href="#" class="footer-menu__link">Интернет-банк</a></li>
            </ul>
        </nav>
    </div>
</footer>
</body>
</html>
