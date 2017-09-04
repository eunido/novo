$(function() {
    var $el, leftPos, newWidth, $mainNav = $("#line");
    $mainNav.append("<li id='magic-line'></li>");
    var $magicLine = $("#magic-line");
    if($("a[id^=topNavi]").hasClass("hover")) {
        $("#magic-line").css("display", "block")
        $magicLine.width($(".hover").parent("li").width()).css("left", $(".hover").position().left).data("origLeft", $magicLine.position().left).data("origWidth", $magicLine.width())
   
    }
});

function lineControl() {
    var depId=this.id;
    var depClass=depId.substr(0,7);
    var depNum=depId.substr(7,8);
    if(depClass=="topNavi") {
        var $magicLine=$("#magic-line");
        $magicLine.stop().animate({
            left:$magicLine.data("origLeft"),
            width:$magicLine.data("origWidth")
        });
    } else if(depClass=="topSubm") {
        var $magicLine=$("#magic-line");
        $magicLine.stop().animate({
            left:$magicLine.data("origLeft"),
            width:$magicLine.data("origWidth")
        });
    }
}

function depth2Search(dep1, dep2) {
    depth2HideAll();
    var depId=dep1;
    var dep2Id=dep2-1;
    if(dep1 != 0) {
        $("#topNavi" + depId).addClass("hover");
        $("#topSubm" + depId).find("li:eq("+dep2Id+") a").addClass("hover").parent().parent("ul").css("visibility", "visible");
        $("#topbg").stop().animate({
            "height":"30px"
        }, 50);
        $("#magic-line").css("display","block");
    }
}

function depth2HideAll() {
    $("#topbg").stop().animate({
        "height":"0"
    },50);
    $("#magic-line").css("display","none");
    $("a[id^=topNavi").each(function() {
        $(this).removeClass("hover");
        $(this).siblings("ul").css("visibility", "hidden");
    });
}

function depth2View() {
    var depId = this.id;
    var depClass = depId.substr(0,7);
    var depNum = depId.substr(7,8);
    depth2HideAll();
    if(depNum != 7) {
        if(depClass == "topNavi") {
            targetDiv = $(this);
            targetDiv.addClass("hover").siblings("ul").css("visibility", "visible");
            var $magicLine = $("#magic-line");
            $el = $(this);
            leftPos = $el.position().left;
            newWidth = $el.parent().width();
            $magicLine.stop().animate({
                left:leftPos,
                width:newWidth
            });
        } else if(depClass == "topSubm") {
            targetDiv = $(this).siblings();
            targetDiv.addClass("hover").siblings("ul").css("visibility", "visible");
            var $magicLine = $("#magic-line");
            $el = $(this).siblings("a");
            leftPos = $el.position().left;
            newWidth = $el.parent().width();
            $magicLine.stop().animate({
                left:leftPos,
                width:newWidth
            })
        }
        $("#topbg").stop().animate({
            "height":"30px"
        },50);
        $("#magic-line").css("display","block");
    }
}

function initTopMenu(dep1, dep2) {
    if(dep1 !=0 && dep1 == 7) {
        depth2Search(dep1,dep2);
    }
    
    $("a[id^=topNavi]").each(function() {
        $(this).mouseover(depth2View).focus(depth2View).mouseout(lineControl).mouseout(function() {
            depth2Search(dep1,dep2);
        });
    });
    $("ul[id^=topSubm]").each(function() {
        $(this).mouseover(depth2View).focus(depth2View).mouseout(lineControl).mouseout(function() {
            depth2Search(dep1,dep2);
        });
    });
}