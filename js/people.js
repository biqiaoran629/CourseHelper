// var instructors = [
// {
// 	name: 'Donald Acton',
// 	img: 'img/acton.jpg',
// 	position: 'Senior Instructor',
// 	email: 'acton@cs.ubc.ca',
// 	office: 'ICCS 231',
// 	phone: 'N/A',
// 	pastCourses: ['CPSC 317  –  Internet Computing',
// 	'CPSC 415  –  Advanced Operating Systems',
// 	'CPSC 313  –  Computer Hardware and Operating Systems',
// 	'CPSC 317  –  Internet Computing']
// },

// {
// 	name:'Meghan Allen',
// 	img: 'img/allen.jpg',
// 	position: 'Instructor I',
// 	email: 'meghana@cs.ubc.ca',
// 	office: 'ICCS 244',
// 	phone: '604-822-4912',
// 	pastCourses: ['CPSC 101  –  Connecting with Computer Science']
// },
// {
// 	name: 'Uri Ascher',
// 	img: 'img/ascher.jpg',
// 	position: 'Professor',
// 	email: 'ascher@cs.ubc.ca',
// 	office: 'ICCS 223',
// 	phone: '604-822-4907',
// 	pastCourses: ['CPSC 302  –  Numerical Computation for Algebraic Problems']
// },
// {
// 	name: 'Patrice Belleville',
// 	img: 'img/patrice.jpg',
// 	position: 'Senior Instructor',
// 	email: 'patrice@cs.ubc.ca',
// 	office: 'ICCS 343',
// 	phone: '604-822-9870',
// 	pastCourses: ['CPSC 313  –  Computer Hardware and Operating Systems',
// 	'CPSC 121  –  Models of Computation',
// 	'CPSC 261  –  Basics of Computer Systems']
// },
// {
// 	name:'Paul Carter',
// 	img: 'img/carter.jpg',
// 	position: 'Professor of Teaching',
// 	email:'pcarter@cs.ubc.ca',
// 	office: 'ICCS 393',
// 	phone: '604-822-4034',
// 	pastCourses:['CPSC 210  –  Software Construction']
// },
// {
// 	name: 'Kurt Eiselt',
// 	img: 'img/eiselt.jpg',
// 	position: 'Senior Instructor',
// 	email: 'eiselt@cs.ubc.ca',
// 	office: 'ICCS 233',
// 	phone: '604-822-9880',
// 	pastCourses:['CPSC 221  –  Basic Algorithms and Data Structures']

// },
// {
// 	name: 'Joel Friedman',
// 	img: 'img/friedman.jpg',
// 	position: 'Professor / Professor, Mathematics',
// 	email: 'jf@cs.ubc.ca',
// 	office: 'ICCS X561',
// 	phone: '604-822-0674',
// 	pastCourses:['CPSC 421  –  Introduction to Theory of Computing',
// 	'CPSC 501  –  Theory of Automata, Formal Languages pasand Computability']

// },
// {
// 	name: 'Nick Harvey',
// 	img: 'img/harvey.jpg',
// 	position: 'Associate Professor',
// 	email: 'nickhar@cs.ubc.ca',
// 	office: 'ICCS X851',
// 	phone: '604-827-5941',
// 	pastCourses:['CPSC 320  –  Intermediate Algorithm Design and Analysis']
// },
// {
// 	name: 'Gregor Kiczales',
// 	img: 'img/kiczales.jpg',
// 	position: 'Professor',
// 	email: 'gregor@cs.ubc.ca',
// 	office: 'ICCS 311',
// 	phone: '604-822-4806',
// 	pastCourses:['CPSC 110  –  Computation, Programs, and Programming']
// },
// {
// 	name:'Ed Knorr',
// 	img: 'img/knorr.jpg',
// 	position: 'Senior Instructor',
// 	email: 'knorr@cs.ubc.ca',
// 	office: 'ICCS 229',
// 	phone: '604-822-4336',
// 	pastCourses:['CPSC 404  –  Advanced Relational Databases']
// },
// {
// 	name:'Jim Little',
// 	img: 'img/little.jpg',
// 	position: 'Professor',
// 	email: 'little@cs.ubc.ca',
// 	office: 'ICCS 117',
// 	phone: '604-822-4830',
// 	pastCourses:['CPSC 310  –  Introduction to Software Engineering']
// },
// {
// 	name:'Raymond Ng',
// 	img: 'img/ng.jpg',
// 	position: 'Professor',
// 	email: 'rng@cs.ubc.ca',
// 	office: 'ICCS 303',
// 	phone: '604-822-2394',
// 	pastCourses:['CPSC 304  –  Introduction to Relational Databases']
// },
// {
// 	name: 'George Tsiknis',
// 	img: 'img/tsiknis.jpg',
// 	position: 'Professor of Teaching',
// 	email: 'tsiknis@cs.ubc.ca',
// 	office: 'ICCS 307',
// 	phone: '604-822-2930',
// 	pastCourses:['CPSC 404  –  Advanced Relational Databases',
// 	'CPSC 301  –  Computing in the Life Sciences',
// 	'CPSC 121  –  Models of Computation']
// },
// {
// 	name: 'Steve Wolfman',
// 	img: 'img/wolfman.jpg',
// 	position: 'Professor of Teaching',
// 	email: 'wolf@cs.ubc.ca',
// 	office: 'ICCS 239',
// 	phone: '604-822-0407',
// 	pastCourses:['CPSC 110  –  Computation, Programs, and Programming']

