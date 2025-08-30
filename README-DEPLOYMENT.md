# Sistem Permohonan Wakaf - MAIPK

## Deployment to Vercel

This Laravel application has been configured for deployment on Vercel.

### Prerequisites

1. **Database Setup**: Since Vercel doesn't provide a database, you'll need to use a cloud database service:
   - **PlanetScale** (MySQL) - Recommended for Laravel
   - **Supabase** (PostgreSQL)
   - **Railway** (MySQL/PostgreSQL)
   - **AWS RDS**

### Deployment Steps

1. **Push to GitHub**:
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   git branch -M main
   git remote add origin https://github.com/yourusername/your-repo.git
   git push -u origin main
   ```

2. **Connect to Vercel**:
   - Go to [vercel.com](https://vercel.com)
   - Import your GitHub repository
   - Vercel will automatically detect the configuration

3. **Environment Variables**:
   Set these in Vercel Dashboard:
   ```
   APP_NAME=Sistem Permohonan Wakaf - MAIPK
   APP_ENV=production
   APP_KEY=base64:YOUR_GENERATED_KEY_HERE
   APP_DEBUG=false
   APP_URL=https://your-app-name.vercel.app
   
   DB_CONNECTION=mysql
   DB_HOST=your-database-host
   DB_PORT=3306
   DB_DATABASE=your-database-name
   DB_USERNAME=your-database-username
   DB_PASSWORD=your-database-password
   ```

4. **Generate APP_KEY**:
   ```bash
   php artisan key:generate --show
   ```

### Database Migration

After deployment, you'll need to run migrations on your cloud database:

1. Connect to your database
2. Run migrations manually or use a database management tool
3. Import your existing data

### Important Notes

- **File Storage**: Vercel has read-only filesystem. Use cloud storage for file uploads
- **Sessions**: Consider using database sessions for better reliability
- **Logs**: Use external logging services for production
- **Cache**: File cache may not persist; consider Redis for production

### Local Development

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
```

### Build Process

The application uses these build commands:
- `composer run vercel-build` - PHP optimization
- `npm run vercel-build` - Asset compilation
