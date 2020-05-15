+---------------------+---------------------------------+--------------------------------------+
|      FILE           |      PLACEMENT LOCATION         |            INSTRUCTIONS              |
+---------------------+---------------------------------+--------------------------------------+
|  hospital.php       |   fuel/app/classes/controller   |     goes into controller folder      |
+---------------------+---------------------------------+--------------------------------------+
|  index.php          |    fuel/app/views/hospital      |     This is where all the content    |
|  about.php          |                                 |       for each page will be held     |
|  hospitallist.php   |                                 |                                      |
|    drglist.php      |                                 |                                      |
| hospitaldetails.php |                                 |                                      |
|   drg details.php   |                                 |                                      |
+---------------------+---------------------------------+--------------------------------------+
|  hospitalmodel.php  |      fuel/app/classes/model     |      model is found here             |
|                     |                                 |   used for database interaction.     |
+---------------------+---------------------------------+--------------------------------------+
|  hospital.css       |    local_html/ct310/assets/css  |      css file used for assignment    |
+---------------------+---------------------------------+--------------------------------------+
|  /images            |    local_html/ct310/assets/img  |      Images for the assignment       |
+---------------------+---------------------------------+--------------------------------------+
|  hospital.sql       |             /eid                |     goes into main eid folder        |
+---------------------+---------------------------------+--------------------------------------+

DATABASE SETUP - ctrl+C ctrl+V these lines into your sql terminal to correctly create the database
----------------------------------------------------------------------------------------------------------------------------------------
create table hospital (mpn int PRIMARY KEY, name varchar(256), state varchar(256), hrr varchar(256), city varchar(256), address varchar(256), zip int);

create table medicare (DRG_Definition varchar (256), Provider_Id int, Provider_Name varchar(256), Provider_Street_Address varchar(256), Provider_City varchar(256), Provider_State varchar(256), Provider_Zip_Code int, Hospital_Referral_Region_HRR_Description varchar(256), Total_Discharges int, Average_Covered_Charges decimal, Average_Total_Payments decimal, Average_Medicare_Payments decimal);

desribe tablename;

# Login info

CREATE TABLE user(user varchar(256), logged_in varchar(256));

INSERT INTO user VALUES ('ct310', 'no');
INSERT INTO user VALUES ('admin', 'no');
INSERT INTO user VALUES ('loggedout', 'yes');

# comments table

CREATE TABLE hospital_comments(
	comment_id BIGINT(20) AUTO_INCREMENT,
	comment VARCHAR(256),
	parent_id BIGINT(20),
	hospital_id BIGINT(20),
	user VARCHAR(50),
	vote_score INT(11),
	posted_at TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (comment_id)
);

# (example line of how to update vote count within the code, not exact)
# UPDATE hospital_comments SET vote_score + 1 WHERE comment_id = this.comment_id;
