# PHP MySQL CRUD System

A simple CRUD (Create, Read, Update, Delete) web application built with PHP and MySQL.

## Features

- View all users
- Add new user
- Edit existing user
- Delete user
- Auto ID resequencing after delete
- City field support

## Technologies Used

- PHP
- MySQL
- HTML & CSS
- Laragon (Local Server)

## Folder Structure

```
crud/
  DB.php        # database connection and table setup
  INDEX.php     # add new user form
  VIEW.php      # display all users with edit & delete actions
  EDIT.php      # edit/update user
  DELETE.php    # delete user and resequence ids
  README.md     # this file
```

> Windows file system is case-insensitive; the filenames are shown uppercased for clarity.

## Requirements

- Laragon installed (https://laragon.org/)
- PHP 8.0 or above
- MySQL 8.0 or above

## Database Setup

1. Open Laragon and start Apache and MySQL.
2. Open HeidiSQL (or phpMyAdmin) from Laragon.
3. Connect to `Laragon.MySQL`.
4. Open a query tab and run the following SQL:

```sql
CREATE DATABASE php_crud_db;
USE php_crud_db;
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(20),
    age INT,
    city VARCHAR(100)
);
```

*Note:* `DB.php` will create the database and table automatically if they do not already exist.

## How to Run

1. Clone or copy this `crud` folder into `C:\laragon\www\` (or appropriate document root).
2. Start Apache and MySQL via the Laragon control panel.
3. Open your browser and navigate to:
   `http://localhost/crud/VIEW.php` (or adjust path if you renamed the folder).

The `VIEW.php` page shows all users with links to edit or delete them. Use `INDEX.php` to add new users.

## Video Tutorial

🎬 [Watch Project Demo on Google Drive](#) *(replace with real link if available)*

## Changes & Updates

### ✅ Issues Fixed

| Issue | Fix Applied |
|-------|-------------|
| City showing 0 on update | Corrected `bind_param` types in `EDIT.php` (`"sssisi"`) |
| ID gap after delete | Added resequencing queries in `DELETE.php` |
| `AUTO_INCREMENT` jumping | Reset with `ALTER TABLE users AUTO_INCREMENT = 1` |
| Table already exists error | Used `CREATE TABLE IF NOT EXISTS` |

### 🔧 Features Added

- Actions column with Edit & Delete buttons in `VIEW.php`
- Success alerts after record add/update/delete
- City field included in form, table, and database
- ID resequencing after delete to remove gaps

## GitHub

1. Initialize a Git repository inside the `crud` folder:
   ```bash
   cd d:\laragon\www\crud
   git init
   git add .
   git commit -m "Add PHP MySQL CRUD System"
   git remote add origin <your-github-repo-url>
   git push -u origin main
   ```

2. Or create a repository on GitHub and push the files.

---

Feel free to customize and expand this project for your learning or demo purposes!
