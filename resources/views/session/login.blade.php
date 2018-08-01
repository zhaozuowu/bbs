@extends('layout.default')
@section('title', '登陆')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>登陆</h5>
            </div>
            <div class="panel-body">
                <form action="{{route('login')}}" method="POST" class="form-horizontal">
                    {{csrf_field()}}
                    <div class="form-group @if($errors->has('email')) has-error  @endif">
                        <label for="email" class="control-label col-md-2">邮箱</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="email" placeholder="请填写邮箱" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <span class="help-block">
                                    {{$errors->first('email')}}
                            </span>
                           @endif
                        </div>
                    </div>
                    <div class="form-group @if($errors->has('password')) has-error  @endif">
                        <label for="password" class="control-label col-md-2" name="password">密码</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password" placeholder="请填写邮箱" value="{{old('password')}}">
                            @if($errors->has('password'))
                                <span class="help-block">
                                    {{$errors->first('password')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-6">
                            <input  type="submit" class="btn btn-primary"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-6">
                           还没账号，<a href="{{route('signup')}}">现在注册!</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop