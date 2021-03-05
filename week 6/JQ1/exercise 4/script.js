  
$(document).ready(function () {
    $("#new-todo").on("keyup", function (e) {
        const todoValue= $(this).val();
        if(e.which===13){
            if(todoValue==''){
                $(".error").html("<span>Không được để trống</span>").css("color","red");
            }else{
                $(".error").html("");
                $(".list-to-do").append('<p class="m-0 text-left">'+todoValue+'<i class="far fa-trash-alt float-right mt-1 todo-clear"></i></p> <hr class="m-0">').css("color","black");
                $(".status-clear p").html($(".list-to-do p").length+(($(".list-to-do p").length>1)?" tasks ":" task ")+"left")
                $(this).val("");
                $("i").css("display","none");
            }
        }
    });
    $(document).on("mouseleave",".list-to-do p",function(){
        $(this).find("i").fadeOut(150);
    })
    $(document).on("mouseenter",".list-to-do p",function(){
        $(this).find("i").fadeIn(150);
    })
    $(document).on("click",".todo-clear", function () {
        $(this).parent().next().remove();
        $(this).parent().remove();
        $(".status-clear p").html($(".list-to-do p").length+(($(".list-to-do p").length>1)?" tasks ":" task ")+"left");
    });
    $("button").on("click", function () {
        $(".list-to-do").children().remove();
        $(".status-clear p").html("0 task left");
    });
});