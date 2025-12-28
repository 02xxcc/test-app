# Online Forum

PHPで作成した簡単な掲示板アプリです。  
学習用として、ユーザー認証と投稿機能を実装しています。

## 機能
- ユーザー登録
- ログイン / ログアウト
- 投稿の作成 / 削除（CRUD）
- 投稿一覧表示

## 使用技術
- PHP
- MySQL
- HTML / CSS

## 動作環境
- macOS / Windows
- **MAMP**
  - Apache
  - MySQL
  - PHP

## 補足
学習用のサンプルアプリです。
※ ローカル環境での動作を想定しています。

## セットアップ手順

### 1. リポジトリをクローン
```bash
git clone https://github.com/your-name/online-forum.git

4. DB接続設定

本プロジェクトでは DB接続情報をリポジトリに含めていません。

以下の手順でローカル用設定ファイルを作成してください。

library.local.php を作成
<?php
function dbconnect() {
    $db = new mysqli(
        'localhost',
        'ユーザー名',
        'パスワード',
        'データベース名'
    );

    if ($db->connect_error) {
        die($db->connect_error);
    }

    return $db;
}

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}