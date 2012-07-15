$(document).delegate('div[data-role="page"]', 'pageshow', function () {
  var content_height = (
    $(window).height() - 
    $(this).find('[data-role="header"]').outerHeight(true) - 
    $(this).find('[data-role="footer"]').outerHeight(true)
  );
  var extra_height = (
    $(this).find('[data-role="content"]').outerHeight(true) - 
    $(this).find('[data-role="content"]').height()
  );
  $(this).find('[data-role="content"]').css('min-height', content_height - extra_height);
});
