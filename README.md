# Unofficial Russian osTicket translation

### What is it

I've tired of poor quality translation for russian osTicket and permanent race condition
for bad translation. That is my i've created this translation from scratch.

### Don't forget

Before creating phar we must convert our translation (serialize gettext to php)
```
php include/class.translation.php message.mo > message.mo.php
```

Then we can use php-script to create standalone phar
```
php create.php
```

Then we must copy this phar to **include/i18n**