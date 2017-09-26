$(document).ready(function() {
	//默认全部隐藏
	
	$("#main-about").bind('mousewheel', function(event, delta) {
		if(delta == "-1") { //向下
			//$("#Max-conatiner").nextAll().show();
			//$(".alert_box").hide();
			//$(".alert_box2").hide();
			//lastShow(true);
		}
	});
	


	//算好位置hander+内容部分
	var oH = $(window).height();
	var oHanderH = $(".handers").height();
	$("#particles").css("height", oH - oHanderH + 'px').css("margin-top", oHanderH + 'px');
	//首页Banner
	$("#pj-lunbo").slick({
		accessibility: false, // 是否可以按Tab键切换dots和arrows 默认TRUE
		autoplay: true, // 启用幻灯片的自动播放
		autoplaySpeed: 5000, // 自动播放间隔 默认 3000
		arrows: true, //启用下一个/上一个箭头 默认true
		lazyLoad: 'ondemand', // 懒加载配合data-lazy属性使用 <img data-lazy="img/1.jpg"/>
		fade: false, // 是否将滑动改为淡入淡出
	});

	////第二个轮播
	// $(".pj-lunbo2").Carousel({
	//					'play':'true', //是否循环播放
	//					'prevButton':'#prev', //左按钮
	//					'nextButton':'#next',  //右按钮
	//					'auto':'true',   //是否自动播放
	//					'play':'true' ,   //循环播放
	//					'WidthMax':'true' //全屏 
	//	});
	//弹窗 专家团
	$(".pub-div-boxs").Carousel({
		'play': 'true', //是否循环播放
		'prevButton': '.page-left', //左按钮
		'nextButton': '.page-right', //右按钮
		//					'auto':'true',   //是否自动播放
		'play': 'true' //循环播放
	});
	// 弹窗合作案例 工作机会
	$(".pub-div-Friend").Carousel({
		'play': 'true', //是否循环播放
		'prevButton': '.page-prev', //左按钮
		'nextButton': '.page-next', //右按钮
		'play': 'true' //循环播放
	});

	//关于什马 什马荣誉轮播
	$(".jtry_bj .jtry .tfry-Friend-box").Carousel({
		'play': 'true', //是否循环播放
		'prevButton': '.about-page-prev', //左按钮
		'nextButton': '.about-page-next', //右按钮
		'play': 'true' //循环播放
	});

	//让轮播图上下居中 
	$(".pj-Carousel-bu").css("margin-top", ((oH - oHanderH) - $(".pj-Carousel").height()) / 2 + 'px')

	// 核心业务 移动鼠标替换图片
	$(".yewu-box >ul >li div").mouseover(function() {
		var $img = $(this).find("img");
		$img.attr("thisSrc", $img.attr("src"));
		var ThisSrc = $img.attr("src");
		var ost = ThisSrc.substr(0, ThisSrc.indexOf(".")) + '_hover.png';
		$img.attr("src", ost);
	});

	$(".yewu-box >ul >li div").mouseout(function() {
		var $img = $(this).find("img");
		$img.attr("src", $img.attr("thisSrc"));
	});
	//求出.pj-lunbo2 的相对比例高度
	var oW = $(window).width();
	$(".pj-lunbo2 ").css("height", (oH - oHanderH + 10) + 'px');
	$(".pj-lunbo2 .pj-Carousel-item").css("width", oW + 'px');

	// 核心业务高度计算
	$(".hxyw2 .swiper-container").css("height", (oH - oHanderH + 10) + 'px');

	//更多
	$("#More").click(function() {
		$(".alert_box").fadeIn(400);
		$(".alert_box2").hide();
	});
	//关闭按钮
	$(".dl-box .close").click(function() {
		$(".alert_box").fadeOut(400);
		$(".alert_box2").hide();
	});
	//弹窗滑动显示自己对应的
	$(".dl-box >dl >dt").click(function() {
		$(".dl-box >dl >dt").removeClass("font-actve");
		$(this).addClass("font-actve");
		$(".dl-box >dl >dd").slideUp(400);
		$(this).next("dd").slideDown(400);
	});

	// 此方法自能执行一次
	//var isFirst = true;
	// 首屏显示
	// function lastShow(isFirst) {
		// if(isFirst) {
			// var leftSwiper = new Swiper('.hxyw2 .swiper-container.bg_div-left', {
				// direction: 'vertical',
				// loop: true,
				// //simulateTouch: true, // 鼠标无效
				// autoplay: 5000,
				// speed: 2500,
				// autoplayDisableOnInteraction : false
			// });
			// // 统计个数
			// var slideCount = $(".hxyw2 > .bg_div-left > .swiper-wrapper > .swiper-slide").length;
			// var rightSwiper = new Swiper('.hxyw2 .swiper-container.R_bg', {
				// direction: 'vertical',
				// loop: true,
				// simulateTouch: false, // 鼠标无效
				// initialSlide: slideCount
				// // ,
				// // onSlideChangeEnd: function(swiper) {
					// // //$(".hxyw2 > .bg_div-left > .swiper-wrapper > .swiper-slide .timer-svg circle").attr('class', '').attr("stroke", "");
					// // if($(".hxyw2 > .bg_div-left > .swiper-wrapper > .swiper-slide.swiper-slide-duplicate.swiper-slide-active").length != 0) {
						// // $(".hxyw2 > .bg_div-left > .swiper-wrapper > .swiper-slide .timer-svg circle").eq(1).attr('class', 'circles').attr("stroke", "#fff");

					// // }
					// // $(".hxyw2 > .bg_div-left > .swiper-wrapper > .swiper-slide-active .timer-svg circle").attr('class', 'circles').attr("stroke", "#fff");

				// // }
			// });

			// leftSwiper.params.control = rightSwiper;
			// leftSwiper.params.controlInverse = true;
			
			
			// $('#bg_4imgl').click(function(){
				// //alert("aa");
				// leftSwiper.stopAutoplay();
				// rightSwiper.stopAutoplay();
				// $("#bg_4img").hide();
			// })
			
			// $('#bg_3imgl').click(function(){
				// //alert("aa");
				// leftSwiper.stopAutoplay();
				// rightSwiper.stopAutoplay();
				// $("#bg_3img").hide();
			// })
			
			// $('#bg_2imgl').click(function(){
				// //alert("aa");
				// leftSwiper.stopAutoplay();
				// rightSwiper.stopAutoplay();
				// $("#bg_2img").hide();
			// })
			
			// $('#bg_1imgl').click(function(){
				// //alert("aa");
				// leftSwiper.startAutoplay();
				// rightSwiper.startAutoplay();
				// $("#bg_1img").hide();
			// })



		// }
		
		
		// isFirst = true;
	// }
	
	// function bg_3img(){
		// isFirst = false;
		// $("#bg_3img").hide();
		// lastShow(false);
	// }

				
				
				
				
				
	//滚动条滚动的函数
	function scrollTop_Top(DOM) {
		$(".handers").addClass("fixed");
		var oT = DOM.position().top - oHanderH
			//		 $('body,html').scrollTop(oT);
		$('body,html').animate({
			scrollTop: oT
		}, 5500);
		return false;
	}
	$(window).scroll(function() {
		if($(window).scrollTop() == 0) {
			$("#Max-conatiner .handers >.nav >ul >li >a >i").removeClass("showActive");
			$(".handers").removeClass("fixed");
			$("#Max-conatiner").nextAll().hide();
			$("#carousel-qr").addClass("carousel-qr-fixed");
			$("#carousel-qr").removeClass("carousel-qr");
		} else {
			$(".handers").addClass("fixed");
			$("#carousel-qr").removeClass("carousel-qr-fixed");
			$("#carousel-qr").addClass("carousel-qr");
		}
	});
	//兼容ie 废弃placeholder属性
	$(".form_left >input,.form_left >textarea").focus(function() { //得到焦点
		var oVal = $(this).val();
		$(this).attr("oVal", oVal);
		$(this).val("");
	});
	//失去焦点
	$(".form_left >input,.form_left >textarea").blur(function() { //得到焦点
		var ov = $(this).attr("oVal");
		if($(this).val() == ov || $(this).val() == "") {
			$(this).val(ov)
		}
	});
	//移入按钮显示
	$(".dl-box >dl  .pub-div-boxs").mouseover(function() {
		$(".page-left").addClass("fadeLeft");
		$(".page-right").addClass("fadeRight");
	});
	$(".dl-box >dl  .pub-div-boxs").mouseout(function() {
		$(".page-left").removeClass("fadeLeft");
		$(".page-right").removeClass("fadeRight");
	});

	$(".pub-div-Friend").hover(function() {
		$(".pub-div-Friend .page-prev").toggleClass("page-prevAct");
		$(".pub-div-Friend .page-next").toggleClass("page-nextAct");
	});

	//input得到焦点
	$(".serch_li").click(function() {
		$(".alert_box").hide();
		$("html,body").css({
			overflow: "hidden"
		});
		$(".alert_box2").fadeIn(400);
		document.getElementById("search-box").focus();
	});

	$(".dl-box2 .close").click(function() {
		$("html,body").css({
			overflow: "visible"
		});
		$(".alert_box").hide();
		$(".alert_box2").fadeOut(400);
	});

	/*站内搜索*/
	// $("#search-box").keyup(function() {
		// $.post("/include/GlobalSearch.asp", {
			// searchTxt: $(this).val()
		// }, function(data) {
			// $(".search_results ul").empty();
			// $(".search_results ul").append(data);
			// //alert("123"+data);
		// })
	// });

	/*首页灰色区域点击跳转页面*/
	// $("#tf-bg").click(function() {
		// window.location = "/about/?t=2-2.html";
	// });
	// $("#mian-new").click(function() {
		// window.location = "/news/?t=3-3.html";
	// });

	// layer.config({
		// path: '/js/layer/' //layer.js所在的目录，可以是绝对目录，也可以是相对目录
	// });

	/*首次进入首页弹窗*/
	// if($("#alert_fc").length != 0) {
		// var layIndex = layer.open({
			// type: 1,
			// skin: 'layui-layer-demo', //样式类名
			// area: ['50%', '52%'],
			// title: false,
			// resize: false,
			// scrollbar: false,
			// closeBtn: 0, //不显示关闭按钮
			// anim: 2,
			// content: $("#alert_fc_box")
		// });

		// $("#layer_alert_close").click(function() {
			// layer.close(layIndex);
		// });
	// }
});