This system is a prototype of features that improve the VU app. It is designed for the web, and build for a mobile screen and not a desktop screen! You will need xampp to interact with the databse and get the full experience of the prototype. See below the get started instruction:

1) Download XAMPP: https://www.apachefriends.org/download.html

2) Open XAMPP and press 'start' in the 'General' tab. Make sure Apache & MySQL services are turned on, by going to 'Services' and checking if the green light is on next to their name.

3) Go the 'Volumes' in XAMPP and press 'mount'. 

4) After you pressed mount, place this directory (VU_Planner1) into the following path: lampp/htdocs/

5) Open a browser and type in the URL: 192.168.64.2/phpmyadmin/ or localhost/phpmyadmin/. 

6) On the left hand side you see a bunch of databases. On the top of them, click 'New'. Then you need to give your database a name. YOU NEED TO NAME IT: 'toDoList', and click create. (If you decide to name the database soemthing else, you need to go into the DBhandler directory and rename the $dbName variable to whatever you called your database.)

7) Click on the database you created, and you see a navigation bar ontop, going across your screen. Click on 'SQL' on that navigation bar. When you are in the SQL window, copy and paste the toDoList.sql code from this directory to the SQL window in the phpmyadmin page in the browser. Press 'go' and you will have the database with values initialized. 

8) Now you can interact with the prototype. In your browser open the 192.168.64.2/VU_Planner1 (or 192.168.64.2/whateverYouCalledThisDirectory)

9) You should see the starting page of the system (index.html), but in terrible format. THE PROTOTYPE WAS NOT DESIGNED FOR DESKTOP, BUT FOR MOBILE. To see how the system looks like in mobile, open the developers tool and select IphoneX as the device you want to see the prototype in. In chrome, this is done by pressing cmd+alt+I, and then selecting the media device manually. 