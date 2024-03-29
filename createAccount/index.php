<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>基本情報技術者試験×クイズ</title>
        <link rel="stylesheet" href="../css/navigation.css">
        <link rel="stylesheet" href="css/index.css">
        <script src="../js/navigation.js"></script>
    </head>
    <body>
        <?php include '../session.php'; ?>
        <header>
            <div class="top">
                <a href="../index.php">
                    <img class="logo" src="../image/logo.png" alt="ロゴ">
                </a>
                <a href="../index.php">基本情報技術者試験×クイズ</a>
                <a class="mypage" href="../mypage/index.php">
                    <img class="icon" src="../image/user.png" alt="マイページアイコン">
                </a>
            </h2>
        </header>
        <nav>
            <ul>
                <li><a href="../createQuestion/index.php">作問</a></li>
                <li><a href="../solveQuestion/index.php">問題</a></li>
                <li><a href="../createAccount/index.php">新規登録</a></li>
                <li><a href="../loginAccount/index.php">ログイン</a></li>
                <li><a href="../mypage/setting.php">設定</a></li>
            </ul>
        </nav>
        <div class="frame-gray">
            <div class="frame-white">

                <h1>アカウントを作成する</h1>

                <div class="container">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label for="username"><img src="../image/user2.png" class="user-icon">ユーザー名:</label>
                            <input type="text" id="username" name="username" >
                        </div>

                        <div class="form-group">
                            <label for="password"><img src="../image/key.png" class="pass-icon">パスワード:</label>
                            <input type="password" id="password" name="password" >
                        </div>
                        <div class="form-group">
                            <label for="confirmationpassword"><img src="../image/key.png" class="pass-icon">確認パスワード:</label>
                            <input type="password" id="confirmationpassword" name="confirmationpassword" >
                        </div>
                        <div class="loginbutton">
                            <input type="submit" value="新規登録">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>