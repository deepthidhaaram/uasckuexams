/**
 * Responsive Tabs Front JS
 */

;(function($){
  $(document).ready(function (){
      
    function setupTabs(){

      $('.rtbs').each(function(){
        var rtbs_def_colors = { backgroundColor : ''}
        rtbs_def_colors.backgroundColor = $(this).find('.rtbs_inactive_tab_background').html();
        var color = $(this).find('.rtbs_color').html();
        var breakpoint = $(this).find('.rtbs_breakpoint').html();
        var rtbssize = $(this).width();
        if (rtbssize > breakpoint) {
          $(this).find('.rtbs_menu a').not('.active').css(rtbs_def_colors);
          $(this).removeClass('rtbs_full');
          $(this).find(".mobile_toggle").hide();
          $(this).find('.rtbs_menu li:not(".mobile_toggle")').show();
          $(this).find('.rtbs_menu li:not(".mobile_toggle")').css( "display", "inline-block" );
        }
        else {
          $(this).addClass('rtbs_full');
          $(this).find('.rtbs_menu li:not(".mobile_toggle")').css( "display", "block" );
          $(this).find(".mobile_toggle").css( 'background', color );
          $(this).find('.rtbs_menu li:not(".mobile_toggle")').hide();
        }
      });
        
      $('.rtbs').each(function(){
          var current_text = $(this).find( "a.active" ).text();
          $(this).find( ".mobile_toggle" ).empty();
          $(this).find( ".mobile_toggle" ).append( current_text );
      });   
    }

    $("body").on('click', '.dmb_show_preview_tab_set', function(){ 
        setupTabs();
    });

    // Initiate for none preview mode.
    setupTabs();
     
    var resizeTimerTwo;
    $(window).resize(function() {
      
      clearTimeout(resizeTimerTwo);
      resizeTimerTwo = setTimeout(function() {

        $('.rtbs').each(function(){
          var breakpoint = $(this).find('.rtbs_breakpoint').html();
          var rtbssize = $(this).width();

          if (rtbssize > breakpoint) {
              $(this).removeClass('rtbs_full');
          } else {
              $(this).addClass('rtbs_full');
          }
          
        });
      }, 100);
    });
        
    var resizeTimerOne;
    $(window).resize(function() {
      clearTimeout(resizeTimerOne);
      
      resizeTimerOne = setTimeout(function() {
        $('.rtbs').each(function(){
          var rtbs_def_colors = { backgroundColor : ''}
          rtbs_def_colors.backgroundColor = $(this).find('.rtbs_inactive_tab_background').html();
          var breakpoint = $(this).find('.rtbs_breakpoint').html();
          var color = $(this).find('.rtbs_color').html();
          var rtbssize = $(this).width();
          if (rtbssize > breakpoint) {
            $(this).removeClass('rtbs_full');
            $(this).find(".mobile_toggle").hide();
            $(this).find('.rtbs_menu li:not(".mobile_toggle")').show();
            $(this).find('.rtbs_menu li:not(".mobile_toggle")').css( "display", "inline-block" );
            $(this).find('.rtbs_menu li a').css(rtbs_def_colors);
            $(this).find('.rtbs_menu li').find('.active').css( 'background', color );
          } else {
            $(this).addClass('rtbs_full');
            $(this).find(".mobile_toggle").show();
            $(this).find(".mobile_toggle").css( 'background', color );
            $(this).find('.rtbs_menu li:not(".mobile_toggle")').css( "display", "block" );  
            $(this).find('.rtbs_menu li:not(".mobile_toggle")').hide();
          }
        });
      }, 100);
    });
        
    $("body").on('click', '.mobile_toggle', function(){ 
        var color = $(this).closest('.rtbs').find('.rtbs_color').html();
        $(this).parent().children('li').not(".rtbs_menu li.mobile_toggle").slideToggle(90);
        $(this).siblings('.current').css( "display", "none" );
        $(this).css( 'background', color );
        $(this).siblings().find('a').css( 'background' , '#f1f1f1' );
        return false;
    });
        
    $("body").on('click', ".rtbs_menu li > a", function(){

      var rtbs_def_colors = { backgroundColor : ''}
      rtbs_def_colors.backgroundColor = $(this).closest('.rtbs').find('.rtbs_inactive_tab_background').html();
      var color = $(this).closest('.rtbs').find('.rtbs_color').html();
      var breakpoint = $(this).closest('.rtbs').find('.rtbs_breakpoint').html();
      var rtbssize = $(this).closest('.rtbs').width();
      if (rtbssize > breakpoint) {
        $(this).addClass('active');
        $(this).css('background', color);
        $(this).parent().siblings().children().css(rtbs_def_colors);
        $(this).parent().siblings().children().removeClass('active');
        $(this).closest('.rtbs').children('.rtbs_content').hide();
        var current_id = $(this).attr('data-tab');
        $(current_id).fadeToggle(0);
        var current_text = $(this).closest('.rtbs').find( "a.active" ).text();
        $(this).closest('.rtbs').find( ".mobile_toggle" ).empty();
        $(this).closest('.rtbs').find( ".mobile_toggle" ).append( current_text );
        $(this).parent().siblings().removeClass('current');
        $(this).parent().addClass('current');
        return false;
      } else {
        $(this).closest('.rtbs').find('.rtbs_menu li').css("display", "block");
        $(this).addClass('active');
        $(this).parent().siblings().children().removeClass('active');
        $(this).closest('.rtbs').find('.rtbs_content').hide();
        var current_id = $(this).attr('data-tab');
        $(current_id).fadeToggle(0);
        $(this).closest('.rtbs').find('.rtbs_menu li').not('.mobile_toggle').slideToggle(0); 
        var current_text = $(this).closest('.rtbs').find( "a.active" ).text();
        $(this).closest('.rtbs').find( ".mobile_toggle" ).empty();
        $(this).closest('.rtbs').find( ".mobile_toggle" ).append( current_text );
        $(this).parent().siblings().removeClass('current');
        $(this).parent().addClass('current');
        return false;
      }  
        
    });

  });
})(jQuery);