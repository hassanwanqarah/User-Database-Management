# User-Database-Management

A simple web application developed using **HTML, PHP, JavaScript, and MySQL** as part of the **Smart Methods Summer Training**.

## Project Overview

This project allows users to:

- Enter their name and age.
- Store the data in a MySQL database.
- Display all saved records in a table.
- Toggle the user's status between **0** and **1** without refreshing the page.

## Features

- User input form (Name & Age)
- Store data in MySQL database
- Display records in a table
- Toggle user status (0 ↔ 1)
- Instant status update using JavaScript Fetch API (No Page Refresh)

## Technologies Used

- HTML
- PHP
- JavaScript (Fetch API)
- MySQL
- InfinityFree
- GitHub

## Project Structure

```
Task2/
│── final.php
│── toggle.php
│── README.md
│── database.png
```

## Database Structure

Table Name: **User**

| Column | Type | Description |
|---------|------|-------------|
| ID | INT | Primary Key, Auto Increment |
| Name | VARCHAR | User Name |
| Age | INT | User Age |
| Status | TINYINT | User Status (0 or 1) |

## How to Run

1. Create a MySQL database.
2. Create a table named **User**.
3. Add the columns: **ID, Name, Age, Status**.
4. Update the database credentials in `final.php` and `toggle.php`.
5. Upload the project to a PHP web server (e.g., InfinityFree).
6. Open `final.php` in your browser.

## Screenshot

![Project Screenshot]database.png)

## Note

Database credentials have been replaced with placeholder values for security reasons.

---

# Prepared by : Hassan Wanqarah
