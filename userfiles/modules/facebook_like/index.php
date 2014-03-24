<?php 


  $layout=get_option('layout', $params['id']);  
  $url_to_like=get_option('url', $params['id']);  
  $color=get_option('color', $params['id']);
  $show_faces=get_option('show_faces', $params['id']); 

  
  if($layout == false or trim($layout) == ''){
	$layout = "standard"  ;
  } else {
	$layout = trim($layout);  
  }
   if($url_to_like == false or trim($url_to_like) == ''){
	 $cur_url = url_current(true); 
	 $cur_url = urlencode($cur_url);
	 $url_to_like = $cur_url;
  } else {
	  $url_to_like = mw('format')->prep_url(trim($url_to_like));
  }
  
  if($color == false or trim($color) == ''){
	$color = "light"  ;
  }
  $show_faces_str = '';
  if($show_faces == false or trim($show_faces) != 'n'){
	$show_faces_str = '&amp;show_faces=true';
  }
  
?>

<div style="padding:12px 0;">
  <iframe src="//www.facebook.com/plugins/like.php?href=<?php print $url_to_like; ?>&amp;send=false&amp;layout=<?php print $layout; ?>&amp;width=450<?php print $show_faces_str; ?>&amp;font&amp;colorscheme=<?php print $color; ?>&amp;action=like&amp;height=80&amp;appId=<?php print get_option('fb_app_id', 'users');?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" width="" allowTransparency="true"></iframe>
</div>
