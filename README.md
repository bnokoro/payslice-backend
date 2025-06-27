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


### 🧪 Seeded Test Users
- Admin, Employer, and User roles included
- Sample payroll records linked to test users

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
1. Fork the repository

2. Create your feature branch: git checkout -b feature/my-feature

3. Commit your changes

4. Push to the branch: git push origin feature/my-feature

5. Open a pull request


🔧 Next Steps
1. Admin dashboard and route protection

2. Employer job posting interface

3. Payslip generation by employer

4. Notifications or messaging module

5. Time tracking or payroll scheduling (optional modules)


| Role     | Email                                               | Password |
| -------- | --------------------------------------------------- | -------- |
| Employer | [employer@example.com](mailto:employer@example.com) | password |
| User     | [nila@gmail.com](mailto:nila@gmail.com)             | password |



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