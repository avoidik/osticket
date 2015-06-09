#!/bin/bash
rm -rf ru/
rm -f ru.phar
read -p "Copy folder to i18n and press any key... " -n1 -s
cd ../..
php include/class.translation.php /var/www/html/desk/include/i18n/ru/LC_MESSAGES/messages.mo > /var/www/html/desk/include/i18n/ru/LC_MESSAGES/messages.mo.php
cd include/i18n/
php create.php
