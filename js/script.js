AOS.init({
    offset: 400,
    duration: 1000
});

$(window).on("load", function() {
    $("#loading").fadeOut(2000);
});

let scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
    speedAsDuration: true,
    easing: "easeInOutQuad"
});

// Hide/show navbar
let didScroll;
let lastScrollTop = 0;
let delta = 5;
let navbarHeight = $('nav').outerHeight();

$(window).scroll(function(event) {
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    let st = $(this).scrollTop();
    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta) return;
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('nav')
            .removeClass('show-nav')
            .addClass('hide-nav');
        $('.nav-toggle').removeClass('open');
        $('.menu-left').removeClass('collapse');
    } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
            $('nav')
                .removeClass('hide-nav')
                .addClass('show-nav');
        }
    }
    lastScrollTop = st;
}

// let navbar = document.getElementById('navbar');
// let about = document.getElementById('about');

// window.onscroll = function() {
//     let position = navbar.getBoundingClientRect();
//     let position2 = about.getBoundingClientRect();
//     // this.console.log(position);
//     if (position.top >= position2.top) {
//         navbar.classList.remove('navbar-dark');
//     }
//     else {
//         navbar.classList.add('navbar-dark');
//     }
// }

//select動作：請求後端的動物資料
// $.post("api.php?do=select", function (re) {
//     $('tbody').html(re); //塞入來自ajax的訊息
//     $('.mdy').click(chginput);
// });

// function chginput() {
//     let txtname = $(this).parents('tr').find('.name').text();
//     $(this).parents('tr').find('.name').html(`
//     <input type="text" value="${txtname}">
//     `);
//     // console.log(where);
// }
