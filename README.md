# 🎓 Student Management System

A modern **Student Management System** built with **PHP (MVC Architecture)** and **MySQL**, featuring authentication, CRUD operations, live search, dark mode, and a sleek glass UI.

---

## ✨ Features

- 🔐 User Authentication (Login/Logout)
- 📋 Add, Edit, Delete Students (CRUD)
- 🔍 Live Search (AJAX-based)
- 🌙 Dark Mode Toggle (Persistent)
- 🎨 Glassmorphism UI with animations
- ⚡ Smooth Page Transitions
- 🧱 MVC Architecture (Clean & Scalable)

---

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS, Bootstrap, JavaScript  
- **Backend:** PHP (MVC Structure)  
- **Database:** MySQL  
- **Version Control:** Git & GitHub  

---

## 📁 Project Structure

student-system/
│
├── index.php
├── README.md
├── assets/
│ └── css/
│ └── style.css
├── routes/
│ └── web.php
└── src/
 ├── config/
 │ └── database.php
 ├── controllers/
 │ ├── AuthController.php
 │ └── StudentController.php
 ├── models/
 │ ├── Student.php
 │ └── User.php
 └── views/
  ├── auth/
  │ └── login.php
  ├── layouts/
  │ ├── footer.php
  │ └── header.php
  └── student/
   ├── add.php
   ├── edit.php
   ├── list.php
   └── partials/
    └── table.php

---

## 🔒 Security Improvements

- **SQL Injection Protection:** All database queries now use prepared statements.
- **XSS Prevention:** User inputs are escaped using `htmlspecialchars`.
- **CSRF Protection:** Forms include CSRF tokens.
- **Input Validation:** Basic validation for required fields and email format.
- **Secure Passwords:** Passwords are hashed using `password_verify`.

**Note:** Database credentials are currently hardcoded. For production, use environment variables or a secure config file.

---

## ⚙️ Setup Instructions

### 1️⃣ Prerequisites
- PHP 7.4 or higher
- MySQL
- Web server (Apache/Nginx) or PHP built-in server

### 2️⃣ Database Setup
Create a database named `student_db` and run the following SQL to create tables:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id VARCHAR(50) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL,
    father_name VARCHAR(100),
    gender ENUM('Male', 'Female'),
    dob DATE,
    course VARCHAR(100),
    address TEXT,
    email VARCHAR(100),
    phone VARCHAR(20)
);
```

Insert a sample user:
```sql
INSERT INTO users (username, password) VALUES ('admin', '$2y$10$examplehashedpassword');
```

### 3️⃣ Configure Database
Update `src/config/database.php` with your database credentials.

### 4️⃣ Run the Project
Start a PHP server:
```bash
php -S localhost:8000
```
Open `http://localhost:8000/index.php` in your browser.
Start XAMPP
Open browser:
http://localhost/student-system/public
🔐 Default Login
Username: admin
Password: admin

🚀 Future Improvements
📊 Dashboard with analytics
📧 Email notifications
🔐 Password hashing & security improvements
🌐 Deployment (live hosting)
👥 Role-based access (Admin/User)
🤝 Contributing

Feel free to fork this project and improve it!

📜 License

This project is open-source and available under the MIT License.