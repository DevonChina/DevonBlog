<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>添加分类</title>
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="/admin/css/style.css" />
</head>
<body>
  @include('inc.admin.nativebar')
  <div class="container text-center">
    <div class="panel panel-info text-left">
      <div class="panel-heading">网站管理/文章分类/添加分类</div>
      <div class="panel-body">
        <form role="form" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label">分类名称</label>
            <div class="col-sm-3">
              <input type="text" name="name" class=" form-control" required />
            </div>
          </div><!--end form-group-->
          <div class="form-group">
            <label class="col-sm-2 control-label">分类排序</label>
            <div class="col-sm-3">
              <input type="number" name="order" class=" form-control" required />
            </div>
          </div><!--end form-group-->
          <div class="form-group">
            <label class="col-sm-2 control-label">是否显示</label>
            <div class="col-sm-5">
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 是
              </label>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 否
              </label>
            </div>
          </div><!--end form-group-->
          <div class="form-group text-center">
            <button type="submit" class="btn btn-info">添加分类</button>
          </div><!--end form-group text-center-->
        </form>
      </div><!--end panel-body-->
    </div><!--end panel panel-info text-left-->
  </div><!--end container text-center-->
<script src="/admin/js/jquery-1.8.3.min.js"></script>
<script src="/admin/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
