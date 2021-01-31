
var mathematics = {
	"arithmetic": {
		"nth-term": function(){
			var firstTerm = parseFloat(document.getElementById("first-term").value);
			var n = parseInt(document.getElementById("value-of-n").value);
			var commonDifference = parseFloat(document.getElementById("common-difference").value);
			
			if(Number.isNaN(firstTerm) || Number.isNaN(n) || Number.isNaN(commonDifference)){
				displayAnswer("Please fill in the empty fields");
				return;
			}			
			
			if(n < 1){
				displayAnswer("The value of n cannot be lower than 1");
			} else {
				var answer = firstTerm + (n - 1) * commonDifference;
				displayAnswer(answer);
			}
		},
		"series": function(){
			var firstTerm = parseFloat(document.getElementById("first-term").value);
			var lastTerm = document.getElementById("last-term").value;
			var n = parseInt(document.getElementById("value-of-n").value);
			var commonDifference = parseFloat(document.getElementById("common-difference").value);
			
			if(Number.isNaN(firstTerm) || Number.isNaN(n) || Number.isNaN(commonDifference)){
				displayAnswer("Please fill in the empty fields");
				return;
			}	
			
			if(n < 1){
				displayAnswer("The value of n cannot be lower than 1");
			} else if(lastTerm == ""){
				lastTerm = parseInt(lastTerm);
				var answer = (n / 2) * (2 * firstTerm + (n - 1) * commonDifference);
				displayAnswer(answer);
			} else {
				lastTerm = parseInt(lastTerm);
				var answer = (n / 2) * (firstTerm + lastTerm);
				displayAnswer(answer);
			}
		},
		"common-difference": function(){
			var sequence = document.getElementById("sequence").value;
			
			if(typeof sequence == 'undefined'){
				displayAnswer("Please fill in the empty fields");
				return;
			}	
			
			var pattern = /[.0-9]+/g;
			var sequenceArray = sequence.match(pattern);
			
			if(sequenceArray.length <= 1){
				displayAnswer("Please enter more than one number into your sequence");
			} else {
				var benchmark = sequenceArray[1] - sequenceArray[0];
				var commonDifferenceExists = true;
				
				for(var i = 0; i < sequenceArray.length - 1; i++){
					difference = sequenceArray[i + 1] - sequenceArray[i];
					if(difference != benchmark){
						commonDifferenceExists = false;
					} 
				}
				
				if(commonDifferenceExists){
					answer = benchmark;
					displayAnswer(answer);
				} else {
					answer = "There is no common difference";
					displayAnswer(answer);
				}
			}
			displayAnswer(answer);
		}
	}, 
	"geometric": {
		"nth-term": function(){
			var firstTerm = parseFloat(document.getElementById("first-term").value);
			var n = parseInt(document.getElementById("value-of-n").value);
			var commonRatio = parseFloat(document.getElementById("common-ratio").value);
			
			if(Number.isNaN(firstTerm) || Number.isNaN(n) || Number.isNaN(commonRatio)){
				displayAnswer("Please fill in the empty fields");
				return;
			}			
			
			if(n < 1){
				displayAnswer("The value of n cannot be lower than 1");
			} else {
				if(Math.abs(commonRatio) < 1 && Math.abs(commonRatio) > 0){
					var answer = firstTerm * (1 + commonRatio)**(n-1);
					displayAnswer(answer);
				} else {
					var answer = firstTerm * commonRatio**(n - 1);
					displayAnswer(answer);
				}
			}
		},
		"series": function(){
			var firstTerm = parseFloat(document.getElementById("first-term").value);
			var n = parseInt(document.getElementById("value-of-n").value);
			var commonRatio = parseFloat(document.getElementById("common-ratio").value);
			
			if(Number.isNaN(firstTerm) || Number.isNaN(n) || Number.isNaN(commonRatio)){
				displayAnswer("Please fill in the empty fields");
				return;
			}	
			
			if(n < 1){
				displayAnswer("The value of n cannot be lower than 1");
			} else {
				var answer = firstTerm * (commonRatio**n - 1) / (commonRatio - 1);
				displayAnswer(answer);
			}
		},
		"common-ratio": function(){
			var sequence = document.getElementById("sequence").value;
			
			if(typeof sequence == 'undefined'){
				displayAnswer("Please fill in the empty fields");
				return;
			}	
			
			var pattern = /[.0-9]+/g;
			var sequenceArray = sequence.match(pattern);
			
			if(sequenceArray.length <= 1){
				displayAnswer("Please enter more than one number into your sequence");
			} else {
				var benchmark = sequenceArray[1] / sequenceArray[0];
				var commonDifferenceExists = true;
				
				for(var i = 0; i < sequenceArray.length - 1; i++){
					difference = sequenceArray[i + 1] / sequenceArray[i];
					if(difference != benchmark){
						commonDifferenceExists = false;
					} 
				}
				
				if(commonDifferenceExists){
					answer = benchmark;
					displayAnswer(answer);
				} else {
					answer = "There is no common difference";
					displayAnswer(answer);
				}
			}
			
			displayAnswer(answer);
		}, 
		"infinite-sequence": function(){
			var commonRatio = parseFloat(document.getElementById("common-ratio").value);
			var firstTerm = parseFloat(document.getElementById("first-term").value);
			
			if(Number.isNaN(firstTerm) || Number.isNaN(commonRatio)){
				displayAnswer("Please fill in the empty fields");
				return;
			} 
			
			if(Math.abs(commonRatio) < 1){
				answer = firstTerm / (1 - commonRatio);
				displayAnswer(answer);
			} else {
				displayAnswer("The absolute value of the common ratio must be less than 1");
			}
		}
	}
}

