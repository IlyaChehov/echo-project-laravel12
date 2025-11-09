## Установка проекта

### Предварительные требования проекта:
- PHP 8.1+
- Composer
- Node.js 16+
- База данных (MySQL/PostgreSQL/SQLite)

### Установка проекта:

1. **Клонирование репозитория**
    ```bash
    git clone git@github.com:IlyaChehov/echo-project-laravel12.git
    cd echo-project-laravel12

2. **Настройка окружения**
    ```bash
    cp .env.example .env
    # Отредактируйте .env файл (настройте БД)

3. **Установка зависимостей**
    ```bash
    composer install
    npm install

4. **Настройка приложения**
    ```bash
    php artisan key:generate
    php artisan storage:link
    php artisan jwt:secret

5. **Миграции и сиды (если нужны)**
    ```bash
    php artisan migrate
    # php artisan db:seed (опционально)

6. **Запуск сервера**
   ```bash
    php artisan serve
    vite
