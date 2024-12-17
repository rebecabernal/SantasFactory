# SANTA'S FACTORY

## :bulb:Project description

**Santa Claus** asks us for help to manage his toy manufacturing and gift list for each child.

## Requirements to achieve in this project:

- Minimum **test coverage** of **70%**.
- Well-configured **project** and **user stories**.
- **Elf routes** must contain the word *elves* and **Santa routes** must contain *Santa*
- **Welcome page** must be a welcome to the toy factory.
  
***
### Toy's table

**Elves** should:

- Display all **manufactured toys** on screen *(Blade and Json)*.
- Be able to **insert, modify or delete a toy** *(Endpoints)*.
- Be able to see the **show** of a toy *(Endpoints and Blade)*.
  
***
### Children's table

**Santa Claus** should:

- Display all **children** on screen *(Blade and Json)*.
- Be able to **insert, modify or delete a child** *(Endpoints)*.
- Be able to see the **show** of children *(Endpoints and Blade)*.
  
***
### Santa's list (PIVOT TABLE)

- If a child has **misbehaved** -> only give **1 gift** **(Coal)**.
- If a child has **behaved well** ->  will receive **2 random gifts** from the list of toys (age appropriate) and those gifts can **NOT** be **repeated** to the same child.

***
## :eye_speech_bubble: Project overview

(Insert screenshoots)

***
## Project Diagrams (BBDD)

(Insert screenshoots)

***
## Installation requirements

Before you start to read how to install the project you'll need these requirements:
>[!NOTE]
>If you can't install xampp, look for any other local server that supports **MySQL** and **PHP**
***

- **XAMPP**

- Install **Composer**

- Install **NPM** in **Node.js**

- **Xdebug** (for the tests coverage)

- **Postman**

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
## Project documentation

### Endpoints
***

#### Toy's table
(Insert endpoints)
***

#### Children's table
(Insert endpoints)
***

#### Santa's list
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
## Authors


