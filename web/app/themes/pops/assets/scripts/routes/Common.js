export default {
  init() {
    $('body').show();
    const pageTitle = $(document).attr('title');
    const headerMenuLinks = $('.header__menu .menu__link');
    const footerMenuLinks = $('.footer__menu .menu__link');

    pageTitle === 'OOS'
      ? firstOrPostActive(headerMenuLinks.get()[0], footerMenuLinks.get()[0])
      : otherActive(pageTitle, headerMenuLinks, footerMenuLinks);
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

function firstOrPostActive(headerMenuLink, footerMenuLink) {
  $(headerMenuLink).css('border-bottom', '2px solid white');
  $(footerMenuLink).css('border-bottom', '2px solid white');
}

function otherActive(pageTitle, headerMenuLinks, footerMenuLinks) {
  const headerLink = headerMenuLinks
    .get()
    .find(element => pageTitle.includes($(element).html()));

  const footerLink = footerMenuLinks
    .get()
    .find(element => pageTitle.includes($(element).html()));

  !!headerLink && $(headerLink).css('borderBottom', '2px solid white');
  !!footerLink && $(footerLink).css('borderBottom', '2px solid white');
  !headerLink &&
    !footerLink &&
    firstOrPostActive(headerMenuLinks.get()[1], footerMenuLinks.get()[1]);
}
