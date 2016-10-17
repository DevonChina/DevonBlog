<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>会员等级列表</title>
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="/admin/css/style.css" />
</head>
<body>
  @include('inc.admin.nativebar')
  <div class="container text-center">
    <div class="panel panel-info text-left">
      <div class="panel-heading">用户管理/会员等级/会员等级列表</div>
      <table class="table table-hover text-center">
          <tr>
            <th class="text-center">名臣</th>
            <th class="text-center">优惠百分比</th>
            <th class="text-center">操作</th>
          </tr>
          <tr>
            <td>VIP1</td>
            <td>30</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>VIP1</td>
            <td>30</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>VIP1</td>
            <td>30</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>VIP1</td>
            <td>30</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>VIP1</td>
            <td>30</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>VIP1</td>
            <td>30</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>VIP1</td>
            <td>30</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>VIP1</td>
            <td>30</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>VIP1</td>
            <td>30</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>VIP1</td>
            <td>30</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
      </table>
    </div><!--end panel panel-info-->
    <ul class="pagination">
      <li><a href="#">&laquo;</a></li>
      <li class="active"><a href="#">1<span class="sr-only">(current)</span></a> </li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul><!--end pagination-->
  </div><!--end container text-center-->
  <!--弹出层 模态框-->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">当前位置：会员等级列表>>编辑
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
        </div><!--end modal-header-->
        <div class="modal-body">
          <form role="form" class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-2 control-label">名称</label>
              <div class="col-sm-3">
                <input type="text" name="name" class="form-control" />
              </div>
            </div><!--end form-group-->
            <div class="form-group">
              <label class="col-sm-2 control-label">优惠百分比</label>
              <div class="col-sm-3">
                <div class="input-group">
                  <input class="form-control" type="number">
                  <div class="input-group-addon">%</div>
                </div>
              </div>
            </div><!--end form-group-->
            <div class="form-group text-center">
              <button type="submit" class="btn btn-info">保存</button>
            </div><!--end form-group text-center-->
          </form>
        </div><!--end modal-body-->
      </div><!--end modal-content-->
    </div><!--end modal-dialog modal-lg-->
  </div><!--end modal fade bs-example-modal-lg-->
<script src="/admin/js/jquery-1.8.3.min.js"></script>
<script src="/admin/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
