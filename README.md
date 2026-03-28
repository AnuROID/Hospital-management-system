<p align="center">
  <h1 align="center"> Hospital Management System</h1>
  <p align="center">A secure hospital web app with token-based authentication using Laravel Sanctum.</p>
</p>

---

## About Project

This project is a Hospital Management Web Application focused on secure user authentication and API-based communication.

It allows users to register, log in, and access protected routes using token-based authentication. The system ensures security using Laravel Sanctum and follows REST API architecture.

---

## Features

### 🔐 Authentication System
- User Registration
- User Login
- Token-based Authentication (Laravel Sanctum)
- Logout (token deletion)
- Get Logged-in User
- Protected Routes using middleware

### 🌐 Frontend
- Landing Page (Hospital UI)
- Signup Page (connected to API)
- Login Page (connected to API)
- Token stored in browser (localStorage)

### 🔗 Backend
- REST API built with Laravel
- Input validation (email, password, etc.)
- Secure password hashing
- MySQL database integration

---

## Tech Stack

### Backend
- Laravel
- Laravel Sanctum

### Frontend
- HTML
- Tailwind CSS
- Axios

### Database
- MySQL

---

## How It Works

1. User registers → data stored in database  
2. User logs in → token generated  
3. Token stored in browser (localStorage)  
4. Token sent in API headers for authentication  
5. User accesses protected routes  
6. Logout → token deleted  

---

## Important Concepts

### 🔐 Token-Based Authentication
After login, a token is generated and stored:

localStorage.setItem("token", response.data.token);

Used in headers:

Authorization: Bearer <token>

---

### 🔒 Protected Routes

Route::post('/logout')->middleware('auth:sanctum');

Ensures only authenticated users can access routes.

---

### 👤 Get Logged-in User

$request->user();

Fetches authenticated user from token.

---

### 🔑 Logout Logic

$request->user()->currentAccessToken()->delete();

Deletes current token securely.

---

### 🔐 Password Security

Hash::make($data['password']);

Stores encrypted password.

---

### 📡 API Calls

axios.post("/api/login", {...})

Connects frontend to backend.

---

## Installation

git clone https://github.com/YOUR-USERNAME/hospital-management-system.git  
cd hospital-management-system  

composer install  
cp .env.example .env  
php artisan key:generate  

Update database in `.env`:

DB_DATABASE=your_db  
DB_USERNAME=root  
DB_PASSWORD=  

php artisan migrate  
php artisan serve  

---

## Future Improvements

- Role-based access (Admin / Doctor / Patient)
- Appointment booking system
- Patient records management
- Dashboard analytics
- Notifications system

---

## Author

Anurag Sharma

---

## License

This project is open-source and available under the MIT License.
