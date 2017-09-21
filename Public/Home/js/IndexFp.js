$(function(){
	
	$('#fullpage').fullpage({
            'anchors': ['banner', 'content1', 'content2', 'content3', 'content4', 'content5', 'content6', 'content7', 'footer'],
             'verticalCentered': !1,
             'navigation': true,
             'navigationPosition': 'right',
             'paddingTop':0,
             scrollingSpeed:1200,
            //  easingcss3: 'cubic-bezier(.82,.19,.38,.87)',
             afterLoad: function(anchors, index) {
                 if (index == 2) {
					 
                     $(".img1").animateCss('fadeInLeft');
                     $(".img2").animateCss('fadeIn');
                     $(".img2b").animateCss('fadeIn');
                     $(".img3").animateCss('fadeIn');
                     $(".img4").animateCss('fadeIn');
                     $(".img5").animateCss('fadeInUp');
                     $(".img6").animateCss('fadeInUp');
                     $(".img7").animateCss('fadeInLeft');
                     $(".img10").animateCss('fadeInLeft');
                     $(".img11").animateCss('fadeInUp');
                     $('.bottom_img1').animateCss('fadeIn');
                     $('.bottom_img11').animateCss('fadeInLeft');
                     $('.bottom_img3').animateCss('zoomIn');
                     $('.bottom_img4').animateCss('zoomIn');
                     $('.common_animate').animateCss('kache_move');
                     $('.common_animate_sub').animateCss('kache_move_again');
                     $('.bottom_img6').animateCss('che_move');
                     var buycartimer=null;
                     var purchasetimer=null;
                     $('a[href="#buycar"]').on('shown.bs.tab', function (e) {
                        if(purchasetimer){
                            clearTimeout(purchasetimer);
                            purchasetimer = null;
                        }
                      buycartimer = setTimeout(function () {
                         $('a[href="#purchase"]').tab('show');
                         buycartimer = null;
                     }, 4000);
                    })
                     $('a[href="#purchase"]').on('shown.bs.tab', function (e) {
                        if(buycartimer){
                            clearTimeout(buycartimer);
                            buycartimer = null;
                        }
                      purchasetimer = setTimeout(function () {
                         $('a[href="#buycar"]').tab('show');
                         purchasetimer = null;
                     }, 8000);
                    })
                     buycartimer = setTimeout(function () {
                         $('a[href="#purchase"]').tab('show');
                         buycartimer = null;
                     }, 4000);
                 } else {
                     $(".img1").removeClass(' animated fadeInLeft');
                     $(".img2").removeClass(' animated fadeIn');
                     $(".img2b").removeClass(' animated fadeIn');
                     $(".img3").removeClass(' animated fadeIn');
                     $(".img4").removeClass(' animated fadeIn');
                     $(".img5").removeClass(' animated fadeInUp');
                     $(".img6").removeClass(' animated fadeInUp');
                     $(".img7").removeClass(' animated fadeInLeft');
                     $("#restFp").click();
                 }
                 if(index==3){
                     // $('.flower').animateCss('fadeIn');
					 
					 function lastShow(isFirst) {
		if(isFirst) {
			var leftSwiper = new Swiper('.hxyw2 .swiper-container.bg_div-left', {
				direction: 'vertical',
				loop: true,
				//simulateTouch: true, // 鼠标无效
				autoplay: 5000,
				speed: 2500,
				autoplayDisableOnInteraction : false,
			});
			// 统计个数
			var slideCount = $(".hxyw2 > .bg_div-left > .swiper-wrapper > .swiper-slide").length
			var rightSwiper = new Swiper('.hxyw2 .swiper-container.R_bg', {
				direction: 'vertical',
				loop: true,
				simulateTouch: false, // 鼠标无效
				initialSlide: slideCount,
				onSlideChangeEnd: function(swiper) {
					$(".hxyw2 > .bg_div-left > .swiper-wrapper > .swiper-slide .timer-svg circle").attr('class', '').attr("stroke", "");
					if($(".hxyw2 > .bg_div-left > .swiper-wrapper > .swiper-slide.swiper-slide-duplicate.swiper-slide-active").length != 0) {
						$(".hxyw2 > .bg_div-left > .swiper-wrapper > .swiper-slide .timer-svg circle").eq(1).attr('class', 'circles').attr("stroke", "#fff");

					}
					$(".hxyw2 > .bg_div-left > .swiper-wrapper > .swiper-slide-active .timer-svg circle").attr('class', 'circles').attr("stroke", "#fff");

				}
			});

			leftSwiper.params.control = rightSwiper;
			leftSwiper.params.controlInverse = true;
			
			
			$('#bg_4imgl').click(function(){
				//alert("aa");
				leftSwiper.stopAutoplay();
				rightSwiper.stopAutoplay();
				$("#bg_4img").hide();
			})
			
			$('#bg_3imgl').click(function(){
				//alert("aa");
				leftSwiper.stopAutoplay();
				rightSwiper.stopAutoplay();
				$("#bg_3img").hide();
			})
			
			$('#bg_2imgl').click(function(){
				//alert("aa");
				leftSwiper.stopAutoplay();
				rightSwiper.stopAutoplay();
				$("#bg_2img").hide();
			})
			
			$('#bg_1imgl').click(function(){
				//alert("aa");
				leftSwiper.startAutoplay();
				rightSwiper.startAutoplay();
				$("#bg_1img").hide();
			})



		}
		
		
		isFirst = true;
	}
	
	
	
	
					 
					 lastShow(true);
					 
					 
					 
					 
                 }
                 else{
                    //   $('.flower').removeClass('animated fadeIn');
                 }
             }
        });
    var buycartimer=null;
                     var purchasetimer=null;
                     $('#mobile_buycar').carousel({
                        interval:2000
                     })
                     $('#mobile_purchase').carousel({
                        interval:2000
                     })
                     $('a[href="#mobile_buycar"]').on('shown.bs.tab', function (e) {
                        if(purchasetimer){
                            clearTimeout(purchasetimer);
                            purchasetimer = null;
                        }
                      buycartimer = setTimeout(function () {
                         $('a[href="#mobile_purchase"]').tab('show');
                         buycartimer = null;

                     }, 8000);
                    })

                     $('a[href="#mobile_purchase"]').on('shown.bs.tab', function (e) {
                        if(buycartimer){
                            clearTimeout(buycartimer);
                            buycartimer = null;
                        }
                      purchasetimer = setTimeout(function () {
                         $('a[href="#mobile_buycar"]').tab('show');
                         purchasetimer = null;
                     }, 8000);
                    })

                     buycartimer = setTimeout(function () {
                         $('a[href="#mobile_purchase"]').tab('show');
                         buycartimer = null;
                     }, 8000);
})