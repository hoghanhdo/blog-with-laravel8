
# Blog with laravel8

## Install code sniffer

Install code sniffer for local development with composer
```
composer require --dev "squizlabs/php_codesniffer=*"
```

Check if installation was successful. If sucessful then it should be located at vendor/bin/
```
./vendor/bin/phpcs -h
```

Check available coding standard
```
./vendor/bin/phpcs -i
```

Create `phpcs.xml` directly inside project directory to set up rules for checking coding style
< br/>
Run code sniffer command to check for coding style
```
// target all files
./vendor/bin/phpcs --report=summary .

// target specific file
./vendor/bin/phpcs --report=summary File_name.php
```

Or, write scipts in `composer.json` for shorter command. In `composer.json`, update "scripts" as below
```
"scripts": {
        // some other scripts

        // to run style check
        "lint": [
            "./vendor/bin/phpcs --standard=phpcs.xml ."
        ],
        // to fix if there is any violation existing in code
        "lint-fix": [
            "./vendor/bin/phpcbf --standard=phpcs.xml ."
        ]
    }
```
Usually when run phpcs to check for coding style, if there’s a violation in code composer has also been configured to execute the code sniffer fixer called phpcbf (which is also located at vendor/bin/). 
