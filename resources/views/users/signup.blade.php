@extends('layout.default')
@section('title', '注册')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>注册</h5>
            </div>
            <div class="panel-body">
                @include('share._error_info')
                <form action="{{route('users.store')}}" method="POST" class="form-horizontal">
                    {{csrf_field()}}
                    <div class="form-group @if($errors->has('username')) has-error @endif">
                        <lable for="username" class="control-label col-md-2">用户名</lable>
                        <div class="col-md-6">
                            <input type="text" name="username" class="form-control" placeholder="请输入用户名"
                                   value="{{old('username')}}">
                            @if($errors->has('username'))
                            <span class="help-block">{{$errors->first('username')}}</span>
                           @endif
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('email')) has-error @endif">
                        <lable for="email" class="control-label col-md-2">邮箱</lable>
                        <div class="col-md-6">
                            <input type="text" name="email" class="form-control" placeholder="请输入邮箱"
                                   value="{{old('email')}}">
                            @if($errors->has('email'))
                                <span class="help-block">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group  @if($errors->has('password')) has-error @endif">
                        <lable for="password" class="control-label col-md-2">密码</lable>
                        <div class="col-md-6">
                            <input type="password" name="password" class="form-control" placeholder="请输入密码" value="">
                            @if($errors->has('password'))
                                <span class="help-block">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('passworkd_confirmation')) has-error @endif">
                        <lable for="passworkd_confirmation" class="control-label col-md-2">确认密码</lable>
                        <div class="col-md-6">
                            <input type="password" name="passworkd_confirmation" class="form-control" placeholder="请输入确认密码"
                                   value="">
                            @if($errors->has('passworkd_confirmation'))
                                <span class="help-block">{{$errors->first('passworkd_confirmation')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-6">
                            <button type="submit" class="btn btn-primary">注册</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop