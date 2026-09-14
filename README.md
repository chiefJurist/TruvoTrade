## DISCLAIMER: 
TruvoTrade is NOT a legal trading platform. It was created strictly for educational purposes to demonstrate Laravel's MVC architecture and Blade templating. Anyone who clones this repository, hosts it, or uses it to collect money, investments or personal data is a scammer. Do not fall for these scams and do not provide any financial information to platforms running this code.

# TruvoTrade

A simple, server-rendered savings platform built with **Laravel's MVC architecture** and **Blade templating**. This project demonstrates core web development concepts, including secure user authentication, database management, and dynamic server-side rendering.

## 🚀 Features

*   **User Authentication:** Secure registration, login, and session management using Laravel Breeze/Jetstream.
*   **Savings Dashboard:** A clean user interface to track account balances, targets, and transaction histories.
*   **Server-Rendered Views:** Dynamic components and modular layouts built entirely with Laravel Blade.
*   **Transaction Ledger:** A secure database structure tracking deposits, withdrawals, and savings progress.

## 🛠️ Tech Stack

*   **Framework:** Laravel (PHP)
*   **Architecture:** Model-View-Controller (MVC)
*   **Frontend:** Blade Templating Engine + Tailwind CSS / Bootstrap
*   **Database:** MySQL / PostgreSQL

## 💻 Installation & Setup

Follow these steps to run the educational project locally:

1. **Clone the repository:**
   ```bash
   git clone https://github.com
   cd truvotrade
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Configure environment files:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Set up the database:**
   Configure your database credentials in the `.env` file, then run:
   ```bash
   php artisan migrate --seed
   ```

5. **Start the local server:**
   ```bash
   php artisan serve
   ```

# DISCLAIMER: 
TruvoTrade is NOT a legal trading platform. It was created strictly for educational purposes to demonstrate Laravel's MVC architecture and Blade templating. Anyone who clones this repository, hosts it, or uses it to collect money, investments or personal data is a scammer. Do not fall for these scams and do not provide any financial information to platforms running this code.