# E-commerce Platform with Reseller System 🛒

[![Laravel](https://img.shields.io/badge/Laravel-8.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue.svg)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-orange.svg)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![Build Status](https://img.shields.io/badge/build-passing-brightgreen.svg)](https://github.com/izeeshanahmedkhan/Ecommerce-with-reseller)

## 📝 Project Summary

A comprehensive Laravel-based e-commerce platform featuring an advanced reseller/dropshipping system. This multi-vendor marketplace allows product owners to manage inventory while enabling resellers to sell products without maintaining stock. The platform includes complete order management, payment processing, delivery tracking, and an intuitive admin dashboard.

## 🎯 Purpose

This e-commerce platform was built to:
- Enable seamless multi-vendor marketplace operations
- Support reseller/dropshipping business models
- Provide comprehensive product and inventory management
- Facilitate efficient order processing and delivery tracking
- Offer flexible pricing and discount systems
- Integrate modern payment solutions with QR code support
- Deliver real-time analytics through an admin dashboard

## 🛠️ Tech Stack

### Backend
- **Laravel 8.x**: PHP framework for web artisans
- **PHP 7.4+**: Server-side scripting language
- **MySQL 8.0**: Relational database management
- **Eloquent ORM**: Database abstraction layer

### Frontend
- **Blade Templates**: Laravel's templating engine (77.3%)
- **HTML5 & CSS3**: Markup and styling
- **JavaScript**: Client-side interactivity
- **Bootstrap**: Responsive UI framework

### Features & Integrations
- **QR Code Generation**: For payment and product tracking
- **Coupon System**: Discount code management
- **Authentication**: Laravel Sanctum/Passport
- **File Storage**: Laravel filesystem
- **Email System**: Mail notifications

## 📦 Installation & Setup

### Prerequisites

```bash
# Check PHP version (7.4 or higher required)
php -v

# Check Composer
composer --version

# Check MySQL
mysql --version
```

### Step 1: Clone the Repository

```bash
git clone https://github.com/izeeshanahmedkhan/Ecommerce-with-reseller.git
cd Ecommerce-with-reseller
```

### Step 2: Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install NPM packages (if using Laravel Mix)
npm install
npm run dev
```

### Step 3: Environment Configuration

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### Step 4: Database Setup

Edit `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce_reseller
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Create the database:

```sql
CREATE DATABASE ecommerce_reseller;
```

### Step 5: Import Database

Locate the MySQL file in the `MySQL file` directory and import it:

```bash
mysql -u your_username -p ecommerce_reseller < "MySQL file/database.sql"
```

Or use phpMyAdmin to import the SQL file.

### Step 6: Run Migrations & Seeders (if applicable)

```bash
# Run database migrations
php artisan migrate

# Seed database with initial data
php artisan db:seed
```

### Step 7: Storage Link

```bash
# Create symbolic link for public storage
php artisan storage:link
```

### Step 8: Start Development Server

```bash
# Start Laravel development server
php artisan serve
```

Access the application at `http://localhost:8000`

## 🚀 Usage

### User Roles

1. **Admin**: Platform administrator with full access
2. **Product Owner**: Vendor who owns and manages inventory
3. **Reseller**: Dropshipper who sells products without stock
4. **Customer**: End user who purchases products

### Admin Dashboard

Access admin panel at `/admin` (credentials from database)

- Manage all users and roles
- View sales analytics and reports
- Configure delivery charges
- Manage coupon codes
- Monitor order status
- Generate QR codes for payments

### Product Owner Features

- Add and manage products
- Set wholesale and retail prices
- Track inventory levels
- View reseller performance
- Manage product categories
- Upload product images

### Reseller Features

- Browse available products
- Set custom markup prices
- Manage customer orders
- Track earnings and commissions
- View sales history
- Access product marketing materials

### Customer Features

- Browse product catalog
- Add items to cart
- Apply coupon codes
- Multiple payment options
- Order tracking
- View purchase history

## 📸 Screenshots

> *Add screenshots of your application here*

```
/screenshots
├── dashboard.png
├── product-listing.png
├── reseller-panel.png
├── checkout.png
└── admin-analytics.png
```

## 🎨 Key Features

### 💼 Reseller Management
- Automatic commission calculation
- Reseller registration and approval workflow
- Performance tracking and analytics
- Independent pricing control

### 🛍️ Product Management
- Multi-category support
- Product variants (size, color, etc.)
- Image gallery management
- Stock level tracking
- Bulk product import/export

### 💰 Payment & Pricing
- QR code payment integration
- Coupon code system with:
  - Percentage discounts
  - Fixed amount discounts
  - Expiry dates
  - Usage limits
- Dynamic delivery charge calculation
- Multiple currency support

### 📦 Order Management
- Real-time order status updates
- Automated email notifications
- Invoice generation
- Order history and tracking
- Return and refund handling

### 📊 Dashboard & Analytics
- Sales reports and trends
- Revenue analytics
- Top-selling products
- Reseller performance metrics
- Customer behavior insights

### 🔐 Security Features
- Laravel authentication system
- Role-based access control (RBAC)
- CSRF protection
- SQL injection prevention
- XSS protection
- Password hashing (bcrypt)

## 📁 Project Structure

```
Ecommerce-with-reseller/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AdminController.php
│   │   │   ├── ProductController.php
│   │   │   ├── ResellerController.php
│   │   │   ├── OrderController.php
│   │   │   └── CouponController.php
│   │   └── Middleware/
│   ├── Models/
│   │   ├── Product.php
│   │   ├── Order.php
│   │   ├── User.php
│   │   ├── Coupon.php
│   │   └── Reseller.php
│   └── Services/
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── views/
│   │   ├── admin/
│   │   ├── reseller/
│   │   ├── products/
│   │   └── layouts/
│   └── js/
├── routes/
│   ├── web.php
│   └── api.php
├── public/
│   ├── css/
│   ├── js/
│   └── images/
└── MySQL file/
    └── database.sql
```

## 🔧 Configuration

### Email Configuration

Update `.env` for email notifications:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Payment Gateway Configuration

Configure payment settings in `.env`:

```env
PAYMENT_GATEWAY=stripe
STRIPE_KEY=your_stripe_key
STRIPE_SECRET=your_stripe_secret
```

### Delivery Charges

Configure delivery zones and charges in the admin panel or database.

## 🔌 API Documentation

### Base URL
```
http://localhost:8000/api
```

### Authentication
All API requests require authentication token:

```bash
Authorization: Bearer {access_token}
```

### Endpoints

#### Products

```http
GET /api/products - List all products
GET /api/products/{id} - Get product details
POST /api/products - Create product (admin/owner only)
PUT /api/products/{id} - Update product
DELETE /api/products/{id} - Delete product
```

#### Orders

```http
GET /api/orders - List orders
POST /api/orders - Create order
GET /api/orders/{id} - Get order details
PUT /api/orders/{id}/status - Update order status
```

#### Resellers

```http
GET /api/resellers - List resellers
POST /api/resellers/register - Register as reseller
GET /api/resellers/{id}/products - Get reseller products
GET /api/resellers/{id}/earnings - Get earnings report
```

#### Coupons

```http
GET /api/coupons - List coupons
POST /api/coupons/validate - Validate coupon code
POST /api/coupons - Create coupon (admin only)
```

### Example Request

```javascript
// Get all products
fetch('http://localhost:8000/api/products', {
  method: 'GET',
  headers: {
    'Authorization': 'Bearer your_token_here',
    'Content-Type': 'application/json'
  }
})
.then(response => response.json())
.then(data => console.log(data));
```

## 🐛 Troubleshooting

### Common Issues

#### "No application encryption key"
```bash
php artisan key:generate
```

#### Database connection errors
- Verify database credentials in `.env`
- Ensure MySQL service is running
- Check database exists

#### Storage permission errors
```bash
chmod -R 775 storage bootstrap/cache
```

#### Assets not loading
```bash
npm run dev
php artisan storage:link
```

## 🔄 Recent Updates

- ✅ Enhanced dashboard with new analytics
- ✅ Dynamic delivery charge calculation
- ✅ QR code payment integration
- ✅ Advanced coupon code discount system
- ✅ Improved account management
- ✅ Product owner/reseller role separation

## 📈 Future Enhancements

- [ ] Multi-language support
- [ ] Mobile app (React Native/Flutter)
- [ ] Advanced analytics dashboard
- [ ] Social media integration
- [ ] Live chat support
- [ ] Product review and rating system
- [ ] Wishlist functionality
- [ ] Advanced search and filtering
- [ ] Email marketing integration
- [ ] Inventory forecasting

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Author

**Izeeshan Ahmed Khan**
- GitHub: [@izeeshanahmedkhan](https://github.com/izeeshanahmedkhan)
- LinkedIn: [Connect with me](https://linkedin.com/in/izeeshanahmedkhan)

## 🙏 Acknowledgments

- Laravel community for the amazing framework
- All contributors and testers
- Open source community

## 📞 Support

For support, email support@yourdomain.com or join our Slack channel.

---

⭐ If you find this project useful, please give it a star! Your support is appreciated.

## 💡 Tips for Deployment

### Production Checklist

- [ ] Set `APP_DEBUG=false` in production
- [ ] Configure proper database backup
- [ ] Set up SSL certificate (HTTPS)
- [ ] Configure caching (`php artisan config:cache`)
- [ ] Set up queue workers for background jobs
- [ ] Configure logging and monitoring
- [ ] Set up automated backups
- [ ] Optimize autoloader (`composer install --optimize-autoloader`)
- [ ] Enable OPcache for PHP
- [ ] Set up CDN for static assets
