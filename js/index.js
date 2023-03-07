$(document).ready(function (){
    var height = $(window).height();
    $("body").css("height", height);
});

/*LOADING*/
function loading_gif(bool){
    if(bool){
        $(".loading").css("display", "block");
    }else{
        $(".loading").css("display", "none");
    }
}

function search(){
    var key = $("#search_bar").val();
    if(key.trim()){
        $("#search_bar").val("");
        window.open('https://www.google.com/search?q='+key, '_blank');
        $.post("query.php", {key: key}, function(data){});
    }
}