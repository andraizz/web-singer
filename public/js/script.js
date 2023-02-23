function changeImage(element) {
    var main_prodcut_image = document.getElementById('main_product_image');
    main_prodcut_image.src = element.src;
}

$(document).ready(function(){
	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});
});

