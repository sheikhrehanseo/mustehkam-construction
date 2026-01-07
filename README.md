# Mustehkam Construction - Corporate Management System

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![FilamentPHP](https://img.shields.io/badge/FilamentPHP-F2C94C?style=for-the-badge&logo=php&logoColor=black)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

## 📌 Project Overview
**Mustehkam Construction** is a dynamic corporate website and Content Management System (CMS) designed for a modern construction firm.

Built using **Laravel 12** and **FilamentPHP**, this project allows administrators to manage services, projects, team members, and blog posts via a secure dashboard without writing code. The frontend is fully responsive and optimized for user engagement.

> **Project Type:** 6th Semester Software Engineering Project  
> **Developer:** Sheikh Rehan (Bit Lords)

---

## 🚀 Key Features

### 🔹 Public Frontend (User View)
- **Dynamic Content:** Services, Projects, and Team sections are fetched directly from the database.
- **Project Portfolio:** Filterable masonry grid for construction projects.
- **Contact System:** Functional contact form that saves inquiries to the database.
- **Responsive Design:** Fully optimized for mobile, tablet, and desktop.

### 🔹 Admin Dashboard (FilamentPHP)
- **Secure Authentication:** Admin login system.
- **CRUD Operations:** Create, Read, Update, and Delete for:
  - **Services** (Title, Icon, Description)
  - **Projects** (Images, Categories)
  - **Team Members** (Photos, Roles, Bios)
  - **Blog Posts** (Articles, Authors)
- **Contact Management:** View incoming messages from the "Contact Us" form.

---

## 🛠️ Tech Stack
- **Framework:** Laravel 12 (PHP 8.2+)
- **Admin Panel:** FilamentPHP v3
- **Database:** MySQL
- **Frontend:** Blade Templates, Bootstrap 5, Custom CSS
- **Tools:** Composer, Artisan, Git

---
## 📂 Project Structure
Key directories for this project:

- **`app/Models/`**: Database Models (Service, Project, Team, Blog, Contact).
- **`app/Filament/Resources/`**: Logic for the Admin Panel pages.
- **`resources/views/`**: Blade Templates for the Frontend (Home, About, Services).
- **`routes/web.php`**: Application Routes configuration.
- **`database/migrations/`**: Database Schema structure.
- **`public/assets/`**: CSS, JS, and Images accessible by the browser.
---
## 🔐 Admin Credentials
To access the Dashboard, go to `/admin` and use:

- **Email:** `admin@admin.com`
- **Password:** `password`
---

## ⚙️ Installation Guide
Follow these steps to run the project locally:

### 1. Clone the Repository
```bash
git clone [https://github.com/sheikhrehanseo/mustehkam-construction.git](https://github.com/sheikhrehanseo/mustehkam-construction.git)
```
### 2. Go to the project directory

```bash
  cd mustehkam-construction
```

### 3. Install dependencies

```bash
composer install
npm install
```
### 4. Start the server
```bash
  npm run start
```
### 5. Setup Environment
Duplicate the .env.example file and rename it to .env:
```bash
  cp .env.example .env
```
### 6. Open the .env file and configure your database settings:
```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=mustehkam
  DB_USERNAME=root
  DB_PASSWORD=
```
### 7. Generate Application Key
```bash
  php artisan key:generate
```
### 8. Run Migrations & Seed Data
This command will create the tables and fill them with dummy data (including the Admin user).
```bash
  php artisan migrate:fresh --seed
```
### 9. Link Storage
Required for viewing uploaded images.
```bash
  php artisan storage:link
```
### 10. Run the Server
This command will create the tables and fill them with dummy data (including the Admin user).
```bash
  php artisan serve
```
Visit: http://127.0.0.1:8000