var science = {
	"waves": {
		"wave-speed": function(){
			var wavelength = parseFloat(document.getElementById("wavelength").value);
			var frequency = parseFloat(document.getElementById("wave-frequency").value);
			
			if(Number.isNaN(wavelength)|| Number.isNaN(frequency)){
				displayAnswer("Please fill in empty fields");
				return;
			}
			
			var answer = wavelength * frequency;
			
			displayAnswer(answer + " m/s");
		},
		"wavelength": function(){
			var velocity = parseFloat(document.getElementById("wave-speed").value);
			var frequency = parseFloat(document.getElementById("wave-frequency").value);
			
			if(Number.isNaN(velocity)|| Number.isNaN(frequency)){
				displayAnswer("Please fill in empty fields");
				return;
			}
			
			var answer = velocity * frequency;
			
			displayAnswer(answer + " meters");
		},
		"wave-frequency": function(){
			var velocity = parseFloat(document.getElementById("wave-speed").value);
			var wavelength = parseFloat(document.getElementById("wavelength").value);
			
			if(Number.isNaN(wavelength)|| Number.isNaN(velocity)){
				displayAnswer("Please fill in empty fields");
				return;
			}
			
			var answer = velocity / wavelength;
			
			displayAnswer(answer + " hz");
		},
	},
	"magnets-electricity": {
		"magnetic-force": function(){
			var particleMagnitude = parseFloat(document.getElementById("particle-magnitude").value);
			var magneticField = parseFloat(document.getElementById("magnetic-field").value);
			var particleVelocity = parseFloat(document.getElementById("particle-velocity").value);
			var angle = parseFloat(document.getElementById("angle").value);
			
			if(Number.isNaN(particleMagnitude) || Number.isNaN(magneticField) || Number.isNaN(particleVelocity)){
				displayAnswer("Please fill in empty fields");
				return;
			}
			
			if(!Number.isNaN(angle)){
				var answer = particleMagnitude * magneticField * particleVelocity * Math.sin(angle);
			} else {
				var answer = particleMagnitude * magneticField * particleVelocity;
			}
			
			displayAnswer(answer + " Newtons");
		},
		"conductors-currents": function(){
			var magneticField = parseFloat(document.getElementById("magnetic-field").value);
			var wireCurrent = parseFloat(document.getElementById("wire-current").value);
			var wireLength = parseFloat(document.getElementById("wire-length").value);
			
			if(Number.isNaN(magneticField) || Number.isNaN(wireCurrent) || Number.isNaN(wireLength)){
				displayAnswer("Please fill in empty fields");
				return;
			}
			
			var answer = magneticField * wireCurrent * wireLength;
			
			displayAnswer(answer + " Newtons");
		},
		"particle-magnitude": function(){
			var magneticForce = parseFloat(document.getElementById("magnetic-force").value);
			var magneticField = parseFloat(document.getElementById("magnetic-field").value);
			var particleVelocity = parseFloat(document.getElementById("particle-velocity").value);
			var angle = parseFloat(document.getElementById("angle").value);
			
			if(Number.isNaN(magneticForce) || Number.isNaN(magneticField) || Number.isNaN(particleVelocity)){
				displayAnswer("Please fill in empty fields");
				return;
			}
			
			if(!Number.isNaN(angle)){
				var answer = magneticForce / (magneticField * particleVelocity * Math.sin(angle));
			} else {
				var answer = magneticForce / (magneticField * particleVelocity);
			}
			
			displayAnswer(answer + " Coulombs");
		},
		"magnetic-field": function(){
			var magneticForce = parseFloat(document.getElementById("magnetic-force").value);
			var particleMagnitude = parseFloat(document.getElementById("particle-magnitude").value);
			var particleVelocity = parseFloat(document.getElementById("particle-velocity").value);
			var angle = parseFloat(document.getElementById("angle").value);
			
			if(Number.isNaN(magneticForce) || Number.isNaN(particleMagnitude) || Number.isNaN(particleVelocity)){
				displayAnswer("Please fill in empty fields");
				return;
			}
			
			if(!Number.isNaN(angle)){
				var answer = magneticForce / (particleMagnitude * particleVelocity * Math.sin(angle));
			} else {
				var answer = magneticForce / (particleVelocity * particleVelocity);
			}
			
			displayAnswer(answer + " Tesla");
		},
		"electromotive-force": function(){
			var magneticField = parseFloat(document.getElementById("magnetic-field").value);
			var wireCurrent = parseFloat(document.getElementById("wire-current").value);
			var wireLength = parseFloat(document.getElementById("wire-length").value);
			var angle = parseFloat(document.getElementById("angle").value);
			
			if(Number.isNaN(magneticField) || Number.isNaN(wireCurrent) || Number.isNaN(wireLength)){
				displayAnswer("Please fill in empty fields");
				return;
			}
			
			if(angle == NaN){
				var answer = magneticField * wireCurrent * wireLength * Math.sin(angle);
			} else {
				var answer = magneticField * wireCurrent * wireLength;
			}
			
			displayAnswer(answer + " Newtons");
		},
		"tesla": function(){
			var force = parseInt(document.getElementById("force-newtons").value);
			var current = parseInt(document.getElementById("ampere-meters").value);
			
			if(Number.isNaN(force) || Number.isNaN(current)){
				displayAnswer("Please fill in empty fields");
				return;
			}
			
			var answer = force / current;
			
			displayAnswer(answer + " Tesla");
		},
	},
	"light": {
		"refraction-index": function(){
			var mediumSpeed = parseFloat(document.getElementById("light-medium").value);
			var lightSpeed = 300000;
			
			if(Number.isNaN(mediumSpeed)){
				displayAnswer("Please fill in empty fields");
				return;
			}
			
			var answer = lightSpeed / mediumSpeed;
			
			displayAnswer(answer);
		},
		"refraction-angle": function(){
			incidenceAngle = parseFloat(document.getElementById("angle-incidence").value);
			refractiveIndex1 = parseFloat(document.getElementById("refractive-index-1").value);
			refractiveIndex2 = parseFloat(document.getElementById("refractive-index-2").value);
			
			if(Number.isNaN(incidenceAngle) || Number.isNaN(refractiveIndex1) || Number.isNaN(refractiveIndex2)){
				displayAnswer("Please fill in empty fields");
				return;
			}
			
			var answer = Math.asin((refractiveIndex1 * Math.sin(incidenceAngle)) / refractiveIndex2);
			
			answer = answer * (180 / Math.PI);
			
			displayAnswer(answer + " degrees");
		},
	}
}

function displayAnswer(answer){
	document.getElementById("answer").readOnly = false;
	document.getElementById("answer").innerHTML = answer;
	document.getElementById("answer").readOnly = true;
}

function throwError(subject, lesson, problem, error){
	var header = "index.php?"
	
	if(subject != "") header += "subject=" + subject; 
	if(lesson != "") header += "&lesson=" + lesson; 
	if(problem != "") header += "&problem=" + problem; 
	
	
	window.location.href = header + "&error=" + error;
}

function solve(){
		var subject = document.getElementById("subject").value;
		var lesson = document.getElementById("lesson").value;
		var problem = document.getElementById("problem").value;
		
		if(subject == "" || lesson == "" || problem == ""){
			throwError(subject, lesson, problem, "noneselected");
		}
		
		
		if(subject == "mathematics"){
			if(!mathematics[lesson].hasOwnProperty(problem)){
				throwError(subject, lesson, problem, "noneselected");
			} 
			
			mathematics[lesson][problem]();
		} else if(subject == "science"){
			if(!science[lesson].hasOwnProperty(problem)){
				throwError(subject, lesson, problem, "noneselected");
			} 
			science[lesson][problem]();
		} else {
			throwError(subject, lesson, problem, "noneselected");
		}
		
		
}