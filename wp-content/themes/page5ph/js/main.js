function buttonUp(){
  var inputVal = $('.searchbox-input').val();
  inputVal = $.trim(inputVal).length;
  if( inputVal !== 0){
    $('.searchbox-icon').css('display','none');
  } else {
    $('.searchbox-input').val('');
    $('.searchbox-icon').css('display','block');
  }
}

function mobileNavigation(){
  $('.mobile-menu-trigger').on('click', function(){
    $(this).parent().toggleClass('active');
  });

    // MOBILE LAYOUT - PARENT CONTAINER
  $('.wholepanel .parent-nav-1 > li > .sub-menu').addClass('level1');

  // MOBILE LAYOUT - CHILD LEVEL 1
  for (var i = 0; i < 3; i++) {
    $('.wholepanel .parent-nav-1 .level'+i+' > li, .desktop-menu .parent-nav-1 .level'+i+' > li').each(function(e){
      var current1 = $(this);
      if( current1.hasClass('menu-item-has-children') ){
        current1.find('> a').addClass('level'+i+'-title level-title-child column-middle');
        $('<span class="fa fa-caret-down level-controls level'+i+'-control column-middle"></span>').insertAfter( current1.find('> a') );
      }
    });
  }

  $('.wholepanel .menu > li').each(function(e){
    var parentLi = $(this);
    parentLi.addClass('parent-'+e);
    
    if( parentLi.hasClass('menu-item-has-children') ) {
      parentLi.find('>a').addClass('parent-title-child');
      $('<span class="fa fa-caret-down parent-controls" data-parent="parent-'+e+'"></span>').insertAfter( parentLi.find('>a') );  
    }

    parentLi.find('.parent-controls').on('click', function(){
      $(this).toggleClass('sub-open');
      $('.wholepanel .parent-'+e).find('.level1').toggleClass('active');
    });

    parentLi.find('.level1 > li').each(function(lv1){
      $(this).addClass('nav-'+e+'-'+lv1);
      $(this).find('>.level-controls').attr('data-parent', 'nav-'+e+'-'+lv1);
    });
  });
}

$(document).ready(function(){
  mobileNavigation();

    var navScrollTop = 0;
    $(window).on('scroll', function() {
      var st = $(this).scrollTop();
      if (st < 322) {
        $('.menu-primary-container').removeClass('uni-nav-down');
        $('.site-content').css('padding-top', '0');
      } else {
        $('.menu-primary-container').addClass('uni-nav-down');
        $('.site-content').css('padding-top', '50px');
      }
    });

  var submitIcon = $('.searchbox-icon');
  var inputBox = $('.searchbox-input');
  var searchBox = $('.searchbox');
  var isOpen = false;

  submitIcon.click(function(){
    if(isOpen == false){
      searchBox.addClass('searchbox-open');
      inputBox.focus();
      isOpen = true;
    } else {
      searchBox.removeClass('searchbox-open');
      inputBox.focusout();
      isOpen = false;
    }
  });

  submitIcon.mouseup(function(){
    return false;
  });

  searchBox.mouseup(function(){
    return false;
  });

  $(document).mouseup(function(){
    if(isOpen == true){
      $('.searchbox-icon').css('display','block');
      submitIcon.click();
    }
  });

  $(".slides").slick({
    asNavFor: ".captions",
    infinite: true,
    speed: 600,
    arrows: false,
    autoplaySpeed: 5000,
    autoplay: true,
    dots: true
  });

  $(".captions").slick({
    asNavFor: ".slides",
    infinite: true,
    speed: 200,
    fade: true,
    prevArrow:
      '<div class="post_arrow_left"><i class="fa fa-angle-left"></i> PREV</div>',
    nextArrow:
      '<div class="post_arrow_right">NEXT <i class="fa fa-angle-right"></i></div>'
  });

// end
});
