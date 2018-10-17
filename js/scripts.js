jQuery(document).ready(function($){
	
	//alert("ok");
	console.log('ok');
	
	
	
	$(".carousel-item").first().addClass("active");
	
	$('.article').hide();
	$('.ct-news .article:lt(4), .ct-events .article:lt(4), .ct-galerie .article:lt(4)').show();
	

	$(".button").click(function(){
		var value = $(this).attr("data-filter");
		
		console.log(value);
		/*$(".article").hide();
		$(".technique").show();*/
		
		
		if (value == "article")
		{
			$(".ct-news .article:lt(4), .ct-events .article:lt(4), .ct-galerie .article:lt(4)").fadeIn("5000");
			//$(this).filter("."+value).removeClass("active");
		}
		else{
			$(".article").not("."+value).fadeOut("5000");
			//$(".article").fadeOut("5000");
			$(".ct-news .article:lt(4), .ct-events .article:lt(4), .ct-galerie .article:lt(4)").filter("."+value).fadeIn("5000");
			
			//$(this).filter("."+value).addClass("active");
			
			
		}
		
		
		});
	
});