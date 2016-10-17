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
          <li><a href="/user_vip">会员等级列表</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">管理员</li>
          <li><a href="/user_manager">添加管理员</a></li>
          <li><a href="/user_manlist">管理员列表</a></li>
        </ul>
      </li>
      <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">网站管理 <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="/setting">基本设置</a></li>
          <li class="dropdown-header">网站导航</li>
          <li><a href="/nav">添加导航</a></li>
          <li><a href="/navlist">导航列表</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">文章分类</li>
          <li><a href="/pageadd">添加分类</a></li>
          <li><a href="/pagelist">分类列表</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">文章管理</li>
          <li><a href="/artadd">添加文章</a></li>
          <li><a href="/artlist">文章列表</a></li>
          <li class="divider"></li>
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
