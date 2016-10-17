<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>会员列表</title>
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="./admin/css/style.css" />
</head>
<body>
  @include('inc.admin.nativebar')
  <div class="container text-center">
    <div class="panel panel-info text-left">
      <div class="panel-heading">用户管理/会员管理/会员列表</div>
      <div class="panel-body">
        <form class="form-inline" action="" method="post">
          <input type="text" class="form-control input-sm" placeholder="用户名、邮件、手机" name="code" />
          <button type="button" class="btn btn-primary btn-sm" id="filter">筛选</button>
          <button type="button" class="btn btn-default btn-sm unplay" id="cancel">取消筛选</button>
        </form>
      </div><!--end panel-body-->
      <table class="table table-hover text-center">
          <tr>
            <th class="text-center">用户名</th>
            <th class="text-center">电子邮件</th>
            <th class="text-center">手机</th>
            <th class="text-center">分销域名</th>
            <th class="text-center">分销级别</th>
            <th class="text-center">注册时间</th>
            <th class="text-center">收货地址</th>
            <th class="text-center">状态</th>
            <th class="text-center">操作</th>
          </tr>
          <tr>
            <td>Emotiona_磊</td>
            <td>1098915718@qq.com</td>
            <td>18686092167</td>
            <td>Hpgou.hpgou.com</td>
            <td>VIP3</td>
            <td>2014-05-29 12:32:37</td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg1">查看</button></td>
            <td>正常</td>
            <td>
            <button type="button" class="btn btn-success btn-xs">推广用户</button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
            <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button></td>
          </tr>
          <tr>
            <td>Emotiona_磊</td>
            <td>1098915718@qq.com</td>
            <td>18686092167</td>
            <td>Hpgou.hpgou.com</td>
            <td>VIP3</td>
            <td>2014-05-29 12:32:37</td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg1">查看</button></td>
            <td>正常</td>
            <td>
            <button type="button" class="btn btn-success btn-xs">推广用户</button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
            <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button></td>
          </tr>
          <tr>
            <td>Emotiona_磊</td>
            <td>1098915718@qq.com</td>
            <td>18686092167</td>
            <td>Hpgou.hpgou.com</td>
            <td>VIP3</td>
            <td>2014-05-29 12:32:37</td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg1">查看</button></td>
            <td>正常</td>
            <td>
            <button type="button" class="btn btn-success btn-xs">推广用户</button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
            <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button></td>
          </tr>
          <tr>
            <td>Emotiona_磊</td>
            <td>1098915718@qq.com</td>
            <td>18686092167</td>
            <td>Hpgou.hpgou.com</td>
            <td>VIP3</td>
            <td>2014-05-29 12:32:37</td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg1">查看</button></td>
            <td>正常</td>
            <td>
            <button type="button" class="btn btn-success btn-xs">推广用户</button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
            <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button></td>
          </tr>
          <tr>
            <td>Emotiona_磊</td>
            <td>1098915718@qq.com</td>
            <td>18686092167</td>
            <td>Hpgou.hpgou.com</td>
            <td>VIP3</td>
            <td>2014-05-29 12:32:37</td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg1">查看</button></td>
            <td>正常</td>
            <td>
            <button type="button" class="btn btn-success btn-xs">推广用户</button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
            <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button></td>
          </tr>
          <tr>
            <td>Emotiona_磊</td>
            <td>1098915718@qq.com</td>
            <td>18686092167</td>
            <td>Hpgou.hpgou.com</td>
            <td>VIP3</td>
            <td>2014-05-29 12:32:37</td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg1">查看</button></td>
            <td>正常</td>
            <td>
            <button type="button" class="btn btn-success btn-xs">推广用户</button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
            <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button></td>
          </tr>
          <tr>
            <td>Emotiona_磊</td>
            <td>1098915718@qq.com</td>
            <td>18686092167</td>
            <td>Hpgou.hpgou.com</td>
            <td>VIP3</td>
            <td>2014-05-29 12:32:37</td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg1">查看</button></td>
            <td>正常</td>
            <td>
            <button type="button" class="btn btn-success btn-xs">推广用户</button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
            <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button></td>
          </tr>
          <tr>
            <td>Emotiona_磊</td>
            <td>1098915718@qq.com</td>
            <td>18686092167</td>
            <td>Hpgou.hpgou.com</td>
            <td>VIP3</td>
            <td>2014-05-29 12:32:37</td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg1">查看</button></td>
            <td>正常</td>
            <td>
            <button type="button" class="btn btn-success btn-xs">推广用户</button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
            <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button></td>
          </tr>
          <tr>
            <td>Emotiona_磊</td>
            <td>1098915718@qq.com</td>
            <td>18686092167</td>
            <td>Hpgou.hpgou.com</td>
            <td>VIP3</td>
            <td>2014-05-29 12:32:37</td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg1">查看</button></td>
            <td>正常</td>
            <td>
            <button type="button" class="btn btn-success btn-xs">推广用户</button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
            <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button></td>
          </tr>
          <tr>
            <td>Emotiona_磊</td>
            <td>1098915718@qq.com</td>
            <td>18686092167</td>
            <td>Hpgou.hpgou.com</td>
            <td>VIP3</td>
            <td>2014-05-29 12:32:37</td>
            <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg1">查看</button></td>
            <td>正常</td>
            <td>
            <button type="button" class="btn btn-success btn-xs">推广用户</button>
            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg">编辑</button>
            <button type="button" class="btn btn-danger btn-xs delete" onClick="return confirm('确认删除？')">删除</button></td>
          </tr>
      </table>
      <div class="panel-footer">
        <form class="form-inline" role="form" action="" method="post">
          <div class="form-group">
            <p class="form-control-static">将选择的用户分销级别调整为：</p>
          </div><!--end form-group-->
          <div class="form-group">
            <select class="form-control input-sm" name="levelselect">
              <option>请选择</option>
              <option>VIP1</option>
              <option>VIP2</option>
              <option>VIP3</option>
            </select>
          </div><!--end form-group-->
          <div class="form-group">
            <button class="btn btn-sm btn-primary">确定</button>
          </div><!--end form-group-->
        </form>
      </div><!--end panel-footer-->
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
        <div class="modal-header">当前位置：会员列表>>编辑
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
        </div><!--end modal-header-->
        <div class="modal-body">
          <form role="form" class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-2 control-label">用户名</label>
              <div class="col-sm-5">
                <input type="text" name="name" class=" form-control" required />
              </div>
            </div><!--end form-group-->
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">手机</label>
              <div class="col-sm-5">
                <input type="num" name="phone" class="col-sm-2 form-control" required />
              </div><!--col-sm-5-->
            </div><!--end form-group-->
            <div class="form-group">
              <label class="col-sm-2 control-label">邮件</label>
              <div class="col-sm-5">
                <input type="email" name="email" class="col-sm-2 form-control" />
              </div>
            </div><!--end form-group-->
            <div class="form-group">
              <label class="col-sm-2 control-label">余额</label>
              <div class="col-sm-5">
                <div class="input-group">
                  <div class="input-group-addon">￥</div>
                  <input class="form-control" type="text" readonly name="leftcash">
                </div>
              </div>
            </div><!--end form-group-->
            <div class="form-group">
              <label class="col-sm-2 control-label">分销级别</label>
              <div class="col-sm-5">
                <select class="form-control" name="level">
                  <option>普通分销</option>
                  <option>VIP1</option>
                  <option>VIP2</option>
                  <option>VIP3</option>
                </select>
              </div>
            </div><!--end form-group-->
            <div class="form-group">
              <label class="col-sm-2 control-label">分销域名</label>
              <div class="col-sm-5">
                <div class="input-group">
                  <input class="form-control" type="text"  name="address">
                  <div class="input-group-addon">hpgou.com</div>
                </div>
              </div>
            </div><!--end form-group-->
            <div class="form-group">
              <label class="col-sm-2 control-label">状态</label>
              <div class="col-sm-5">
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 正常
                </label>
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 禁用
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
  <div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">当前位置：会员列表>>编辑</div>
        <div class="modal-body">山东济南</div>
      </div> <!--end modal-content-->
     </div><!--end modal-dialog modal-lg-->
   </div><!--end modal fade bs-example-modal-lg1-->
<script src="/admin/js/jquery-1.8.3.min.js"></script>
<script src="/admin/bootstrap/js/bootstrap.min.js"></script>
<script src="/admin/js/details.js"></script>
</body>
</html>
