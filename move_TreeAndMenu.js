
// move_TreeAndMenu.js
$(document).ready( function() {
	let menu = $('#wikitext-sidebar');
	menu.remove();
	$('#p-navigation').after(menu);
});

