<h2 align="center">Evernote風メモアプリPHP.ver</h2>

<img src="https://user-images.githubusercontent.com/69971751/111589944-db94a580-8808-11eb-8612-3a1eac3f0f42.png" width=100%>

## :clap:参考にした学習教材及び製作者様
https://www.techpit.jp/courses/132
(※この教材は有料です。)
<br>講師:yasuaki様

## :octocat:開発環境

- PHP 7.4.10
- Docker 19
- docker-compose 1.27
- nginx 1.19.1
- phpMyAdmin 5.0
- Heroku
- VSCode（Visual Studio Code）

<p align="center">
  <a href="https://www.php.net/"><img src="https://www.php.net/images/logos/new-php-logo.png" width="120px;" /></a>
  <br>
  <a href="https://www.docker.com/"><img src="https://www.docker.com/sites/default/files/d8/2019-07/vertical-logo-monochromatic.png" height="60px;" /></a>
  &emsp;
  <a href="https://www.phpmyadmin.net/"><img src="https://upload.wikimedia.org/wikipedia/commons/9/95/PhpMyAdmin_logo.png" height="60px;" /></a>
  &emsp;
  <a href="https://www.nginx.com/"><img src="https://www.nginx.com/wp-content/uploads/2020/05/NGINX-product-icon.svg" height="60px;" /></a>
  &emsp;
  <a href="https://jp.heroku.com/"><img src="https://brand.heroku.com/static/media/heroku-logo-solid.ab0c1b46.svg" height="60px;" /></a>
</p>

## :memo:アプリの機能

<h3>1.新規メモの作成</h3>

緑のプラスマークボタンを押すことでメモを新しく作ることが出来ます。

<img src="https://user-images.githubusercontent.com/69971751/111601562-d2f69c00-8815-11eb-9d79-a1a9978bd238.gif" width=50%>

<h3>2.メモのタイトル・本文の作成と保存</h3>

I.メモタイトルと本文はそれぞれ"新規メモ"と"内容を入力する"の上でクリックすることで入力することが出来ます。<br>II.タイトルはデフォルトで"新規メモ"と入力されているので消去してから使ってください。<br>Ⅲ.書き終えたら右上の緑の更新ボタンを押して下さい。<br>Ⅳ.既に編集済みのメモへの変更も同様にして更新することが出来ます。<br>Ⅴ.最後に更新したメモが一番上に表示される様になっています。

<img src="https://user-images.githubusercontent.com/69971751/111622573-b4e86600-882c-11eb-8040-8fd27d5562fa.gif" width=50%>

<h3>3.選択しているメモの削除</h3>

メモリストの中から削除をしたいメモの上でクリックをするとメモが青くなり選択状態になります。その状態で右上の赤いボタンを押すと選択されたメモが削除されます。

<img src="https://user-images.githubusercontent.com/69971751/111623727-18bf5e80-882e-11eb-94e1-e4d27760ebd4.gif" width=50%>

## :pencil2:使用方法

https://evernotelikeapp-php.herokuapp.com

<br>

1.上記のURLを開くとメモアプリのログイン画面に移動します。
2.ビジター用に用意したメールアドレス<span style="color: red; ">test@example.com</span>とパスワード<span style="color: red; ">00000000</span>を入力して緑色のログインボタンを押して下さい。

