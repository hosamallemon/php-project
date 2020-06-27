$(document).ready(function () {

    $(".div1").animate({ top: '20px' }, 100, function () {
        $(".div1").animate({width:'450px'},100, function () {

            $(".div1").animate({ height: '570px' }, 100, function () {

                $('.div1').animate({ borderRadius: '10px' }, function() {

                    $('.img1').fadeIn(100, function () {

                        $('h1').slideDown(100, function () {

                            $('.input1').slideDown(100, function () {

                                $('.checkbox').show(100, function () {

                                    $('.checkbox').animate({ left: '0px' }, 100, function () {

                                        $('.btn1').slideDown(100, function () {

                                            $('a.forget').fadeIn(100, function () {

                                                $('a.forget').animate({ right: '0px' }, 100, function(){

                                                    $('a.sign_up').fadeIn(100);

                                                });

                                            });

                                        });

                                    });

                                });
                           

                            });

                        });

                    });


                
                });

            });


        });


    });
    $("i1").click(function () {

        $("i").css("display", "none");

    });
});

/*$("button").click(function () {

    $("h1").css("color", $(".inp1").val());
    $(".inp2").val($("h1").css("color"));

});*/

