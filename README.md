# User Management Application

A user management system built using **Vue 3**, **Inertia.js**, and **Laravel**. The app allows administrators to create, update, and list users along with detailed address information.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
    - [Backend Setup (Laravel)](#backend-setup-laravel)
    - [Frontend Setup (Vue.js)](#frontend-setup-vuejs)
- [Environment Variables](#environment-variables)
- [Running the Application](#running-the-application)
- [Troubleshooting](#troubleshooting)
- [Contributing](#contributing)
- [License](#license)

---

## Overview

This application provides a way to manage user data with associated address details such as country, city, street, and post code. It uses **Inertia.js** to bridge the Laravel backend with the Vue.js frontend.

---

## Features

- Create, edit, and delete users.
- Searchable dropdowns for country and city.
- Form validation for required fields.
- Clean API integration between frontend and backend.
- Uses Docker for containerized development.

---

## Technologies Used

- **Laravel** – PHP framework for backend.
- **Vue.js 3** – Reactive frontend framework.
- **Inertia.js** – Bridges Vue and Laravel without using APIs.
- **Docker & Docker Compose** – Containerized development environment.
- **MySQL** – Relational database.
- **Yarn** – Package manager for frontend dependencies.

---

## Installation

### Backend Setup (Laravel)

1. Clone the repository:

    ```bash
    git clone https://github.com/smmehdisharifi/laravel-nina-care.git
    cd laravel-nina-care
    ```

2. Build and start containers:

    ```bash
    docker compose up -d --build
    ```

3. Access the app container:

    ```bash
    docker exec -it app bash
    ```

4. Install PHP dependencies:

    ```bash
    composer install
    ```

5. Copy environment config and generate app key:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

6. Run database migrations:

    ```bash
    php artisan migrate
    ```

7. Seed the database (countries, cities, users):

    ```bash
    php artisan db:seed
    ```

---

### Frontend Setup (Vue.js)

1. Inside the project root, install Node dependencies:

    ```bash
    yarn install
    ```

2. Build frontend assets:

    ```bash
    yarn build
    ```

---

## Environment Variables

Update the `.env` file as needed:

```env
APP_NAME=UserManagement
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_user
DB_PASSWORD=your_password
```

## Running the Application

Once both backend and frontend are set up:

- Visit `http://localhost:8000` in your browser.
- You should see the user management UI.
- Create, update, and list users through the interface.

---

## Troubleshooting

- **Database not connecting?**  
  Ensure Docker is running and the DB credentials in `.env` are correct.

- **Vue frontend not loading?**  
  Rebuild with `yarn build` and check Laravel mix/Vite config.

---

## Contributing

Feel free to contribute by submitting issues or pull requests. Fork the repo and make your changes.

---

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.
