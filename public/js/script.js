
var min=document.getElementById('min').innerHTML;
min=parseInt(min);
var conv=document.getElementById('conv').innerHTML;
conv=parseInt(conv);
var sup=document.getElementById('sup').innerHTML;
sup=parseInt(sup);

var partidos=conv+sup;
document.getElementById('min_par').innerHTML=min/partidos;
var gol=document.getElementById('gol').innerHTML;
gol=parseInt(gol);
var gol_par=gol/partidos;
document.getElementById('goles_partido').innerHTML=gol_par;



document.getElementById('partidos').innerHTML=100;
document.getElementById('partidos').innerHTML=partidos;
document.getElementById('goles_partido').innerHTML=gol/partidos;


document.getElementById('porconv').innerHTML=(conv/partidos)*100 + "%";
document.getElementById('porsup').innerHTML=(sup/partidos)*100 + "%";

