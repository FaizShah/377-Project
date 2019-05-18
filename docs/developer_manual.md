Developers Manual
-----

For this project we made use of 4 dependencies CakePHP, pandas in python for data loading (code not included here), tailwindcss and bulma. Tailwind and bulma are css frameworks that are somewhat similar. Bulma is a full replacement for a ui framework based on flexbox that provides many nice prestyled components. Similarly, tailwind is a css framework but it focuses on utility classes that can be used to develop your own components. Together they are a nice css stack for quickly developing professional looking webpages.

If you need to rebuild the database, you will need to use beautifulsoup to scrape from https://facilities.umd.edu/facilities-info/room-inventory  and use pandas to generate the csv files for each building then process those files into the csv dumps. We have included a SQL dump in our codebase that includes most of this data for you as default_db.sql.
	
This database contains buildings, bathrooms and reviews table with a one to many relationship between each in that order. Each of these corresponds to a Model in our cakephp codebase and you should stick to CakePHP standard database conventions if modifying these.

The application is a standard cakephp application. The src folder contains most of the relevant code to our project. It contains Models for interacting with the database tables in the src/Model folder. Inside the Controller folder you can find the code that are routed to HTTP routes by the router. You can also find the Templates folder where you can find the views that produce the pages of our web app.

As long as you have php installed properly you should be able to run “bin/cake server” to start the server. Be sure to set up your database credentials properly in config/app.php

For other inquiries on the file structure, take a look at the cakephp docs: https://book.cakephp.org/3.0/en/intro/cakephp-folder-structure.html

CakePHP is a convention over configuration framework meaning that you should consult the docs before modifying anything in a way that does not follow convention.

Inside ./datasets you can find the scraped data if you run into database issues.

Inside ./demopages you can find the static pages using JQuery from our presentation if you run into issues withe running app you can always look there to see the idea.