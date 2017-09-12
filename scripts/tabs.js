$(document).ready(function() {

	if($(document.body).is("#homePage")) {
		$("#home").attr("class", "current");
		$("#1, #2, #3").click(function(e) { 
			e.preventDefault();
	        var target = $(this).attr("id");
			window.location = 'content.php?target=' + target;
    	});
	}
	else if ($(document.body).is("#contentPage")) {

		contentInit();

	    $("#1, #2, #3").click(function(e) { 
	        e.preventDefault();
	        $(".current").attr("class", "");
	        window.history.pushState("", "", "content.php?target=" + $(this).attr("id"));
	        contentInit();
    	});

	}

	function contentInit() {
		var target = getQueryVariable("target");
		var contentId = "#content" + target;
	    $("#" + target).attr("class", "current");
	    $(contentId).show().siblings().hide();
	    $(contentId + " .contentWrap").eq($(contentId + " .contentWrap").length - 1).show().siblings(".contentWrap").hide();
	    constructList(contentId);

		$(".jumpItem").click(function(e) {
			e.preventDefault();
			var contentId = "#content" + getQueryVariable("target");
			findArticle($(contentId), $(this));
		});
	}

	function getQueryVariable(variable) {
	       var query = window.location.search.substring(1);
	       var vars = query.split("&");
	       for (var i=0;i<vars.length;i++) {
	               	var pair = vars[i].split("=");
	               	if(pair[0] == variable) {
	            		return pair[1];
	               	}
	               	else {
	               		return 0;
	               	}
	       }
	       return(false);
	}

	function constructList(contentId) {
		$(contentId + " .jumpList ul").html("");
		var articleArray = $(contentId + " .contentWrap");
		//alert(articleArray.length);
		for (var i = 0; i < articleArray.length; i++) {
			var newListItem = $("<li></li>");
			var newTitle = articleArray.eq(i).children(".articleTitle").text();
			var newSubtitle = articleArray.eq(i).children(".articleSub").text();
			newListItem.html(	"<a href='#' class='jumpItem'>" + 
									"<p>" + newTitle + "</p>" +
									"<br/>" +
									"<p>" + newSubtitle + "</p>" +
								"</a>");
			$(contentId + " .jumpList ul").prepend(newListItem);
		}
	}

	function findArticle(content, clickedItem) {
		var itemText = content.attr("id") + clickedItem.children("p").text();
		var articleArray = content.children(".contentWrap");
		//alert(itemText);
		for (var i = 0; i < articleArray.length; i++) {
			var matcher = content.attr("id") + articleArray.eq(i).children(".articleTitle").text() + articleArray.eq(i).children(".articleSub").text();
			if(matcher == itemText) {
				articleArray.eq(i).show().siblings(".contentWrap").hide();
			}
		}
	}

})();


