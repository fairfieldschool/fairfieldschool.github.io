var countdown2 = function(end, elements, callback){

	var _second = 1000,
	   _minute = _second * 60,
	   _hour = _minute * 60,
	   _day = _hour * 24,


	   end = new Date(end),
	   timer2,
 
	   calculate = function() {

	   		var now = new Date(),
	   			remaining = end.getTime() - now.getTime(),
	   			data;


			if(isNaN(end)){
				console.log('Invalid date/time');
					return;
			}

				if(remaining <= 0){
					clearInterval(timer2);

					if(typeof callback === 'function'){
						callback();
					}
					}else{

						if(!timer2){
							timer2 = setInterval(calculate, _second);
						}

						data = {
						'day': Math.floor(remaining / _day),
						'hour': Math.floor((remaining % _day) / _hour),
						'minute': Math.floor((remaining % _hour) / _minute),
						'second': Math.floor((remaining % _minute) / _second)
					}
	   					
	   					if(elements.length){
	   						for(x in elements){
	   							var x = elements[x];
	   							data[x] =('00' + data[x]).slice (-2);
	   								document.getElementById(x).innerHTML = data[x];
	   						}
	   					}


					}

					

	   };					


calculate(); 

}