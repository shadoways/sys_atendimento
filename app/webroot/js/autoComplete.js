$(document).ready(function(){
    $.ajax({
       url:"/atendimentos/autoComplete",
       dataType: "json",
       success: function(data){
            $("#tags").autocomplete({
                source: data,
                response: function(event, ui) {
                // ui corresponde ao array recebido no source
                if (ui.content.length === 0) {
                    $("#tags").val("Nome não encontrado");
                    $("#tags").select();
                }}
            });
        }         
    });
})