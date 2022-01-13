
function wyznacz()
{
	var wynik=document.getElementById('wynik');
	var polak=document.getElementById('polak').value;
	var nowak=document.getElementById('nowak').value;
	var rysik=document.getElementById('rysik').value;
    var najnizsza=0;
if(isNaN(polak)||polak==""||isNaN(nowak)||nowak==""||isNaN(rysik)||rysik==""||)
{
	alert('wpisz poprawne dane');
}
else
{
	polak*=1;
	nowak*=1;
	rysik*=1;
	
	najnizsza=polak;
	if(najnizsza>nowak) najnizsza=nowak;
	if(najnizsza>rysik) najnizsza=rysik;
	wynik.innerHTML=najnizsza;
}
}