# Celra Store - E-commerce Platform

## Overview

Celra Store is a modern, premium e-commerce platform specializing in tech accessories. Built with PHP and styled with Tailwind CSS, it offers a sleek, dark-themed interface designed for an exceptional user experience. The platform includes user authentication, product browsing, shopping cart functionality, checkout process, and separate dashboards for users and administrators.

## Features

### Core Functionality
- **Product Catalog**: Browse and search through premium tech accessories
- **Shopping Cart**: Add, remove, and manage items in the cart
- **Secure Checkout**: Complete purchase process with order confirmation
- **User Authentication**: Registration, login, password reset, and OTP verification
- **User Dashboard**: View order history and manage account settings
- **Admin Dashboard**: Analytics, order management, and system settings

### User Experience
- **Responsive Design**: Optimized for desktop and mobile devices
- **Dark Theme**: Modern UI with accent colors for premium feel
- **Fast Loading**: Lightweight design with CDN-hosted Tailwind CSS
- **Intuitive Navigation**: Clean, minimal interface focused on usability

### Security & Performance
- **Secure Authentication**: Password hashing and session management
- **Email Notifications**: Automated emails for orders and account activities
- **Database Integration**: MySQL database for data persistence
- **Input Validation**: Client and server-side validation for security

## Technology Stack

### Backend
- **PHP**: Server-side scripting and business logic
- **MySQL**: Relational database for storing user data, products, and orders

### Frontend
- **HTML5**: Semantic markup structure
- **Tailwind CSS**: Utility-first CSS framework for styling
- **JavaScript**: Client-side interactivity and form handling

### Development Tools
- **Laragon**: Local development environment (Apache, MySQL, PHP)
- **Git**: Version control
- **Composer**: PHP dependency management (if applicable)

## Installation

### Prerequisites
- **Laragon** (or equivalent: Apache/Nginx, MySQL, PHP 7.4+)
- **Git** for cloning the repository
- **Web Browser** for testing

### Setup Steps

1. **Clone the Repository**
   ```bash
   git clone <repository-url>
   cd e-commerce
   ```

2. **Configure Environment**
   - Ensure Laragon is running with Apache and MySQL services
   - Place the project in `C:\laragon\www\e-commerce\` (or your web root)

3. **Database Setup**
   - Create a new MySQL database (e.g., `celra_store`)
   - Update `backend/config/db.php` with your database credentials:
     ```php
     <?php
     $host = 'localhost';
     $dbname = 'celra_store';
     $username = 'root';
     $password = ''; // Default Laragon password
     ?>
     ```

4. **Email Configuration**
   - Configure `backend/config/mail.php` for email functionality:
     ```php
     <?php
     $smtp_host = 'smtp.gmail.com';
     $smtp_port = 587;
     $smtp_username = 'your-email@gmail.com';
     $smtp_password = 'your-app-password';
     ?>
     ```

5. **Install Dependencies** (if using Composer)
   ```bash
   composer install
   ```

6. **Run Database Migrations**
   - Execute SQL scripts to create necessary tables (users, products, orders, etc.)
   - Sample SQL structure can be found in `database/schema.sql` (create if needed)

7. **Access the Application**
   - Open your browser and navigate to `http://localhost/e-commerce/`
   - Register a new account or use existing test data

## Usage

### For Customers
1. **Browse Products**: Visit the shop page to view available tech accessories
2. **Add to Cart**: Click "Add to Cart" on product cards
3. **Checkout**: Review cart and complete purchase
4. **Account Management**: Access dashboard for order history and settings

### For Administrators
1. **Login to Admin Dashboard**: Use admin credentials
2. **Manage Products**: Add, edit, or remove products
3. **View Analytics**: Monitor sales and user activity
4. **Order Management**: Process and fulfill orders

## Project Structure

```
e-commerce/
├── index.php                 # Homepage
├── shop.php                  # Product catalog
├── products.php              # Product listing page
├── product-details.php       # Individual product view
├── cart.php                  # Shopping cart
├── checkout.php              # Checkout process
├── auth/                     # Authentication pages
│   ├── login.php
│   ├── register.php
│   ├── forgot-password.php
│   ├── reset-password.php
│   └── verify-otp.php
├── backend/                  # Server-side logic
│   ├── config/               # Configuration files
│   │   ├── db.php           # Database connection
│   │   └── mail.php         # Email configuration
│   └── controller/          # Business logic controllers
│       ├── AuthController.php
│       └── ProfileController.php
├── dashboard/                # User and admin dashboards
│   ├── user/
│   │   ├── index.php        # User dashboard
│   │   └── order.php        # Order history
│   ├── admin/
│   │   ├── index.php        # Admin dashboard
│   │   └── analytics.php    # Analytics page
│   └── settings/
│       ├── profile.php      # Profile settings
│       └── security.php     # Security settings
├── includes/                 # Reusable components
│   ├── header.php
│   ├── footer.php
│   └── cta.php
└── README.md                # This file
```

## Development

### Code Style
- Follow PSR-12 coding standards for PHP
- Use semantic HTML5 markup
- Maintain consistent Tailwind CSS class naming
- Comment complex logic and database queries

### Adding New Features
1. Create feature branch: `git checkout -b feature/new-feature`
2. Implement changes following project structure
3. Test thoroughly on different devices/browsers
4. Commit with descriptive messages
5. Create pull request for review

### Database Schema
Key tables include:
- `users`: User accounts and profiles
- `products`: Product catalog with details
- `orders`: Purchase orders and status
- `order_items`: Individual items in orders
- `cart`: Temporary shopping cart data

## Contributing

We welcome contributions to Celra Store! Please follow these steps:

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request with a clear description

### Guidelines
- Ensure code quality and security
- Update documentation for new features
- Follow existing code patterns
- Test on multiple browsers and devices

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Support

For support or questions:
- Create an issue in the repository
- Contact the development team
- Check the documentation for common solutions

## Roadmap

### Planned Features
- [ ] Payment gateway integration (Stripe, PayPal)
- [ ] Product reviews and ratings
- [ ] Wishlist functionality
- [ ] Advanced search and filtering
- [ ] Mobile app development
- [ ] Multi-language support
- [ ] Inventory management system

### Version History
- **v1.0.0**: Initial release with core e-commerce functionality
- **v1.1.0**: Enhanced UI/UX and admin dashboard
- **v1.2.0**: Payment integration and mobile optimization

---

Built with ❤️ for tech enthusiasts