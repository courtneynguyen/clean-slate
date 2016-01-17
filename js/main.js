jQuery(document).on('ready', function(){
   jQuery('.menu-item-has-children').on('click', function(e) {
      var $link = jQuery(this);
      if(!$link.hasClass('show')){
         e.preventDefault();
         $link.toggleClass('show');
      }
      else {
         $link.toggleClass('show');
      }
      $link.focus();
      $link.on('focusout', function(){
         window.setTimeout(function(){
            $link.removeClass('show');
            window.clearTimeout();
         }, 100);
      });
   });


   // jQuery('body').on('click', function() {
   //    jQuery('.page_item_has_children').removeClass('show');
   // });
   //    jQuery('a').on('click', function(){
   //       $this = jQuery(this);
   //       $this.addClass('active');
   //    });
   //    jQuery('#mobile-menu').on('click', function(){
   //       jQuery('#main_navigation').toggleClass('hidden');
   //    });
});
