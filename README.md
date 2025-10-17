# Job Dashboard

A Laravel web application for managing and displaying job listings.

<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

## 🚀 About the Project

Job Dashboard is built using the **Laravel framework** to manage and display job listings efficiently.  
It includes models for employers, jobs, and tags, as well as pagination and Blade components for the frontend.

## 🧱 Built With

- [Laravel 11+](https://laravel.com)
- [Tailwind CSS](https://tailwindcss.com)
- [Blade Components](https://laravel.com/docs/blade)
- [MySQL / SQLite](https://www.mysql.com/)
- [Composer](https://getcomposer.org/)

## ⚙️ Features

- Create, view, and manage job listings  
- Manage employers and tags  
- Paginated job list UI  
- Blade-based layouts and reusable components  

## 📦 Installation

```bash
git clone https://github.com/oussama2018/Job-dashboard.git
cd Job-dashboard
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
