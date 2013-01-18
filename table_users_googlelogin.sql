CREATE TABLE users
(
id INT PRIMARY KEY AUTO_INCREMENT,
email VARCHAR(70), 
oauth_uid VARCHAR(50),
oauth_provider VARCHAR(100),
username VARCHAR(100) 
);