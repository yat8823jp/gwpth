# Gulp & vccw WordPress Theme 開発環境構築
WordPress theme develop gulp & vccw

## パッケージ一覧
* gulp
* gulp-sass
* browserSync
* sanitize.css
* jQuery
* plumber //エラー通知
* notify //エラー通知
* gulp-imagemin //画像圧縮
* imagemin-pngquant //png画像の圧縮
* gulp-pleeease //ベンダープレフィックス
* gulp-useref //ファイル結合
* gulp-if //if文
* gulp-uglify //js圧縮
* gulp-cssnano //css圧縮
* del //ディレクトリ削除
* run-sequence //並行処理
* gulp-sourcemaps //ソースマップ

## 依存アプリケーション等

* [npm](https://www.npmjs.com/)
* [gulp](http://gulpjs.com/)
* [sanitize.css](https://10up.github.io/sanitize.css/)
* [sass](http://sass-lang.com/)
* [vccw](http://vccw.cc/)

## 設定ファイル

* .editorcoding 文字コード設定


### インストール
#### vccwインストール
[vccw](http://vccw.cc/) をご参照ください。
* vccwを利用するにはVagrantが必要になります。

#### npmインストール
` npm install `

### Usage
* SCSSファイル及びimageファイルをdevの中に入れてください。
* リセットにsanitize.css を使用しています。お好みでnormalize.cssやreset.cssに変更してください。
* scss ディレクトリはFLOCSSを使用しています。お好みで構成を変えてください。[FLOCSSについてはこちら](https://github.com/hiloki/flocss)

### 起動コマンド
` gulp `　- defaultで設定しているtaskが起動する

` gulp *** ` - *** のtaskを起動する

### Author

YAT [http://wp.yat-net.com](http://wp.yat-net.com)  

### Version

#### 1.0
* First release
