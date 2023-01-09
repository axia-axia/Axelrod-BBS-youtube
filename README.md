<p align="center"><a href="https://laravel.com" target="_blank"><img src="{{ asset('images/sample.jpeg') }}" alt=""></a></p>

<p align="center">
<a href="https://github.com/axia-axia/bbs1"><img src="{{ asset('images/sample.jpeg') }}" alt=""></a>
</p>

## About AXIA - Simple version

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.


### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



# DEV bbs0


## Dev refs
Base : https://mebee.info/2020/06/24/post-10995/
Like func: https://qiita.com/phper_sugiyama/items/9a4088d1ca816a7e3f29
Sakura server set up: https://nori-life.com/sakura-internet-laravel-install/
https://note.com/koushikagawa/n/nb69ebe8b3e90
PC/Mob responsible: https://qol-kk.com/wp2/blog/2019/02/20/post-1108/
PC/Mob responsible: https://magazine.techacademy.jp/magazine/34474
Password reset: https://rinsaka.com/laravel/u06-reset.html (.env localhost => localhost:8000,  User table -> Token add)


# error
Laravelのデプロイ時にPlease provide a valid cache path.が出た時の対処法
mkdir -p storage/framework/cache/data/
mkdir -p storage/framework/app/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views


# error
https://stackoverflow.com/questions/44004461/laravel-5-4-the-directory-does-not-exist-when-running-artisan
Laravel 5.4.* - The "" directory does not exist when running artisan

I had this same issue and it turned out that I was not cloning the ./config directory because of a poorly defined .gitignore. So make sure the original project location was able to push that directory up and that it exists in the new location.

After the clone I re-ran composer install and it all worked.







---------------------------------------------------------------
# Sakura standard deploy
1. GitHubへアップロード
- .gitignoreに.envとvendor(dir)を含めないこと

2. ssh axelrod@axelrod.sakura.ne.jpでさくらへログイン
Webpassw0rd1/DsNA8PQfGuR_

3. GitHubからクローン
- axelrod/www/

4. public/.htaccessをあげておくこと
- 以下comment out必要
<IfModule mod_negotiation.c>
# Options -MultiViews
</IfModule> -

5. Composerインストール (project dir - axelrod/www/bbs0)
- curl -sS https://getcomposer.org/installer | php
- php composer.phar

6. dir追加
mkdir -p storage/framework/cache/data/
mkdir -p storage/framework/app/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views

7. アプリケーションキー作成
- php artisan key:generate --show

8. .env編集
APP_NAME=Axelrod-BBS-CORE
APP_ENV=public
APP_KEY=base64:hlwHqlEMjeVQkGM973ml1s+q7UbxbzFPo/cEV+pyy74=
APP_DEBUG=false
APP_URL=https://axelrod/Axelrod-BBS-BASE
DB_CONNECTION=mysql
DB_HOST=mysql57.axelrod.sakura.ne.jp
DB_PORT=3306
DB_DATABASE=axelrod_core
DB_USERNAME= axelrod
DB_PASSWORD=Webpassw0rd1

8. Composer install
- php composer.phar install  (vendorが得られる※これは.env編集とアプリケーションキー作成後に行う)

9. データベース作成
- php artisan migrate

10. シンボリックリンク作成
ln -s /home/{FTPアカウント名}/{laravelプロジェクト名}/public /home/{FTPアカウント名}/www/{シンボリックリンク名}
ln -s /home/axelrod/Axelrod-BBS-CORE/public /home/axelrod/www/Axelrod-BBS-CORE

11. strage link作成して画像表示
- php artisan storage:link

APP:simplebbs
ver1.00