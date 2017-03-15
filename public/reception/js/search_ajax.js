/**
 * Created by liang on 2016/10/29.
 */
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#sub_btn").click(function () {
        var cname=$(":input[name =select1]").val();
        var brandpay=$(":input[name =select2]").val();

        $.ajax({
            type:"POST",
            url:"/search/post",
            data:{"cname":cname,"brandpay":brandpay},
            success: function (response, stutas, xhr) {
                if(response=='请选择行业分类'){
                    alert(response);
                }else{
                    window.location.href=response;
                }

                console.log(response);

            }
        });
    });

});

$(function(){
    $("#tj_btn").click(function(){
        var phone = $("#phone").val();
        var name=$("#guestname").val();
        var sex=$("*[name='Sex']").val()
        var adr=$("#adr").val();
        var notes=$("#content").val();
        var host=window.location.href;
        if( phone  && /^1[3|4|5|8]\d{9}$/.test(phone ) ){
            $.ajax({
                //提交数据的类型 POST GET
                type:"POST",
                //提交的网址
                url:"/phone",
                //提交的数据
                data:{"tel":phone,"host":host,"name":name,"notes":notes,"sex":sex,"adr":adr},
                //返回数据的格式
                datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                success:function (response, stutas, xhr) {
                    alert(response);
                    $("#tj_btn").attr("disabled","disabled");
                }
            });
        } else{
            alert("您输入的手机号码"+result+"不正确，请重新输入")
        }
    })
});