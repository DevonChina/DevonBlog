<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>管理员列表</title>
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="/admin/css/style.css" />
</head>
<body>
  @include('inc.admin.nativebar')
  <div class="container text-center">
    <div class="panel panel-info text-left">
      <div class="panel-heading">用户管理/管理员/管理员列表</div>
      <table class="table table-hover text-center">
          <tr>
            <th class="text-center">管理员名称</th>
            <th class="text-center">管理员邮件</th>
            <th class="text-center">添加时间</th>
            <th class="text-center">状态</th>
            <th class="text-center">操作</th>
          </tr>
          <tr>
            <td>李朝辉</td>
            <td>158109640@qq.com</td>
            <td>2014-08-26 16:24:13</td>
            <td>正常</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>李朝辉</td>
            <td>158109640@qq.com</td>
            <td>2014-08-26 16:24:13</td>
            <td>正常</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>李朝辉</td>
            <td>158109640@qq.com</td>
            <td>2014-08-26 16:24:13</td>
            <td>正常</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>李朝辉</td>
            <td>158109640@qq.com</td>
            <td>2014-08-26 16:24:13</td>
            <td>正常</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>李朝辉</td>
            <td>158109640@qq.com</td>
            <td>2014-08-26 16:24:13</td>
            <td>正常</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>李朝辉</td>
            <td>158109640@qq.com</td>
            <td>2014-08-26 16:24:13</td>
            <td>正常</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>李朝辉</td>
            <td>158109640@qq.com</td>
            <td>2014-08-26 16:24:13</td>
            <td>正常</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>李朝辉</td>
            <td>158109640@qq.com</td>
            <td>2014-08-26 16:24:13</td>
            <td>正常</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>李朝辉</td>
            <td>158109640@qq.com</td>
            <td>2014-08-26 16:24:13</td>
            <td>正常</td>
            <td>
              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
              <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button>
            </td>
          </tr>
          <tr>
            <td>李朝辉</td>
            <td>158109640@qq.com</td>
            <td>2014-08-26 16:24:13</td>
            <td>正常</td>
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
        <div class="modal-header">当前位置：管理员列表>>编辑
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
        </div><!--end modal-header-->
        <div class="modal-body">
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
