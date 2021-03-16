<?php
    require '../common/auth.php';
    require '../common/database.php';

    if(!isLogin()) {
        header('Location: ../login/');
        exit;
    }

    $user_name = getLoginUserName();
    $user_id = getLoginUserId();

    $memos = [];
    $database_handler = getDatabaseConnection();
    if ($statement = $database_handler->prepare("SELECT id, title, cobtent, upload_at FROM memos WHERE user_id = :user_id ORDER BY updated_at DESC")) {
        $statement->bindParam(':user_id', $user_id);
        $statement->execute();

        while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
            array_push($memos, $result);
        }
    }

    $edit_id = "";
    if (isset($_SESSION['select_memo'])) {
        $edit_memo = $_SESSION['select_memo'];
        $edit_id = empty($edit_memo['id']) ? "" : $edit_memo['id'];
        $edit_title = empty($edit_memo['title']) ? "" : $edit_memo['title'];
        $edit_content = empty($edit_memo['content']) ? "" : $edit_memo['content'];
    }
    ?>
<!DOCTYPE html>
<html lang="ja">
    <?php
        include_once "../common/header.php";
        echo getHeader("メモ投稿");
    ?>
    <body class="bg-white">
        <div class="h-100">
            <div class="row h-100 m-0 p-0">
                <div class="col-3 h-100 m-0 p-0 border-left border-right border-gray">
                    <div class="left-memo-menu d-flex justify-content-between pt-2">
                        <div class="pl-3 pt-2">
                            xxxさん、こんにちは。
                        </div>
                        <div class="pr-1">
                            <a href="./action/add.php" class="btn btn-success"><i class="fas fa-plus"></i></a>
                            <a href="../login/" class="btn btn-dark"><i class="fas fa-sign-out-alt"></i></a>
                        </div>
                    </div>
                    <div class="left-memo-title h3 pl-3 pt-3">
                        メモリスト
                    </div>
                    <div class="left-memo-list list-group-flush p-0">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">メモタイトル1</h5>
                                <small>2020/08/01 09:00</small>
                            </div>
                            <p class="mb-1">
                                メモ詳細1
                            </p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">メモタイトル2</h5>
                                <small>2020/08/01 09:00</small>
                            </div>
                            <p class="mb-1">
                                メモ詳細2
                            </p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">メモタイトル3</h5>
                                <small>2020/08/01 09:00</small>
                            </div>
                            <p class="mb-1">
                                メモ詳細3
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-9 h-100">
                    <form class="w-100 h-100" method="post">
                        <input type="hidden" name="edit_id" value="" />
                        <div id="memo-menu">
                            <button type="submit" class="btn btn-danger" formaction=""><i class="fas fa-trash-alt"></i></button>
                            <button type="submit" class="btn btn-success" formaction=""><i class="fas fa-save"></i></button>
                        </div>
                        <input type="text" id="memo-title" name="edit_title" placeholder="タイトルを入力する..." value="" />
                        <textarea id="memo-content" name="edit_content" placeholder="内容を入力する..."></textarea>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html