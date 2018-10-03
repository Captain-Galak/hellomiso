

//HIDE AND SEEK HEADER SCRIPT

$(document).ready(function(){ //Quand la page est chargée, le script peut être lancé
	$("#mainPage").hide(); // On demande par défaut que le subMenu soit caché
});
$("#button").hover(function(){ //On dit que si on passe sur le menu avec la souris, alors
	$("#mainPage").slideDown('slow'); //en fonction de si il est ouvert ou caché, il apparraitra ou disparaitra (on peut régler la vitesse)
});
 //! Revoir le script pour que le hover fonctionne aussi avec le subMenu











//PORTFOLIO SCRIPT

$(document).ready(function(){
	$('#thumbs1, #thumbs2, #thumbs3').hide();
});
$('#web1').hover(function(){
	$('#thumbs1').toggle(500)
}),
$('#web2').hover(function(){
	$('#thumbs2').toggle(500)
}),
$('#web3').hover(function(){
	$('#thumbs3').toggle(500)
});












//PROGRESS BAR SCRIPT

$(document).ready(function(){
	$('.progress_bar1').hover(function(){ //On click
			$('.load_bar_html').animate({width:'70%'});
	});
	$('.progress_bar2').hover(function(){ //On click
			$('.load_bar_css').animate({width:'80%'});
	});
	$('.progress_bar3').hover(function(){ //On click
			$('.load_bar_strap').animate({width:'90%'});
	});
	$('.progress_bar4').hover(function(){
		$('.load_bar_sass').animate({width:'80%'});
	});
	$('.progress_bar5').hover(function(){
		$('.load_bar_php').animate({width:'50%'});
	});
	$('.progress_bar6').hover(function(){
		$('.load_bar_sql').animate({width:'70%'});
	});
	$('.progress_bar7').hover(function(){
		$('.load_bar_jq').animate({width:'85%'});
	});
	$('.progress_bar8').hover(function(){
		$('.load_bar_sk').animate({width:'90%'});
	});
	$('.progress_bar9').hover(function(){
		$('.load_bar_toshop').animate({width:'70%'});
	});
});



//parallax


$(document).ready(function(){
		$('#part1').parallax("center", 0, 0.1, true);
		$('#part2').parallax("center", 900, 0.1, true);
		$('#slide3').parallax("center", 2900, 0.1, true);
});
