$(function(){
	var aboutWidth = $(".about").width();
	$(".process-timeline").width(aboutWidth);
	var lastRightSpeed = 40;
	var processtimelineW = $(".process-timeline").width();
	var processrowLength = $(".process-body").find('.process-row').length;
	var processbodyNumber = processrowLength*200;
	$(".process-body").css({"width":processbodyNumber});

	if(processrowLength < 5) 
	{
		$("#draggable").draggable('disable');
		return;
	}
	$("#processLeft").click(function(){
		var processContentW = $(".process-content").width();
		var processBodyW = $(".process-body").width();
		var processBodyML = parseInt($(".ui-draggable").css("left"));
		if ( (Math.abs(processBodyML)+processtimelineW) >= processBodyW ) {
			return;
		}
		$(".ui-draggable").css({"left":processBodyML-50});
	});
	$("#processRight").click(function(){
		var processBodyML = parseInt($(".ui-draggable").css("left"));
		if (processBodyML == 0) {
			return;
		}
		$(".ui-draggable").css({"left":processBodyML+50});
	});

	$("#draggable").draggable({
		cursor: "move",
		axis: 'x',
		grid: [50, 20],
		stop: function(event, ui){
			var FleftNumber = parseInt($("#draggable").css("left"));
			if (FleftNumber > 0) {
				$("#draggable").animate({"left": 0}, 500);
				return;
			};
			var leftNumber = Math.abs(FleftNumber);
			leftNumber = leftNumber + processtimelineW;
			if (leftNumber > processbodyNumber) 
			{
				leftNumber = processbodyNumber;
				$("#draggable").animate({"left": -(leftNumber-processtimelineW + lastRightSpeed)}, 500);
			}
		}
	});
})
