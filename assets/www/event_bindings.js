$(document).delegate('div[data-role="page"]', 'pageshow', function () {
  var min_content_height = (
    $(window).height() - 
    $(this).find('[data-role="header"]').outerHeight(true) - 
    $(this).find('[data-role="footer"]').outerHeight(true)
  );
  $(this).find('[data-role="content"]').css('min-height', min_content_height);
});