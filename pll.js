jQuery(document).ready(function($){

   $('select#post_lang_choice').attr('disabled','true');
   $('select#term_lang_choice').attr('disabled','true');
   $('td.pll-sync-column').addClass('sync-lock');

   $('#ml_box .inside').append(
       '<div class="padlock"></div>'
   );

   $('.padlock').on('click', function() {
      if ( $(this).hasClass('unlock') ) {
         $(this).removeClass('unlock');
         $('select#post_lang_choice').attr('disabled','true');
         $('select#term_lang_choice').attr('disabled','true');
         $('td.pll-sync-column').addClass('sync-lock');

      } else {
         $(this).addClass('unlock');
         $('select#post_lang_choice').removeAttr('disabled');
         $('select#term_lang_choice').removeAttr('disabled');
         $('td.pll-sync-column').removeClass('sync-lock');
      }
   });
   
});

