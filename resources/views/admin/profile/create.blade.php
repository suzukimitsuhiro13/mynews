{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ニュース新規作成</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                
            </div>
        </div>
    </div>
@endsection

<!DOCTYPE html>

<html>
    <head></head>
    <body>
        <form action = "./confirm"method = "POST">
            @csrf
            <p>プロフィール画面</p>
            <p><label for="namae">名前：</label><input type="text" name="name" id="namae" size="40"></p>
        　　<fieldset disabled="disabled">
<legend>性別</legend>
<p><label for="dansei">男性</label><input type="radio" name="sex" id="dansei" value="male"></p>
<p><label for="jyosei">女性</label><input type="radio" name="sex" id="jyosei" value="female"></p>
</fieldset>
            <p><label for = "hobby">趣味：</label><input type="text" value=""/ size = "60"></label></p>
            
            <p>自己紹介欄:<input type = "text"name = "introduction"value = ""/></p>
            
        </form>
    </body>
</html>