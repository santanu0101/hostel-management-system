# Hostel Management System

## 📌 Project Overview
The **Hostel Management System** is a web-based application designed to streamline the process of room allocation in hostels. It is developed using **HTML, Tailwind CSS, jQuery, AJAX, PHP, and MySQL**. The system features two types of user roles:
- **Admin**: Manages student registrations and allocates rooms.
- **Student**: Registers for a room and downloads the allocated room letter.

---

## 🚀 Features
### 🔹 **Authentication System**
- Secure login for **Admin** and **Students**.
- Students can register and log in to request a hostel room.
- Admin can log in to manage student requests and allocate rooms.

### 🔹 **Student Dashboard**
- Submit room request.
- View allocated room number.
- Download the **Room Allocation Letter** once the admin assigns a room.

### 🔹 **Admin Dashboard**
- View list of registered students.
- Allocate hostel rooms to students.
- Update and manage room allocations.
- Ensure only one room is assigned per student.

### 🔹 **Room Allocation System**
- Students can request a room from the available slots.
- Admin manually assigns a room to each student.
- Once allocated, the student can view the **room number** and download the **allocation letter**.

### 🔹 **AJAX-based Dynamic Updates**
- Room requests and allocations are processed without page refresh.
- Students get real-time updates on their room allocation status.

### 🔹 **Responsive UI with Tailwind CSS**
- Fully responsive and mobile-friendly interface.
- Clean and minimal UI for better user experience.

---

## 🛠️ Technologies Used
- **Frontend:** HTML, Tailwind CSS, jQuery
- **Backend:** PHP, MySQL
- **AJAX:** Used for seamless, dynamic data updates

---

## 📷 Screenshots
_(Attach relevant screenshots here to showcase login, student dashboard, admin panel, and allocation system.)_

---

## 📂 Project Structure
```
/hostel-management-system
│── /assets        # Static files (CSS, JS, images)
│── /db            # Database schema and SQL files
│── /admin         # Admin-specific pages
│── /student       # Student-specific pages
│── index.php      # Main landing page
│── login.php      # Login page for admin and students
│── register.php   # Student registration page
│── dashboard.php  # Student dashboard
│── allocate.php   # Admin allocation page
│── download.php   # Room allocation letter download
│── config.php     # Database connection settings
│── ajax.php       # AJAX handlers
└── README.md      # Project documentation
```

---

## 🔧 Installation Guide
### **1️⃣ Clone the Repository**
```sh
git clone https://github.com/your-repo/hostel-management-system.git
```

### **2️⃣ Setup Database**
- Create a **MySQL database**.
- Import `db/schema.sql` into your database.
- Configure database credentials in `config.php`.

### **3️⃣ Start Development Server with Laragon**
- Download and install **Laragon** from [https://laragon.org/](https://laragon.org/).
- Place the project inside the `C:\laragon\www\hostel-management-system` directory.
- Start Laragon and enable Apache and MySQL.
- Access the project at `http://localhost/hostel-management-system/`.

---

## 🔐 Authentication Flow
1. **Student Registration**
   - Students register using their details.
   - Login with registered credentials.
   
2. **Admin Login**
   - Admin logs in to view student requests.
   - Allocates rooms to students.
   
3. **Room Allocation**
   - Once a room is assigned, students can view their room details.
   - Download the allocation letter from their dashboard.

---

## 📜 License
This project is **open-source** and can be modified or extended based on requirements.

---

## 📞 Contact
For any queries or contributions, feel free to reach out:
- **Email:** [My Email](santanuraj75@mail.com)
- **GitHub:** [santanu0101](https://github.com/santanu0101)

---

_Enjoy developing and managing hostel rooms efficiently! 🚀_

