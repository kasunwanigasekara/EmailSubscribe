Setup guide,

1.Create a new folder inside your local server (wamp/xamp/ect..) and Copy all the files into it. 

2.Run emailverification.sql file using any mysql/mariaDB DB tool(phpmyadmin/dbForge/ect..). 
which is inside the db folder(it will create the db and required table.).

3.Open the file located in "src/controller/email.php" 

3.1. find the function "sendEmail()".
3.2. Inside that funtion add SMTP authentication details( SMTP Server, User name & password of a user account).
3.3. If you are using Google SMTP server and if you have activated gmail Two Factor Authentication, Please add App 
	password generated from the gmail account which has(16 digit code).
	

4.Execute the application using index.php file inside the root folder.


