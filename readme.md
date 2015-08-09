# Gulp　開発環境構築

## パッケージ一覧
* gulp
* gulp-ruby-sass
* browserSync
* plumber //エラー通知
* notify //エラー通知
* gulp-imagemin //画像圧縮
* imagemin-pngquant //png画像の圧縮
* gulp-pleeease //ベンダープレフィックス
* gulp-useref //ファイル結合
* gulp-if //if文
* gulp-uglify //js圧縮
* gulp-minify-css //css圧縮
* del //ディレクトリ削除
* run-sequence //並行処理
* gulp-ejs //htmlの書き出し＆テンプレートファイルインクルード,
* gulp-replace //文字列置き換え

## 依存アプリケーション等

* [bower](http://bower.io/])
* [npm](https://www.npmjs.com/)
* [gulp](http://gulpjs.com/)

## 設定ファイル

* .editorcoding 文字コード設定


### インストール

#### npmインストール
` npm install `

エラーが出たら `sudo` をつける

#### bower
` bower install `

エラーが出たら `sudo` をつける

### Usage
* 開発を行うファイルはdevディレクトリの中に入れてください。
* htmlの吐き出し元となる、ejsファイルをejsフォルダの中にいれて開発してください。監視中、ejsフォルダのファイルが更新されると、devフォルダに吐出されます。
  * 例）dev/ejs/index.ejs → dev/index.html 
* 開発が終わったら、 `ejs build` コマンドを利用し、devファルダに吐出さているファイルより、htdocsのフォルダに全ファイルが吐出されます。
  * 例）dev/index.html → htdocs/index.html 

### 起動コマンド
` gulp `　- defaultで設定しているtaskが起動する

` gulp *** ` - *** のtaskを起動する

### Author

YAT [http://wp.yat-net.com](http://wp.yat-net.com)

Chiaki [http://mellowchanter.info/](http://mellowchanter.info/)

###Version
2015.08.09 1.1.1 フォルダ名変更 template → ejs

2015.08.06 1.1 EditorConfig merge

2015.08.05 1.0



