# yii2-micro-framework-sample

An example of how to use [Yii2](https://www.yiiframework.com/) as a micro-framework for primarily its [ActiveRecord](https://www.yiiframework.com/doc/api/2.0/yii-db-activerecord) [ORM](https://en.wikipedia.org/wiki/Object-relational_mapping). You can use it with or without its router.

My purpose was to make it as simple as possible (pretty much using ActiveRecord as a standalone feature), therefore the example is defaulting to not using Yii's router. Then you don't need to add folders, `index.php`, controllers, configure pretty URLs, etc. If you on the other hand want to use the router add calling the `run()` method in `bootstrap.php` (`(new yii\web\Application($config))->run();`), enable `controllerNamespace` in the config array, and add the necessary files and folders as described in [Using Yii as a Micro-framework](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-yii-as-micro-framework).

## Usage

Download or clone this repo and run `composer install`.

To use a database set your database name, user name and password in the `bootstrap.php`, and add your model/ActiveRecord classes in there as well. If you rather want to add a folder for models and create a [single file for each of your models](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-yii-as-micro-framework#creating-a-rest-api) you can of course do so. Again, this sample aims to be just for a very small project, so we wanted to keep it as simple as possible. Can always easily reorganize if the need would ever occur - as long as we keep everything nicely separated in classes.

Now you can access `mypage.php` through whatever web server you use, and add pages as you please. Just require `bootstrap.php` in all your pages.
