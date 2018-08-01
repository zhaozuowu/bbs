<template>
    <div class="container">
        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>注册</h5>
                </div>
                <div class="panel-body">
                    <form action="/register" method="POST" class="form-horizontal">
                        <div class="form-group" :class="{'has-error':hasError}">
                            <label class="control-label col-md-2">用户名</label>
                            <div class="col-md-7">
                                <input @keyup="validateInput('请输入用户名')" v-model="username"  type="text" name="username" placeholder="请输入用户名"
                                       class="form-control">
                                <span v-if="hasError" class="help-block">{{ hasError }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">邮箱</label>
                            <div class="col-md-7">
                                <input type="email" name="email" placeholder="请输入邮箱" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">密码</label>
                            <div class="col-md-7">
                                <input type="password" name="password" placeholder="请输入密码" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">确认密码</label>
                            <div class="col-md-7">
                                <input type="password" name="password_confirmation" placeholder="请输入确认密码"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-7 col-md-offset-2 col-md-7">
                                <button class="btn btn-primary">注册</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">
    export default {
        name: 'TheRegister',
        data: function () {
            return {
                hasError: '',
                username:'',
            }
        },
        methods: {
            validateInput: function (message) {
              this.hasError = '';
              if(this.username == '') {
                  this.hasError = message;
              }
            }
        }
    }
</script>