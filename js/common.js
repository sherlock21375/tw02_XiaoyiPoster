/*鍏抽棴寮规*/
function hideModal(id,type){
	if(type == 1){
		$(id).remove();
		return;
	}
	$(id).removeClass('curr');
}

/*鎵撳紑寮规*/
function showModal(id){
	$(id).addClass('curr');
}


/*select閫夋嫨*/
;(function($){
    $.fn.selectHtml=function(options){
       var defaults = {			
			id1:'',
			id2:'',
			callback : null
		}; 
		var options = $.extend(defaults,options);
		if(options.callback != null){
			$(options.id1).on('change',function(){
				var val = $(this).find('option:selected').text();
				$(options.id2).text(val);
			});
			$(options.id1).change(options.callback);
		}
	} 
})(jQuery);


$(function(){
	$("#audio-btn1").click(function () {
		if ($(this).attr("class") == 'on') {
			$(this).attr("class", "off");
			$("#music").removeClass("active");
			document.getElementById("media").pause();
			return;
		} else {
			$(this).attr("class", "on");
			$("#music").addClass("active")
			document.getElementById("media").play();
			return;
		}
	});
})

function audioAutoPlay(id){
	var audio = document.getElementById(id);
	audio.playbackRate=1;
	audio.play();
	document.addEventListener("WeixinJSBridgeReady", function () {
		audio.play();
	}, false);
}