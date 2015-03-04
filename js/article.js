$(function(){
	var index = 0;
	
	$(".week").on("click",function(){
		var index = $("li.week").index(this);
		location.href = "article.php?num=" + index;
	});
	
	$(".todayBox").css("background-color","gold");
});