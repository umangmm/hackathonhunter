PROJECT TITLE - WolfBeacon

PROJECT DESCRIPTION - WolfBeacon streamlines the process of searching for hackathons and serves as an all-in-one package when it comes to building your own hackathons.

GETTING STARTED - These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

Prerequisites - Xampp Server latestVersion available on internet should be installed and a text Editor like SUblime text 3 is recommended.

AFTER INSTALLING - Go to xampp Directory and start control-panel of xampp.Click the Start Button in front of Apache and Sql Server.

RUNNING THE WEBSITE - Follow these steps to setup the database and run the website on localhost.

step1-->   start The xampp server both  appache and sql.

step2-->   Create database in phpmyadmin by running createdb1.php on apache server(localhost/createdb1.php)  

step3-->   Create table in competition database by running sql1.php on localhost(localhost/sql1.php)

step4-->   Insert all data to database from 01.json file by running jsontodatabase.php file on localhost(localhost/jsontodatabase.php)

step5-->   Now run retreivedate.php on localhost to retreive all the required information of Hackathons from Startdate to Enddate.(localhost/retreivedate.php)

step6-->   Start our website by running index1.html on localhost(localhost/index1.html)

step7-->   Go to user option in navbar and click on it and select the starting date and Ending date from Calendar and click the Submit Button.

step8-->   For sign_in in our Website and adding new Hackathon , go to Admin option and fill the sign+in form and add all the details of Hackathon in given form and by clicking on Submit all the data will be inserted into database.  

TESTING AND VALIDATION - All form are fully secured and Validate by using PHP and Javacript web Programming Languages which include email,name,phonenumber,password,url and all other type of validations.

DEPLOYMENT - The website is easily deployable on any open source Platform such as on GITHUB for contribution in developing the website.

BUILT WITH - Many languages such as HTML,CSS,JavaSrcipt,PHP,SQL and softwares like XAMPP , Sublime text Editor, Google Chrome are used in deveoping this Website.

Authors - List of Contributors are Umang Maheshwari and Shreyansh Seth.

ACKNOWLEDGEMENT - Prof. Rajkumar has been a great guide and inspiration, thank you.




