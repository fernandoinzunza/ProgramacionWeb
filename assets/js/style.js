$(document).ready(function(){
    $("#nav").click(function(){
        $("#nav").removeClass("active");
        var li = $(this);
        $(li).addClass("active");
    })
});
