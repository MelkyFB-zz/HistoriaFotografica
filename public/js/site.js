$(function(){
    twemoji.size = '36x36';
    twemoji.parse(document.body);
	window.emojiPicker = new EmojiPicker({
		emojiable_selector: '[data-emojiable=true]',
		assetsPath: '../lib/img/',
		popupButtonClasses: 'fa fa-smile-o'
	});
	window.emojiPicker.discover();
	$.get("/cidades/typeahead", function(data){
		$("#cidade").typeahead({ source:data });
	},'json');
	$cidade = $("#cidade");
	$cidade.change(function(){
		var current = $cidade.typeahead("getActive");
		if(current)
			if(current.name == $cidade.val())
				window.location.replace('/?cidade='+current.id);
	});
});