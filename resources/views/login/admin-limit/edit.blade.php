@extends('admin.parent')
@section('title','修改管理员权限信息')
@section('head_js')
@endsection
@section('head_css')
@endsection
@section('content')
<div class="content-wrapper">
<section class="content-header">
    <h1>
        修改管理员权限信息
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i> 首页</a></li>
        <li><a href="{{URL('admin/limit/list')}}">管理员权限列表</a></li>
        <li class="active">修改管理员权限</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <!--
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div>
                -->
                <!-- /.box-header -->
                <!-- form start -->
                @if(Session::has('error_msg'))
                <div class="callout callout-danger" id="login-box-msg" style="display:block;">
                    <h4 id="show_error_msg">{{ session('error_msg') }}</h4>
                </div>
                @else
                <div class="callout callout-danger" id="login-box-msg" style="display:none;">
                    <h4 id="show_error_msg"></h4>
                </div>
                @endif
                <form role="form" action="{{URL('admin/limit/edit/save').'/'.$data['admin_limit_id'] }}" method="post" id="admin_limit_edit_form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="limit_name">账号</label>
                            <input type="text" class="form-control" id="limit_name" name="limit_name" value="{{ $data['limit_name'] }}" placeholder="请输入权限名" required>
                        </div>
                        <div class="form-group">
                            <label for="limit_url">密码</label>
                            <input type="text" class="form-control" id="limit_url" name="limit_url" value="{{ $data['limit_url'] }}" placeholder="请输入权限地址" required>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">提 交</button>
                        <button type="button" class="btn btn-danger pull-right" onclick="history.go(-1)">取 消</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
@section('foot_js')
<script type="text/javascript">
$(document).ready(function(){
    $('#admin_limit_edit_form').submit(function(){
        var limit_name  =  $.trim($("#limit_name").val());
        var limit_url  =  $.trim($("#limit_url").val());
        if(limit_name == ''){
            $('#show_error_msg').html('请输入权限名');
            $("#login-box-msg").show();
            return false;
        }
        if(limit_url == ''){
            $('#show_error_msg').html('请输入权限地址');
            $("#login-box-msg").show();
            return false;
        }
    })
})
</script>
@endsection