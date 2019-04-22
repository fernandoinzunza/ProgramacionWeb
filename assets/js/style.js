$(document).ready(function(){
    $("li").click(function(){
        $("li").removeClass("active");
        var li = $(this);
        $(li).addClass("active");
    })
});
