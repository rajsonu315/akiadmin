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


////////////////////////

const url = 'http://3.29.220.19:4100/v1/customer/category/listing';
const postData = {
	"login_id": "2721",
	"customer_id": "1",
	"channel_id": "1",
	"skip": "1",
	"limit": 10
};

const bearerToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIyNzIxIiwiaWF0IjoxNzAzMzMyNTM5LCJleHAiOjE3MDU5MjQ1MzksInR5cGUiOiJhY2Nlc3MiLCJpZCI6MSwiYWtpX2N1c3RvbWVyX2lkIjoiMjcyMSIsImFraV9jdXN0b21lcl9ubyI6IjI4NTMiLCJsb2dpbl9pZCI6IjI3MjEiLCJwYXJlbnRfaWQiOjAsIm5hbWUiOiJVbml2ZXJzaXR5IFN1cGVybWFya2V0IiwibW9iaWxlX25vIjpudWxsLCJlbWFpbCI6bnVsbCwiZGVwYXJ0bWVudCI6bnVsbCwicGFzc3dvcmQiOiI4MjdjY2IwZWVhOGE3MDZjNGMzNGExNjg5MWY4NGU3YiIsInZpZXdfcGFzc3dvcmQiOiIxMjM0NSIsImltYWdlIjpudWxsLCJ1c2VyX3R5cGUiOm51bGwsImZsYWciOnsidHlwZSI6IkJ1ZmZlciIsImRhdGEiOlsxXX0sImNyZWF0ZWRfZGF0ZSI6IjIwMjMtMTItMDVUMTk6NTY6MDAuMDAwWiIsInVwZGF0ZWRfZGF0ZSI6IjIwMjMtMTItMDlUMDM6NDE6NTEuMDAwWiJ9.XBxyXvAEQSBG8pBFa71P9Jyw-jLXjInvDUVurVTGlz8'; // Replace with your actual bearer token

const fetchOptions = {
	method: 'POST',
	headers: {
		'Content-Type': 'application/json',
		'Authorization': `Bearer ${bearerToken}`,
	},
	body: JSON.stringify(postData),
};


document.addEventListener("DOMContentLoaded", function() {
	fetch(url, fetchOptions)
		.then(response => {
			if (!response.ok) {
				throw new Error(`HTTP error! Status: ${response.status}`);
			}
			return response.json();
		})
		.then(responseData => {
			const data = responseData.result;
			console.log('Response:', data);

			var html = ''; // Initialize the html variable


			// Assuming you want to add the generated HTML to an element with the class 'list-group'


			data.forEach(function(item) {
				html += `
			<li class="list-group-item" data-item-id="${item.id}">
				${item.name}
				<span class="badge btn-warning  rounded-pill bx-pull-right">${item.id}</span>
			</li>
		`;
			});

			// Assuming you want to add the generated HTML to an element with the class 'list-group'
			document.querySelector('.list-group').innerHTML = html;
			
		})
		.catch(error => console.error('Error:', error));
});



