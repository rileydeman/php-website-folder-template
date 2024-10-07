# PHP website folder structure/template


The PHP website folder template that rileydeman uses in his web projects!


## Using this folder template

Using of this folder structure/template is completely free of charge.
You are allowed to fork and/or use this repository/template and edit all the files in this template

## Important

- The homepage is not in the `index.php`, the index.php file gets automaticly the `public/home.php` file.
- The public folder is for everything that the user sees, like all the pages, images etc.
- The app folder is for everything that is back-end, and what the user doesn't see, like adding items to a cart, etc.
- Be sure that the folder where the `index.php` is located, is the root from your xampp, wampp, lampp or mampp software for your localhost during development.
- The `public/home.php` file has the template for a web page, including the header and footer include
- The header and footer are in the `public/core folder`
- The 404 page will automaticly shown at not valid urls on your localhost or website, editing the 404 page is possible in the `public/core/errors/404.php` file
- The admin folder is for the CMS (Content Management System)
- The CND folder is for the images, CND = Content Delivery Network (folder template and placeholder images coming soon)

## .htacess

Mostly the `.htacces` file can't get the good file, in that case go to the `.htaccess file` and add the following code to the file:
`RewriteRule ^requestName public/requestName.php`

[//]: # (## Styling)

[//]: # ()
[//]: # (For the styling from the site does rileydeman use sass, you are free to delete the sass file and folder, but in case you want to use sass be sure that you do this:)

[//]: # ()
[//]: # (- Be sure that you have installed sass to your system, go to your global terminal and use this `npm install -g sass`)

[//]: # (- To compile sass you need to be sure that your terminal is in the assets folder and use the following command &#40;everytime you start working on your site&#41; in de terminal: `sass --watch --no-source-map sass/input.sass css/output.css`)

[//]: # (- Be sure that you connect the `.css` files to your web pages, web browsers **can't** read `.sass` and/or `.scss` files.)

## Changing document root in xampp

1. Go to the folder where the index.php is located
2. Copy the path to that file
3. Open xampp
4. Click on "config" form the apache
5. Click on the top link named "Apache (httpd.conf)"
6. Scoll down until you see something like this
   - DocumentRoot "C:\xampp\htdocs"
   - <Directory "C:\xampp\htdocs">
7. Paste the copied path to both, DocumentRoot and Directory, between the ""
8. Save the file and start or restart apache 
9. Go to localhost in your web browser


More information soon!

##  

(c) rileydeman