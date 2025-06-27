# Payslice Backend

Payslice is a role-based job and payroll management platform. This repository contains the backend built with **Laravel 12**, using **Livewire Volt**, **Blade**, and **role-based dashboard views**.
Built with Laravel Breeze (Blade), SQLite (for development), and Vite.


## ✅ Features Implemented

- 🧑‍💼 Role-based authentication and dashboards (`Admin`, `Employer`, `User`)
- ✅ Email verification & password reset
- 🎛️ Dynamic sidebar & layout system
- 🌗 Light/Dark mode via Livewire Volt
- ⚙️ Laravel middleware & route protection
- Laravel Breeze with Blade scaffolding for authentication
- Role-based login redirection (admin, employer, user)
- SQLite configured for lightweight development
- Laravel Migrations and Seeders set up
- Environment setup via `.env.example`

### 👤 User
- Can log in using email and password
- Sees a personalized dashboard
- Views a list of their payslips
- Downloads individual payslips as PDF

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

🤝 Contributing
Fork the repository

Create your feature branch: git checkout -b feature/my-feature

Commit your changes

Push to the branch: git push origin feature/my-feature

Open a pull request

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

| Role     | Email                                               | Password |
| -------- | --------------------------------------------------- | -------- |
| Employer | [employer@example.com](mailto:employer@example.com) | password |
| User     | [nila@gmail.com](mailto:nila@gmail.com)             | password |

