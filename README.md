# 🌿 PS-Herbs | Online Herbal Store

Welcome to **PS-Herbs** – a modern online herbal store built with **PHP, MySQL, HTML, and CSS**!  
Browse, shop, and enjoy fresh herbs delivered to your doorstep. Perfect for culinary and medicinal needs.  

---

## 🌐 Live Demo
[Try the website locally](http://localhost/ps_herbs)  
*(Replace with live hosted link if deployed online)*

---

## ✨ Features

### 🛍️ User Features
- 🌱 Browse herbs with **English & Tamil (Tanglish) names**  
- 🔍 Search and filter products by category: Culinary, Medicinal, or Both  
- 🛒 Add items to cart, update quantity, and remove products  
- 💳 Checkout with address and order details  
- 🔐 Session-based **login/logout** system  
- 📦 Order confirmation and tracking  

### 👨‍💼 Admin Features
- 📝 Add, update, view, and delete products  
- 📊 View all user orders with details  
- ✅ Manage product info: name, Tamil name, price, description  

### 🎨 Design & UI
- 💚 Modern, responsive, and user-friendly design  
- 🎨 Attractive color scheme for a herbal e-commerce theme  
- 🖱️ Centralized headers, navigation, and call-to-action buttons  

---

## 🛠️ Technologies Used
- **Frontend:** HTML5, CSS3, JavaScript  
- **Backend:** PHP 8.x  
- **Database:** MySQL / MariaDB  
- **Server:** XAMPP (Apache & MySQL)  
- **Version Control:** Git & GitHub  

---

## 📦 Database Structure

### **products**
| Column      | Type          | Description |
|------------|---------------|-------------|
| id         | INT AUTO_INCREMENT | Primary key |
| name       | VARCHAR(255)  | Product English name |
| tamil_name | VARCHAR(255)  | Product Tamil (Tanglish) name |
| price      | DECIMAL(10,2) | Product price |
| description| TEXT          | Product description |

### **users**
| Column   | Type          | Description |
|---------|---------------|-------------|
| id      | INT AUTO_INCREMENT | Primary key |
| username| VARCHAR(100)  | Unique username |
| password| VARCHAR(255)  | Hashed password |

### **cart**
| Column    | Type | Description |
|-----------|------|-------------|
| id        | INT AUTO_INCREMENT | Primary key |
| user_id   | INT  | Foreign key (users) |
| product_id| INT  | Foreign key (products) |
| quantity  | INT  | Quantity selected |

### **orders**
| Column        | Type          | Description |
|---------------|---------------|-------------|
| id            | INT AUTO_INCREMENT | Primary key |
| user_id       | INT           | Foreign key (users) |
| customer_name | VARCHAR(255)  | Customer full name |
| address       | TEXT          | Shipping address |
| phone         | VARCHAR(20)   | Contact number |
| city          | VARCHAR(50)   | City name |
| pincode       | VARCHAR(20)   | Postal code |
| product_id    | INT           | Product reference |
| quantity      | INT           | Quantity purchased |
| total         | DECIMAL(10,2) | Price x quantity |
| total_amount  | DECIMAL(10,2) | Total order amount |
| tracking_id   | VARCHAR(50)   | Optional order tracking |
| order_date    | TIMESTAMP     | Order placement timestamp |
| created_at    | TIMESTAMP     | Record creation timestamp |
| status        | VARCHAR(20)   | Order status (Pending, Completed, etc.) |

---

## ⚙️ Installation Instructions

1. **Clone the repository**  

```bash
git clone https://github.com/yourusername/ps-herbs.git
cd ps-herbs
Move project to XAMPP's htdocs folder


C:\xampp\htdocs\



Start XAMPP:


Start Apache and MySQL.




Create the database


Open phpMyAdmin → Create a database named herbshop.


Import herbshop.sql (included in the repository) to create tables and seed products.




Update database connection (includes/db_connect.php):


<?php
$conn = new mysqli("localhost", "root", "", "herbshop");
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>



Open the website in your browser:


http://localhost/ps_herbs/


🎯 Usage


✅ Register/Login as a user to add items to the cart.


🛒 Add products to cart and proceed to checkout.


👨‍💼 Admin can manage products and view orders.
<img width="1879" height="855" alt="image" src="https://github.com/user-attachments/assets/f9ef1c63-8564-4e7a-9142-7d30170a3230" />
<img width="1860" height="852" alt="image" src="https://github.com/user-attachments/assets/aa22db16-f7cf-4d61-87d3-60e720a338e6" />
<img width="1852" height="819" alt="image" src="https://github.com/user-attachments/assets/226fc172-301d-41ee-9c1a-9aebc5868daa" />
<img width="1863" height="873" alt="image" src="https://github.com/user-attachments/assets/a6d5fbf6-16e1-40cb-952d-5380e0391420" />
<img width="1886" height="878" alt="image" src="https://github.com/user-attachments/assets/0fdaec7b-a589-4eb9-b095-4cdb09952cab" />
<img width="1879" height="746" alt="image" src="https://github.com/user-attachments/assets/a99ee98d-09b7-44d1-bf17-ba68c989268f" />
<img width="1905" height="873" alt="image" src="https://github.com/user-attachments/assets/c6d523bb-062d-4718-81ec-b71002254b17" />
<img width="1868" height="796" alt="image" src="https://github.com/user-attachments/assets/7c02ef8e-41c3-4c8f-97e3-b238a5a5b4fd" />








📄 License
This project is open source and free to use for learning and portfolio purposes.

💡 Author
Padmasree Rajavel 🌿
Linked in - https://www.linkedin.com/in/padma-sree-rajavel-661400329/

---

