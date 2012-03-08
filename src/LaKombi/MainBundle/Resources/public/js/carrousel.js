function carrousel(id, width,nbParPage, vitesse, pause, sens,imgOn,imgOff)
{
	var current;
	var total;
	var left;
	
	total=$('#'+id+' .item').length;
	
	if($('#span'+id).attr('id')==undefined)
	{
		$('#'+id).append('<span id="span'+id+'" style="display:none;">0</span>');
		for(i=nbParPage;i<=total;i=i+nbParPage)
		{
			if(i==nbParPage)
			{
				$('.temoins').html('<img src="'+imgOn+'" alt="" id="temoin'+i+'" />');
			}
			else
			{
				$('.temoins').append('<img src="'+imgOff+'" alt="" id="temoin'+i+'" />');
			}
		}
		if(total%nbParPage!=0)
		{
			$('.temoins').append('<img src="'+imgOff+'" alt="" id="temoin'+(parseInt(total)+parseInt(nbParPage)-(total%nbParPage))+'" />');
		}
	}
	
	current=$('#span'+id).html();
		
	if(sens=='left')
	{
		current=parseInt(current)+parseInt(nbParPage);
	}
	
	if(sens=='right')
	{
		current-=nbParPage;
	}

	if((sens=='left') && (current>=total))
	{
		sens='right';
	}
	
	if((sens=='right') && (current==nbParPage))
	{
		sens='left';
	}
	
	left=parseInt($('#'+id+' .items').css('left'));
	if((left==undefined) || (left=='NaN'))
	{
		left=0;
	}

	if(sens=='left')
	{
		$('#temoin'+(parseInt(current)+parseInt(nbParPage))).attr('src',imgOn);
		$('#temoin'+current).attr('src',imgOff);
		$('#'+id+' .items').animate({left:'-='+(width*nbParPage)},vitesse);
	}
	else
	{
		$('#temoin'+current).attr('src',imgOff);
		$('#temoin'+(parseInt(current)-parseInt(nbParPage))).attr('src',imgOn);
		$('#'+id+' .items').animate({left:'+='+(width*nbParPage)},vitesse);
	}
	
	$('#span'+id).html(current);
	
	id_inst=setTimeout(function() {carrousel(id, width,nbParPage, vitesse, pause,sens,imgOn,imgOff)},vitesse+pause);
	
	return false;
}