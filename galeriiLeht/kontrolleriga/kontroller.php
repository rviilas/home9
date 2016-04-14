<?php 

$pic = array(
1=>array('src'=>'pildid/nameless1.jpg', 'alt'=>'nimetu 1'),
2=>array('src'=>'pildid/nameless2.jpg', 'alt'=>'nimetu 2'),
3=>array('src'=>'pildid/nameless3.jpg', 'alt'=>'nimetu 3'),
4=>array('src'=>'pildid/nameless4.jpg', 'alt'=>'nimetu 4'),
5=>array('src'=>'pildid/nameless5.jpg', 'alt'=>'nimetu 5'),
6=>array('src'=>'pildid/nameless6.jpg', 'alt'=>'nimetu 6'),
);
 
 $mode='pealeht';				
		
if (isset($_GET['mode']) && $_GET['mode']!=''){
	$mode=$_GET['mode'];
	}				

	
	require_once('header.html');
	
	switch($mode){
	case 'pealeht':
		include_once('pealeht.php');
	break;
	case 'galerii':
		include('galerii.php');
	break;
	case 'vote':
		include('vote.php');
	break;
	case 'tulemus':
		include('tulemus.php');
	break;
	
	default:
	include('pealeht.php');
	break;
	}
	
	require_once('footer.html');
?>

