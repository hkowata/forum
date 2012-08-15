// If JS is disabled, CSS menu will still work
$(function() {
	$("li").removeClass("cssOnly");
});


//From the top
$(function() {
	$(".fromTop a").hover(
		function(){
			$(this).find("span").stop(true, true).animate({ height: 'show' }, 300);
		},
		function(){
			$(this).find("span").fadeOut(500);
	});
})

//Sliding topics
 
 $(document).ready(function()
{
	slide("ul.topiclist.topics", 15, 0, 600, 0.8);
});

 $(document).ready(function()
{
	slide("ul.topiclist.forums", 15, 0, 600, 0.8);
});

function slide(navigation_id, pad_out, pad_in, time, multiplier)
{
	// creates the target paths
	var list_elements = navigation_id + " dt.sliding";
	var link_elements = list_elements + " a";
	
	// initiates the timer used for the sliding animation
	var timer = 0;
	
	// creates the slide animation for all list elements 
	$(list_elements).each(function(i)
	{
		// margin left = - ([width of element] + [total vertical padding of element])
		$(this).hide();
		// updates timer
		timer = (timer*multiplier + time);
		$(this).fadeIn(timer);
	});

	// creates the hover-slide effect for all link elements 		
	$(link_elements).each(function(i)
	{
		$(this).hover(
		function()
		{
			$(this).animate({ paddingLeft: pad_out }, 350);
		},		
		function()
		{
			$(this).animate({ paddingLeft: pad_in }, 350);
		});
	});
}


//searchbox
$(document).ready(function()
{
	$("a.search_head").click(function()
    {
		$(this).next("div.search_body").slideToggle(200).siblings("div.search_body").slideUp("slow");
       	$(this).siblings();
	});
});