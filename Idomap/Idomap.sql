DROP DATABASE Idomap;

CREATE DATABASE Idomap;

USE Idomap;

CREATE TABLE Users(
	user_id int,
	email varchar(40),
	hash_password varchar(32),
	salt_password varchar(32),
	Primary Key (user_id)
);

CREATE TABLE UserProfiles(
	user_id int,
	join_date Date,
	birth_date Date,
	sex boolean,
	isAdminster boolean,
	Primary Key (user_id),
	Foreign Key (user_id) references Users(user_id)
);

CREATE TABLE UserInfos(
	user_id int,
	first_name varchar(40),
	last_name varchar(40),
	font varchar(40),
	privary_default int,
	Primary Key (user_id),
	Foreign Key (user_id) references Users(user_id)
);

CREATE TABLE Follows(
	follower int,
	followee int,
	Primary Key (follower, followee),
	Foreign Key (follower) references Users(user_id),
	Foreign Key (followee) references Users(user_id)
);

CREATE TABLE Photos(
	photo_id int,
	photo_url varchar(100),
	user_id int,
	date Date,
	camera varchar(30),
	privary int,
	location varchar(30),
	Primary Key (photo_id),
	Foreign Key (user_id) references Users(user_id)
);

CREATE TABLE Tags(
	photo_id int,
	user_id int,
	Primary Key (photo_id, user_id),
	Foreign Key (photo_id) references Photos(photo_id),
	Foreign Key (user_id) references Users(user_id)
);

CREATE TABLE Comments(
	comment_id int,
	comment varchar(200),
	user_id int,
	photo_id int,
	Primary Key (comment_id),
	Foreign Key (user_id) references Users(user_id),
	Foreign Key (photo_id) references Photos(photo_id)
);

CREATE TABLE Moments(
	moment_id int,
	user_id int,
	name varchar(40),
	Primary Key (moment_id),
	Foreign Key (user_id) references Users(user_id)
);

CREATE TABLE MomentPhotos(
	moment_id int,
	photo_id int,
	Primary Key (moment_id, photo_id),
	Foreign Key (photo_id) references Photos(user_id)
);