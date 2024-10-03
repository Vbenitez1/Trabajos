create database blog_db;

USE blog_db;

create table blog(
    id int auto_increment primary key,
    usuario varchar(15) not null,
    mensaje varchar(200) not null
);

