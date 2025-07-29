# 🎓 Teachers Management Web Application

A Laravel-based university management system for professors, students, and administrators. Developed as a final year project at **Ibn Zohr University**, this platform enables document and video sharing, role-based access control, and interactive academic communication.

[🔗 Live Repository](https://github.com/TakrayoutMohamed/pfe)

![Laravel](https://img.shields.io/badge/framework-laravel-red)
![Status](https://img.shields.io/badge/project-complete-brightgreen)

---

## 📚 Project Summary

This web application facilitates:

- Professors sharing lessons, files, and statements
- Students accessing course materials and commenting
- Admins managing users, content, and system control

It was built using **Laravel 7.x** with the **MVC architecture** and features secure user registration, middleware access control, and file streaming capabilities.

---

## ✨ Features

### 👨‍🎓 Students
- Register and verify email
- Browse and download documents
- Stream course videos (read-only)
- Add and manage comments

### 👩‍🏫 Professors
- Register via admin invitation
- Upload documents, videos, and statements
- Customize profile (bio, links, images)
- Edit or delete uploaded content

### 🛠️ Administrators
- Invite professors by email
- Promote/demote users (student → doctor → admin)
- Manage users, comments, and statements
- Cannot delete professors' materials (for transparency)

---

## ⚙️ Tech Stack

| Layer       | Tech                  |
|-------------|------------------------|
| Backend     | Laravel 7.x (PHP)      |
| Frontend    | Blade Templates, HTML, CSS |
| Database    | MySQL                  |
| ORM         | Eloquent               |
| Auth        | Laravel Auth w/ Middleware |
| CLI Tools   | Artisan, Composer      |

---

## 🚀 Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/TakrayoutMohamed/pfe.git
cd pfe

