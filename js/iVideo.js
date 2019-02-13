// JavaScript Document
$(document).ready(function () {
	var video = $("#talking-heads-video_html5_api")[0];
	var name, alt, srcVideo, srcPoster,srcBase;
	$(".poster").click(function () {
		name = $(this).attr("data-video");
		alt = " - " + $(this).attr("alt");
		srcBase = "https://www.websitetalkingheads.com/ivideo/videos/";
		srcVideo = srcBase + name + ".mp4";
		srcPoster = srcBase + name + ".jpg";
		clicked()
	});
	$(".actor").click(function () {
		name = $(this).attr("data-video");
		alt = " - " + $(this).attr("alt");
		srcPoster = "https://www.websitetalkingheads.com/carimages/" + name + ".jpg";
		srcVideo = "https://www.websitetalkingheads.com/videos/" + name + ".mp4";
		clicked()
	});

	function clicked() {
		$('#videoModalLabel').text(name + alt);
		video.pause();
		video.src = srcVideo;
		video.poster = srcPoster;
		video.play();
	}
	$('#contact').click(function () {
		video[video.paused ? 'play' : 'pause']();
		var outside;
		console.log($(".modal-lg").length);
		if ($(".modal-lg").length > 0) {
			outside = 800;
		} else {
			outside = 542;
		}
		console.log(outside);
		$('#form').toggleClass('d-block');
		var left = (outside - 320) / 2;
		$('#form').css('left', left);
	});
	$('#contactClose').click(function () {
		$('#form').toggleClass('d-block');
	})
	$('#mainModal').on('hidden.bs.modal', function (e) {
		video.pause();
	});
	$('#mainModal').on('shown.bs.modal', function (e) {
		$('#form').removeClass('d-block');
		video.play();
	});
});
