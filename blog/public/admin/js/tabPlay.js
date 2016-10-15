// JavaScript Document

$(function(){
	$(".add").live("click",function(){
	    var addTr=$(this).parents("tr").clone();
		$(addTr).find("input").val("");
	    $(this).parents("tbody").append(addTr);
	})
	$(".del").live("click",function(){
		if($(this).parents("tbody").find("tr").length>1){
	        $(this).parents("tr").remove();
		}else{
		    $(this).parents("tr").find("input").val("");
		}
	})
})

function tabPlay(targetElement,currentElement,controlClass,strOn,strOff){
    var targetElement=document.getElementById(targetElement);
	var currentElement=document.getElementById(currentElement);
	var txt=currentElement.textContent;
	if(targetElement.className.indexOf(controlClass)!=-1){
	    $(targetElement).removeClass(controlClass);
		currentElement.textContent=strOff;
	}else{
	    $(targetElement).addClass(controlClass);
		currentElement.textContent=strOn;
	}
}