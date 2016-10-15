<div class="navbar navbar-default" role="navigation">
  <div class="container">
    <a class="navbar-brand user-control" href="/">DevonBlog 后台管理系统</a>
    <ul class="nav  nav-pills" role="tablist">
      <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">用户管理 <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li class="dropdown-header">会员管理</li>
          <li><a href="/user_list">会员列表</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">会员等级</li>
          <li><a href="/user_add">添加会员等级</a></li>
          <li><a href="../user/user-leverlist.html">会员等级列表</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">管理员</li>
          <li><a href="../user/user-manageradd.html">添加管理员</a></li>
          <li><a href="../user/user-managerlist.html">管理员列表</a></li>
        </ul>
      </li>
      <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">网站管理 <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="../web/web-setting.html">基本设置</a></li>
          <li class="dropdown-header">网站导航</li>
          <li><a href="../web/web-navadd.html">添加导航</a></li>
          <li><a href="../web/web-navlist.html">导航列表</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">文章分类</li>
          <li><a href="../web/web-addfenlei.html">添加分类</a></li>
          <li><a href="../web/web-fenleilist.html">分类列表</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">文章管理</li>
          <li><a href="../web/web-paraadd.html">添加文章</a></li>
          <li><a href="../web/web-paralist.html">文章列表</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">区域管理</li>
          <li><a href="../web/web-areaadd.html">添加区域</a></li>
          <li><a href="../web/web-arealist.html">区域列表</a></li>
        </ul>
      </li>
      <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">数据统计 <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="../count/count-user.html">用户数据</a></li>
          <li><a href="../count/count-goods.html">商品数据</a></li>
          <li><a href="../count/count-list.html">订单数据</a></li>
          <li><a href="../count/count-finance.html">财务数据</a></li>
        </ul>
      </li>
      <div class="btn-group navbar-right">
        <button type="button" class="btn btn-default navbar-btn dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-user"></span> Admin <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">修改密码</a></li>
          <li class="divider"></li>
          <li><a href="/" target="_blank">网站首页</a></li>
          <li><a href="#">清除缓存</a></li>
          <li class="divider"></li>
          <li><a href="#">安全退出</a></li>
        </ul>
      </div>
    </ul><!--end nav nav-pills-->
  </div><!--end container-->
</div><!--end navbar navbar-default navbar-fixed-top-->
