# Blogging Application (VaahCMS)

A fully functional blogging application built using [VaahCMS](https://vaah.dev), leveraging Laravel and Vue.js.

## 📦 Features

* Manage blogs, categories, tags, and SEO settings
* Filter, search, and sort blog posts
* Soft deletes with restore functionality
* Clean and responsive UI
* Easy-to-extend architecture based on VaahCMS modules

---

## ⚙️ Prerequisites

Ensure you have the following installed:

* PHP >= 8.0
* Composer
* Node.js & npm
* XAMPP (recommended for Windows users)
* MySQL or other supported database

---

## 🚀 Installation (Windows)

### 1. Clone the repository

```bash
git clone <repository-url>
```

Navigate to the project directory:

```bash
cd vaahcms-test/vaahcms/
```

### 2. Install PHP dependencies

```bash
composer install
```

or if updating:

```bash
composer update
```

### 3. Build Vue assets

Navigate to the blog module’s frontend folder:

```bash
cd VaahCms/Modules/Blog/Vue
```

Run the build command:

```bash
npm install
npm run build-blog
```

### 4. Set up XAMPP (Recommended)

* Place the project inside `C:/xampp/htdocs/` to serve it via Apache.
* Example path: `C:/xampp/htdocs/vaahcms-test/vaahcms/`

### 6. Access the application

* **Backend (Admin Panel):**
  `http://localhost/vaahcms-test/vaahcms/public/backend/blog#/`

* **Frontend (Blog view):**
  `http://localhost/vaahcms-test/vaahcms/public/blog#/`

---

## 📂 Directory Structure

```
vaahcms-test/
├── vaahcms/
    ├── public/
    ├── VaahCms/
        └── Modules/
            └── Blog/
                └── Vue/   ← Vue frontend assets
```

---

## ✅ Notes

* This project is built as a module for VaahCMS and follows its architecture.
* It is recommended to run this setup using XAMPP on Windows for ease of configuration.
* After building assets with `npm run build-blog`, you can deploy the application.

---

## 📖 Useful Commands

```bash
# Install PHP dependencies
composer install

# Update dependencies
composer update

# Build frontend assets
npm install
npm run build-blog

# Run migrations
php artisan migrate
```

---

## 🛠 Customization

* Add new categories and tags via the admin panel.
* Extend the blog functionality by creating new modules within the VaahCMS structure.
* Use the built-in SEO and filtering options to enhance content discoverability.

---

## 📬 Support

For further assistance, bug reports, or contributions, please check the [VaahCMS documentation](https://vaah.dev) or open an issue on this repository.
