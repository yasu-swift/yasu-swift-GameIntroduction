<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

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
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Sumeba ― ゲーム集会所

## About This App
* 自分の好きなゲームを紹介するアプリ

## テーブル定義
* 画像テーブル･･･画像情報
* ジャンルテーブル･･･ジャンル名
* 記事テーブル･･･記事情報
* ユーザーテーブル･･･ユーザー情報
* イメージテーブル･･･記事に添付する画像パス
https://docs.google.com/spreadsheets/d/15Q1iYB-spWJC6y45kGpwEYSWhvuDoL7t4HbTqlWyz5I/edit#gid=0

## 実装機能
* CRUD機能
* 検索
  * フリーワード検索
  * タイトル ジャンル(選択)から検索
* ファイルアップロード ー>DBには保存されているが、表示できませんでした ー>未完成です

## 工夫した点
 #バリデーション機能つけました

## 画面

### 一覧画面
<img width="1920" alt="スクリーンショット 2021-10-07 1 18 08（2）" src="https://user-images.githubusercontent.com/70826356/136245990-96666eab-4f15-436e-a0ad-4df4390b04ff.png">

### 詳細画面
<img width="1920" alt="スクリーンショット 2021-10-07 1 18 26（2）" src="https://user-images.githubusercontent.com/70826356/136246499-431e6b18-5de7-4fcc-8126-3cafee62f63f.png">

### 新規作成画面
<img width="1920" alt="スクリーンショット 2021-10-07 1 39 38" src="https://user-images.githubusercontent.com/70826356/136246918-7c67ddfe-b1be-4338-a1f0-8076ba38b831.png">

### バリデーション新規
<img width="1920" alt="スクリーンショット 2021-10-07 1 19 31" src="https://user-images.githubusercontent.com/70826356/136247032-a43cf037-b66b-4097-bd6e-9c6b61876d64.png">

### 編集画面
<img width="1920" alt="スクリーンショット 2021-10-07 1 19 56" src="https://user-images.githubusercontent.com/70826356/136247147-3a4f3517-d117-44b2-a4fe-9ec741338d8a.png">

### バリデーション編集
<img width="1920" alt="スクリーンショット 2021-10-07 1 20 17" src="https://user-images.githubusercontent.com/70826356/136247232-623b4e41-b66a-455d-b634-48e49805bb59.png">

### 削除機能
<img width="1920" alt="スクリーンショット 2021-10-07 1 20 41" src="https://user-images.githubusercontent.com/70826356/136247478-c4b3ebf0-e40e-4f5a-83b8-6bbe4c5e5fd9.png">

### 一覧のページ移動
<img width="1920" alt="スクリーンショット 2021-10-07 1 21 16" src="https://user-images.githubusercontent.com/70826356/136247581-eb2cfb4c-3704-47c9-bd26-109e88a9ac57.png">
