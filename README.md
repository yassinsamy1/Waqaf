# Waqaf Application Management System

A comprehensive Laravel-based web application for managing Waqaf (Islamic endowment) applications with a modern, user-friendly interface and professional PDF generation capabilities.

## 🌟 Features

- **Multi-step Form Wizard**: Intuitive 4-page form with progress tracking
- **Professional PDF Generation**: High-quality printable Waqaf applications
- **Responsive Design**: Mobile-friendly interface using Bootstrap 5.3.0
- **Database Management**: Proper timezone handling and sequential ordering
- **Separation of Concerns**: Clean, maintainable code architecture
- **Vercel Deployment Ready**: Complete serverless deployment configuration

## 🚀 Technology Stack

- **Backend**: Laravel 10.x
- **Frontend**: Bootstrap 5.3.0, JavaScript
- **Database**: MySQL with Asia/Kuala_Lumpur timezone
- **Templating**: Blade templates with component architecture
- **Deployment**: Vercel serverless platform

## 📋 Application Features

### Form Management
- **Page 1**: Checklist validation for required documents
- **Page 2**: Detailed Waqaf information and classification
- **Page 3**: Land details, measurements, and location data
- **Page 4**: People information (Waqif, witnesses, etc.)

### Professional Output
- **Print Template**: A4-formatted PDF with proper spacing
- **Checkbox Layout**: Professional checkbox positioning
- **Signature Sections**: Dedicated areas for official signatures
- **Multi-page Support**: Optimized layout for printing

### User Experience
- **Progress Tracking**: Visual progress indicator across form steps
- **Navigation**: Clickable logos and intuitive button layout
- **Validation**: Client-side and server-side form validation
- **Responsive**: Works perfectly on desktop and mobile devices

## 🛠 Installation

### Local Development

1. **Clone the repository**
   ```bash
   git clone https://github.com/yassinsamy1/Waqaf.git
   cd Waqaf
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database configuration**
   ```bash
   # Update .env with your database credentials
   php artisan migrate
   ```

5. **Start development server**
   ```bash
   php artisan serve
   npm run dev
   ```

### Production Deployment (Vercel)

This project is configured for seamless Vercel deployment. See [README-DEPLOYMENT.md](README-DEPLOYMENT.md) for detailed deployment instructions.

## 📁 Project Structure

```
├── app/
│   ├── Http/Controllers/WaqafApplicationController.php
│   └── Models/WaqafApplication.php
├── resources/views/
│   ├── layouts/app.blade.php
│   └── waqaf/
│       ├── create.blade.php
│       ├── pages/
│       │   ├── page1-checklist.blade.php
│       │   ├── page2-wakaf-details.blade.php
│       │   ├── page3-land-details.blade.php
│       │   └── page4-people.blade.php
│       └── print.blade.php
├── api/index.php (Vercel entry point)
├── vercel.json (Deployment configuration)
└── README-DEPLOYMENT.md
```

## 🎯 Key Components

### WaqafApplicationController
- Handles CRUD operations for Waqaf applications
- Manages form processing and validation
- Generates PDF output for printing

### Blade Templates
- **Separation of Concerns**: Each form page is a standalone component
- **Reusable Layout**: Consistent navigation and styling
- **Print Optimization**: Professional PDF formatting

### Database Model
- **WaqafApplication**: Complete data model with proper relationships
- **Timezone Handling**: Asia/Kuala_Lumpur timezone configuration
- **Sequential Ordering**: Proper ID-based ordering for display

## 🔧 Configuration

### Database
- **Timezone**: Configured for Asia/Kuala_Lumpur
- **Charset**: UTF8MB4 for full Unicode support
- **Migrations**: Comprehensive table structure

### Environment Variables
```env
DB_CONNECTION=mysql
DB_HOST=your-database-host
DB_PORT=3306
DB_DATABASE=waqaf_db
DB_USERNAME=your-username
DB_PASSWORD=your-password
APP_TIMEZONE=Asia/Kuala_Lumpur
```

## 📱 Screenshots

- Multi-step form with progress tracking
- Professional PDF output
- Responsive mobile interface
- Clean administrative dashboard

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🆘 Support

For support and questions:
- Create an issue on GitHub
- Check the [deployment guide](README-DEPLOYMENT.md) for setup help

---

**Built with ❤️ for the Islamic community**

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
