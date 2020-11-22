# RetrofitDagger2Example
In this project, I demostrate how the depenency injection is done using dragger2.
Dragger2 is most popular maintained by google dependency injection framework for android and java. 

In this project,
I am using xampp to create mysql database on localhost.
using following queries:

// to create 'android' database
CREATE DATABASE android;

// to use 'android' database
USER android;

// to create 'heroes' table
CREATE TABLE heroes(
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(10) NOT NULL
);

// to insert values in heroes
INSERT INTO heroes(name) VALUES("ironman");

To create apis, I am using php language.
two files in android folder:
DatabaseConfig.php
getdata.php

Place this folder android in your xampp\htdocs\<android-folder-here>
In my case: C:\xampp\htdocs\android

link to access heroes data using api in my case: http://<your-id-address>/android/getdata.php
get ip address using run command in cmd: ipconfig
in my case: http://192.168.43.122/android/getdata.php




