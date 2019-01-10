'use strict';

/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////

var select=$("#newnote");
select.on("change",onChangePlayer);


var currentPlayerSelected;


/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL                                                                      //
/////////////////////////////////////////////////////////////////////////////////////////



function onChangePlayer() {
    var value = $('#newnote option:selected').val();
    $.getJSON(getRequestUrl()+"/player?id="+value,onReturnAjaxPlayer);


}



function onReturnAjaxPlayer(PlayerResponse) {
    currentPlayerSelected= PlayerResponse;

    var pd =$("<p>");
    var p =$("<span>");

    var menue =$("#ajaximg")
    menue.empty();

    p.text(PlayerResponse.playerPrenom+" "+PlayerResponse.playerNom);
    var image = $('<img>');
    image.attr("src",getWwwUrl()+"/"+PlayerResponse.photo);  //ajout d'un attribu avec .attr
    menue.append(image);



    /*pd.text(PlayerResponse.sellPrice+"€");*/
    menue.append(p);
    menue.append(pd);

   /* var qty=$("input[name=qty]");
    qty.attr("max",PlayerResponse.quantityinStock);*/





    /*menue.text(MealResponse.);
    menue.text(MealResponse.buyPrice);
    menue.text(MealResponse.quantityinStock);*/
    $("#idJoueur").val(PlayerResponse.id);
}

$.getJSON(getRequestUrl()+"/player?id=22",onReturnAjaxPlayer);