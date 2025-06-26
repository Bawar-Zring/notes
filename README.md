# 📝 Notes App — Laravel + Docker Compose

This is a simple Notes CRUD application built with **Laravel**, containerized using **Docker Compose**. It includes:

- Laravel (PHP 8.2)
- MySQL (Database)
- phpMyAdmin (DB Admin Interface)
- Nginx (Web Server)

## 🐳 Services Overview

| Service       | Description                       | Port           |
|---------------|-----------------------------------|----------------|
| Laravel App   | Backend API + Web UI              | `localhost:8000` |
| phpMyAdmin    | Web-based DB management interface | `localhost:8080` |
| Nginx         | Web server                        | Reverse proxy for Laravel |

---

## 🚀 Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/Bawar-Zring/notes.git
cd notes
```

### 2. Copy .env File
```bash
cp .env.example .env
```

Edit your .env file to match the Docker DB(MySQL) settings:
```bash
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=notes_db
DB_USERNAME=root
DB_PASSWORD=
```

### 3. start the Containers
```bash
docker-compose up -d --build
```

### 4. Install Composer Dependencies
```bash
docker exec -it notes-app-1 composer install
```

### 5. Generate App Key
```bash
docker exec -it notes-app-1 php artisan key:generate
```

### 6. Run Migrations
```bash
docker exec -it notes-app-1 php artisan migrate
```

## Access App
- Laravel App: (http://localhost:8000)
- phpMyAdmin: (http://localhost:8080)
