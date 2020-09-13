
# Chitragupta

## Overview
### Problem Statement:
These are difficult times, frauds, hacking, and data breaches are on the rise. Various kinds fo new techniques and new kinds of exploits are being released every day. Unfortunately, a lot of times, such attacks and data breaches happen through some unmanaged digital asset which the organization had missed to maintain and update over time and running some legacy code. Every large organization has too many different kinds of digital assets that are exposed to the internet. To name a few, it contains:
- various website domains and subdomains
- employee email addresses
- web services
- source code repositories
- public cloud components like storage, AWS buckets, etc.
- IP network range
- servers etc.

On top of it, a lot of times developers use third-party libraries without realizing that it might contain underlying vulnerabilities which overall makes their code vulnerable. 

Chitragupta (Sanskrit: चित्रगुप्त, 'rich in secrets' or 'hidden picture') is a Hindu god assigned with the task of keeping complete records of the actions of human beings on the earth and punish or reward them according to their Karmas. 

In this project, we will try to create a tool that has the ability to monitor all kinds of digital assets of an organization and also provides actionable intelligence to secure the overall digital health of the organization making them less expose or susceptible to attacks.

Many organisations providing cloud solution tend to forget the unused cloud resourses which adds on billing. Chitragupta is one of the solution which reduce the efforts of Billing admin.

Features!

  - Chitragupta is a tool which automatically runs backend scripts to check which all resources are running and provides a graphical representation of the running resources


> The overriding design goal for Chitragupta is to provide a automated cloud solution with asset details of an organization. The idea is that web based application with database captures the cloud resource data of each user and perform analysis and display the vulnarablities exposed in a Graphical representation.

![](https://github.com/titanlambda/chitragupta/blob/master/demo.png)

### Tech

Chitragupta uses a number of open source projects to work properly:

* Python - To script the resourse utilisation
* PHP - Web Development Scripting Language  
* HTML - Designing Front end of the UI
* Twitter Bootstrap - great UI boilerplate for modern web apps
* MySql - Backend DB


And of course Chitragupta itself is open source with a [**url**]
 on GitHub.

### Installation

Chitragupta requires requires the below prerequisites 
Install the dependencies and devDependencies and start the server.
AWS environment 
```sh
$ sudo apt install python3.8
$ pip3 install awscli
$ pip install boto3
```
*******************************
For Front End and Back End 
```sh
$ sudo apt install php libapache2-mod-php
$ sudo apt-get install mysql-server
```
*******************************
Usage
    > python app.py
    *****Video******


### Credits

 - Abhishek BV
 - Aman Shakya
 - Utkarsh Kumar Gupta
 - Tamaghna Basu

License
----
GPL - 3