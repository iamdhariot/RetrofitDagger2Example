# RetrofitDagger2Example
In this project, I demostrate how the depenency injection is done using dragger2.
Dragger2 is most popular maintained by google dependency injection framework for android and java. 
```
In this project,
I am using xampp to create mysql database on localhost.
using following queries:

//to create 'android' database:
CREATE DATABASE android;

//to use 'android' database:
USE android;

//to create 'heroes' table:
CREATE TABLE heroes(
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(10) NOT NULL
);

//to insert values in heroes:
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

Steps to follow this demo:

Create android project with any name you want.

1. Add retrofit and dagger2 dependency in build.gradle<app>:
 //retrofit for network calls and gson for json easy parsing:
 implementation 'com.squareup.retrofit2:retrofit:2.3.0'
 implementation 'com.squareup.retrofit2:converter-gson:2.2.0'
 
 //dagger 2:
 implementation 'com.google.dagger:dagger:2.13'
 annotationProcessor 'com.google.dagger:dagger-compiler:2.13'
 
 2.Create and Write Code in following files:
 Hero.java 
 Api.java 
 AppModule.java    
 ApiModule.Java    
 ApiComponent.java 
 //BEFORE MOVING AHEAD REBUILD YOUR PROJECT
 MyApplication.java
 activity.xml
 MainActivity.java
 
 3.Add these in Manifest application tag:
 // application class
 android:name=".MyApplication"
 // we are using http not secure connection to make it true otherwise app not connect with it.
 android:usesCleartextTraffic="true" 
 
 4.In last don't forget to add Internet permisson in manifest tag:
 // to access internet
 <uses-permission android:name="android.permission.INTERNET"/>
 
 5.You can test your app now.
 ```
 ###Happy Coding. :)
  
 
 
 
 
 
 
 
 
 
  
  
  





