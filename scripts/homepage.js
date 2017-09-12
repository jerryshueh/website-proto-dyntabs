$(document).ready(function() {
    $("#1").attr("class", "current");

    $("home, #1, #2, #3").click(function(e) { 
        e.preventDefault();
        $(".current").attr("class", "");
        $(this).attr("class", "current");
    });
})();