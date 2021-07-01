# codeigniter4-build-your-first-application
CodeIgniter4 "Build Your First Application". [Example implementation](http://codeigniter.com/user_guide/tutorial/index.html#build-your-first-application).

"Overview
This tutorial is intended to introduce you to the CodeIgniter4 framework and the basic principles of MVC architecture. It will show you how a basic CodeIgniter application is constructed in a step-by-step fashion..."

`git clone https://github.com/numbrCode/codeigniter4-build-your-first-application.git codeigniter4-build-your-first-application`
 
`cd codeigniter4-build-your-first-application`
 
`php composer.phar update`
 
For XAMPP (windows):  
1. C:\Windows\System32\drivers\etc\hosts  
`127.0.0.1       codeigniter4-build-your-first-application`
 
2. C:\xampp\apache\conf\extra\httpd-vhosts.conf  
`<VirtualHost codeigniter4-build-your-first-application:80>  
    ServerAdmin webmaster@codeigniter4-build-your-first-application  
    DocumentRoot "C:/xampp/htdocs/www/codeigniter4-build-your-first-application/public"  
    ServerName codeigniter4-build-your-first-application  
    ErrorLog "logs/codeigniter4-build-your-first-application-error.log"  
    CustomLog "logs/codeigniter4-build-your-first-application-access.log" common  
</VirtualHost>`
 
 Important files:  
`codeigniter4-build-your-first-application/app/Config/Database.php`,  
`codeigniter4-build-your-first-application/app/Config/Routes.php`.

[Creating Databases in the Command Line](http://codeigniter.com/user_guide/dbmgmt/forge.html#creating-databases-in-the-command-line)  
`php spark db:create ci4tutorial`

[Database Migrations](http://codeigniter.com/user_guide/dbmgmt/migration.html#database-migrations).  
 `php spark migrate`  
For reference: [php spark make:migration CreateNewTable]

`php spark migrate:status`

[Database Seeding](http://codeigniter.com/user_guide/dbmgmt/seeds.html#database-seeding)  
`php spark db:seed InsertNewsSeeder`  
For reference: [php spark make:seeder InsertNewsSeeder]

Links for working with the application :  
http://codeigniter4-build-your-first-application/home

http://codeigniter4-build-your-first-application/about

http://codeigniter4-build-your-first-application/news

http://codeigniter4-build-your-first-application/news/elvis-sighted

http://codeigniter4-build-your-first-application/news/create

http://codeigniter4-build-your-first-application/news/elvis (404 - File Not Found)

Hope this will be helpful. :-)
