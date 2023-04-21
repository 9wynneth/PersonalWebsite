create database db_personalWebsite;
use db_personalWebsite;

create table contact (
	id int primary key auto_increment,
    `name` varchar(50) not null,
    `subject` varchar(100) not null default "-",
    email varchar(55) not null,
    message varchar(5000) not null
);

select * from contact;