<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        FashionablyLate
    </header>

    <main>
        <div>
            <div>
                <h1>Contact</h1>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div>
                    <div>
                        <span>お名前</span>
                        <span> ※</span>
                    </div>
                    <div>
                        <input type="text" name="first_name" placeholder="例: 山田">
                        <!-- 空白 -->
                        <input type="text" name="last_name" placeholder="例: 太郎">
                    </div>
                    <div>
                        <span>性別</span>
                        <span> ※</span>
                    </div>
                    <div>
                        <input type="radio" id="genderChoice1" name="gender" value="male">
                        <label for="genderChoice1">男性</label>
                        <input type="radio" id="genderChoice2" name="gender" value="female">
                        <label for="genderChoice2">女性</label>
                        <input type="radio" id="genderChoice3" name="gender" value="others">
                        <label for="genderChoice3">その他</label>
                    </div>
                    </div>
                        <span>メールアドレス</span>
                        <span> ※</span>
                    </div>
                    <div>
                        <input type="text" name="email" placeholder="例: test@example.com">
                    </div>
                    <div>
                        <span>電話番号</span>
                        <span> ※</span>
                    </div>
                    <div>
                        <input type="tel" id="" name="tell" placeholder="080">
                        -
                        <input type="tel" id="" name="tell" placeholder="1234">
                        -
                        <input type="tel" id="" name="tell" placeholder="5678">
                    </div>
                    <div>
                        <span>住所</span>
                        <span> ※</span>
                    </div>
                    <div>
                        <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                    </div>
                    <div>
                        <span>建物名</span>
                    </div>
                    <div>
                        <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101">
                    </div>
                    <div>
                        <span>お問い合わせの種類</span>
                        <span> ※</span>
                    </div>
                    <div>
                        <input type="text" name="content" placeholder="選択してください">
                    </div>
                    <div>
                        <span>お問い合わせ内容</span>
                        <span> ※</span>
                    </div>
                    <div>
                        <input type="text" name="detail" placeholder="お問い合わせ内容をご記載ください">
                    </div>
                </div>
                <div>
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>