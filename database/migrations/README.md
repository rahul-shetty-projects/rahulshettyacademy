#Some tables should be migrated from old system:
```mysql
CREATE TABLE IF NOT EXISTS projects_subscribers
(
sno INT(10) NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
code VARCHAR(100) NOT NULL,
is_verified INT(10) NOT NULL,
PRIMARY KEY (sno)
);

CREATE TABLE IF NOT EXISTS courses_table
(
s_no INT(11) NOT NULL AUTO_INCREMENT,
course_name VARCHAR(200) NOT NULL,
course_link VARCHAR(200) NOT NULL,
course_image VARCHAR(200) NOT NULL,
author_name VARCHAR(50) NOT NULL,
old_price INT(10) NOT NULL,
actual_price INT(10) NOT NULL,
old_price_in_dollar INT(10) NOT NULL,
actual_price_in_dollar INT(10) NOT NULL,
is_bundle INT(5) NULL,
no_of_courses INT(5) NULL,
user_comments INT(10) NOT NULL,
user_enrolled INT(10) NOT NULL,
rate INT(10) NOT NULL,
course_order INT(10) NOT NULL,
is_free TINYINT(5) NOT NULL,
PRIMARY KEY (s_no)
);
```

After Data is migrated from old system, correct the images URLs with the following SQL query:

```mysql
UPDATE courses_table SET course_image = REPLACE (course_image, 'https://rahulshettyacademy.com/rs_admin/public', '/assets') WHERE course_image LIKE 'https://rahulshettyacademy.com/rs_admin/public%';
```
