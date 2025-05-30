@extends('layout')
    
@section('content')
    <section class="initial-section anim-down-top">
        <div class="initial-section__content">
            <div class="initial-section__information">
                <h1 class="initial-section__title">
                    Не знаешь <br> кем стать?
                </h1>
                <h4 class="initial-section__subtiltle">
                    Найдём профессию по твоим интересам и навыкам!
                </h4>
                <a href={{route("survey")}} class="button-test__link">
                    <button class="button-test">
                        Пройти тест
                    </button>
                </a>
            </div>
            <div class="main-video__wrapper">
                <video src="assets/video/жумысшы шапка рус.mp4"  class="main-video" autoplay loop muted></video>
            </div>
        </div>  
    </section>
    <section class="survey-help">
        <div class="survey-help__content">
            <h2 class="survey-help__title">
                Как это работает?
            </h2>
            <div class="survey-help__blocks">
                <div class="survey-help__block">
                    <div class="survey-help-image__wrapper">
                        <h5 class="survey-help__number">
                            1
                        </h5>
                        <img src="assets/icons/1.png" alt="" class="survey-help-image">
                    </div>
                    <p class="survevy-help__description">
                        Пройдите <br>
                        короткий тест
                    </p>
                </div>
                <div class="survey-help__block">
                    <div class="survey-help-image__wrapper">
                        <h5 class="survey-help__number">
                            2
                        </h5>
                        <img src="assets/icons/2.png" alt="" class="survey-help-image">
                    </div>
                    <p class="survevy-help__description">
                        Укажите  <br>
                        что нравится 
                    </p>
                </div>
                <div class="survey-help__block">
                    <div class="survey-help-image__wrapper">
                        <h5 class="survey-help__number">
                            3
                        </h5>
                        <img src="assets/icons/3.png" alt="" class="survey-help-image">
                    </div>
                    <p class="survevy-help__description">
                        Получите <br>
                        список професии
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="examples-professions">
        <div class="examples-professions__content">
            <h2 class="examples-professions__title">
                Примеры профессий
            </h2>
            <div class="examples-professions__blocks">
                <div class="examples-professions__block">
                    <img src="assets/icons/69f2a12ec46f4c9e4141545758d01e3fd79811b3.png" alt="" class="examples-professions__image">
                    <h4 class="examples-professions__heading">
                        Программист
                    </h4>
                    <h5 class="examples-professions__skills">
                        Навыки:
                        <br>
                        программирование
                    </h5>
                    <h5 class="examples-professions__interests">
                        Интересы:
                        <br>
                        техника и логика
                    </h5>
                </div>
                <div class="examples-professions__block">
                    <img src="assets/icons/61f2f2a217075c8ee2d1f7b929842775ae8c22b4.png" alt="" class="examples-professions__image">
                    <h4 class="examples-professions__heading">
                        Графический <br> дизайнер
                    </h4>
                    <h5 class="examples-professions__skills">
                        Навыки:
                        <br>
                        креативность,
                        <br>
                        рисование
                    </h5>
                    <h5 class="examples-professions__interests">
                        Интересы:
                        <br>
                        искусство, дизайн
                    </h5>
                </div>
                <div class="examples-professions__block">
                    <img src={{asset("assets/icons/7c6e3332f7d4f277edbc393436c49eb41579f430.png")}} alt="" class="examples-professions__image">
                    <h4 class="examples-professions__heading">
                        Педагог
                    </h4>
                    <h5 class="examples-professions__skills">
                        Навыки:
                        <br>
                        забота, решение
                    </h5>
                    <h5 class="examples-professions__interests">
                        Интересы:
                        <br>
                        дети, творчество
                    </h5>
                </div>
                <div class="examples-professions__block">
                    <img src="assets/icons/cee9ddd83faf0e2025ea61df445289212400a468.png" alt="" class="examples-professions__image">
                    <h4 class="examples-professions__heading">
                        Медицина
                    </h4>
                    <h5 class="examples-professions__skills">
                        Навыки:
                        <br>
                        уход, ответственность
                    </h5>
                    <h5 class="examples-professions__interests">
                        Интересы:
                        <br>
                        медицина и биология
                    </h5>
                </div>
            </div>
        </div>
    </section>
@endsection