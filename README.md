# :santa: SANTA'S FACTORY :christmas_tree:

## :bulb:Project description

**Santa Claus** asks us for help to manage his toy manufacturing and gift list for each child.

### Requirements to achieve in this project:

- Minimum **test coverage** of **70%**.
- Well-configured **project** and **user stories**.
- **Elf routes** must contain the word *elves* and **Santa routes** must contain *Santa*.
- **Welcome page** must be a welcome to the toy factory.
  
***
### :teddy_bear:Toy's table

**Elves** should:

- Display all **manufactured toys** on screen *(Blade and Json)*.
- Be able to **insert, modify or delete a toy** *(Endpoints)*.
- Be able to see the **show** of a toy *(Endpoints and Blade)*.
  
***
### :girl:Children's table

**Santa Claus** should:

- Display all **children** on screen *(Blade and Json)*.
- Be able to **insert, modify or delete a child** *(Endpoints)*.
- Be able to see the **show** of children *(Endpoints and Blade)*.
  
***
### :gift:Santa's list (PIVOT TABLE)

- If a child has **misbehaved** -> only give **1 gift** **(Coal)**.
- If a child has **behaved well** ->  will receive **2 random gifts** from the list of toys (age appropriate) and those gifts can **NOT** be **repeated** to the same child.

***
## :eye_speech_bubble: Project overview

(Insert screenshoots)

***
### Project Diagrams (BBDD)

![DiagramBBDD](https://github.com/user-attachments/assets/6fa747e7-1168-4103-baaa-781a269426be)

***
## :scroll: Installation

1.) **Clone** this repository:
```
 https://github.com/rebecabernal/SantasFactory
```

***
2.) Install **Composer** and **NPM**
```
composer install
```
```
npm install
```

***
3.) **Create** a *.env* file copying everything inside the existing file *.env.example* and **modify** the following **lines**:
* DB_CONNECTION=mysql
* DB_DATABASE=jobSearch

***
4.) Create a **database** in **MySQL**

***
5.) Now go to the **VSC terminal** and put the following command:
```
php artisan migrate:fresh --seed
```
This command will **generate** all the **tables**.

***
6.) Open another terminal in **VSC** and put the following command
```
npm run dev
```

***
7.) Open **another terminal** and **run** the **server** with this command:
```
php artisan serve
```
You'll see an **url** that is going to take you to a website.

>[!IMPORTANT]
>Be sure that your running npm and the server in **DIFFERENT** terminals, **DON'T** close these two terminals and **DON'T** use other commands in these two terminals.

***
### :floppy_disk: Installation requirements

Before you start to read how to install the project you'll need these requirements:
>[!NOTE]
>If you can't install xampp, look for any other local server that supports **MySQL** and **PHP**
***

:black_circle: **XAMPP**

:black_circle: Install **Composer**

:black_circle: Install **NPM** in **Node.js**

:black_circle: **Xdebug** (for the tests coverage)

:black_circle: **Postman**

***
## :mag_right:Project documentation

### Endpoints
***

#### :teddy_bear:Toy's table
#### Get toys
<img width="272" alt="getToys" src="https://github.com/user-attachments/assets/759bbd6f-af81-40d5-a49f-986ee46e7609" />

#### Post toy
<img width="276" alt="postToy" src="https://github.com/user-attachments/assets/9d4bbc42-b47f-4713-8875-3f76be13192b" />

#### Update toy
<img width="277" alt="updateToy" src="https://github.com/user-attachments/assets/470c1248-96d0-4853-97c5-95f879048f61" />

#### Delete toy
<img width="280" alt="deleteToy" src="https://github.com/user-attachments/assets/559d1077-219e-4b6d-b583-5c1dd721b30b" />

#### Show toy
<img width="273" alt="showToy" src="https://github.com/user-attachments/assets/c26dbb7e-4ae2-478c-ba98-d2a6991ed82f" />

***

#### :girl:Children's table
#### Get kids
<img width="273" alt="getKids" src="https://github.com/user-attachments/assets/002c41d0-67d9-4802-b889-66fe8ce5af06" />

#### Post kid
<img width="274" alt="postKids" src="https://github.com/user-attachments/assets/ca7b8780-a0c0-4c2b-a403-b9afee7bba88" />

#### Update kid
<img width="275" alt="updateKids" src="https://github.com/user-attachments/assets/8da8d37d-7c9d-414c-9c18-cd2c7092aae6" />

#### Delete kid
<img width="274" alt="deleteKids" src="https://github.com/user-attachments/assets/e21df292-4998-4b4c-961b-716fe016aa40" />

#### Show kid
<img width="275" alt="showKids" src="https://github.com/user-attachments/assets/b2648991-ed37-4d27-8689-96b4a9983d0c" />

***

#### :gift:Santa's list
(Insert endpoints)
***

## :white_check_mark: Tests

> [!IMPORTANT]
> It's important to test the project so we can check if it works correctly and to do that use this command in the **VSC** terminal:

```
php artisan test
```
(insert screenshoot)

***
### Coverage

To see the **coverage** you can use this command at the **VSC** terminal:
```
php artisan test --coverage-html=coverage-report
```

> [!IMPORTANT]
> Everytime that you do **new tests** you need to put the command above in the **VSC** terminal, so it can **update** your coverage.

This will add a **folder** called *coverage-report*, go to the folder, go to the *index.html*, and then **open with live server**. After that you should see this page:

(insert screenshoot)

***
## :bust_in_silhouette: Authors
- **Valeria Dobado**: https://github.com/ugotchriscoded
- **Rebeca Bernal**: https://github.com/rebecabernal
- **Talena Barbosa**: https://github.com/talenaa
- **Rodrigo Lastra**: https://github.com/rodrigoo1604
- **Pepe Gavilán**: https://github.com/sr-calcetines
- **Diego Santamaría**: https://github.com/DinGo21
  
***
## Languages and tools
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=white&labelColor=896696&color=896696'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='html5' src='https://img.shields.io/badge/html-100000?style=for-the-badge&logo=html5&logoColor=white&labelColor=FF8400&color=FF8400'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='css3' src='https://img.shields.io/badge/css-100000?style=for-the-badge&logo=css3&logoColor=white&labelColor=079FB0&color=079FB0'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='mysql' src='https://img.shields.io/badge/mysql-100000?style=for-the-badge&logo=mysql&logoColor=white&labelColor=1C662F&color=1C662F'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='git' src='https://img.shields.io/badge/git-100000?style=for-the-badge&logo=git&logoColor=white&labelColor=FF0000&color=FF0000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='github' src='https://img.shields.io/badge/github-100000?style=for-the-badge&logo=github&logoColor=white&labelColor=000000&color=000000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='canva' src='https://img.shields.io/badge/canva-100000?style=for-the-badge&logo=canva&logoColor=white&labelColor=A700FB&color=A700FB'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='xampp' src='https://img.shields.io/badge/xampp-100000?style=for-the-badge&logo=xampp&logoColor=white&labelColor=FF8800&color=FF8800'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='postman' src='https://img.shields.io/badge/postman-100000?style=for-the-badge&logo=postman&logoColor=white&labelColor=FF0000&color=FF0000'/></a>
***

## Thanks for reading!

Have a nice day :)
***
