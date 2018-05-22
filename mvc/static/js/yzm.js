var t = 60;
$(".send").click(function () {
    if (!$("[name=phone]").val()) {
        return;
    }
    if (t != 60) {
        return;
    }
    $(this).html("60s后可以重新发送");
    var st = setInterval(function () {
        t--;
        $(".send").html(t + "s后重新发送");
        if (t === 0) {
            clearInterval(st);
            // $(".send").html("");
            $(".send").html("获取验证码").css("background","#ccc").css("font-size","12px");
        }
        t = 60;
    }, 1000);
    // return;
    $.ajax({
        url: "index.php?m=index&c=my&a=checkphone",
        data: {phone: $("[name=phone]").val()}
    })
});
$("#myform").validate({
    rules: {
        phone: {
            required: true,
            remote:{
                url:"index.php?m=index&c=my&a=checkrepeat",
                type:"get"
            }
        },
        code: {
            required: true
        }
    },
    messages: {
        phone: {
            required: "请填写手机号",
            remote:"该号码已经注册过"
        },
        code: {
            required: "请填写验证码"
        }
    },
    errorPlacement:function (error,input) {
        $("#error").append(error);
    }
})

