$(function(){
//	$("a[href*=#]").click(function(){
//          console.log('hi');
//                                                                                      console.log(this.hash);
//		var Hash = $("*[name="+this.hash.replace("#", "")+"]");
//                                                    console.log('hi2');
//                                                                              console.log(this.hash);
//		var HashOffset = $(Hash).offset().top;
//                          console.log(Hash);
//                                    console.log('hi2');
//		$("html,body").animate({
//			scrollTop: HashOffset
//		}, 1000);
//		return false;
//	});
        
    $('a[href*=#]').click(function() {
        console.log('hi');
    var target = $(this.hash);
      console.log('hi2');
    //if (target.length) {
    if (target) {
        console.log('hi3');
                        console.log(target);
        var targetOffset = target.offset().top;
                console.log('hi?');
        $('html,body').animate({scrollTop: targetOffset},350);
              console.log('hi4');
        return false;
        }
    });

});