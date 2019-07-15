$(document).ready(function () {
  var sections = $('.form-section');
  var currentIndex = $(".current-index");

  function navigateTo(index) {
    // Mark the current section with the class 'current'
    sections
      .removeClass('current')
      .eq(index)
        .addClass('current');
    // Show only the navigation buttons that make sense for the current section:
    $('.form-navigation .previous').toggle(index > 0);
    var atTheEnd = index >= sections.length - 1;
    $('.form-navigation .next').toggle(!atTheEnd);
    $('.form-navigation [type=submit]').toggle(atTheEnd);
    currentIndex.text(index+1);
    sections.fadeOut(100);
    $('.current').delay(100).fadeIn(500);
  }

  function curIndex() {
  // Return the current index by looking at which section has the class 'current'
    return sections.index(sections.filter('.current'));
  }

  // Previous button is easy, just go back
  $('.form-navigation .previous').click(function() {
    var prevIndex = curIndex() - 1;
    navigateTo(prevIndex);
  });

  // Next button goes forward if current block validates
  $('.form-navigation .next').click(function() {
    $('#questionnaire-form').parsley().whenValidate({
      group: 'block-' + curIndex()
    }).done(function() {
      var nextIndex = curIndex() + 1;
      navigateTo(nextIndex);
    });
  });

  // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
  sections.each(function(index, section) {
    $(section).find(':input').attr('data-parsley-group', 'block-' + index);
  });
  navigateTo(0); // Start at the beginning
  $("#total-questions").text(sections.length);
});