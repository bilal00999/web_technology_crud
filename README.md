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

crud/
  DB.php        # database connection and table setup
  INDEX.php     # add new user form
  VIEW.php      # display all users with edit & delete actions
  EDIT.php      # edit/update user
  DELETE.php    # delete user and resequence ids
  README.md     # this file

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

## Video Tutorial

🎬 

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

