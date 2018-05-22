$(".btitle h3").click(function () {
    $(this).parent().css("background", "#fff").css("border-left","0.01rem solid #333").siblings().css("background", "#f7f7f7").css("border-left","");
    $.ajax({
        url: "index.php?m=index&c=category&a=gettypes",
        data: {cid: $(this).attr("data-id")},
        dataType: "json",
        success: function (r) {
            let str = "";
            $.each(r, function (index, val) {
                str += `<a href="index.php?m=index&c=category&a=showlist&tid=${val.tid}" class="category">
<img src="${val.tthumb}" alt="">
<h1>${val.tname}</h1>
</a>`;
                $(".bright1").html(str);
            })
        }
    })
})