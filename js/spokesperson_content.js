// JavaScript Document
$(document).ready(function () {
	"use strict";
	$.ajax({
		url: "http://www.talkingheadswebsite.com/js/spokesperson-content.xml",
		dataType: "xml",
		success: parse,
		error: function () {
			console.log("Error: Something went wrong");
		}
	});

	function parse(document) {
		console.log('hit');
		var x = 0;
		var paragraph = Array();
		var title = Array();
		var icon = Array();
		var random2 = null;
		var random3 = null;
		$(document).find('content').each(function () {
			title[x] = $(this).find('title').text();
			paragraph[x] = $(this).find('paragraph').text();
			icon[x] = $(this).find('icon').text();
			x++;
		});
		var dataLength = title.length - 1;
		var random = Math.floor(Math.random() * dataLength);
		random2 = random + 1;
		if (random2 > dataLength) {
			random2 = 0;
		}
		random3 = random2 + 1;
		if (random3 > dataLength) {
			random3 = 0;
		}
		$("#title").text(title[random]);
		$("#title").addClass('text-center');
		$("#content").append('<p>' + paragraph[random] + '</p>');
		$("#icon").addClass(icon[random]);
		$("#title2").text(title[random2]);
		$("#title2").addClass('text-center');
		$("#content2").append('<p>' + paragraph[random2] + '</p>');
		$("#icon2").addClass(icon[random2]);
		$("#title3").text(title[random3]);
		$("#title3").addClass('text-center');
		$("#content3").append('<p>' + paragraph[random3] + '</p>');
		$("#icon3").addClass(icon[random3]);
	}
});
