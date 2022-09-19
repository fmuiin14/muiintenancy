## Laravel Multilanguage & Tenant Subdomains

Hi, my name is Fathul Muiin. And this is my submitted project for Laravel Developer position. 

I use Laravel 8, and using laravel breeze, stancl/tenancy for multitenancy & localization. 
I use Windows, and I use laragon to open this project.

## Step by Step

1. Clone this project (git clone https://github.com/fmuiin14/muiintenancy.git)
2. Edit .env.example to .env
3. On this project, open terminal and run 'composer install'
4. After that, run 'php artisan key:generate'
5. Setup DB_DATABASE on .env (create the database)
6. Run 'php artisan migrate' on your terminal
7. Make sure your SESSION_DOMAIN on your .env same with your url for this project(example, on this project SESSION_DOMAIN=muiintenancy.local) (need same value for doing localization correctly)
8. Open your laragon, then Start All. 
9. Go to url http://muiintenancy.local/register
10. you can try, Localization working correctly on this project. Choose language that you want (English, Indonesia, or Spain)
11. Continue the registration, and after registration you will redirect to the subdomain.domain.local 

## Notes
- Please feel free to let me know if you have any questions. Thank you.
