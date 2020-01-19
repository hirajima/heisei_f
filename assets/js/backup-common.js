


var windowWidth = $(window).width();
var windowSm = 640;
if (windowWidth <= windowSm) {
  //横幅640px以下のとき（つまりスマホ時）に行う処理を書く
      $(function() {
      $('.toggle').click(function() {
          $('.gNav').slideToggle();
        }
      );
    });


} else {
    //横幅640px超のとき（タブレット、PC）に行う処理を書く
    $(function() {
      $(window).scroll(function () {
         // var sc = $(this).scrollTop();
         // console.log(sc);
          if ($(this).scrollTop() > 136) {
            $(".gHeader").css({'position':'fixed', 'height':'68px'});
            $(".gHeader_logo").css({'padding':'10px 28px 15px 28px'});
            $(".gHeader_contact_inner").css({'padding':'10px 0px 15px 0px'});
            $(".gNav_inner").css({'padding':'10px 0px 15px 0px', 'margin-top': '10px'});
          }else {
            $(".gHeader").css({'position':'relative', 'height': '136px' });
            $(".gHeader_logo").css({'padding': '42px'});
            $(".gHeader_contact_inner").css({'padding': '40px 20px'});
            $(".gNav_inner").css({'padding':'0px 0px 0px 0px', 'margin-top': '48px'});
          }
        })


      $(".top-main").css({top:"-50px", opacity:"0.0"}).animate({top:"0px", opacity:"1.0" },1000)
         $(".main-title-1").css({top:"-50px", opacity:"0.0"}).delay(350).animate({top:"0px", opacity:"1.0" },2000)
         $(".main-title-2-text").css({top:"-50px", opacity:"0.0"}).delay(500).animate({top:"0px", opacity:"1.0" },1500)
    });





}
