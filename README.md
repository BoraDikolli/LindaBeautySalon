# Linda Beauty Salon

A modern e-commerce web application for Linda Beauty Salon, built with PHP and featuring a complete shopping experience for beauty products.

## Overview

Linda Beauty Salon is a full-featured e-commerce platform that allows customers to browse, purchase, and manage beauty products online. The platform includes user authentication, shopping cart functionality, secure checkout, and order management.

## Features

- **User Management**
  - User registration and authentication
  - Secure login/logout functionality
  - User account management

- **Product Catalog**
  - Browse beauty products with detailed descriptions
  - Product images and information
  - Store page with product filtering

- **Shopping Experience**
  - Add products to shopping cart
  - Manage cart items
  - Checkout process with payment integration

- **E-Commerce Functionality**
  - Secure checkout process
  - Payment processing
  - Order confirmation and success pages

- **Communication**
  - Newsletter subscription
  - Special offers via email
  - Email notifications

## 📁 Project Structure

```
├── index.php                 # Main entry point
├── config.php               # Configuration settings
├── db.php                   # Database connection
├── header.php               # Page header component
├── body.php                 # Main body content
├── footer.php               # Footer component
├── 
├── Product Management
├── ├── product.php          # Product display
├── ├── store.php            # Store listing
├── └── action.php           # Product actions
│
├── Shopping Cart
├── ├── cart.php             # Shopping cart
├── ├── checkout.php         # Checkout page
├── ├── checkout_process.php # Checkout processing
├── └── payment_success.php  # Payment confirmation
│
├── User Authentication
├── ├── login.php            # Login handler
├── ├── login_form.php       # Login form UI
├── ├── register.php         # Registration handler
├── ├── register_form.php    # Registration form UI
├── └── logout.php           # Logout handler
│
├── Email & Newsletter
├── ├── newslettter.php      # Newsletter signup
├── ├── offersmail.php       # Offers email
├── └── homeaction.php       # Home page actions
│
├── Assets
├── ├── css/                 # Stylesheets
├── ├── js/                  # JavaScript files
├── ├── img/                 # Images
├── ├── fonts/               # Font files
├── └── product_images/      # Product images
│
├── admin/                   # Admin panel
├── database/                # Database files
└── LICENSE                  # Project license
```

## Getting Started

### Prerequisites
- PHP 5.6 or higher
- MySQL/MariaDB
- Web server (Apache, Nginx, etc.)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/BoraDikolli/LindaBeautySalon.git
   ```

2. **Configure database connection**
   - Update `config.php` with your database credentials
   - Update `db.php` with your connection settings

3. **Import database schema**
   - Set up the database tables from the `/database` folder

4. **Deploy to web server**
   - Upload all files to your web server
   - Ensure `product_images/` directory is writable

5. **Access the application**
   - Open your browser and navigate to `index.php`

## Technology Stack

- **Backend:** PHP
- **Frontend:** HTML, CSS, JavaScript
- **Database:** MySQL/MariaDB
- **Payment Integration:** Integrated checkout system

## Configuration

Edit `config.php` to configure:
- Database connection settings
- Application base URL
- Payment settings
- Email configurations

## Screenshots

Visit the `/screenshot` folder to view application screenshots.

## Usage

### For Customers
1. **Create an Account:** Register via `register_form.php`
2. **Browse Products:** Explore products on the store page
3. **Add to Cart:** Add desired items to your shopping cart
4. **Checkout:** Complete your purchase via the checkout process
5. **Newsletter:** Subscribe for special offers and updates

### For Administrators
Access the admin panel via `/admin` for:
- Product management
- Order management
- User management
- Email campaigns

## Email Features

- **Newsletter Subscription:** Allow customers to subscribe for updates
- **Offer Emails:** Send promotional offers to subscribers
- **Order Confirmations:** Automated order confirmation emails

## Security

- Secure user authentication
- Password hashing for user accounts
- Input validation and sanitization
- Secure checkout process

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Author

**Bora Dikolli**

## Support

For issues, questions, or suggestions, please open an issue on GitHub or contact the repository owner.
---

**Website:** Available via the custom domain (see CNAME file)

**Status:** Active development

Last Updated: 2026-03-07 18:22:34
