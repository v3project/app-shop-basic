Shop V3Project on SkeekS CMS (Yii2)
=========================

[![skeeks!](https://cms.skeeks.com/uploads/all/35/fd/33/35fd33aa306823dbaf53a0142d43b3fa.png)](https://cms.skeeks.com)

##Документация
  * [Документация с примерами + видео](http://app-v3-shop.readthedocs.io/ru/latest/)
  
##Ссылки
* [Web site (SkeekS CMS)](https://cms.skeeks.com)
* [Docs (SkeekS CMS)](https://cms.skeeks.com/docs)
* [Author](https://skeeks.com)
* [ChangeLog](https://github.com/skeeks-cms/cms/blob/master/CHANGELOG.md)

##Установка

```bash
# Download latest version of composer
curl -sS https://getcomposer.org/installer | COMPOSER_HOME=.composer php
# Installing the base project SkeekS CMS
COMPOSER_HOME=.composer php composer.phar create-project --prefer-dist --stability=dev v3project/app-v3-shop demo.ru
# Going into the project folder
cd demo.ru

#Edit the file to access the database, it is located at common/config/db.php

#Installation of ready-dump
php yii dbDumper/mysql/restore
```




___

> [![skeeks!](https://gravatar.com/userimage/74431132/13d04d83218593564422770b616e5622.jpg)](https://skeeks.com)  
<i>SkeekS CMS (Yii2) — quickly, easily and effectively!</i>  
[skeeks.com](https://skeeks.com) | [cms.skeeks.com](https://cms.skeeks.com)

