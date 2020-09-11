# Laravel 7 Eloquent 模型對映 Elasticsearch 型別

引入 elasticquent 的 elasticquent 套件來擴增通過將 Eloquent 模型對映到 Elasticsearch 型別來簡化使用，可以使用預設設定或定義 Elasticsearch 如何在模型中索引和搜尋。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/user` 來進行使用者的索引建立及搜尋特經由指定姓名。

----

## 畫面截圖
![](https://i.imgur.com/43llC2o.png)
> 在 Elasticsearch 中輕鬆索引和搜尋其內容
