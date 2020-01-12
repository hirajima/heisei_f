var windowWidth = $(window).width();
var windowSm = 640;
if (windowWidth <= windowSm) {

} else {
    //横幅640px超のとき（タブレット、PC）に行う処理を書く
    $(function() {
    $(window).scroll(function () {
       var sc = $(this).scrollTop();
       console.log(sc);
        if ($(this).scrollTop() > 23) {
          $(".section").css({'margin-top':'143px'});
          $(".gHeader").css({'position':'fixed','top':'0px','margin':'0px 0px 0px 0px'});
        }else {
          $(".section").css({'margin-top':'30px'});
          $(".gHeader").css({'position':'relative','top':'0px','margin':'23px 0px 0px 0px'});
        }
        if ($(this).scrollTop() > 199 ) {
          $(".section_contents_inner").css({top:"0px", position:"relative", 'margin':'0px 300px 0px 300px', 'padding':'0px 0px 0px 0px'});
        }else {
          $(".section_contents_inner").css({top:"430px", position:"fixed", 'margin':'50px 300px 0px 300px', 'padding':'50px 0px 0px 0px'});
        }
    });
});
}
