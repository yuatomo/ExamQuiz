<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>基本情報技術者試験×クイズ</title>
        <link rel="stylesheet" href="../css/navigation.css">
        <link rel="stylesheet" href="css/grade.css">
        <script src="js/navigation.js"></script>
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
            </div>
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
                <h1>回答後成績</h1>
                <div class="container">
                <div class="seitou">
                <a class="label">正答率　<?php echo floor(($_SESSION['correct_answer_count'] / $_SESSION['question_count'] * 100) * 10) / 10 ?>％</a>
                </div>
                <div class="Correctanswerrate">
                <p class="aws"><?php echo $_SESSION['correct_answer_count']; ?>/<?php echo $_SESSION['question_count']; ?>問</p>
                </div>
                <div class="Genreselection">
                <a href="index.php" class="Genreselectionbutton">ジャンル選択へ</a>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>