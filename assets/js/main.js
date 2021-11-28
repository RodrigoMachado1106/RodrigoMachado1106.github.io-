$("#pesquisa").keyup(function(){
   
    var pesquisa = $(this).val();

    $.ajax({
        type: 'POST',
        url: '/webdev/Main/busca_serie',
        dataType: 'JSON',
        data: "pesquisa=" + pesquisa,
        success: function (response) {   

            if(pesquisa == ''){
                $("#resultadoPesquisa").hide();
            } else {
                $("#resultadoPesquisa").fadeIn();
            }
            
            $("#resultadoPesquisa").html(response);

        }, error: function (req, status, err) {                                  
            console.log('Something went wrong', status, err);
        }
    });

});