// Gloabal Variable
var screenType, pageData;


var mobileMediaQuery = '(max-width : 767px)',
    tabletMediaQuery = '(min-width : 768px) and (max-width : 1023px)';

function navBar(){

    var allWidth = 0,
        padding;
    var link = $('.navbar-nav li a');
    var navBar = $('.navbar-nav').width();
    link.each(function(){
        allWidth += $(this).width();
    });
    var remaining = navBar - allWidth,
        oneLink = (remaining / link.length);

    if (navigator.userAgent.match(/msie/i) || navigator.userAgent.match(/trident/i) ){
        padding = (oneLink / 2) - 0.1;
    }else{
        padding = (oneLink / 2) - 0.01;    
    }
        
    link.css({
        'padding-left': padding,
        'padding-right': padding
    });
}


function detectViewport() {
    if (Modernizr.mq(mobileMediaQuery) && screenType != 'mobile') {
        screenType = 'mobile';
   
    } else if (Modernizr.mq(tabletMediaQuery) && screenType != 'tablet') {
        screenType = 'tablet';
        //navBar();//Nav bar

    } else if (!Modernizr.mq(mobileMediaQuery) && !Modernizr.mq(tabletMediaQuery) && screenType != 'desktop') {
        screenType = 'desktop';
        //navBar();//Nav bar
    }
}

$(document).on('ready',function(){

	detectViewport();// Detect on what media query we are

    navColor();//Change active page link nav color
    
    //ie9 placeholder fix
    if (!Modernizr.input.placeholder) {
        $("input").each(function () {
            if ($(this).val() == "" && $(this).attr("placeholder") != "") {
                $(this).val($(this).attr("placeholder"));
                $(this).focus(function () {
                    if ($(this).val() == $(this).attr("placeholder")) {
                        $(this).val("");
                    }
                });
                $(this).blur(function () {
                    if ($(this).val() == "") {
                        $(this).val($(this).attr("placeholder"));
                    }
                });
            }
        });
    }

    $(document).resize(function () {
        detectViewport();// detect if we are on a new media query
    });
	

	//Change i's icon on click
	$('.second-nav li a').on('click',function(){
		var _this = $(this).find('i');
		(_this.hasClass('fa-caret-down')) ? _this.removeClass('fa-caret-down').addClass('fa-caret-up') : _this.removeClass('fa-caret-up').addClass('fa-caret-down')
	});


    //Change main-content title style
    var title1 = $('.main-content .pageInfo h1').text(),
        title1 = title1.split('-').join(' ');
    $('.main-content .pageInfo h1').text(title1);


    
    //Limit paragraphs length
    $('.post-list li .content-blk').each(function(){
        var _this = $(this).text();
        var limit = _this.slice(0,230);
        if(_this.length > 230) limit += " ...";
         $(this).text(limit);
    });
     
    //Seach Form 
    searchForm(); 
    
    
    $('.main-content').find('img').each(function(){
    	if($('#OctoDevelOctoSliderSimple').length == 0){
    		$(this).wrap('<div class="image-wrapper"></div>');	
    	}
    }) 
    $('.main-content').find('iframe').each(function(){
        $(this).wrap('<div class="video-wrapper ratio-16-9"></div>');
    }) 
     
});// -- end Document Ready


function searchForm(){
    $('.search-form').on('submit',function(e){
       e.preventDefault();
       var search = $('#search-value').val();
       var url = $(this).attr('action');
       //alert('search='+search+ ' url='+url);
       window.location.href = url+search;
    });
}



function navColor(){
    
    var newURL = window.location.protocol + "//" + window.location.host  + window.location.pathname;
    if(newURL.slice(-1) == '/'){
        newURL = newURL.substr(0, newURL.length-1);
    }
    var split = newURL.split('/');
    if($('body').attr('data-page')){
        var body = $('body').data('page');
        var body_token = body.split('/');

        if(split.length == 6 && (body_token[0] != 'iafes-association' && body_token[0] != 'home' && body_token[0] != 'projects' && body_token[0] != 'training' )){
            var token = split[split.length - 1];
            newURL = newURL.replace('/' + token,'');
            if(body_token.length[0] != 'home'){
                newURL = newURL.replace('/home','');
            }
        }else if(split.length == 7){
            var token1 = split[split.length - 2];
            var token2 = split[split.length - 1];
                token = token1 + '/' + token2;
            newURL2 = newURL.replace('/' + token,'');
            var Nav2 = $('.nav a[href="'+ newURL2 + '"]');
            Nav2.addClass('active');
        }     
        
        var Nav = $('.nav a[href="'+ newURL + '"]');
        Nav.addClass('active');    
    }  
}