// }
// ]


var instructorsArray;
var peopleDB = new Firebase('https://course-helper.firebaseio.com/instructors');
// peopleDB.push(instructors);

peopleDB.on('value', function(snapshot){
	instructorsArray = [];

	snapshot.forEach(function(childSnapshot) {
    // key will be "fred" the first time and "barney" the second time
    var key = childSnapshot.key();
    // childData will be the actual contents of the child
    var childData = childSnapshot.val();
    //console.log(childData);
    instructorsArray = childData;
});

});

$('#submit-button').click(function(e){
	var commentData = {
	name: $('#comment-form').find('input[name="name"]').val(),
	message:$('#comment-form').find('textarea[name="message"]').val(),
	courseName:$('#comment-form').find('input[name="courseName"]').val()

}	

	$('input','textarea').removeClass('has-error');
	$('.error-msg').remove();

	if (commentData.name === ""){
		$('input[name="name"]').addClass('has-error');
		$('<h6>').addClass('error-msg').html('Please fill out this field').insertAfter('input[name="name"]');

	}
	if(commentData.message === ""){
		$('textarea[name="message"]').addClass('has-error');
		$('<h6>').addClass('error-msg').html('Please fill out this field').insertAfter('textarea[name="message"]');
	}
	else{
	console.log(commentData);
	$('#comment-modal').modal('hide');
	$('#comment-form').find('input[name="name"]').val("");
	$('#comment-form').find('textarea[name="message"]').val("")
	alert('Your comments have been submitted!');

}
	commentDB.push(commentData);
});

$('.ilist').click(function(e){
	console.log(e.target.id);
	$('#courses').remove();
	$('.tempCourses').remove(); 
	for(var i = 0; i< instructorsArray.length; i++){
		if(instructorsArray[i].name == e.target.id){
	 $('#img').attr('src',instructorsArray[i].img);
	 $('#name').text(instructorsArray[i].name);
	 $('#email').text('Email: '+ instructorsArray[i].email);
	 $('#position').text('Position: '+ instructorsArray[i].position);
	 $('#office').text(' Office: '+ instructorsArray[i].office);
	 $('#phone').text('Phone: '+instructorsArray[i].phone);	
	 for(var j=0;j<instructorsArray[i].pastCourses.length;j++){
	 	$('<p>').addClass('tempCourses').html(instructorsArray[i].pastCourses[j]).insertAfter('#pastC');
	 }
	}
	}

});


		// <img src="img/acton.jpg">
		// <h3 id='name'>Donald Acton</h3>
		// <p id='position'>Senior Instructor</p>
		// <p id='email'><b>Email:</b> acton@cs.ubc.ca</p>
		// <p id='office'><b>Office:</b> ICCS 231</p>
		// <p id='phone'><b>Phone:</b>N/A</p>
		// <p id='courses'><b>Past Courses</b>
		// <br>
		// CPSC 317  –  Internet Computing
		// <br>
		// CPSC 415  –  Advanced Operating Systems
		// <br>
		// CPSC 313  –  Computer Hardware and Operating Systems
		// <br>
		// CPSC 317  –  Internet Computing
		// </p>
