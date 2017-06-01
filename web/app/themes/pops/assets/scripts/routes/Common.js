export default {
  init() {
    $('body').show();
    const pageTitle = $(document).attr('title');
    const menuLinks = $('.menu__link');

    pageTitle === 'POPS'
      ? $(menuLinks.get()[0]).css('border-bottom', '2px solid white')
      : (menuLinks
          .get()
          .find(element =>
            pageTitle.includes($(element).html())
          ).style.borderBottom =
          '2px solid white');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
