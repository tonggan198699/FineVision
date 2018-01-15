# FineVision
Data Entry Form using Laravel

# How to run the project

- Clone this repository into your local computer
- Install both composer "composer install" and npm "npm install"
- Get your app key by executing command "php artisan key:generate"
- Setting up your database connection in .env file
- Boot up the server via terminal i.e. "php artisan serve"
- To sync database by running the migration command "php artisan migrate"
- To compile SCSS and javascript files do "npm run de"v then "npm run watch" to watch over changes while amending it
- Hit the browser to see the form running!

# Task
Create a simple data entry form that stores the required data into a database table.

Requirements:
- Must use HTML, CSS, PHP and JavaScript (preferably with jQuery)
- Must store data in a MySQL database
- Must validate data prior to submission (using a JavaScript plugin is ok)
- The entry form must be split into 3 separate sections, after each section is complete the section slides out and and the next section slides in
- There should be an adequate amount of comments (without being too bloated with comments)

The fields required on the fields are:
- First name
- Last name
- E-mail address (must be validated to be a correct address)
- Telephone number (must be validated to be a number)
- Gender
- Date of birth (must be validated to be a correct date)
- Comments

Present the user with a form starting on section one, at the end of each section add a next button to slide to the next section. Once the form is complete present a thank-you page. Also create a page that displays all the entries in the database.

Extra niceties:
- Use pretty CSS3 buttons with a gradient and rounded corners
- Use the html5 doctype
- Make the validation part of the design
