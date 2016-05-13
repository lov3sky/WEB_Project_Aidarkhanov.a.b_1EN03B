$(document).ready(function(){
    $("#open1").click(function(){
        $("#choose").html('Работодатель<br><br>Нажмите еще два раза,чтобы закрыть');
        $("#rab").show(800);
        $("#sos").hide(0000);
        $(this).dblclick(function(){
            $("#rab").hide(600);
            $("#choose").html('Выберите, пожалуйста, вид авторизации');
        });
    });
    $("#open2").click(function(){
        $("#choose").html('Соискатель<br><br>Нажмите еще два раза,чтобы закрыть');
        $("#sos").show(800);
        $("#rab").hide(0000);    
        $(this).dblclick(function(){
            $("#sos").hide(600);
            $("#choose").html('Выберите, пожалуйста, вид авторизации');
        });
    });
});