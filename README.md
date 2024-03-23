<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://avatars.githubusercontent.com/u/87377917?s=200&v=4" width="200" alt="404NFID Logo"></a></p>

# Math Rizz

Math Rizz is a comprehensive mathematics e-learning web platform designed to enhance the learning experience for high school students (SMA level). It provides interactive lessons, practice exercises, progress tracking, and collaborative features to support students in mastering advanced mathematical concepts.

*Read this in other languages: [Bahasa Indonesia](README.id.md).*

## Technical Requirements
- **Platform**: Web-based application using modern web technologies (HTML5, CSS3, JavaScript).
- **Compatibility**: Support for major web browsers (Chrome, Firefox, Safari, Edge) and mobile platforms (iOS, Android).
- **Security**: Secure user authentication, data encryption, and privacy protection measures.
- **Scalability**: Ability to handle concurrent users and scale resources as needed.

## Design Guidelines
- User-friendly interface with intuitive navigation and visually appealing design.
- Incorporation of multimedia elements (videos, animations) for engaging content delivery.
- Gamification elements (badges, rewards) to motivate and incentivize learning.

## Technology Stack

- Laravel 11.0
- Svelte 4.12
- MySQL Community Server 8.3
- Bootstrap 5.3

## Get Started

### Prerequisite

- You need [PHP](https://www.php.net/downloads) to run this, with a minimum installed version of **PHP 8.3.4**. Make sure you can also access PHP via the command line by adding it to the [path environment variable](https://rgrahardi.medium.com/pengaturan-path-php-dan-composer-di-environment-variables-windows-10-e1e22a637618).
- Make sure [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos) is also installed and accessible via the command line.
- Ensure that you have also installed [MySQL](https://dev.mysql.com/downloads/mysql/).
- You need to install [Node.js](https://nodejs.org/en/download/current) to ensure that the HTML pages can be rendered when the application is running. Use Node.js version **v20.11.1 LTS** for the expected results.
- I recommend installing [Git](https://git-scm.com/downloads) for better code management.

### Get the Source Code
Of course, you need to put this code on your computer first. There are two ways to do this: by __downloading the project zip file__ or __by using Git (recommended)__.

1. **Download the Project Zip**

    You can click on [this link](https://github.com/404NotFoundIndonesia/math-rizz/archive/refs/heads/main.zip) to download the zip file of this project.

2. **Git Clone**

    Make sure that you have installed git. Open the directory where you want to place the source code in the terminal. Then, run the following command:
    ```shell
    git clone git@github.com:404NotFoundIndonesia/math-rizz.git
    ```

### Install Dependencies

There are two types of dependencies that we need to install for this project: one for the backend and one for the frontend. For the backend, we use Composer for dependency management, while for the frontend, we use npm to install dependencies.

And __make sure this project is open in your command line interface__. To confirm your current active directory in the terminal, use the following command: 
```shell
pwd
```

To install backend dependencies, use the following command:
```shell
composer install
```

To install frontend dependencies, use the following command:
```shell
npm install
```

### How to Run
You need to open two command line instances to run this project. Each is used for the backend and frontend parts. Also, make sure the active directory in each command line is within this project.

To run the backend server, use the following command:
```shell
php artisan serve
```

To run the frontend server, use the following command:
```shell
npm run dev
```
Open `http://localhost:8000` in your browser to access Math Rizz. When you want to access Math Rizz in a web browser, make sure you **do not close or stop both of those processes**.

Now, you're all set to explore Math Rizz and enhance your mathematics learning experience! Happy learning! 📚✨
