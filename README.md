# User Management Application

This is a user management application built with **Vue.js** (Vue 3), **Inertia.js**, and **Laravel**. It allows for creating, editing, and listing users with detailed information, including their associated address (country, city, street, post code).

## Features

- Create, edit, and update user information.
- Dropdown for selecting country and city with search functionality.
- Validation for required fields.
- Integration with a backend API (Laravel).

---

## Requirements

- **Docker**
- **Node.js** (>= 14.x)
- **Vue.js** (Vue 3)
- **Inertia.js** (for handling requests and views in Laravel)
- **Laravel** (Backend API)

---

## Installation

### 1. Backend Setup (Laravel)

If you don't already have the Laravel project set up, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/smmehdisharifi/laravel-nina-care.git
   cd laravel-nina-care
2. Run and Build the Docker Image
   ```bash
   docker compose up -d --build
3. Navigate to `app` container and run below steps
4. Install the required PHP dependencies:
   ```bash
   composer install
5. Set up your .env file:
   ```bash
    cp .env.example .env
    php artisan key:generate
6. Set up your database and run migrations:
    ```bash
    php artisan migrate
7. Seed the countries and cities data. Also, user massive seeder that runs in background:
    ```bash
    php artisan db:seed

### 2. Frontend Setup (Vue.js)

1. Install Node.js dependencies:
   ```bash
   yarn install
2. Build the frontend:
   ```bash
   yarn build
