# Waste Management System

## Overview
This is a **Waste Management System** built using PHP and MySQL. It provides an interface for users to register, log in, and manage waste collection requests efficiently.  

## Features
- User authentication (Register, Login, Logout)  
- Dashboard for managing waste collection requests  
- Secure database configuration  
- Responsive UI with **modern CSS styles**  
- Admin panel for handling waste management  

## Installation
### Prerequisites
- PHP (>=7.4 recommended)  
- MySQL Database  
- Apache or any local server (XAMPP, WAMP)  

2. **Set Up the Database**  
   - Create a new MySQL database.  
   - Import `waste_management.sql` from the project folder.  
3. **Configure the Database Connection**  
   - Open `db_config.php` and update the database credentials:  
     ```php
     $servername = "your_server";
     $username = "your_username";
     $password = "your_password";
     $dbname = "waste_management";
     ```
4. **Run the Application**  
   - Start your local server.  
   - Access the project via `http://localhost/waste-management/`  

## Project Structure
```
/waste-management
│── dashboard.php        # Main dashboard file
│── db_config.php        # Database configuration
│── index.php            # Homepage
│── login.php            # User login
│── logout.php           # Logout functionality
│── register.php         # User registration
│── request.php          # Handle waste collection requests
│── style.css            # Stylesheet for UI
│── waste_management.sql # Database schema
```

## Technologies Used
- **Backend:** PHP, MySQL  
- **Frontend:** HTML, CSS (Poppins Font, Animations)  
- **Server:** Apache  


Let me know if you need any modifications! 🚀
