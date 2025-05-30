<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profession::create([
            "profession" => "Вычислительная техника и информационные сети",
            "qualification" => "Оператор компьютерного аппаратного обеспечения",
            "profession_code" => "06120100",
            "qualification_code" => "06120101",
            "term" => "1 г 10 мес",
            "name_college_id" => "1",
            "category_id" => "1"
        ]);

        Profession::create([
            "profession" => "Механизация сельского хозяйства",
            "qualification" => "Тракторист-машинист сельскохозяйственного производства",
            "profession_code" => "07161600",
            "qualification_code" => "07161603",
            "term" => "1 г 10 мес",
            "name_college_id" => "1",
            "category_id" => "2"
        ]);

        Profession::create([
            "profession" => "Техническое обслуживание, ремонт и эксплуатация автомобильного транспорта",
            "qualification" => "Мастер по ремонту автомобильного транспорта",
            "profession_code" => "07161300",
            "qualification_code" => "07161303",
            "term" => "2 г 10 мес",
            "name_college_id" => "1",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Швейное производство и моделирование одежды",
            "qualification" => "Швея",
            "profession_code" => "07230100",
            "qualification_code" => "07230101",
            "term" => "10 мес",
            "name_college_id" => "1",
            "category_id" => "4"
        ]);
        Profession::create([
            "profession" => "Акушерское дело",
            "qualification" => "Акушер",
            "profession_code" => "09130200",
            "qualification_code" => "09130201",
            "term" => "--",
            "name_college_id" => "2",
            "category_id" => "5"
        ]);

        Profession::create([
            "profession" => "Лабораторная диагностика",
            "qualification" => "Медицинский лаборант",
            "profession_code" => "09140100",
            "qualification_code" => "09140101",
            "term" => "--",
            "name_college_id" => "2",
            "category_id" => "9"
        ]);

        Profession::create([
            "profession" => "Лечебное дело",
            "qualification" => "Фельдшер",
            "profession_code" => "09120100",
            "qualification_code" => "09120101",
            "term" => "--",
            "name_college_id" => "2",
            "category_id" => "5"
        ]);

        Profession::create([
            "profession" => "Сестринское дело",
            "qualification" => "Младшая медицинская сестра по уходу",
            "profession_code" => "09130100",
            "qualification_code" => "09130101",
            "term" => "--",
            "name_college_id" => "2",
            "category_id" => "4"
        ]);

        Profession::create([
            "profession" => "Стоматология",
            "qualification" => "Гигиенист стоматологический",
            "profession_code" => "09110100",
            "qualification_code" => "09110101",
            "term" => "--",
            "name_college_id" => "2",
            "category_id" => "5"
        ]);
        Profession::create([
            "profession" => "Грузоподъемные машины и транспортеры",
            "qualification" => "Машинист кранов",
            "profession_code" => "07150700",
            "qualification_code" => "07150701",
            "term" => "2 г 10 мес",
            "name_college_id" => "3",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Сварочное дело",
            "qualification" => "Электрогазосварщик",
            "profession_code" => "07150500",
            "qualification_code" => "07150501",
            "term" => "2 г 10 мес",
            "name_college_id" => "3",
            "category_id" => "6"
        ]);

        Profession::create([
            "profession" => "Слесарное дело",
            "qualification" => "Слесарь-ремонтник",
            "profession_code" => "07150600",
            "qualification_code" => "07150601",
            "term" => "2 г 10 мес",
            "name_college_id" => "3",
            "category_id" => "6"
        ]);

        Profession::create([
            "profession" => "Техническое обслуживание, ремонт и эксплуатация автомобильного транспорта",
            "qualification" => "Слесарь по ремонту автомобилей",
            "profession_code" => "07161300",
            "qualification_code" => "07161301",
            "term" => "2 г 10 мес",
            "name_college_id" => "3",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Техническое обслуживание, ремонт и эксплуатация электромеханического оборудования",
            "qualification" => "Электрослесарь по обслуживанию и ремонту электромеханического оборудования",
            "profession_code" => "07130700",
            "qualification_code" => "07130702",
            "term" => "2 г 10 мес",
            "name_college_id" => "3",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Технология машиностроения",
            "qualification" => "Станочник широкого профиля",
            "profession_code" => "07150100",
            "qualification_code" => "07150102",
            "term" => "2 г 10 мес",
            "name_college_id" => "3",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Токарное дело",
            "qualification" => "Токарь",
            "profession_code" => "07150300",
            "qualification_code" => "07150301",
            "term" => "2 г 10 мес",
            "name_college_id" => "3",
            "category_id" => "6"
        ]);

        Profession::create([
            "profession" => "Электрооборудование",
            "qualification" => "Электромонтер",
            "profession_code" => "07130100",
            "qualification_code" => "07130101",
            "term" => "2 г 10 мес",
            "name_college_id" => "3",
            "category_id" => "6"
        ]);
        Profession::create([
            "profession" => "Защита в чрезвычайных ситуациях",
            "qualification" => "Спасатель",
            "profession_code" => "10320200",
            "qualification_code" => "10320201",
            "term" => "3 г 10 мес",
            "name_college_id" => "4",
            "category_id" => "6"
        ]);

        Profession::create([
            "profession" => "Монтаж и эксплуатация оборудования и систем газоснабжения",
            "qualification" => "Слесарь по эксплуатации и ремонту газового оборудования",
            "profession_code" => "07321200",
            "qualification_code" => "07321201",
            "term" => "3 г 10 мес",
            "name_college_id" => "4",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Строительство и эксплуатация зданий и сооружений",
            "qualification" => "Мастер сухого строительства",
            "profession_code" => "07320100",
            "qualification_code" => "07320103",
            "term" => "3 г 10 мес",
            "name_college_id" => "4",
            "category_id" => "7"
        ]);

        Profession::create([
            "profession" => "Теплотехническое оборудование и системы теплоснабжения",
            "qualification" => "Техник-теплотехник",
            "profession_code" => "07130400",
            "qualification_code" => "07130403",
            "term" => "3 г 10 мес",
            "name_college_id" => "4",
            "category_id" => "7"
        ]);

        Profession::create([
            "profession" => "Техническое обслуживание, ремонт и эксплуатация автомобильного транспорта",
            "qualification" => "Слесарь по ремонту автомобилей",
            "profession_code" => "07161300",
            "qualification_code" => "07161301",
            "term" => "3 г 10 мес",
            "name_college_id" => "4",
            "category_id" => "7"
        ]);

        Profession::create([
            "profession" => "Учет и аудит",
            "qualification" => "Бухгалтер",
            "profession_code" => "04110100",
            "qualification_code" => "04110102",
            "term" => "3 г 10 мес",
            "name_college_id" => "4",
            "category_id" => "10"
        ]);

        Profession::create([
            "profession" => "Электроснабжение",
            "qualification" => "Электромонтажник",
            "profession_code" => "07130200",
            "qualification_code" => "07130201",
            "term" => "3 г 10 мес",
            "name_college_id" => "4",
            "category_id" => "7"
        ]);
        Profession::create([
            "profession" => "Документационное обеспечение управления и архивоведение",
            "qualification" => "Архивист",
            "profession_code" => "03220200",
            "qualification_code" => "03220203",
            "term" => "--",
            "name_college_id" => "5",
            "category_id" => "1"
        ]);

        Profession::create([
            "profession" => "Дошкольное воспитание и обучение",
            "qualification" => "Воспитатель организации дошкольного воспитания и обучения",
            "profession_code" => "01120100",
            "qualification_code" => "01120102",
            "term" => "--",
            "name_college_id" => "5",
            "category_id" => "9"
        ]);

        Profession::create([
            "profession" => "Педагогика и методика начального обучения",
            "qualification" => "Учитель начального образования",
            "profession_code" => "01140100",
            "qualification_code" => "01140101",
            "term" => "--",
            "name_college_id" => "5",
            "category_id" => "9"
        ]);
        Profession::create([
            "profession" => "Организация перевозок и управление движением на железнодорожном транспорте",
            "qualification" => "Дежурный по железнодорожной станции 4-го и 5-го классов",
            "profession_code" => "10410200",
            "qualification_code" => "10410201",
            "term" => "--",
            "name_college_id" => "6",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Педагогика и методика начального обучения",
            "qualification" => "Учитель начального образования",
            "profession_code" => "01140100",
            "qualification_code" => "01140101",
            "term" => "--",
            "name_college_id" => "6",
            "category_id" => "8"
        ]);

        Profession::create([
            "profession" => "Переводческое дело",
            "qualification" => "Переводчик",
            "profession_code" => "02310100",
            "qualification_code" => "02310101",
            "term" => "--",
            "name_college_id" => "6",
            "category_id" => "10"
        ]);

        Profession::create([
            "profession" => "Подземная разработка месторождений полезных ископаемых",
            "qualification" => "Техник-технолог",
            "profession_code" => "07240100",
            "qualification_code" => "07240105",
            "term" => "--",
            "name_college_id" => "6",
            "category_id" => "6"
        ]);

        Profession::create([
            "profession" => "Радиотехника, электроника и телекоммуникации",
            "qualification" => "Электромонтажник-наладчик телекоммуникационного оборудования и каналов связи",
            "profession_code" => "07140900",
            "qualification_code" => "07140901",
            "term" => "--",
            "name_college_id" => "6",
            "category_id" => "6"
        ]);

        Profession::create([
            "profession" => "Стандартизация, метрология и сертификация",
            "qualification" => "Техник по стандартизации",
            "profession_code" => "07880100",
            "qualification_code" => "07880101",
            "term" => "--",
            "name_college_id" => "6",
            "category_id" => "7"
        ]);

        Profession::create([
            "profession" => "Техническое обслуживание, ремонт и эксплуатация автомобильного транспорта",
            "qualification" => "Слесарь по ремонту автомобилей",
            "profession_code" => "07161300",
            "qualification_code" => "07161301",
            "term" => "--",
            "name_college_id" => "6",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Учет и аудит",
            "qualification" => "Бухгалтер",
            "profession_code" => "04110100",
            "qualification_code" => "04110102",
            "term" => "--",
            "name_college_id" => "6",
            "category_id" => "10"
        ]);

        Profession::create([
            "profession" => "Физическая культура и спорт",
            "qualification" => "Учитель физической культуры",
            "profession_code" => "01140500",
            "qualification_code" => "01140501",
            "term" => "--",
            "name_college_id" => "6",
            "category_id" => "8"
        ]);

        Profession::create([
            "profession" => "Эксплуатация, ремонт и техническое обслуживание тягового подвижного состава железных дорог",
            "qualification" => "Помощник машиниста локомотива",
            "profession_code" => "07160500",
            "qualification_code" => "07160501",
            "term" => "--",
            "name_college_id" => "6",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Электроснабжение",
            "qualification" => "Электромонтажник",
            "profession_code" => "07130200",
            "qualification_code" => "07130201",
            "term" => "--",
            "name_college_id" => "6",
            "category_id" => "6"
        ]);
        Profession::create([
            "profession" => "Автоматизация и управление технологическими процессами (по профилю)",
            "qualification" => "Слесарь по обслуживанию и ремонту контрольно-измерительных приборов и автоматики",
            "profession_code" => "07140100",
            "qualification_code" => "07140101",
            "term" => "--",
            "name_college_id" => "7",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Организация перевозок и управление движением на железнодорожном транспорте",
            "qualification" => "Дежурный по железнодорожной станции 4-го и 5-го классов",
            "profession_code" => "10410200",
            "qualification_code" => "10410201",
            "term" => "--",
            "name_college_id" => "7",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Правоведение",
            "qualification" => "Юрист",
            "profession_code" => "04210100",
            "qualification_code" => "04210101",
            "term" => "--",
            "name_college_id" => "7",
            "category_id" => "10"
        ]);

        Profession::create([
            "profession" => "Строительство железных дорог, путь и путевое хозяйство",
            "qualification" => "Мастер по текущему содержанию и ремонту железнодорожных путей",
            "profession_code" => "07320800",
            "qualification_code" => "07320801",
            "term" => "--",
            "name_college_id" => "7",
            "category_id" => "7"
        ]);

        Profession::create([
            "profession" => "Строительство и эксплуатация автомобильных дорог и аэродромов",
            "qualification" => "Машинист дорожно-строительных машин",
            "profession_code" => "07320700",
            "qualification_code" => "07320702",
            "term" => "--",
            "name_college_id" => "7",
            "category_id" => "7"
        ]);

        Profession::create([
            "profession" => "Техническое обслуживание, ремонт и эксплуатация автомобильного транспорта",
            "qualification" => "Мастер по ремонту автомобильного транспорта",
            "profession_code" => "07161300",
            "qualification_code" => "07161303",
            "term" => "--",
            "name_college_id" => "7",
            "category_id" => "7"
        ]);

        Profession::create([
            "profession" => "Туризм",
            "qualification" => "Менеджер по туризму",
            "profession_code" => "10150100",
            "qualification_code" => "10150104",
            "term" => "--",
            "name_college_id" => "7",
            "category_id" => "10"
        ]);

        Profession::create([
            "profession" => "Швейное производство и моделирование одежды",
            "qualification" => "Швея",
            "profession_code" => "07230100",
            "qualification_code" => "07230101",
            "term" => "--",
            "name_college_id" => "7",
            "category_id" => "4"
        ]);

        Profession::create([
            "profession" => "Эксплуатация, ремонт и техническое обслуживание тягового подвижного состава железных дорог",
            "qualification" => "Помощник машиниста локомотива",
            "profession_code" => "07160500",
            "qualification_code" => "07160501",
            "term" => "--",
            "name_college_id" => "7",
            "category_id" => "4"
        ]);
        Profession::create([
            "profession" => "Организация питания",
            "qualification" => "Повар",
            "profession_code" => "10130300",
            "qualification_code" => "10130302",
            "term" => "--",
            "name_college_id" => "8",
            "category_id" => "10"
        ]);

        Profession::create([
            "profession" => "Парикмахерское искусство",
            "qualification" => "Парикмахер-стилист",
            "profession_code" => "10120100",
            "qualification_code" => "10120101",
            "term" => "--",
            "name_college_id" => "8",
            "category_id" => "4"
        ]);

        Profession::create([
            "profession" => "Сварочное дело",
            "qualification" => "Электрогазосварщик",
            "profession_code" => "07150500",
            "qualification_code" => "07150501",
            "term" => "--",
            "name_college_id" => "8",
            "category_id" => "6"
        ]);

        Profession::create([
            "profession" => "Строительство и эксплуатация автомобильных дорог и аэродромов",
            "qualification" => "Машинист дорожно-строительных машин",
            "profession_code" => "07320700",
            "qualification_code" => "07320702",
            "term" => "--",
            "name_college_id" => "8",
            "category_id" => "7"
        ]);

        Profession::create([
            "profession" => "Техническое обслуживание, ремонт и эксплуатация автомобильного транспорта",
            "qualification" => "Слесарь по ремонту автомобилей",
            "profession_code" => "07161300",
            "qualification_code" => "07161301",
            "term" => "--",
            "name_college_id" => "8",
            "category_id" => "7"
        ]);

        Profession::create([
            "profession" => "Хлебопекарное, макаронное и кондитерское производство",
            "qualification" => "Кондитер",
            "profession_code" => "07210300",
            "qualification_code" => "07210302",
            "term" => "--",
            "name_college_id" => "8",
            "category_id" => "10"
        ]);

        Profession::create([
            "profession" => "Швейное производство и моделирование одежды",
            "qualification" => "Швея",
            "profession_code" => "07230100",
            "qualification_code" => "07230101",
            "term" => "--",
            "name_college_id" => "8",
            "category_id" => "4"
        ]);
        Profession::create([
            "profession" => "Организация перевозок и управление движением на железнодорожном транспорте",
            "qualification" => "Техник-организатор перевозок",
            "profession_code" => "10410200",
            "qualification_code" => "10410205",
            "term" => "--",
            "name_college_id" => "9",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Социальная работа",
            "qualification" => "Социальный работник",
            "profession_code" => "09230100",
            "qualification_code" => "09230102",
            "term" => "--",
            "name_college_id" => "9",
            "category_id" => "10"
        ]);

        Profession::create([
            "profession" => "Техническое обслуживание, ремонт и эксплуатация автомобильного транспорта",
            "qualification" => "Техник-механик",
            "profession_code" => "07161300",
            "qualification_code" => "07161304",
            "term" => "--",
            "name_college_id" => "9",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Учет и аудит",
            "qualification" => "Бухгалтер",
            "profession_code" => "04110100",
            "qualification_code" => "04110102",
            "term" => "--",
            "name_college_id" => "9",
            "category_id" => "8"
        ]);
        Profession::create([
            "profession" => "Актерское искусство",
            "qualification" => "Артист драматического театра",
            "profession_code" => "02150500",
            "qualification_code" => "02150501",
            "term" => "--",
            "name_college_id" => "10",
            "category_id" => "8"
        ]);

        Profession::create([
            "profession" => "Библиотечное дело",
            "qualification" => "Библиотекарь",
            "profession_code" => "03220100",
            "qualification_code" => "03220101",
            "term" => "--",
            "name_college_id" => "10",
            "category_id" => "8"
        ]);

        Profession::create([
            "profession" => "Вокальное искусство",
            "qualification" => "Артист академического пения, преподаватель детской музыкальной школы",
            "profession_code" => "02150300",
            "qualification_code" => "02150301",
            "term" => "--",
            "name_college_id" => "10",
            "category_id" => "8"
        ]);

        Profession::create([
            "profession" => "Инструментальное исполнительство",
            "qualification" => "Концертмейстер, преподаватель детской музыкальной школы",
            "profession_code" => "02150100",
            "qualification_code" => "02150101",
            "term" => "--",
            "name_college_id" => "10",
            "category_id" => "8"
        ]);

        Profession::create([
            "profession" => "Музыкальное образование",
            "qualification" => "Учитель музыки дошкольного, начального и основного среднего образования",
            "profession_code" => "01140200",
            "qualification_code" => "01140201",
            "term" => "--",
            "name_college_id" => "10",
            "category_id" => "8"
        ]);

        Profession::create([
            "profession" => "Народное художественное творчество",
            "qualification" => "Руководитель самодеятельного хореографического коллектива, преподаватель",
            "profession_code" => "02151000",
            "qualification_code" => "02151001",
            "term" => "--",
            "name_college_id" => "10",
            "category_id" => "8"
        ]);

        Profession::create([
            "profession" => "Социально-культурная деятельность",
            "qualification" => "Организатор культурно-массовых мероприятий, преподаватель",
            "profession_code" => "02150900",
            "qualification_code" => "02150902",
            "term" => "--",
            "name_college_id" => "10",
            "category_id" => "10"
        ]);

        Profession::create([
            "profession" => "Хоровое дирижирование",
            "qualification" => "Хормейстер, преподаватель",
            "profession_code" => "02150400",
            "qualification_code" => "02150401",
            "term" => "--",
            "name_college_id" => "10",
            "category_id" => "8"
        ]);
        Profession::create([
            "profession" => "Обогащение полезных ископаемых (рудообогащение)",
            "qualification" => "Оператор дробильно-сортировочного оборудования",
            "profession_code" => "07240500",
            "qualification_code" => "07240501",
            "term" => "2 г 10 мес",
            "name_college_id" => "11",
            "category_id" => "4"
        ]);

        Profession::create([
            "profession" => "Строительство подземных сооружений",
            "qualification" => "Проходчик",
            "profession_code" => "07240600",
            "qualification_code" => "07240601",
            "term" => "2 г 10 мес",
            "name_college_id" => "11",
            "category_id" => "7"
        ]);
        Profession::create([
            "profession" => "Механизация сельского хозяйства",
            "qualification" => "Слесарь-ремонтник",
            "profession_code" => "07161600",
            "qualification_code" => "07161601",
            "term" => "--",
            "name_college_id" => "12",
            "category_id" => "2"
        ]);

        Profession::create([
            "profession" => "Техническое обслуживание, ремонт и эксплуатация автомобильного транспорта",
            "qualification" => "Техник-механик",
            "profession_code" => "07161300",
            "qualification_code" => "07161304",
            "term" => "--",
            "name_college_id" => "12",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Учет и аудит",
            "qualification" => "Бухгалтер",
            "profession_code" => "04110100",
            "qualification_code" => "04110102",
            "term" => "--",
            "name_college_id" => "12",
            "category_id" => "10"
        ]);
        Profession::create([
            "profession" => "Лечебное дело",
            "qualification" => "Фельдшер",
            "profession_code" => "09120100",
            "qualification_code" => "09120101",
            "term" => "--",
            "name_college_id" => "13",
            "category_id" => "5"
        ]);

        Profession::create([
            "profession" => "Сестринское дело",
            "qualification" => "Медицинская сестра общей практики",
            "profession_code" => "09130100",
            "qualification_code" => "09130103",
            "term" => "--",
            "name_college_id" => "13",
            "category_id" => "2"
        ]);

        Profession::create([
            "profession" => "Фармация",
            "qualification" => "Фармацевт",
            "profession_code" => "09160100",
            "qualification_code" => "09160101",
            "term" => "--",
            "name_college_id" => "13",
            "category_id" => "2"
        ]);
        Profession::create([
            "profession" => "Организация питания",
            "qualification" => "Кондитер-оформитель",
            "profession_code" => "10130300",
            "qualification_code" => "10130301",
            "term" => "--",
            "name_college_id" => "14",
            "category_id" => "10"
        ]);

        Profession::create([
            "profession" => "Сварочное дело",
            "qualification" => "Электрогазосварщик",
            "profession_code" => "07150500",
            "qualification_code" => "07150501",
            "term" => "--",
            "name_college_id" => "14",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Строительство и эксплуатация зданий и сооружений",
            "qualification" => "Мастер-строитель широкого профиля",
            "profession_code" => "07320100",
            "qualification_code" => "07320104",
            "term" => "--",
            "name_college_id" => "14",
            "category_id" => "7"
        ]);

        Profession::create([
            "profession" => "Техническое обслуживание, ремонт и эксплуатация автомобильного транспорта",
            "qualification" => "Слесарь по ремонту автомобилей",
            "profession_code" => "07161300",
            "qualification_code" => "07161301",
            "term" => "--",
            "name_college_id" => "14",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Токарное дело",
            "qualification" => "Токарь",
            "profession_code" => "07150300",
            "qualification_code" => "07150301",
            "term" => "--",
            "name_college_id" => "14",
            "category_id" => "6"
        ]);
        Profession::create([
            "profession" => "Геологическая съемка, поиск и разведка месторождений полезных ископаемых",
            "qualification" => "Техник-геолог",
            "profession_code" => "05320100",
            "qualification_code" => "05320103",
            "term" => "3 г 10 мес",
            "name_college_id" => "15",
            "category_id" => "3"
        ]);

        Profession::create([
            "profession" => "Маркшейдерское дело",
            "qualification" => "Техник-маркшейдер",
            "profession_code" => "07240200",
            "qualification_code" => "07240203",
            "term" => "3 г 10 мес",
            "name_college_id" => "15",
            "category_id" => "5"
        ]);

        Profession::create([
            "profession" => "Обогащение полезных ископаемых (рудообогащение)",
            "qualification" => "Техник-технолог",
            "profession_code" => "07240500",
            "qualification_code" => "07240503",
            "term" => "3 г 10 мес",
            "name_college_id" => "15",
            "category_id" => "7"
        ]);

        Profession::create([
            "profession" => "Открытая разработка месторождений полезных ископаемых",
            "qualification" => "Техник-технолог",
            "profession_code" => "07240300",
            "qualification_code" => "07240303",
            "term" => "3 г 10 мес",
            "name_college_id" => "15",
            "category_id" => "7"
        ]);

        Profession::create([
            "profession" => "Подземная разработка месторождений полезных ископаемых",
            "qualification" => "Техник-технолог",
            "profession_code" => "07240100",
            "qualification_code" => "07240105",
            "term" => "3 г 10 мес",
            "name_college_id" => "15",
            "category_id" => "7"
        ]);

        Profession::create([
            "profession" => "Техническое обслуживание, ремонт и эксплуатация электромеханического оборудования",
            "qualification" => "Техник-электромеханик",
            "profession_code" => "07130700",
            "qualification_code" => "07130704",
            "term" => "3 г 10 мес",
            "name_college_id" => "15",
            "category_id" => "3"
        ]);
    }
}
