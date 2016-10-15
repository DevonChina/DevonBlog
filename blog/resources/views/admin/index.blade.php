<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>后台首页</title>
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="/admin/css/style.css" />
</head>
<body>
@include('inc.admin.nativebar')
<div class="container text-center">
<div class="panel panel-info text-left">
  <div class="panel-heading">数据统计/用户数据</div>
  <div class="panel-body">
    <form class="form-inline" action="" method="post">
      <input type="date" class="form-control input-sm" name="start" />
      <input type="date" class="form-control input-sm" name="final" />
      <button type="button" class="btn btn-primary btn-sm">查询</button>
    </form>
  </div><!--end panel-body-->
</div><!--end panel panel-info-->
<div class="panel panel-info text-left">
  <div class="panel-heading">本月用户数据</div>
  <div class="panel-body">
    <div id="user_grow" class="chart_holder">
      <canvas class="flot-base line-base" width="1108" height="300"></canvas>
    </div><!--end user_grow-->
  </div><!--end panel-body-->
</div><!--end panel panel-info-->
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">用户等级</div>
      <div class="panel-body">
        <div id="user_level" class="chart_holder">
          <canvas class="flot-base" width="523" height="300"></canvas>
        </div><!--end user_level-->
      </div><!--end panel-body-->
    </div><!--end panel panel-info-->
  </div><!--end col-md-6-->
  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">用户来源</div>
      <div class="panel-body">
        <div id="user_type" class="chart_holder">
          <canvas class="flot-base" width="523" height="300"></canvas>
        </div><!--end user_level-->
      </div><!--end panel-body-->
    </div><!--end panel panel-info-->
  </div><!--end col-md-6-->
</div><!--end row-->
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">用户年龄</div>
      <div class="panel-body">
        <div id="user_age" class="chart_holder">
          <canvas class="flot-base" width="523" height="300"></canvas>
        </div><!--end user_level-->
      </div><!--end panel-body-->
    </div><!--end panel panel-info-->
  </div><!--end col-md-6-->
  <div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">用户性别</div>
      <div class="panel-body">
        <div id="user_sex" class="chart_holder">
          <canvas class="flot-base" width="523" height="300"></canvas>
        </div><!--end user_level-->
      </div><!--end panel-body-->
    </div><!--end panel panel-info-->
  </div><!--end col-md-6-->
</div><!--end row-->
</div><!--end container text-center-->
<script src="/admin/js/jquery-1.8.3.min.js"></script>
<script src="/admin/bootstrap/js/bootstrap.min.js"></script>
<script src="/admin/js/details.js"></script>
<script src="/admin/js/jquery.flot.min.js"></script>
<script src="/admin/js/jquery.flot.pie.min.js"></script>
<script>
$(function(){

    var user = [], login = [];


    user.push([1, 1]);

    login.push([1, 48]);


    user.push([2, 2]);

    login.push([2, 4]);


    user.push([4, 2]);

    login.push([4, 2]);


    user.push([6, 1]);

    login.push([6, 13]);


    user.push([9, 1]);

    login.push([9, 1]);


    user.push([10, 2]);

    login.push([10, 44]);


    user.push([11, 2]);

    login.push([11, 2]);


    user.push([12, 5]);

    login.push([12, 9]);


    user.push([14, 1]);

    login.push([14, 2]);


    user.push([15, 2]);

    login.push([15, 21]);


    user.push([19, 2]);

    login.push([19, 7]);


    user.push([20, 3]);

    login.push([20, 11]);


    user.push([21, 2]);

    login.push([21, 3]);


    user.push([22, 1]);

    login.push([22, 4]);


    user.push([24, 1]);

    login.push([24, 4]);


    $.plot("#user_grow", [{data: user, label: "用户注册量"},{data: login, label: "用户活跃度"}],{

            series: {lines: {show: true},points: {show: true}},

            grid: {hoverable: true},

            xaxis: {tickDecimals: 0,tickSize: 1}

    });

    $("<div id='tooltip'></div>").css({

        position: "absolute",

        display: "none",

        border: "1px solid #fdd",

        padding: "2px",

        "background-color": "#fee",

        opacity: 0.80

    }).appendTo("body");

    $("#user_grow").bind("plothover", function (event, pos, item) {

        if (item) {

            var x = item.datapoint[0],y = item.datapoint[1];

            $("#tooltip").html(x + '号' + item.series.label + '：' + y).css({top: item.pageY+5, left: item.pageX+5}).fadeIn(200);

        } else {

            $("#tooltip").hide();

        }

    });



    var user_type = [

        {label:"新浪微博",data:6},

        {label:"QQ",data:16},

        {label:"手机",data:414},

        {label:"电子邮件",data:264}

    ];

    $.plot('#user_type', user_type, {

        series: {

            pie: {

                show: true,

                radius: 1,

                label: {

                    show: true,

                    radius: 2/3,

                    formatter: function(label, series) {

                        return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";

                    },

                    threshold: 0.1

                }

            }

        },

        grid: {

            hoverable: true

        }

    });



    var user_sex = [

        {label:"男",data:557},

        {label:"女",data:123}

    ];

    $.plot('#user_sex', user_sex, {

        series: {

            pie: {

                show: true,

                radius: 1,

                label: {

                    show: true,

                    radius: 2/3,

                    formatter: function(label, series) {

                        return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";

                    },

                    threshold: 0.1

                }

            }

        },

        grid: {

            hoverable: true

        }

    });



    var user_age = [

        {label:"18岁以下",data:1},

        {label:"18-25岁",data:19},

        {label:"25-30岁",data:72},

        {label:"30-40岁",data:35},

        {label:"40-50岁",data:3},

        {label:"50岁以上",data:0}

    ];

    $.plot('#user_age', user_age, {

        series: {

            pie: {

                show: true,

                radius: 1,

                label: {

                    show: true,

                    radius: 2/3,

                    formatter: function(label, series) {

                        return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";

                    },

                    threshold: 0.1

                }

            }

        },

        grid: {

            hoverable: true

        }

    });



    var user_level = [

        {label:"普通用户",data:8},

        {label:"VIP1用户",data:256},

        {label:"VIP2用户",data:298},

        {label:"VIP3用户",data:118}

    ];

    $.plot('#user_level', user_level, {

        series: {

            pie: {

                show: true,

                radius: 1,

                label: {

                    show: true,

                    radius: 2/3,

                    formatter: function(label, series) {

                        return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";

                    },

                    threshold: 0.1

                }

            }

        },

        grid: {

            hoverable: true

        }

    });

});
</script>
</body>
</html>