$(function() {
	$(function() {
		$("body").on("click", ".list-group .list-group-item", function() {
			$(this).toggleClass("active");
		});

		$(".list-arrows button").click(function() {
			var $button = $(this);

			if ($button.hasClass("move-left")) {
				moveItems(".list-right ul li.active", ".list-left ul");

			} else if ($button.hasClass("move-right")) {
				moveItems(".list-left ul li.active", ".list-right ul");

			}

			// Get values from left and right lists
			// Example usage
			var leftDataItemIds = getListValues(".list-left ul li", 'item-id');
			var rightDataItemIds = getListValues(".list-right ul li", 'item-id');

			//  console.log('Allocate Item Data Item IDs:', leftDataItemIds);
			// console.log('Allocate Item Data Item IDs:', rightDataItemIds);


		});

		$(".dual-list .selector").click(function() {
			var $checkBox = $(this);

			if (!$checkBox.hasClass("selected")) {
				$checkBox
					.addClass("selected")
					.closest(".well")
					.find("ul li:not(.active)")
					.addClass("active");
			} else {
				$checkBox
					.removeClass("selected")
					.closest(".well")
					.find("ul li.active")
					.removeClass("active");
			}

			// Get values from left and right lists
			var leftListValues = getListValues(".list-left ul li");
			var rightListValues = getListValues(".list-right ul li");


		});



		function moveItems(sourceSelector, targetSelector) {
			var actives = $(sourceSelector);
			var clonedElements = actives.clone().appendTo(targetSelector);
			actives.remove();

			// Get values of data-item-id attribute from the cloned elements
			var dataItemIds = clonedElements.map(function() {
				return $(this).data('item-id');
			}).get();

			// console.log('Data Item IDs:', dataItemIds);

			// You can use dataItemIds array as needed.
		}

		// Define the getListValues function
		function getListValues(itemSelector) {
			return $(itemSelector).map(function() {
				return $(this).data('item-id');
			}).get();
		}



		// Get values from left and right lists
		var leftListValues = getListValues(".list-left ul li");
		var rightListValues = getListValues(".list-right ul li");


	});


});




$(function() {
	$(function() {
		$("body").on("click", ".Customer_Code .Customer_Code-item", function() {
			$(this).toggleClass("active");
		});

		$(".list-arrowsone button").click(function() {
			var $button = $(this);

			if ($button.hasClass("move-left_click")) {
				moveItems(".Customerlist-right ul li.active", ".Customerlist-left ul");

			} else if ($button.hasClass("move-right_click")) {
				moveItems(".Customerlist-left ul li.active", ".Customerlist-right ul");

			}

			// Get values from left and right lists
			// Example usage
			var leftDataItemIdsCustomer = getListValues(".Customerlist-left ul li", 'item-id');
			var rightDataItemIdsCustomer = getListValues(".Customerlist-right ul li", 'item-id');

			//  console.log('*****Allocate Customer Data Item IDs:', leftDataItemIdsCustomer);
			// console.log('******Allocate Customer Data Item IDs:', rightDataItemIdsCustomer);


		});

		$(".dual-list .selectorCustomer").click(function() {
			var $checkBox = $(this);

			if (!$checkBox.hasClass("selected")) {
				$checkBox
					.addClass("selected")
					.closest(".well")
					.find("ul li:not(.active)")
					.addClass("active");
			} else {
				$checkBox
					.removeClass("selected")
					.closest(".well")
					.find("ul li.active")
					.removeClass("active");
			}

			// Get values from left and right lists
			var leftListValues = getListValues(".Customerlist-left ul li");
			var rightListValues = getListValues(".Customerlist-right ul li");


		});



		function moveItems(sourceSelector, targetSelector) {
			var actives = $(sourceSelector);
			var clonedElements = actives.clone().appendTo(targetSelector);
			actives.remove();

			// Get values of data-item-id attribute from the cloned elements
			var dataItemIds = clonedElements.map(function() {
				return $(this).data('item-id');
			}).get();

			// console.log('Data Item IDs:', dataItemIds);

			// You can use dataItemIds array as needed.
		}

		// Define the getListValues function
		function getListValues(itemSelector) {
			return $(itemSelector).map(function() {
				return $(this).data('item-id');
			}).get();
		}





		$('[name="SearchDualList"]').keyup(function(e) {
			var code = e.keyCode || e.which;
			if (code == "9") return;
			if (code == "27") $(this).val(null);
			var $rows = $(this).closest(".dual-list").find("ul li");
			var val = $.trim($(this).val()).replace(/ +/g, " ").toLowerCase();
			$rows
				.show()
				.filter(function() {
					var text = $(this).text().replace(/\s+/g, " ").toLowerCase();
					return !~text.indexOf(val);
				})
				.hide();
		});

		// Get values from left and right lists
		var leftListValues = getListValues(".Customerlist-left ul li");
		var rightListValues = getListValues(".Customerlist-right ul li");


	});


});
