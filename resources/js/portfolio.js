 $(function(){


　
   $('.load-btn').click(function(){
     var w =$(window).width();
     var x = 768;
     if(w >= x){
     $('.loader').fadeOut(1000);

     $('.loader').fadeOut(function(){
      $('.loader').addClass('closing');


     if($('.loader').hasClass('closing')){
       $('.wrapper').fadeIn(1000);
       $('.introduce').fadeIn(2500);
       $('.keyvisual a').fadeIn(2500);
    }else{
       $('.wrapper').addClass('active');
     }
   });
  }
 });



  $(function() {
    var image = $('.works');
     $(window).scroll(function () {
       var w =$(window).width();
       var x = 1600;
         if(w >= x){
         }else if ($(this).scrollTop() >150) {
            image.fadeIn('slow');
         } else {
             image.fadeOut();
         }
     });
    });

});
