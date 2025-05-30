<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЖВПК - Жезказганский политехнический колледж</title>
    <link rel="stylesheet" href={{ asset('assets/styles/main.css') }}>

    <link rel="stylesheet" href={{ asset('assets/styles/collegeOne.css') }}>
</head>

<body>
    <header class="header">
        <div class="header__wrapper">
            <img src="assets/icons/8e98f0dd5a3a1bcda97f2d0088d72c7560f60010.png" alt="" class="icon-ulytau">
            <ul class="header-list">
                <li class="header-list__element">
                    <a href="" class="header-list__link">
                        Главная
                    </a>
                </li>
                <li class="header-list__element">
                    <a href="" class="header-list__link">
                        Список <span class="colleges"> колледжей</span>
                    </a>
                </li>
                <li class="header-list__element">
                    <a href="" class="header-list__link">
                        Опрос
                    </a>
                </li>
                <li class="header-list__element">
                    <a href="" class="header-list__link">
                        Контакты
                    </a>
                </li>
                <li class="header-list__element">
                    <a href="" class="header-list__link">
                        Интересы студентов
                    </a>
                </li>
            </ul>
            <div class="authorization">
                <h5 class="registr">
                    Рестрация
                </h5>
                <h5 class="auth">
                    Вход
                </h5>
            </div>
        </div>
    </header>
    <div class="college-card">
        <img src={{ asset("logo/$college->logo") }} alt="Логотип колледжа" class="college-logo">

        <p class="college-title">{{ $college->name }}</p>

        <p class="college-description">
            {{ $college->description }}
        </p>

        <p class="college-info"><strong>Адрес:</strong> {{ $college->address }}</p>
        <p class="college-info"><strong>Телефон:</strong> {{ $college->tel }}</p>
        <p class="college-info college-link"><strong>Сайт:</strong> <a href={{ $college->site }}
                target="_blank">{{ $college->site }}</a></p>
    </div>

</body>

</html>
