/*
Author       : Melon /Karnoder
Template Name: Bootstrap Admin Template
Version      : 1.0
*/

(function ($) {
	"use strict";

	// Variables declarations

	var $wrapper = $('.main-wrapper');
	var $pageWrapper = $('.page-wrapper');
	var $slimScrolls = $('.slimscroll');

	// Sidebar

	var Sidemenu = function () {
		this.$menuItem = $('#sidebar-menu a');
	};

	function init() {
		var $this = Sidemenu;
		$('#sidebar-menu a').on('click', function (e) {
			if ($(this).parent().hasClass('submenu')) {
				e.preventDefault();
			}
			if (!$(this).hasClass('subdrop')) {
				$('ul', $(this).parents('ul:first')).slideUp(350);
				$('a', $(this).parents('ul:first')).removeClass('subdrop');
				$(this).next('ul').slideDown(350);
				$(this).addClass('subdrop');
			} else if ($(this).hasClass('subdrop')) {
				$(this).removeClass('subdrop');
				$(this).next('ul').slideUp(350);
			}
		});
		$('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');
	}

	// Sidebar Initiate
	init();

	// Mobile menu sidebar overlay

	$('body').append('<div class="sidebar-overlay"></div>');
	$(document).on('click', '#mobile_btn', function () {
		$wrapper.toggleClass('slide-nav');
		$('.sidebar-overlay').toggleClass('opened');
		$('html').addClass('menu-opened');
		return false;
	});

	// Sidebar overlay

	$(".sidebar-overlay").on("click", function () {
		$wrapper.removeClass('slide-nav');
		$(".sidebar-overlay").removeClass("opened");
		$('html').removeClass('menu-opened');
	});

	// Page Content Height

	if ($('.page-wrapper').length > 0) {
		var height = $(window).height();
		$(".page-wrapper").css("min-height", height);
	}

	// Page Content Height Resize

	$(window).resize(function () {
		if ($('.page-wrapper').length > 0) {
			var height = $(window).height();
			$(".page-wrapper").css("min-height", height);
		}
	});

	// Select 2

	if ($('.select').length > 0) {
		$('.select').select2({
			minimumResultsForSearch: -1,
			width: '100%'
		});
	}

	// Datetimepicker

	if ($('.datetimepicker').length > 0) {
		$('.datetimepicker').datetimepicker({
			format: 'DD/MM/YYYY',
			icons: {
				up: "fa fa-angle-up",
				down: "fa fa-angle-down",
				next: 'fa fa-angle-right',
				previous: 'fa fa-angle-left'
			}
		});
		$('.datetimepicker').on('dp.show', function () {
			$(this).closest('.table-responsive').removeClass('table-responsive').addClass('temp');
		}).on('dp.hide', function () {
			$(this).closest('.temp').addClass('table-responsive').removeClass('temp')
		});
	}

	// Tooltip

	if ($('[data-toggle="tooltip"]').length > 0) {
		$('[data-toggle="tooltip"]').tooltip();
	}

	// Datatable

	if ($('.datatable').length > 0) {
		$('.datatable').DataTable({
			"bFilter": false,
		});
	}

	// Sidebar Slimscroll

	if ($slimScrolls.length > 0) {
		$slimScrolls.slimScroll({
			height: 'auto',
			width: '100%',
			position: 'right',
			size: '7px',
			color: '#ccc',
			allowPageScroll: false,
			wheelStep: 10,
			touchScrollStep: 100
		});
		var wHeight = $(window).height() - 60;
		$slimScrolls.height(wHeight);
		$('.sidebar .slimScrollDiv').height(wHeight);
		$(window).resize(function () {
			var rHeight = $(window).height() - 60;
			$slimScrolls.height(rHeight);
			$('.sidebar .slimScrollDiv').height(rHeight);
		});
	}

	// Small Sidebar

	$(document).on('click', '#toggle_btn', function () {
		if ($('body').hasClass('mini-sidebar')) {
			$('body').removeClass('mini-sidebar');
			$('.subdrop + ul').slideDown();
		} else {
			$('body').addClass('mini-sidebar');
			$('.subdrop + ul').slideUp();
		}
		setTimeout(function () {
			mA.redraw();
			mL.redraw();
		}, 300);
		return false;
	});
	$(document).on('mouseover', function (e) {
		e.stopPropagation();
		if ($('body').hasClass('mini-sidebar') && $('#toggle_btn').is(':visible')) {
			var targ = $(e.target).closest('.sidebar').length;
			if (targ) {
				$('body').addClass('expand-menu');
				$('.subdrop + ul').slideDown();
			} else {
				$('body').removeClass('expand-menu');
				$('.subdrop + ul').slideUp();
			}
			return false;
		}
	});

	//Full Screen
	function toggleFullscreen(elem) {
		elem = elem || document.documentElement;
		if (!document.fullscreenElement && !document.mozFullScreenElement &&
			!document.webkitFullscreenElement && !document.msFullscreenElement) {
			if (elem.requestFullscreen) {
				elem.requestFullscreen();
			} else if (elem.msRequestFullscreen) {
				elem.msRequestFullscreen();
			} else if (elem.mozRequestFullScreen) {
				elem.mozRequestFullScreen();
			} else if (elem.webkitRequestFullscreen) {
				elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
			}
		} else {
			if (document.exitFullscreen) {
				document.exitFullscreen();
			} else if (document.msExitFullscreen) {
				document.msExitFullscreen();
			} else if (document.mozCancelFullScreen) {
				document.mozCancelFullScreen();
			} else if (document.webkitExitFullscreen) {
				document.webkitExitFullscreen();
			}
		}
	}

	document.getElementById('btnFullscreen').addEventListener('click', function () {
		toggleFullscreen();
	});




	var options = {
		chart: {
			type: "area",
			foreColor: "#999",
			stacked: true,
			dropShadow: {
				enabled: true,
				enabledSeries: [0],
				top: -2,
				left: 2,
				blur: 5,
				opacity: 0.06
			}
		},
		title: {
			text: "Customer Satisfaction"
		},
		colors: ['#00E396', '#0090FF'],
		stroke: {
			curve: "smooth",
			width: 3
		},
		dataLabels: {
			enabled: false
		},
		series: [{
			name: 'Total Views',
			data: generateDayWiseTimeSeries(0, 18)
		}, {
			name: 'Unique Views',
			data: generateDayWiseTimeSeries(1, 18)
		}],
		markers: {
			size: 0,
			strokeColor: "#fff",
			strokeWidth: 3,
			strokeOpacity: 1,
			fillOpacity: 1,
			hover: {
				size: 6
			}
		},
		xaxis: {
			type: "datetime",
			axisBorder: {
				show: false
			},
			axisTicks: {
				show: false
			}
		},
		// yaxis: {
		// 	labels: {
		// 		offsetX: 14,
		// 		offsetY: -5
		// 	},
		// 	tooltip: {
		// 		enabled: true
		// 	}
		// },
		grid: {
			padding: {
				left: -5,
				right: 5
			}
		},
		tooltip: {
			x: {
				format: "dd MMM yyyy"
			},
		},
		legend: {
			position: 'top',
			horizontalAlign: 'left'
		},
		fill: {
			type: "solid",
			fillOpacity: 0.7
		}
	};

	var chart = new ApexCharts(document.querySelector("#revenue"), options);

	chart.render();

	function generateDayWiseTimeSeries(s, count) {
		var values = [
			[
				4, 3, 10, 9, 29, 19, 25, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5
			],
			[
				2, 3, 8, 7, 22, 16, 23, 7, 11, 5, 12, 5, 10, 4, 15, 2, 6, 2
			]
		];
		var i = 0;
		var series = [];
		var x = new Date("11 Nov 2012").getTime();
		while (i < count) {
			series.push([x, values[s][i]]);
			x += 86400000;
			i++;
		}
		return series;
	}




	var options = {
		series: [{
			name: 'Inflation',
			data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3]
		}],
		chart: {
			height: 350,
			type: 'bar',
		},
		plotOptions: {
			bar: {
				borderRadius: 10,
				dataLabels: {
					position: 'top', // top, center, bottom
				},
			}
		},
		dataLabels: {
			enabled: true,
			formatter: function (val) {
				return val + "%";
			},
			offsetY: -20,
			style: {
				fontSize: '12px',
				colors: ["#304758"]
			}
		},

		xaxis: {
			categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			position: 'top',
			axisBorder: {
				show: false
			},
			axisTicks: {
				show: false
			},
			crosshairs: {
				fill: {
					type: 'gradient',
					gradient: {
						colorFrom: '#D8E3F0',
						colorTo: '#BED1E6',
						stops: [0, 100],
						opacityFrom: 0.4,
						opacityTo: 0.5,
					}
				}
			},
			tooltip: {
				enabled: true,
			}
		},
		yaxis: {
			axisBorder: {
				show: false
			},
			axisTicks: {
				show: false,
			},
			labels: {
				show: false,
				formatter: function (val) {
					return val + "%";
				}
			}

		},
		title: {
			text: 'Monthly Inflation in Argentina, 2002',
			floating: true,
			offsetY: 330,
			align: 'center',
			style: {
				color: '#444'
			}
		}
	};

	var chart = new ApexCharts(document.querySelector("#chart_right"), options);
	chart.render();




})(jQuery);