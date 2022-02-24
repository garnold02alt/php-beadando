-- Database creation

drop database if exists beadando;

create database beadando
    character set utf8
    collate utf8_hungarian_ci;

use beadando;

create table table2 (
    id      int         not null auto_increment   ,
    data1   bit(1)      not null                  ,
    data2   date        not null                  ,

    primary key (id)
);

create table table1 (
    id      int         not null auto_increment   ,
    data1   varchar(16) not null                  ,
    data2   int         not null                  ,
    data3   int         not null                  ,

    primary key (id)                              ,
    foreign key (data3) references table2 (id)
);

create table users (
    id       int          not null auto_increment ,
    username varchar(16)  not null                ,
    email    varchar(64)  not null                ,
    passwd   varchar(256) not null                ,

    primary key (id)
);

-- Test data insertion

insert into table2 (data1, data2) values
    (0, '1945-08-06'),
    (0, '1945-08-09'),
    (1, '1986-04-26'),
    (1, '2011-03-11');

insert into table1 (data1, data2, data3) values
    ('foo', 100, 1),
    ('bar', 200, 2),
    ('baz', 300, 3),
    ('qux', 400, 4);

insert into users (username, email, passwd)
    values (
        'admin',
        'admin@example.com',
        '$2a$12$m2JP/b//HJPpnvjKJmoJMOJ3exU6aQAKjsaDlR99dJFS.4wJnX0YC'
    );
