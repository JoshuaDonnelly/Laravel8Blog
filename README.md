## Laravel 8 Complete Blog
📋 Features
📱 Responsive Design: Mobile-friendly interface using Tailwind CSS
📝 Article Management: CRUD operations for blog posts
🏀 Era Categories: Browse by 1980s-1990s, 2000s-2010s, 2010s-2020s
🖼️ Image Integration: Featured images for all articles
🔗 SEO-friendly URLs: Automatic slug generation
📨 Contact System: User feedback submission form
⚙️ Requirements
PHP 7.3 or higher
Composer
Node.js 12.13.0 or higher
MySQL or compatible database

## Usage <br>
Setting up your development environment on your local machine: <br>
```
# Clone the repository
git clone https://github.com/yourusername/nba-fan-blog.git
cd nba-fan-blog

# Install dependencies
composer install

# Setup environment
cp .env.example .env
php artisan key:generate

# Create database
mysql -u root -p
# Then in MySQL console:
create database nbablog;
exit;

# Configure database in .env file
# DB_DATABASE=nbablog
# DB_USERNAME=your_username
# DB_PASSWORD=your_password

# Run migrations and seed the database
php artisan migrate:fresh --seed

# Compile assets (if needed)
npm install && npm run dev

# Start the server
php artisan serve
```
# Project Structure
```
app/
├── Http/Controllers/   # Request handlers
├── Models/             # Database models (Post, User, Contact)
database/
├── migrations/         # Database structure
├── seeders/            # Sample content featuring NBA stars
public/
├── css/                # Compiled CSS
├── js/                 # Compiled JavaScript
resources/
├── views/              # Blade templates
├── css/                # Source CSS (Tailwind)
├── js/                 # Source JavaScript
routes/
├── web.php             # Application routes
```
```

# Acknowledgements
Original concept inspired by Code With Dary
NBA content sourced from public domain information
Built with Laravel 8 and Tailwind CSS


