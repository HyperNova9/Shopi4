-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 26 2020 г., 11:51
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Items`
--

CREATE TABLE `Items` (
  `title` varchar(100) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Items`
--

INSERT INTO `Items` (`title`, `info`, `img`, `price`, `id`) VALUES
('Клавиатура ZET GAMING Dagger', 'Игровая клавиатура ZET Dagger относится к механическому типу. Устройство, оборудованное клавишами Kailh Red, прослужит вам очень долго: ресурс клавиш этого устройства ввода оценивается в 70 миллионов нажатий. Удобству эксплуатации клавиатуры способствует наличие подставки под запястья. Имеется подсветка клавиш красного цвета, поэтому пользоваться клавиатурой можно даже в полной темноте.', 'img/1.jpg', '3999', 1),
('Мышь проводная A4Tech Bloody Blazing A9/A90 черный', 'Мышь проводная A4Tech Bloody Blazing A9 выполнена в полыхающем стиле с многоцветной LED-подсветкой. При заявленном разрешении до 4000 точек на дюйм, модель показывает высокие показатели скорости отклика – всего 1 мс. Продуманная эргономичная форма сохраняет тонус мышц правой руки при длительных турнирах.\r\nПластиковые, прорезиненные кнопки предусматривают цикл износостойкости в 20 млн кликов. Передовая технология 16-ступенчатой калибровки обеспечивает высокую чувствительность и быструю реакцию курсора на движения манипулятора. За плавность скольжения A4Tech Bloody Blazing A9 отвечают прочные металлические ножки Armor Metal Mouse Feet. Встроенная в мышь память объемом 160 КБ позволяет маневрировать восемью имеющимися кнопками для создания персональных интерфейсов, записывая до 4000 отдельных команд, макросов и комбинаций.', 'img/2.jpg', '1799', 2),
('Наушники HyperX Cloud Core KHX-HSCC-BK-BR черный', 'Наушники HyperX Cloud Core KHX-HSCC-BK-BR имеют охватывающие амбушюры, изготовленные из специального материала, способного подстраиваться под форму ушной раковины и принимать ее каждый раз при использовании. Звук надежно защищен от распространения и проникновения постороннего шума ввиду закрытого типа акустической системы. Эта модель позволит вам забыть о плоском звуке: благодаря диапазону частот от 15 до 25000 Гц акценты расставлены на верхних, средних и нижних нотах.\r\nМодель HyperX Cloud Core KHX-HSCC-BK-BR имеет прямой разъём на 3.5 мм с позолоченным покрытием. Излучатели динамического типа изготовлены с применением неодимовых магнитов. Увеличенный размер динамиков – 53 мм в диаметре – способствует более мощному звучанию и увеличению степени звукоизоляции. Оголовье легко регулируется по размеру. На одной из чашек наушников располагается микрофон на подвижном креплении. Импеданс этой модели составляет 60 Ом.', 'img/3.jpg', '5999', 3),
('21.5\" Монитор Samsung S22E390H [LS22E390HSO/RU]', 'Монитор Samsung S22E390H привлекателен не только своим дизайном, но и глубиной передаваемого изображения. Теперь фильмы можно просматривать в формате Full HD, что обеспечивает полное погружение в атмосферу кино. Устройство работает на основе высокоскоростной PLS-матрицы. Скорость времени ее отклика составляет 4 миллисекунды, а коэффициент динамической контрастности – 10М:1. Данные параметры обеспечивают не только высокую четкость картинки, но также не позволяют ей размываться. Модель обладает разрешением 1920х1080 пикселей, соотношением сторон 16:9 и диагональю 21.5\".\r\nШирокоформатный монитор Samsung S22E390H имеет несколько видеоинтерфейсов в задней части корпуса, а именно VGA и HDMI. Модель оснащена выходом для наушников с разъемом в 3.5 миллиметра. Основной товар комплектуется специальной подставкой, позволяющей регулировать угол наклона монитора. Также в комплекте поставляется кабель HDMI. Устройство не поддерживает установку при помощи VESA.', 'img/4.jpg', '5999', 4),
('Видеокарта Gigabyte GeForce GTX 1050 Ti [GV-N105TOC-4GD]', 'Видеокарта Gigabyte GeForce GTX 1050 Ti создана для игрового компьютера. Разработана как модель с серьезными возможностями. Качество сборки и деталей не вызывает сомнения – производитель не стал экономить на охлаждении, внутри установлен радиатор с термотрубками, отводящий тепло от подсистемы питания, графического чипа и памяти, снаружи – два 90-миллиметровых вентилятора.\r\nПри подключении к монитору с разрешением не выше Full HD Gigabyte GeForce GTX 1050 Ti обеспечит безупречную картинку. Возможно, что для самых требовательных игр придется немного снизить настройки, но большинство будет работать отлично и на максимальных.', 'img/6.jpg', '11999', 5),
('Кресло игровое Cougar Armor оранжевый', 'Если вы хотите достичь предельного комфорта в процессе игры, стоит с умом подойти к выбору игровых аксессуаров. Кресло игровое Cougar Armor поможет найти комфортное положение на длительное время, которое будет использовано для игры. Выполнена модель в черном цвете с оранжевыми полосами и вставками, что позволяет создать игровую атмосферу. Кресло выдерживает нагрузку до 120 кг благодаря алюминиевой крестовине, которая является основной конструкции. Наполнитель кресла из экокожи способствует комфортному положению пользователя и долговечности самого изделия.\r\nCougar Armor предусматривает высокую спинку и боковые вставки, которые способствуют хорошей поддержке позвоночника: вы сможете находиться в кресле очень долго и не чувствовать усталости при этом. Модель поддерживает регулировку высоты сидения и наклона спинки. Высота сидения может быть отрегулирована под рост пользователя, а спинку можно зафиксировать под разными углами от 90º до 180º.', 'img/8.png', '19999', 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Items`
--
ALTER TABLE `Items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
