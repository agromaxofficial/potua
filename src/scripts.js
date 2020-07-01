$(document).ready(function () {



	$('.scrollTo').click(function () {
		var scroll_el = $(this).attr('href');
		if ($(scroll_el).length != 0) {
			$('html, body').animate({scrollTop: $(scroll_el).offset().top}, 500);
		}
		return false;
	});

	/* timer */

	function update() {
		var Now = new Date(), Finish = new Date();
		Finish.setHours(23);
		Finish.setMinutes(59);
		Finish.setSeconds(59);
		if (Now.getHours() === 23 && Now.getMinutes() === 59 && Now.getSeconds === 59) {
			Finish.setDate(Finish.getDate() + 1);
		}
		var sec = Math.floor((Finish.getTime() - Now.getTime()) / 1000);
		var hrs = Math.floor(sec / 3600);
		sec -= hrs * 3600;
		var min = Math.floor(sec / 60);
		sec -= min * 60;
		$(".timer .hours").text(pad(hrs));
		$(".timer .minutes").text(pad(min));
		$(".timer .seconds").text(pad(sec));
		setTimeout(update, 200);
	}
	function pad(s) {
		return ('00' + s).substr(-2)
	}
	update();

	/* slider */

	$(".reviews_list").owlCarousel({
		items: 1,
		loop: true,
		smartSpeed: 300,
		mouseDrag: false,
		pullDrag: false,
		nav: true,
		navText: ""
	});

});