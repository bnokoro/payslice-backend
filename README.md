# Payslice Backend

Payslice is a role-based job and payroll management platform. This repository contains the backend built with **Laravel 12**, using **Livewire Volt**, **Blade**, and **role-based dashboard views**.

## 🚀 Features

- 🧑‍💼 Role-based authentication and dashboards (`Admin`, `Employer`, `User`)
- ✅ Email verification & password reset
- 🎛️ Dynamic sidebar & layout system
- 🌗 Light/Dark mode via Livewire Volt
- ⚙️ Laravel middleware & route protection

## 📦 Tech Stack

- Laravel 12
- Livewire Volt
- Blade Components
- SQLite (default) / MySQL
- Tailwind CSS (via Laravel Breeze)
- GitHub CI-ready

## Requirements

- PHP >= 8.2
- Composer
- Node.js + npm
- MySQL

## 🛠️ Setup Instructions

### 1. Clone the repository

```bash
git clone https://github.com/bnokoro/payslice-backend.git
cd payslice-backend
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate