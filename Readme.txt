# Monet Restaurant Management System 🍽️

## Introduction
The **Monet Restaurant Management System** is a sophisticated web-based application designed to enhance the online experience for Monet’s customers. Developed using modern web technologies, the system offers seamless functionality, allowing users to **book tables, place orders, participate in a loyalty program, and submit reviews**.

This project was built by **Phoenix Software Solutions** using:
- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL  
- **Development Tools:** Visual Studio Code, Git, and GitHub  
- **Testing Framework:** PHPUnit (Unit Testing)  

## Features  
### User Functionalities:  
- **User Authentication:** Sign up and log in securely.  
- **Table Reservations:** Users can reserve tables in advance.  
- **Cart & Checkout:** Customers can add items to their cart and place orders.  
- **Loyalty Program:** Rewards system for frequent customers.  
- **Submit Reviews:** Users can provide feedback and ratings.  

### Admin Functionalities:  
- **Manage Users & Reservations:** Admins can oversee user activity and bookings.  
- **Order Management:** View and manage customer orders.  
- **Loyalty Program Control:** Adjust and maintain reward settings.  
- **Moderate Reviews:** Ensure quality and relevancy of user feedback.  

## Installation Instructions  
### Prerequisites:  
- Install **XAMPP** or **WAMP** to run PHP & MySQL.  
- Install **Visual Studio Code** or any preferred text editor.  
- Clone the repository using Git.  

### Steps to Set Up:  
```sh
# 1. Clone the repository
git clone https://github.com/karimitanii/Monet-Restaurant.git

# 2. Set up the database
#    - Create a MySQL database (monet_db).
#    - Import the provided SQL file (monet_db.sql).

# 3. Configure the backend
#    - Place all backend PHP files inside the htdocs folder (for XAMPP) or www folder (for WAMP).
#    - Update database connection credentials in dbinc.php.

# 4. Run the project
#    - Start Apache and MySQL in XAMPP/WAMP.
#    - Open http://localhost/Monet-Restaurant/ in your browser.
