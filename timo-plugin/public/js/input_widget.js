$( document ).ready(function(){

  $('#btn_widget').click( function(){

    var value = $('#input_widget').val();

    $( '#target_div' ).append( "<p>" + value + "</p>" );

  });

});