(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 700) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000,
       
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
        nav : false,
        // navText : [
        //     '<i class="bi bi-chevron-left"></i>',
        //     '<i class="bi bi-chevron-right"></i>'
        // ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav : false,
        // navText : [
        //     '<i class="bi bi-arrow-left"></i>',
        //     '<i class="bi bi-arrow-right"></i>'
        // ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });
    
})(jQuery);


$("#contactform").submit(function(event) {
    event.preventDefault();
    var values = $(this).serialize();
    document.getElementById('response').style.display = "block";
    document.getElementById('response').style.color = "black";
    document.getElementById('response').style.fontSize = "20px";
    document.getElementById('response').style.fontWeight = "350";
    document.getElementById('response').innerHTML = 'Sending...';
    $.ajax({
        url: "send copy.php",
        type: "post",
        data: values ,
        success: function (response) {
            console.log(response);
            // return;
            if (response == "success") {
                document.getElementById('response').style.display = "block";
                document.getElementById('response').style.color = "green";
                document.getElementById('response').style.fontSize = "20px";
                document.getElementById('response').style.fontWeight = "350";
                document.getElementById('response').innerHTML = 'Enquiry sent successfully';
                document.getElementById('name').value = "";
                document.getElementById('email').value = "";
                document.getElementById('subject').value = "";
                document.getElementById('message').value = "";
                setTimeout(function() {
                    $('#response').fadeOut('fast');
                }, 5000);
            }
            else {
                document.getElementById('response').style.display = "block";
                document.getElementById('response').style.color = "red";
                document.getElementById('response').style.fontSize = "20px";
                document.getElementById('response').style.fontWeight = "350"
                document.getElementById('response').innerHTML = 'Failed. Try again later';
                document.getElementById('name').value = "";
                document.getElementById('email').value = "";
                document.getElementById('subject').value = "";
                document.getElementById('message').value = "";
                setTimeout(function() {
                    $('#response').fadeOut('fast');
                }, 5000);
            }
        }
    });
});