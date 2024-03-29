<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>基本情報技術者試験×クイズ</title>
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="css/four-choise.css">
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
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">作問</a></li>
            <li><a href="../solveQuestion/index.php">問題</a></li>
            <li><a href="../createAccount/index.php">新規登録</a></li>
            <li><a href="../loginAccount/index.php">ログイン</a></li>
            <li><a href="../mypage/setting.php">設定</a></li>
        </ul>
    </nav>
    <div class="frame-gray">
        <div class="frame-white">
            <h1>四択問題</h1>
            <div class="container">
                <form action="php/insertFour-choice.php" method="post">
                    <div class="mondaibun">
                        <textarea class="question" placeholder="問題文" name="question"></textarea>
                    </div>

                    <div class="choiceQuestion">
                        <div class="1 number">
                            <input type="radio" name="answer" value="1" class="A button">ア
                            <textarea class="A answer" placeholder="回答文" name="choice1"></textarea>
                        </div>

                        <div class="2 number">
                            <input type="radio" name="answer" value="2" class="B button">イ
                            <textarea class="B answer" placeholder="回答文" name="choice2"></textarea>
                        </div>

                        <div class="3 number">
                            <input type="radio" name="answer" value="3" class="C button">ウ
                            <textarea class="C answer" placeholder="回答文" name="choice3"></textarea>
                        </div>

                        <div class="4 number">
                            <input type="radio" name="answer" value="4" class="D button">エ
                            <textarea class="D answer" placeholder="回答文" name="choice4"></textarea>
                        </div>

                        <div class="create">
                            <input type="submit" value="作成">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>