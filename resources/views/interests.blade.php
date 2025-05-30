@extends('layout')


@section('content')
    <link rel="stylesheet" href={{ 'assets/styles/interests.css' }}>
    <style>
        .interests__content {
            width: 100%;
            padding: 120px 10vw;
            margin: 0 auto;
        }

        .diagram {
            max-width: 650px;
        }

        .interests-first {
            display: flex;
        }

        .interests__title {
            text-align: center;
            padding-bottom: 40px;
            font-size: 40px;
            font-family: 'Montserrat';
        }

        .interests-first__heading,
        .interests-second__heading,
        .interests-last__heading {
            padding: 10px 0;
            font-size: 24px;
            font-family: 'Montserrat';
        }

        .interests-first__description,
        .interests-second__description,
        .interests-last__description {
            font-size: 20px;
            font-family: 'Montserrat';
        }
    </style>
    <section class="interests">
        <div class="interests__content">
            <h2 class="interests__title">
                Интересы студентов
            </h2>
            <div class="interests-first">
                <div class="interests__information">
                    <h5 class="interests-first__heading">
                        1. Педагогические науки
                    </h5>
                    <p class="interests-first__description">
                        Профессии в сфере образования продолжают оставаться одними из самых востребованных. Особенно высок
                        спрос на:
                        -учителей средней школы по общественным наукам (31 тыс. вакансий);
                        -воспитателей в дошкольном образовании (27 тыс.);
                        -учителей начальной школы (20 тыс.);
                        -учителей средней школы по естественным наукам (17 тыс.);
                        -учителей средней школы по математическим наукам (16 тыс.) .
                        Postupi.kz
                        В 2024-2025 учебном году на грантах в колледжах Казахстана смогут обучаться около 145 тыс.
                        студентов, при этом государственный образовательный заказ расширен по техническим специальностям,
                        включая педагогические науки .
                        Kursiv Media Kazakhstan
                    </p>
                    <h5 class="interests-second__heading">
                        2. Инженерные и строительные специальности
                    </h5>
                    <p class="interests-second__description">
                        Спрос на инженеров и специалистов в области строительства стабильно растет. В Казахстане активно
                        реализуются масштабные инфраструктурные проекты, требующие квалифицированных кадров.
                        Get Edu. В 2024-2025 учебном году на грантах в колледжах Казахстана смогут обучаться около 145 тыс.
                        студентов. Государственный образовательный заказ расширен по техническим специальностям: геология,
                        машиностроение, энергетика, информационные технологии, металлургия, транспорт и другие.
                    </p>
                </div>
                <img src="/assets/images/popular_specialties_kz_2025.png" alt="" class="diagram">
            </div>
            <div class="interests-last">
                <h5 class="interests-last__heading">
                    3. Информационные технологии
                </h5>
                <p class="interests-last__description">
                    Цифровизация экономики и рост IT-сектора делают специальности в области информационных технологий
                    чрезвычайно популярными. Студенты выбирают направления, связанные с программированием,
                    кибербезопасностью, анализом данных и искусственным интеллектом.
                    Get Edu. В 2024-2025 учебном году на грантах в колледжах Казахстана смогут обучаться около 145 тыс.
                    студентов. Государственный образовательный заказ расширен по техническим специальностям, включая
                    информационные технологии
                </p>
            </div>
        </div>
    </section>
@endsection
