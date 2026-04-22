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
├── public/
│ ├── index.php
│ └── assets/
│ └── css/
│ └── style.css
│
├── routes/
│ └── web.php
│
├── src/
│ ├── config/
│ │ └── database.php
│ ├── controllers/
│ │ ├── AuthController.php
│ │ └── StudentController.php
│ ├── models/
│ │ ├── User.php
│ │ └── Student.php
│ └── views/
│ ├── auth/
│ ├── layouts/
│ └── student/
│
└── README.md

---

## ⚙️ Setup Instructions

### 1️⃣ Clone the repository

```bash
git clone https://github.com/your-username/student-management-system.git
cd student-management-system

2️⃣ Setup Database
Open phpMyAdmin
Create database:
student_db
Import your SQL file (or create tables manually)
3️⃣ Configure Database Connection

Go to:

src/config/database.php

Update:

private $host = "localhost";
private $user = "root";
private $pass = "";
private $db   = "student_db";
4️⃣ Run the Project
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