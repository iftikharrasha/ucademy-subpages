$(document).ready(function() {

    $(".navbar-toggler").click(function() {
        $(".crs").toggleClass('d-none')
        $(".hm").toggleClass("d-none")
    });
    $('.navbar-nav>li>a').on('click', function(){
        $('.navbar-collapse').collapse('hide');
        $(".crs").toggleClass('d-none')
        $(".hm").toggleClass("d-none")
    });

});
$(window).on('load',function(){
    $('#exampleModalCenter').modal('show');
});
