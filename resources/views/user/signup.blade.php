@extends('layout.default')
@section('title','注册')
@section('content')
    <div class="container">
          <div class="row">
            <div class="col-md-9" role="main">
                <form action="{{route('users.store')}}" method="POST" class="form-horizontal">
                    {{csrf_field()}}
                    <div class="form-group  @if($errors->has('username')) has-error  @endif">
                        <label for="username" class="control-label col-md-2 ">用户名</label>
                        <div class="col-md-7">
                            <input type="text" name="username" class="form-control" placeholder="请输入用户名" value="{{old('username')}}">
                            @if($errors->has('username'))
                            <span class="help-block">{{$errors->first('username')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group  @if($errors->has('email')) has-error  @endif">
                        <label for="email" class="control-label col-md-2 ">邮箱</label>
                        <div class="col-md-7">
                            <input type="text" name="email" class="form-control" placeholder="请输入邮箱" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <span class="help-block">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group  @if($errors->has('password')) has-error  @endif">
                        <label for="password" class="control-label col-md-2 ">密码</label>
                        <div class="col-md-7">
                            <input type="password" name="password" class="form-control" placeholder="请输入密码">
                            @if($errors->has('password'))
                                <span class="help-block">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group  @if($errors->has('password_confirmation')) has-error  @endif">
                        <label for="password_confirmation" class="control-label col-md-2 ">确认密码</label>
                        <div class="col-md-7">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="">
                            @if($errors->has('password_confirmation'))
                                <span class="help-block">{{$errors->first('password_confirmation')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-7">
                           <button class="btn btn-primary" type="submit">注册</button>

                        </div>
                    </div>
                </form>
            </div>        
          </div>        
    </div>
@stop