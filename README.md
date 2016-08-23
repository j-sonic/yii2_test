Мини-проект на Yii 2 «Картотека фильмов»
========================================

Т.З.:
Сделать на Yii2 мини-проект «Картотека фильмов».
По сути это обычный CRUD со следующим функционалом:

- гости могут просматривать/фильтровать/сортировать записи таблицы "movies"
- зарегистрированные пользователи могут просматривать/фильтровать/сортировать, удалять, редактировать записи в таблице "movies"
- редактирование таблицы режиссеров не нужно, необходимо ее просто заполнить тестовыми данными.

- нужно прокомментировать код
- базу данных с тестовыми данными оформить в виде миграций
- нужно залить код на свой репозиторий в GitHub

|movies|
id
name
date_create / дата создания записи
date_update / дата обновления записи
preview / путь к картинке постера фильма
date / дата выхода фильма
director_id / ид режиссера в таблице режиссеры

|directors|
id
firstname / имя режиссера
lastname / фамилия режиссера

========================================

Выполненные действия:
1. Сначала создал проект командой composer create-project --prefer-dist yiisoft/yii2-app-basic www
2. Затем создал бд yii2test_citrus и подправил config/db.php
3. Затем создал и накатил миграции:
yii migrate/create create_directors_table --fields=firstname:string(15):notNull,lastname:string(50):notNull
yii migrate/create create_movies_table --fields=name:string(30):notNull,date_create:date,date_update:date,preview:text,date:date,director_id:integer
yii migrate
4. С помощью gii cоздал модели Directors и Movies
5. С помощью gii cоздал CRUD для Movies
6. Добавил код для ограничения доступа к действиям 'create','update','delete'(только для авторизованных пользователей):
Показать часть цитаты
'access' => [
 'class' => AccessControl::className(),
  'only' => ['create','update','delete'],
 'rules' => [
  [
  'actions' => ['create','update','delete'],
  'allow' => true,
  'roles' => ['@'],
 ],
],
],

7. Подправил виды(локализация заголовков и др.)
8. Создал и накатил миграцию m160823_213306_addforeignkey(добавил $this->addForeignKey('movies_director_id', 'movies', 'director_id', 'directors', 'id');)

