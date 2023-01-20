<p align="center"><a href="https://laravel.com" target="_blank"><img src="{{ asset('images/sample.jpeg') }}" alt=""></a></p>

<p align="center">
<a href="https://github.com/axia-axia/bbs1"><img src="{{ asset('images/sample.jpeg') }}" alt=""></a>
</p>

## About AXIA - Simple version


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
APP_KEY=base64:M7UBJaAKxSiU9r2SIpQ5Yj6phB6P/iBcwV8DyzN3k4E=
APP_DEBUG=false
APP_URL=https://axelrod/Axelrod-BBS-BASE
DB_CONNECTION=mysql
DB_HOST=mysql57.axelrod.sakura.ne.jp
DB_PORT=3306
DB_DATABASE=wp664543_alyoutube
DB_USERNAME= axelrod
DB_PASSWORD=Webpassw0rd1

8. Composer install
- php composer.phar install  (vendorが得られる※これは.env編集とアプリケーションキー作成後に行う)

9. データベース作成
- php artisan migrate

10. シンボリックリンク作成
ln -s /home/{FTPアカウント名}/{laravelプロジェクト名}/public /home/{FTPアカウント名}/www/{シンボリックリンク名}
ln -s /home/axelrod/Axelrod-BBS-youtube/public /home/axelrod/www/Axelrod-BBS-youtube

11. storage link作成して画像表示
- php artisan storage:link

12. https化
https://rapicro.com/laravel%E3%81%AEroute%E3%81%8Chttp%E3%81%AB%E3%81%AA%E3%82%8B%E3%80%90https%E5%8C%96%E3%80%91/
app/Providers/AppServiceProvider.php 
use Illuminate\Support\Facades\App; // 追加
use Illuminate\Support\Facades\URL; // 追加
public function boot() {
    if (App::environment('production','staging')) {
        URL::forceScheme('https');
    }
APP:YouTube-Axelrod-BBS
ver1.01-en




SHINSERVER

1. Server in
- ssh -l wp664543 -i wp664543.key wp664543.wpx.jp -p 10022

2. Composer install
- curl -sS https://getcomposer.org/installer | php
- php composer.phar

3. dir add
mkdir -p storage/framework/cache/data/
mkdir -p storage/framework/app/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views

4. env db (ATT db name small char)
APP_NAME=Axelrod-BBS-youtube
APP_ENV=public
APP_KEY=base64:i+bThXnKOVo7NZ6I4Z6mHuoc+MQVF9Np/sTJJaKwdn4=
APP_DEBUG=false
APP_URL=https://youtube.axelrod.cc
DB_CONNECTION=mysql
DB_HOST= localhost
DB_PORT=3306
DB_DATABASE= wp664543_alyoutube
DB_USERNAME=wp664543_axelrod
DB_PASSWORD=webpassw0rd1

5. symbolic
ln -s /home/wp664543/Axelrod-BBS-youtube/public  /home/wp664543/wp664543.wpx.jp/public_html

6. storage link
php artisan storage:link

7. https ssl app/Providers/AppServiceProvider.php 
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
public function boot() {
    if (App::environment('production','staging')) {
        URL::forceScheme('https');
    }
}

8. htaccess
route delete

ln -s /home/wp664543/axelrod.cc/public_html

mv /home/wp664543/wp664543.wpx.jp/public_html /home/wp664543/wp664543.wpx.jp/_public_html
ln -s /home/wp664543/youtube.axelrod.cc/Axelrod-BBS-youtube/public /home/wp664543/axelrod.cc/public_html



root
/home/wp664543/axelrod.cc/public_html/
BF0000


                    <!-- <input type="image" ID="rabbit2" src="{{ asset('images/register2.png') }}" alt="Register"> -->