### 1. Introduction ###
### 1.1 Purpose ###
The purpose of this document is to build a web application called "North South University Tuition Services" that will help NSU students to find tutors to help them out in courses which they face difficulties. It will also be a platform for the students who want to help out other students by tutoring and earn some money.

### 1.2 Document Conventions ###

The following project proposal is organized independently by its index. Readers can easily access any of the specific information by following any of the index contents.

### 1.3 Intended Audience and Reading Suggestions ###

This document is intended for developers, testers, users, project managers and also for marketing stuffs. Readers will get a clear idea about the application features, external interface, design and implementation data, security details and many other contents.

### 1.4 Product Scope ###

The main purpose of the "North South University Tuition Services" application is to provide NSU students a service by which they will be able to find tutors for their desired courses. There will be also a scope for the students who want to give tuitions during their free time and earn some money . Generally it will be used a bridge for communication between the students who want to get help and who want to give help regarding tuition for NSU offered courses.


### 2. Overall Description ###

### 2.1 Product Perspective ###

The product is entirely innovative, primarily targeting people who are the students of North South University. Students of All departments will be able to use the services offered by this web application. 
The application will also save time of every students to find tutors for the courses they need tuitions.
User will register as a Student or Tutor in order to use the service.

If a user registers as a Student then He/She will be redirected to the dashboard page after successful login. The dashboard will be categorized by departments. Each department will contain courses names offered by North South University. After selection of course the corresponding available tutor list will be displayed.

If a user register as a Tutor then He/She will required to fill up some information to complete his/her tutor profile which will be displayed to the students so that they can find their desired tutor. 



Figure : System Interactions
### 2.2 Product Functions ###
The product is mainly designed for two types of users. 
•	Students
•	Tutors

Students will be able to: 
•	Select departmental/non departmental courses.
•	Find available tutors list for the selected courses.
•	Choose desired tutor according to their profile/budget/location.
•	Communicate with selected tutor.

Tutors will be able to :
•	Create/Manage their profile according to their choice.
•	Select courses they want to give tuitions.
•	Select location.
•	Select amount of charge (optional).
•	Get tuition request after being selected by any student.
•	Communicate with students by whom they got selected for tuitions.


### 2.3 User Classes and Characteristics ###
Interactors of the system are as follows:

Users of the application: There will be two types of users in the site.

•	Students 
•	 Tutors.

Students will find their desired tutors for the selected courses and tutors will get tuition request for the selected courses.

Admins of the system: Admins of the system will have direct access to the database of the system. They can create, remove or suspend accounts if they so choose. They will not be using the service, but rather a web portal provided for the database.



### 2.4 Operating Environment ###
The site will operate with the following software components and applications:

Application Platform: PHP
Hardware: Desktop Browsers, Laptop Browsers, Android/iOS enabled smartphone browsers.
Database: SQLite.
Administration Platform: Microsoft Windows.


#### 2.5 Design and Implementation Constraints ###
1.	Internet connection is a necessity for the website to launch.
2.	Users will be able to login/register using Google or Facebook Accounts to get instant easy access to the service.
3.	Database is required from both user and admin ends, and thus needs to give concurrent and fast access to data, especially since the activity tracking will get more extensive as more users engage with the service.






### 2.6 User Documentation ###
A tutorial for the user will be inside the website, once at the start, and later available in the options menu for revisiting. The tutorial will start off and go through the entire process of using the service.

### 2.7 Assumptions and Dependencies ###
1.	The first assumption is that the website will have to be hosted live to the internet so that anyone can get access and use it’s services.
2.	The second assumption is the fair use of Google and Facebook authenticator as a service for the register and login functionof the website.
3.	Database is required from both user and admin ends, and thus needs to give concurrent and fast access to data.




### 3. External Interface Requiremens ###
### 3.1 User Interfaces ###
A sample user interface is provided as follows:

![Test Image 4](https://i.ibb.co/L6vDRmx/Annotation-2019-11-19-232246.png) 

Fig: Welcome page

![Test Image 4](https://i.ibb.co/c2DbKGs/Annotation-2019-11-19-232246.png) 

fig : Selection of departments

 
### 3.2 Hardware Interfaces: ###


•	Windows.
•	A browser which supports CSS, HTML JavaScript.


### 3.3 Software Interfaces: ###

•	Front-end software: raw html, CSS, JavaScript.
•	Back-end software: php, mysql.



### 3.4 Communications Interfaces: ###

User can communication throws over with internet connection.




### 4. System Features ###

### 4.1 User Registration: ###

         As a user, at first need to registration to allowed this website. Then users can chose their department, which subject needs to help and can chose their tutor.


### 4.2 Department Based Course Selection: ###
        The course should be related with department base, which department under the course list are shown the user.

### 4.3 Course Based Tutor Selection: ###
       When user choose a course then the course base related the tutor information will be shown.


### 5. Database Design ###

### 5.1 Design Objective: ###
This is mainly designed for the admin, who can easily understand by shown this design.

### 5.2 Class Diagram: ###


![Test Image 4](https://i.ibb.co/Gs2hY6s/df.jpg)


 
### 5.3 Sequence Diagram: ###

![Test Image 4](https://i.ibb.co/TrTW6fC/df.jpg)

 





### 7. Conclusion: ###
This is a web base system. Our target is that, using this web site nsu students and teachers both connecting together. 
