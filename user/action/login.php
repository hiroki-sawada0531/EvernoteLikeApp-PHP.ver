<?php
    session_start();
    require '../../common/validation.php';
    require '../../common/database.php';

    //パラメータ取得
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    //バリデーション
    $_SESSION['errors'] = [];

    //空チェック
    emptyCheck($_SESSION['errors'], $user_email, "メールアドレスを入力してください。");
    emptyCheck($_SESSION['errors'], $user_password, "パスワードを入力してください。");

    //文字数チェック
    stringMaxSizeCheck($_SESSION['errors'], $user_email, "メールアドレスは255文字以内で入力してください。");
    stringMaxSizeCheck($_SESSION['errors'], $user_password, "パスワードは255文字以内で入力してください。");
    stringMinSizeCheck($_SESSION['errors'], $user_password, "パスワードは8文字以上で入力してください。");

    if (!$_SESSION['errors']) {
        // - メールアドレスチェック
        mailAddressCheck($_SESSION['errors'], $user_email, "正しいメールアドレスを入力してください。");

        // - パスワード半角英数チェック
        halfAlphanumericCheck($_SESSION['errors'], $user_password, "パスワードは半角英数字で入力してください。");
    }

    if($_SESSION['errors']) {
        header('Location: ../../login/');
        exit;
    }