REST API списка задач на базе yii2 basic project template.

Само REST API находится в отдельном модуле API, а корень проекта скорее на возможное будущее, если вдруг понадобится реализовать какой-то интерфейс для задач.

Настройка перед первым запуском
-------------------------------

1. Создать конфиг БД и файл с переменными окружения, или использовать из примера, при необходимости изменить
```sh
cp .env.example .env && cp config/db.example.php config/db.php
```
2. Запустить докер
```sh
docker compose up -d
```
или, в зависимости от типа установки плагина compose
```sh
docker-compose up -d
```
3. Установить пакеты и поднять контейнеры
```sh
docker compose run --rm app composer update --prefer-dist
docker compose run --rm app composer install
docker compose up -d
```
4. Применить миграции
```sh
docker compose run app php yii migrate
```

Использование
-------------

API поодерживает такой набор действий

- GET http://localhost:8080/api/tasks: получение постранично списка всех задач, задачи кешируются на 5 минут;
- HEAD http://localhost:8080/api/tasks: получение метаданных листинга пользователей;
- POST http://localhost:8080/api/tasks: создание новой задачи, кеш сбрасывается;
- GET http://localhost:8080/api/tasks/123: получение информации по конкретной задаче с id равным 123;
- HEAD http://localhost:8080/api/tasks/123: получение метаданных по конкретной задаче с id равным 123;
- PATCH http://localhost:8080/api/tasks/123 и PUT /tasks/123: изменение информации по задаче с id равным 123;
- DELETE http://localhost:8080/api/tasks/123: удаление задачи с id равным 123;
- OPTIONS http://localhost:8080/api/tasks: получение поддерживаемых методов, по которым можно обратится к /tasks;
- OPTIONS http://localhost:8080/api/tasks/123: получение поддерживаемых методов, по которым можно обратится к /tasks/123.
