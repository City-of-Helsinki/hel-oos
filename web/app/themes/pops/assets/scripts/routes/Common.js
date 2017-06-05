export default {
  init() {
    $('body').show();
    const pageTitle = $(document).attr('title');
    const headerMenuLinks = $('.header__menu .menu__link');
    const footerMenuLinks = $('.footer__menu .menu__link');

    pageTitle === 'POPS'
      ? firstActive(headerMenuLinks, footerMenuLinks)
      : otherActive(pageTitle, headerMenuLinks, footerMenuLinks);
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

function firstActive(headerMenuLinks, footerMenuLinks) {
  $(headerMenuLinks.get()[0]).css('border-bottom', '2px solid white');
  $(footerMenuLinks.get()[0]).css('border-bottom', '2px solid white');
}

function otherActive(pageTitle, headerMenuLinks, footerMenuLinks) {
  headerMenuLinks
    .get()
    .find(element => pageTitle.includes($(element).html())).style.borderBottom =
    '2px solid white';
  footerMenuLinks
    .get()
    .find(element => pageTitle.includes($(element).html())).style.borderBottom =
    '2px solid white';
}
