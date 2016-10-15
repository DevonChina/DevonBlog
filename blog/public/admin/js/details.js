// JavaScript Document

//筛选按钮
$(function(){
    $("#filter").click(function(){
	    $("#cancel").removeClass("unplay");
	})
	$("#cancel").click(function(){
	    $(this).addClass("unplay");
	})
})

