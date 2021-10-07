var scrollTimer = null;

$(window).scroll(function() {
    var top = $(window).scrollTop();
    clearTimeout(scrollTimer);
    scrollTimer = setTimeout(
        function() 
        {
            console.log(top);
            if(top === 0)
            {
                $(".header").animate({height:'60px'});
                $("#link").animate({marginTop:'10px'});
                $("#link1").animate({marginTop:'10px'});
                $("#link2").animate({marginTop:'10px'});
                $("#link3").animate({marginTop:'10px'});
                $("#link4").animate({marginTop:'10px'});
                $("#log").animate({marginTop:'10px'});
                $("#sign").animate({marginTop:'10px'});
                $("#logout").animate({marginTop:'10px'});

            }
            else
            {
                $(".header").animate({height:'40px'});
                $("#link").animate({marginTop:'-.5px'});
                $("#link1").animate({marginTop:'-.5px'});
                $("#link2").animate({marginTop:'-.5px'});
                $("#link3").animate({marginTop:'-.5px'});
                $("#link4").animate({marginTop:'-.5px'});
                $("#log").animate({marginTop:'-.5px'});
                $("#sign").animate({marginTop:'-.5px'});
                $("#logout").animate({marginTop:'-.5px'});

            }
        }, 50);
});

