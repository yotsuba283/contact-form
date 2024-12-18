<<<<<<< HEAD
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="confirm-form">
  <h2 class="confirm-form__heading content__heading">Confirm</h2>
  <div class="confirm-form__inner">
    <form action="/thanks" method="post">
      @csrf
      <table class="confirm-form__table">
        <tr class="confirm-form__row">
          <th class="confirm-form__label">お名前</th>
          <td class="confirm-form__data">{{ $contacts['first_name'] }}&nbsp;{{ $contacts['last_name'] }}</td>
          <input type="hidden" name="first_name" value="{{ $contacts['first_name'] }}">
          <input type="hidden" name="last_name" value="{{ $contacts['last_name'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">性別</th>
          <td class="confirm-form__data">
            @if($contacts['gender'] == 1)
            男性
            @elseif($contacts['gender'] == 2)
            女性
            @else
            その他
            @endif
          </td>
          <input type="hidden" name="gender" value="{{ $contacts['gender'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">メールアドレス</th>
          <td class="confirm-form__data">{{ $contacts['email'] }}</td>
          <input type="hidden" name="email" value="{{ $contacts['email'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">電話番号</th>
          <td class="confirm-form__data">{{ $contacts['tel_1'] }}{{ $contacts['tel_2'] }}{{ $contacts['tel_3'] }}</td>
          <input type="hidden" name="tel_1" value="{{ $contacts['tel_1'] }}">
          <input type="hidden" name="tel_2" value="{{ $contacts['tel_2'] }}">
          <input type="hidden" name="tel_3" value="{{ $contacts['tel_3'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">住所</th>
          <td class="confirm-form__data">{{ $contacts['address'] }}</td>
          <input type="hidden" name="address" value="{{ $contacts['address'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">建物名</th>
          <td class="confirm-form__data">{{ $contacts['building'] }}</td>
          <input type="hidden" name="building" value="{{ $contacts['building'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">お問い合わせの種類</th>
          <td class="confirm-form__data">{{ $category->content }}</td>
          <input type="hidden" name="category_id" value="{{ $contacts['category_id'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">お問い合わせ内容</th>
          <td class="confirm-form__data">{{ $contacts['detail'] }}</td>
          <input type="hidden" name="detail" value="{{ $contacts['detail'] }}">
        </tr>
      </table>
      <div class="confirm-form__btn-inner">
        <input class="confirm-form__send-btn btn" type="submit" value="送信" name="send">
        <input class="confirm-form__back-btn" type="submit" value="修正" name="back">
      </div>
    </form>
  </div>
</div>
@endsection
=======
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
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>
<body>
    <header class="header">
        <h1>FashionablyLate</h1>
    </header>

    <main>
        <div>
            <div>
                <h2>Confirm</h2>
            </div>
            <form class="form" action="/thanks" method="post">
                @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" />
                                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                                <!-- 分からなかったため空白 -->
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                <input type="text" name="email" value="email" />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            <td class="confirm-table__text">
                                <input type="tel" name="tell" value="tell" />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text">
                                <input type="text" name="address" value="address" />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text">
                                <input type="text" name="building" value="building" />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせの種類</th>
                            <td class="confirm-table__text">
                                <input type="text" name="content" value="content" />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                                <input type="text" name="detail" value="detail" />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
>>>>>>> origin/main
