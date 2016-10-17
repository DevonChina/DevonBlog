<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>基本设置</title>
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="/admin/css/style.css" />
</head>
<body>
@include('inc.admin.nativebar')
  <div class="container text-center">
    <div class="panel panel-info text-left">
      <div class="panel-heading">网站管理/基本设置</div>
      <div class="panel-body">
        <form role="form" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label">网站名称</label>
            <div class="col-sm-3">
              <input type="text" name="name" class=" form-control" required />
            </div>
          </div><!--end form-group-->
          <div class="form-group">
            <label class="col-sm-2 control-label">网站标题</label>
            <div class="col-sm-3">
              <input type="text" name="title" class=" form-control" required />
            </div>
          </div><!--end form-group-->
          <div class="form-group">
            <label class="col-sm-2 control-label">网站关键词</label>
            <div class="col-sm-3">
              <input type="text" name="little" class=" form-control" required />
            </div>
          </div><!--end form-group-->
          <div class="form-group">
            <label class="col-sm-2 control-label">网站描述</label>
            <div class="col-sm-3">
              <textarea class="form-control" name="description"></textarea>
            </div>
          </div><!--end form-group-->
          <div class="form-group">
            <label class="col-sm-2 control-label">网站统计代码</label>
            <div class="col-sm-3">
              <textarea class="form-control" name="code"></textarea>
            </div>
          </div><!--end form-group-->
          <div class="form-group text-center">
            <button type="submit" class="btn btn-info">保存设置</button>
          </div><!--end form-group text-center-->
        </form>
      </div><!--end panel-body-->
    </div><!--end panel panel-info text-left-->
  </div><!--end container text-center-->
<script src="/admin/js/jquery-1.8.3.min.js"></script>
<script src="/admin/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
