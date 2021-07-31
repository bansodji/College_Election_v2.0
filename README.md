This is highly designed website for College Election.
Language Used ==> Frontend: HTML,CSS,JS/jQuery
                  Backend: PHP, MySQL

********************************prerequisite*****************************

1. You must have installed xampp, wamp or other local server installed in your system.


***************How to run this website in your local system**************

1. Put "College Election v2" folder to C:\xampp\htdocs.
2. Open your web browser and type "localhost/phpmyadmin" into addressbar.
3. Now create a database named "college election v2.0".
4. Export "college_election_v2_0.sql" file present inside "sql" folder to the newly created database "college election v2.0".
5. Now open new tab in web browser and type "localhost/college election v2.0/index.php".
6. This will open the website in your localhost server.


***********************About Sign Up and Login***************************

1. You cannot sign up in the website with any name and college-id.
2. Inside newly created database "college election v2.0" there is a table named "id list", which has data ("college id" and "Full Name") to sign up in the website.
3. These are the available id and their user names (fullname) with which you can sign up.

		11520, 'Satyam Sahu'
		11521, 'Sakshi Bajaj'
		11522, 'Afiya Aktar'
		11523, 'Ritika Dutta'
		11524, 'Taniya Rao'),
		11525, 'Kajal Mishra'
		11526, 'Shubham Mishra'
		11527, 'Mayur Atkari'
		11528, 'Afrin Khan'

4. Make sure to sign up with the name and their given college id.
5. You can also add new college id and fullname into "id list" table via sql section of xampp.


**************************Admin username and password*****************************

Username : admin
Password : admin