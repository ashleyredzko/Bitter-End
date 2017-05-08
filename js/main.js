// Prevent clicks on placeholder/js-use anchors from navigating.
$('body').click('a[href="#"]', function (event) {
    event.preventDefault();
});

$('.navMobileToggle').click(function () {
    $('.be-head .navHov').toggleClass('toggled').find('.fa').toggleClass('fa-caret-down fa-caret-up');
});