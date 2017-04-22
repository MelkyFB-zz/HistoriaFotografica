$hashtagsipt = $("#hashtagsipt");
$alertdiv = $("#alertdiv");
$hashtagsipt.on('change',()=>{
	$alertdiv.html('');
	var tags = $hashtagsipt.val();
	tags = tags.split(',');
	tags.forEach((it,ix)=>{
		$alertdiv.html($alertdiv.html()+'&nbsp;<span class="badge badge-primary">'+it+'</span>')
	});
});
$nome = $("#nome");
$descricao = $("#descricao");
$arquivo_foto = $("#arquivo_foto");
$nome.on('change',()=>{
	$('#nomeh3').html($nome.val())
});
$descricao.on('change',()=>{
    twemoji.size = '36x36';
	$('#descricaop').html(twemoji.parse($descricao.val()));
});
$arquivo_foto.on('change',(e)=>{
	console.dir(URL.createObjectURL(e.target.files[0]));
    $('#arquivo_fotoimg').attr('src',URL.createObjectURL(e.target.files[0]));
});