$(function () {
	"use strict";


	$(".mobile-search-icon").on("click", function () {
		$(".search-bar").addClass("full-search-bar")
	}),

		$(".search-close").on("click", function () {
			$(".search-bar").removeClass("full-search-bar")
		}),

		$(".mobile-toggle-menu").on("click", function () {
			$(".wrapper").addClass("toggled")
		}),


		$(".toggle-icon").click(function () {
			$(".wrapper").hasClass("toggled") ? ($(".wrapper").removeClass("toggled"), $(".sidebar-wrapper").unbind("hover")) : ($(".wrapper").addClass("toggled"), $(".sidebar-wrapper").hover(function () {
				$(".wrapper").addClass("sidebar-hovered")
			}, function () {
				$(".wrapper").removeClass("sidebar-hovered")
			}))
		}),

		$(document).ready(function () {
			$(window).on("scroll", function () {
				$(this).scrollTop() > 300 ? $(".back-to-top").fadeIn() : $(".back-to-top").fadeOut()
			}), $(".back-to-top").on("click", function () {
				return $("html, body").animate({
					scrollTop: 0
				}, 600), !1
			})
		}),

		$(function () {
			for (var e = window.location, o = $(".metismenu li a").filter(function () {
				return this.href == e
			}).addClass("").parent().addClass("mm-active"); o.is("li");) o = o.parent("").addClass("mm-show").parent("").addClass("mm-active")
		}),
		$(function () {
			$("#menu").metisMenu()
		});

});







var buttons = document.getElementsByClassName('delete-button');

for (var i = 0; i < buttons.length; i++) {
	buttons[i].onclick = function () {
		swal({
			title: "Are you sure?",
			text: "You will not be able to recover this imaginary file!",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: '#DD6B55',
			confirmButtonText: 'Yes, delete it!',
			cancelButtonText: "No, cancel!",
			closeOnConfirm: false,
			closeOnCancel: false
		},
			function (isConfirm) {
				if (isConfirm) {
					swal("Deleted!", "Your imaginary file has been deleted!", "success");
				} else {
					swal("Cancelled", "Your imaginary file is safe :)", "error");
				}
			});
	};
}