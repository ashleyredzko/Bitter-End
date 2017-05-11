// Prevent clicks on placeholder/js-use anchors from navigating.
$('body').on('click', 'a[href="#"]', function (event) {
     event.preventDefault();
 });

$('.navMobileToggle').click(function () {
    $('.be-head .navHov').toggleClass('toggled').find('.fa').toggleClass('fa-caret-down fa-caret-up');
});

// hide recruitment table rows if not recruiting that class
$('tr:has("td:empty")').hide();

// styles progression based on cell data
$('td:contains("Mythic")').addClass('kill-mythic');
$('td:contains("Heroic")').addClass('kill-heroic');
$('td:contains("Normal")').addClass('kill-normal');

$(window).on('scroll', function (e) {
    if ($(window).scrollTop() > $('.be-logo').height()) {
        $('.be-head').addClass('be-fixed');
    } else {
        $('.be-head').removeClass('be-fixed');
    }
});