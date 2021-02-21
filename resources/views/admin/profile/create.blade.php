    {{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール新規作成</h2>
                  <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                      @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                            </div>
                            
                        <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            
                            <p><label for="dansei">男性</label><input type="radio" name="sex" id="dansei" value="male">
                            <label for="jyosei">女性</label><input type="radio" name="sex" id="jyosei" value="female"></p>
                            </div>
                            </div>
                        <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                            </div>
                            </div>
                        <div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    </from>
                    
                            
                        

@endsection