//this is how you called it

//<input type='text' id='day' 	style='width:6%'	onblur='tgl(this.id,this.value,"d","")'/><b>/</b>
//<input type='text' id='month' style='width:6%'	onblur='tgl(this.id,this.value,"m","day")'/><b>/</b>
//<input type='text' id='year' 	style='width:10%'	onblur='tgl(this.id,this.value,"y","")'/>

function tgl(item,hari,part,day){
	if (part === "d"){
		if (hari > 31){
			//just because the higher value in date is 31 no more
			document.getElementById(item).value='31';
		}
	} else if (part === "m"){
		const d = new Date();
		let year = d.getFullYear();
		let m = new Date(year, hari, 0).getDate();
		let dayy= document.getElementById(day).value;
			if (hari > 12){
				//just because the higher value in month is 12 no more
				document.getElementById(item).value='12';
			} else if (m < dayy ){
				// check the value of month and date match because date can someday make difference like fabruari there is a chance it become 29 days in every 4 years
				document.getElementById(day).value=m;
			}
	}
}