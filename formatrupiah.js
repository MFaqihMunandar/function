//a is any string or number with maximum 2 decimal
function rupiah(a){
	//convert to string
	a = a.toString();
	
	//regex for only number, dot, and comma
	let regx = /([^\d|^\,|^\.|^\-])/g;
	a = a.replaceAll(regx,'');
	a = a.replaceAll('.','');
	var jmlp = a.toString();
	splitp	= jmlp.split(','),
	sisap 	= splitp[0].length % 3,
	rupiahp = splitp[0].substr(0, sisap),
	ribuanp = splitp[0].substr(sisap).match(/\d{1,3}/gi);
	if (ribuanp) {
		separatorp = sisap ? '.' : '';
		rupiahp += separatorp + ribuanp.join('.');
	}
	rupiahp = splitp[1] != undefined ? rupiahp + ',' + splitp[1] : rupiahp;
	return rupiahp;
}
