$(".type span").click(function () {
    $(this).css("color", "#1277CC").parent().siblings().find("span").css("color", "");
    if ($(this).hasClass("price")) {
        $.ajax({
            url: "index.php?m=index&c=category&a=getpricelist",
            data: {tid: $(".headb").attr("id")},
            dataType: "json",
            success: function (r) {
                let str = "";
                $.each(r, function (index, val) {
                    str += `<a href="">
        <div class="hot_danpin">
            <img src="${val.gthumb}" alt="" class="hot_img">
            <div class="hot_title">
                <h3>${val.gname}</h3>
                <h4>${val.gdescription}</h4>
                <span class="hot_rmb">￥${val.gprice}</span>
                <div class="dianzan">
                    <span class="renshu">1w9</span>
                </div>
            </div>
        </div>
    </a>`;
                })
                $("#hot").html(str);
            }
        })
    }else if($(this).hasClass("order")){
        $.ajax({
            url: "index.php?m=index&c=category&a=getorderlist",
            data: {tid: $(".headb").attr("id")},
            dataType: "json",
            success: function (r) {
                let str = "";
                $.each(r, function (index, val) {
                    str += `<a href="">
        <div class="hot_danpin">
            <img src="${val.gthumb}" alt="" class="hot_img">
            <div class="hot_title">
                <h3>${val.gname}</h3>
                <h4>${val.gdescription}</h4>
                <span class="hot_rmb">¥${val.gprice}</span>
                <div class="dianzan">
                    <span class="renshu">1w9</span>
                </div>
            </div>
        </div>
    </a>`;
                })
                $("#hot").html(str);
            }
        })
    }else if($(this).hasClass("gidcode")){
        $.ajax({
            url: "index.php?m=index&c=category&a=getgidlist",
            data: {tid: $(".headb").attr("id")},
            dataType: "json",
            success: function (r) {
                let str = "";
                $.each(r, function (index, val) {
                    str += `<a href="">
        <div class="hot_danpin">
            <img src="${val.gthumb}" alt="" class="hot_img">
            <div class="hot_title">
                <h3>${val.gname}</h3>
                <h4>${val.gdescription}</h4>
                <span class="hot_rmb">¥${val.gprice}</span>
                <div class="dianzan">
                    <span class="renshu">1w9</span>
                </div>
            </div>
        </div>
    </a>`;
                })
                $("#hot").html(str);
            }
        })
    }
})