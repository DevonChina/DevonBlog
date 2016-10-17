<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>添加管理员</title>
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="/admin/css/style.css" />
</head>
<body>
  @include('inc.admin.nativebar')
  <div class="container text-center">
    <div class="panel panel-info text-left">
      <div class="panel-heading">用户管理/管理员/添加管理员</div>
      <div class="panel-body">
        <form role="form" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label">管理员名称</label>
            <div class="col-sm-3">
              <input type="text" name="name" class="form-control" />
            </div>
          </div><!--end form-group-->
          <div class="form-group">
            <label class="col-sm-2 control-label">管理员邮件</label>
            <div class="col-sm-3">
              <input type="email" name="email" class="form-control" />
            </div>
          </div><!--end form-group-->
          <div class="form-group">
            <label class="col-sm-2 control-label">管理员密码</label>
            <div class="col-sm-3">
              <input type="password" name="password" class="form-control" />
            </div>
          </div><!--end form-group-->
          <div class="form-group">
            <label class="col-sm-2 control-label">管理员状态</label>
            <div class="col-sm-3">
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 正常
              </label>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 禁用
              </label>
            </div>
          </div><!--end form-group-->
          <div class="form-group">
            <label class="col-sm-2 control-label">管理员权限</label>
            <div class="col-sm-10">
              <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox1" value="option1"> 订单管理
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox2" value="option2"> 商品管理
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox3" value="option3"> 用户管理
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox4" value="option4"> 财务管理
              </label>
              </label><label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox5" value="option5"> 营销管理
              </label>
              </label><label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox6" value="option6"> 网站管理
              </label>
              </label><label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox7" value="option7"> 数据统计
              </label>
            </div>
          </div><!--end form-group-->
          <div class="form-group text-center">
            <button type="submit" class="btn btn-info">添加</button>
          </div><!--end form-group text-center-->
        </form>
      </div><!--end panel-body-->
    </div><!--end panel panel-info text-left-->
  </div><!--end container text-center-->
  <script src="/admin/js/jquery-1.8.3.min.js"></script>
<script src="/admin/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
