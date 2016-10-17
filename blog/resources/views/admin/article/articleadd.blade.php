<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>添加文章</title>
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="/admin/css/style.css" />
</head>
<body>
@include('inc.admin.nativebar')
  <div class="container text-center">
    <div class="panel panel-info text-left">
      <div class="panel-heading">网站管理/文章管理/添加文章</div>
      <div class="panel-body">
        <form role="form" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label">文章分类</label>
            <div class="col-sm-3">
              <select class="form-control" name="type">
                <option>请选择分类</option>
                <option>新技术</option>
                <option>疑难</option>
                <option>资源</option>
              </select>
            </div>
          </div><!--end form-group-->
          <div class="form-group">
            <label class="col-sm-2 control-label">文章标题</label>
            <div class="col-sm-3">
              <input type="text" name="title" class=" form-control" required />
            </div>
          </div><!--end form-group-->
          <div class="form-group">
            <label class="col-sm-2 control-label">文章内容</label>
            <div class="col-sm-5">
              <textarea class="form-control" name="content" rows="8" cols="4"></textarea>
            </div>
          </div><!--end form-group-->
          <div class="form-group text-center">
            <button type="submit" class="btn btn-info">添加文章</button>
          </div><!--end form-group text-center-->
        </form>
      </div><!--end panel-body-->
    </div><!--end panel panel-info text-left-->
  </div><!--end container text-center-->
<script src="/admin/js/jquery-1.8.3.min.js"></script>
<script src="/admin/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
