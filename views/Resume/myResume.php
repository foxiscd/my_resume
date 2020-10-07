<?php

use \yii\helpers\Html;

?>
    <h1 style="text-align: center">Мое резюме</h1>
<?php if (!$_COOKIE['authToken']): ?>
    <h2>Для просмотра резюме необходимо <?= Html::a('Зарегестрироваться', ['user/register']) ?></h2>
<?php else: ?>
    <div style="display: inline-block">
        <div>
            <img src="/web/imgs/photo.jpeg" alt="Фотография Григорий Александров">
        </div>
        <div>
            <h1 style="text-align: left">Александров Григорий Сергеевич </h1>
        </div>
        <div>
            <h2>Обо мне</h2>
            <strong>Дата рождения:</strong>18.01.1994 – 25 полных лет. <br>
            <strong>Семейное положение:</strong> женат <br>
            <strong>Дети:</strong> нет <br>
        </div>
        <div>
            <h2>Образование</h2>
            <strong>Южно-Уральский государственный университет:</strong><br>
            <em>Бакалавриат:</em> 01.09.2010- 20.07.2014-электротехника, электромеханика и электро-технологии. <br>
            <em>Магистратура:</em> 01.09.2014- 20.07.2016- электроэнергетика, электротехника. <br>
        </div>
        <div style="float: left; padding-right: 40px;">
            <h2>Основные навыки</h2>
            <p>Ниже приведены навыки и материалы, пройденые в ходе самостоятельной подготовки</p>
            <ol>
                <li><b>PHP 7:</b></li>
                <span>Пройден курс  <a href="http://www.webshake.ru">www.webshake.ru</a></span><br>
                <span>Изучен материал книги Дмитрия Котерова <a
                            href="https://codernet.ru/books/php/php_7_v_podlinnike_dmitrij_koterov/">PHP 7</a></span>
                <p><b>Приобретенные теоретические и практические знания:</b></p>
                <ul>
                    <li>MVC</li>
                    <li>ORM</li>
                    <li>PSR</li>
                    <li>Patterns</li>
                </ul>
                <br>

                <li><b>FrameWorks:</b></li>

                <ul>
                    <li>Yii:</li>
                    <span>Курс <a href="https://php-up.com">Виктора Зинченко</a></span><br>
                    <a href="https://www.yiiframework.com/doc/guide/2.0/ru">Оффициальная документация</a>
                    <li>Symfony:</li>
                    <span>Курс <a href="http://www.webshake.ru">www.webshake.ru</a></span>
                </ul>
                <br>

                <li><b>MySQL</b></li>
                <span>Книга Виктора Гольцмана <a href="https://muff.kiev.ua/files/books/MySQL50LibraryProgrammerHoltzman.pdf">MySQL 5.0</a></span><br>
                <p>Курс <a href="http://www.webshake.ru">www.webshake.ru</a></p>

                <li><b>GIT</b></li>
                <p>Курс <a href="https://githowto.com/ru"> Githowto</a></p>

                <li><b>Composer</b></li>
                <p>Курс <a href="http://www.webshake.ru">www.webshake.ru</a></p>

                <li><b>Bootstrap</b></li>
                <span><a href="https://www.yiiframework.com/doc/guide/2.0/ru">Оффициальная документация</a></span><br>
                <p><a href="https://www.youtube.com/watch?v=TZSY6rDUDrE&list=PL0lO_mIqDDFUQI5lrRlZfkApMWtJJ7GFE">Видео урок</a></p>

                <li><b>javascript(base) , jquery(base)</b></li>
                <p><a href="https://www.youtube.com/watch?v=JgIG6d3JsZs&list=PL0lO_mIqDDFUGX9k45bZFuz1ixTvUhd7b">Видео урок</a></p>

                <li><b>HTML</b></li>
                <span><a href="http://htmlbook.ru/html">Оффициальная документация</a></span><br>
                <p>Курс <a href="http://www.webshake.ru">www.webshake.ru</a></p>

                <li><b>CSS</b></li>
                <span><a href="http://htmlbook.ru/html">Оффициальная документация</a></span><br>
                <p>Курс <a href="http://www.webshake.ru">www.webshake.ru</a></p>

            </ol>
        </div>
        <div>
            <h2>Примеры работ</h2>
            <p>Репозиторий <a href="https://github.com/foxiscd">GitHub</a></p>
        </div>
        <div style="float: left">
            <h2>Личные качества</h2>
            <ul>
                <li>Коммуникабельность;</li>
                <li>Высокая работоспособность;</li>
                <li>Ответственность;</li>
                <li>Легкая обучаемость;</li>
                <li>Исполнительность;</li>
                <li>Стремление к самосовершенствованию;</li>
                <li>Стрессоустойчивость.</li>
            </ul>
        </div>
        <div style="float: left">
            <h2>Опыт работы</h2>
            <h3>ООО “Челябинский завод электрооборудования”</h3>
            <strong>Должность:</strong> руководитель департамента разработок высоковольтного оборудования. <br>
            <strong>Должностные обязанности:</strong>
            <ol>
                <li>Контроль работы и составления плана отдела;</li>
                <li>Организация разработки проектов новых опытных и промышленных установок;</li>
                <li>Техническое консультирование сотрудников отдела продаж и заказчиков;</li>
                <li>Проверка и согласование входящих проектов на предмет возможности технической и конструкторской
                    реализации;
                </li>
                <li>Составление заказ-нарядов на выпускаемую продукцию и расчет сырья на ее изготовление;</li>
                <li>Оптимизация работы и взаимодействия внутри отдела и между структурами предприятия.</li>
            </ol>
            <h3>ООО “Челябинский завод электрооборудования”</h3>
            <strong>Должность:</strong> инженер-конструктор <br>
            <strong>Должностные обязанности:</strong>
            <ol>
                <li>Формирование конструкторской документации для производства;</li>
                <li>Разработка технологий лазерной резки, гибки, сварки и покраски металлоконструкций;</li>
                <li>Составление инструкций по эксплуатации электрооборудования типа: НКУ, КРУ, КТП;</li>
                <li>Ведение заказов на всех этапах производства;</li>
                <li>Составление заказ-нарядов на выпускаемую продукцию.</li>
            </ol>
        </div>
    </div>

<?php endif; ?>