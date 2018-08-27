$(document).ready(function(){
    
    function appelAjax(recherche){
        var result = $('.main_content');
        $.ajax({
            url:"){{path('recherche_presta')}}",
            method: "post",
            data: {rechercche:recherche}
        }).done(function (msg){
            afficherList();

        });
    }

    function afficherList(){
        $.each(JSON.)

    }


    
}