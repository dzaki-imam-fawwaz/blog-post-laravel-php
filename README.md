# Simple Laravel Blog

This is a simple **Blog CRUD project** built using **Laravel** and **Tailwind CSS**.
Users can create, read, and delete blog posts.

This project was created for learning **basic Laravel CRUD operations**.

---

## Features

* View list of blog posts
* Create a new blog post
* Delete a blog post
* Simple and clean UI using Tailwind CSS

---

## Tech Stack

* **Laravel**
* **PHP**
* **Tailwind CSS**
* **Blade Template**

---

## Installation

1. Clone this repository

```
git clone https://github.com/your-username/your-repo-name.git
```

2. Go to the project folder

```
cd your-repo-name
```

3. Install dependencies

```
composer install
```

4. Copy environment file

```
cp .env.example .env
```

5. Generate app key

```
php artisan key:generate
```

6. Setup database in `.env`

Example:

```
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=
```

7. Run migration

```
php artisan migrate
```

8. Start the server

```
php artisan serve
```

Open in browser:

```
http://127.0.0.1:8000
```

---

## Project Structure (Simple)

```
app/
resources/views/
    home.blade.php
    posts/
        index.blade.php
        create.blade.php
routes/
    web.php
```

---

## Learning Purpose

This project helps to learn:

* Laravel Routing
* Controller
* Model
* Migration
* Blade Template
* CRUD Operations

---

## License

This project is open-source and free to use.
