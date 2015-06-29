jQuery.fn.centrar = function(padre,eje){
    this.css("position","absolute");
    if (eje){
    	eje==='x'?this.css("left", Math.max(0, ((padre?$(this).parent().width():$(window).width() - $(this).outerWidth()) / 2) + $(window).scrollLeft()) + "px"):this.css("top", Math.max(0, ((padre?$(this).parent().height():$(window).height() - $(this).outerHeight()) / 2) + $(window).scrollTop()) + "px");
    }else{
    	this.css("left", Math.max(0, ((padre?$(this).parent().width():$(window).width() - $(this).outerWidth()) / 2) + $(window).scrollLeft()) + "px")
    	this.css("top", Math.max(0, ((padre?$(this).parent().height():$(window).height() - $(this).outerHeight()) / 2) + $(window).scrollTop()) + "px");
    }
    return this;
}


$(document).ready(function(){

	var div1 = $('.contenedor_login');
	div1.centrar(false);

});

$(window).resize(function(){

	var div1 = $('.contenedor_login');
	div1.centrar(false);

});

