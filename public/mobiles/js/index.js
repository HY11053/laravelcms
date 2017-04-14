$(function(){
//详情菜单
 $(".header .mcate b").click(function(){
	    $('.d_nav').slideToggle();
});

//搜索框
$('input:text').each(function(){  
	var txt = $(this).val();
	$(this).css("color","#ccc");
	$(this).focus(function(){  
		if(txt === $(this).val()){$(this).val(""); $(this).css("color","#333");} 
	}).blur(function(){  
		if($(this).val() === "") {$(this).val(txt); $(this).css("color","#ccc");} 
	});  
});

//弹窗留言
$("#js_popup").click(function(){
	$(".popup_mask").show();	
});
$(".popup_close").click(function(){
	$(".popup_mask").hide();
});

});



