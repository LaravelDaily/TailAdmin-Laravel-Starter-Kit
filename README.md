# TailAdmin Laravel Starter Kit 

This starter kit is based on [TailAdmin Laravel - Free Laravel Dashboard](https://github.com/TailAdmin/tailadmin-laravel).

We decided to merge our [LaravelDaily/starter-kit](https://github.com/LaravelDaily/starter-kit) with TailAdmin components.

As a result, you get full **simple** Laravel Auth (*login, register, forget password, profile*), styled as TailAdmin.

![](https://laraveldaily.com/uploads/2025/11/tailadmin-starter-kit-profile.png)

![](https://laraveldaily.com/uploads/2025/11/tailadmin-starter-kit-login.png)

The main point is no React/Vue/Livewire required. Only Blade and Tailwind.

Inside [TailAdmin](https://tailadmin.com/), there are many more components and pages, so explore them and add them manually. This repository is created as a **starter** kit.

---

## How to install

- Clone the repository with `git clone`
- Copy the `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `npm install` and `npm run build`
- Launch the main URL `/`. Go to `Register` and proceed.
- That's it.