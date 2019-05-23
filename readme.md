# MARINE FUEL EXAM

MARINE FUEL EXAM is a tech exam job application.

### Required Technologies

APP NAME is currently running on the following technologies on a windows server. Instructions on how to use them in your own application are linked below.

| Technology (Core) | Source |
| ------ | ------ |
| Laravelv5.8^ | [Laravel Framework v5.8^][laravel] |
| PHPv7^ | [PHP v7+ Thread Safe][php] |

| Techniques | Source |
| ------ | ------ |
| SOLID |
| DRY |
| KISS |
| PseudoNoSQL | [Serialized Store Files][caching] |

### Required Dependencies

| Technology | Source |
| ------ | ------ |
| Git | [Git bash for windows][git] |
| Composer | [Composer setup exec for Windows][composer] |
| PhpUnit | [Stable: v1.13.0 (Optional)][phpunit] |

### Cloning the repository
### Installation / Running the Program
Download/Clone the Application from the git repository [https://github.com/aadriantech/marine-fuel.git]
```sh
git clone https://github.com/aadriantech/marine-fuel.git [folder_name]
```

Navigate to your application root
```sh
cd [directory][app_folder]
```

Setup environment configuration file
```sh
cp .env.example .env
```

Add google maps api key in environment configuration file 
>*Note: https encrypted connection is required to connect to google maps api*
> ensure that domain has SSL encryption
```sh
GOOGLE_MAPS_API_KEY:"whatever your api key is eg:foo"
```

Update/install the PHP vendor dependencies via composer.
make sure you have [composer] installed
Open your terminal/command line and execute the following command

```sh
composer update
```

Set an application key value

```sh
php artisan key:generate
```

### Folder Structure
| Directory | Description |
| ------ | ------ |
| /app/Helpers | contains custom helpers for this project |
| /app/Http/Controllers | contains the business logic and controller base |
| /app/Interfaces | contains the Interface classes |
| /app/Mock | contains the mocker class for unit testing |
| /app | contains the solutions classes for this project |
| /resources | contains the static files |
| /test | contains the unit and feature tests |
| /storage | contains the various caching files including the pinpoint map cache |
| /routes | contains scripts for routing |

### [Unit Testing]
You can run the test by running the command (in linux distros)
```sh
phpunit
```
> in windows you might need to specify the php path

### Changelogs:
> [2019/05/24] - Added a new readme
> [2019/05/24] - Added new codebase


[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

   [laravel]: <https://laravel.com/>
   [php]: <https://windows.php.net/download>
   [caching]: <https://laravel.com/docs/5.8/cache#configuration>
   [nginx]: <https://unit.nginx.org/installation/>
   [phpfpm]: <https://php-fpm.org/>
   [apache]: <https://www.apachelounge.com/download/>
   [c++]: <https://aka.ms/vs/15/release/VC_redist.x64.exe>
   [.net]: <https://dotnet.microsoft.com/download/dotnet-framework-runtime/net472>
   [mysql]: <https://dev.mysql.com/downloads/windows/installer/8.0.html>
   [install]: <https://www.youtube.com/watch?v=D5NjQlS-j80>
   [install-nginx]: <https://www.youtube.com/watch?v=pGc8DbJVupE>
   [git]: <https://git-scm.com/>
   [composer]: <https://getcomposer.org/download/>
   [node.js]: <https://nodejs.org/en/>
   [make]: <https://sourceforge.net/projects/ezwinports/files/>
   [phpunit]: <https://phpunit.de/>
   [nodejs]: <https://nodejs.org/en/>
   [yarn]: <https://yarnpkg.com/lang/en/docs/install/#windows-stable>
   [cypress]: <https://www.cypress.io/>
   [repo]: <https://bitbucket.org/storemalt/crmjtb-v2/src/master/>
   [virtualhost]: <https://www.youtube.com/watch?v=3dUTbeUrlqE>
