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
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>
<body>
    <div class="thanks-page">
        <div class="thanks-page__inner">
            <p class="thanks-page__message">お問い合わせありがとうございました</p>
            <form class="thanks-page__form" action="/" method="get">
                <button class="thanks-page__btn btn">HOME</button>
            </form>
        </div>
        <div class="thanks-page-bg__inner">
            <span class="thanks-page-bg__text">Thank you</span>
        </div>
    </div>
</body>
</html>