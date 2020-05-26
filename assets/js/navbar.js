$(document).ready(function(){
    
    $(window).scroll(function(){
        console.log($(this).scrollTop());
        if($(this).scrollTop() < 510){
            $('.navbar').removeClass('bg-hitam');
            $('.navbar').addClass('bg-opa-zero');
        } else if($(this).scrollTop() >= 510){
            $('.navbar').removeClass('bg-opa-zero');
            $('.navbar').removeClass('bg-putih');
            $('.navbar').addClass('bg-hitam');
        } 
    });

});