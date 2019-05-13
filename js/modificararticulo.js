$(document).ready(function () {
    $("#modificarart").click(function () {
        var cod = $("#cod").val();
        var tit = $("#tit").val();
        var cat = $("#cat").val();
        var aut = $("#aut").val();
        var des = $("#des").val();
        var pc = $("#pc").val();
        var uni = $("#uni").val();
        var img = $("#img").val();
        var mens = $("#mens");
                $.ajax({
                    url: '../php/modificararticulo.php',
                    method: 'POST',
                    data: {
                        cod: cod,
                        tit: tit,
                        cat: cat,
                        aut: aut,
                        des: des,
                        pc: pc,
                        uni:uni,
                        img:img
                    },
                    success: function (data) {
                        $("#edit").modal("hide");
                        $("#tabla").load('../php/verarticulos.php');
                        mens.text(data);
                        $("#mensaje").modal("show");
                    }
                });
    });
});