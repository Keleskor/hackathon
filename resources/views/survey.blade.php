@extends('layout')

@section('content')
        <style>
        .form {
            margin-top: 150px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        .form__block {
            padding: 56px 76px;
            border-radius: 20px;
            border: 1px solid #000;
            margin-bottom: 40px;
        }

        .form__block__title {
            font-size: 40px;
            font-weight: 600;
            color: #4B74DC;
            font-family: 'Montserrat';
        }

        .form__block label {
            font-size: 40px;
            font-weight: 600;
            font-family: 'Montserrat';
        }

        .form__block input {
            width: 43px;
            height: 43px;
            margin-right: 13px;
            font-family: 'Montserrat';
        }

        .form__block_flex {
            display: flex;
            align-items: center;
            margin-top: 30px;
        }

        .form__block_flex {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .btn-submit {
            width: 241px;
            height: 91px;
            background-color: #4B74DC;
            border-radius: 10px;
            font-size: 36px;
            font-weight: 700;
            color: white;
            border: none;
            margin-bottom: 40px;
        }

        .btn-submit2 {
            width: 241px;
            height: 91px;
            background-color: #4bb3dc;
            border-radius: 10px;
            font-size: 36px;
            font-weight: 700;
            color: white;
            border: none;
            margin-bottom: 40px;
        }

    </style>
    <form action={{ route('Question') }} class="form">
        <div class="form__block">
            <p class="form__block__title">1. Что тебе больше всего нравится делать?</p>
            <div class="form__block_flex">
                <input type="radio" name="answer1" id="answer1a" value="A" required>
                <label for="answer1a">A. Работать за компьютером, решать логические задачи</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer1" id="answer1b" value="B">
                <label for="answer1b">B. Быть на свежем воздухе, заниматься растениями или животными</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer1" id="answer1c" value="C">
                <label for="answer1c">C. Чинить технику или водить машину</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer1" id="answer1d" value="D">
                <label for="answer1d">D. Помогать людям, лечить или обучать</label>
            </div>
        </div>

        <div class="form__block">
            <p class="form__block__title">2. Как ты предпочитаешь работать?</p>
            <div class="form__block_flex">
                <input type="radio" name="answer2" id="answer2a" value="A" required>
                <label for="answer2a">A. В тишине и сосредоточенности, за компьютером или с бумагами</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer2" id="answer2b" value="B">
                <label for="answer2b">B. На улице или в движении, с природой или техникой</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer2" id="answer2c" value="C">
                <label for="answer2c">C. Руками — что-то строить, мастерить или шить</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer2" id="answer2d" value="D">
                <label for="answer2d">D. С людьми — общаться, заботиться, обучать</label>
            </div>
        </div>

        <div class="form__block">
            <p class="form__block__title">3. Какие школьные предметы тебе ближе?</p>
            <div class="form__block_flex">
                <input type="radio" name="answer3" id="answer3a" value="A" required>
                <label for="answer3a">A. Информатика, математика</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer3" id="answer3b" value="B">
                <label for="answer3b">B. Биология, география, труд</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer3" id="answer3c" value="C">
                <label for="answer3c">C. Физика, черчение, технология</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer3" id="answer3d" value="D">
                <label for="answer3d">D. Литература, история, обществознание</label>
            </div>
        </div>

        <div class="form__block">
            <p class="form__block__title">4. Какой результат работы тебя радует больше всего?</p>
            <div class="form__block_flex">
                <input type="radio" name="answer4" id="answer4a" value="A" required>
                <label for="answer4a">A. Готовая программа, сайт или решение сложной задачи</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer4" id="answer4b" value="B">
                <label for="answer4b">B. Урожай, красивая одежда или починенная техника</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer4" id="answer4c" value="C">
                <label for="answer4c">C. Построенный дом, изделие, одежда</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer4" id="answer4d" value="D">
                <label for="answer4d">D. Улыбка человека, которому ты помог или чему-то научил</label>
            </div>
        </div>

        <div class="form__block">
            <p class="form__block__title">5. Какую из этих целей ты считаешь для себя самой важной?</p>
            <div class="form__block_flex">
                <input type="radio" name="answer5" id="answer5a" value="A" required>
                <label for="answer5a">A. Развивать технологии и автоматизировать процессы</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer5" id="answer5b" value="B">
                <label for="answer5b">B. Создавать что-то полезное руками или с помощью техники</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer5" id="answer5c" value="C">
                <label for="answer5c">C. Заботиться о людях и улучшать их жизнь</label>
            </div>
            <div class="form__block_flex">
                <input type="radio" name="answer5" id="answer5d" value="D">
                <label for="answer5d">D. Передавать знания, вдохновлять или делать мир красивее</label>
            </div>
        </div>

        <input type="submit" class="btn-submit">

    </form>
        @session('modal')
            <div class="modal-auth" style="display: flex;margin-top:1000px;">
            <div class="modal-auth__content">
                <h4 class="modal-reg__title">
                    Спасибо за прохождение опроса!
                    Ты сделал(а) важный шаг на пути к выбору будущей профессии.
                    Тебе подходит больше всего профессий: {{ session('modal.name') }}
                </h4>

                <a href={{ route('CollegeName') }}>
                    <button class="btn-submit2">Переходить</button>
                </a>
            </div>
        </div>
        @endsession
    <script src="assets/scripts/script.js"></script>
@endsection

