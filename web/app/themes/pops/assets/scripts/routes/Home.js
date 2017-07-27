export default {
  init() {
    $('#videoModal').on('hidden.bs.modal', () => {
      $('#videoModal iframe').attr('src', $('#videoModal iframe').attr('src'));
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
