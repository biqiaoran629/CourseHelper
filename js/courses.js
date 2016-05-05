var courses =[
{
	id: 'CPSC 110',
	name: 'Computation, Programs, and Programming',
	year: 1,
	bool: 'Yes'
},

{
	id: 'CPSC 121',
	name: 'Models of Computation',
	year: 1,
	bool: 'Yes'
},

{
	id: 'CPSC 210',
	name: 'Software Construction',
	year: 2,
	bool: 'Yes'
},

{
	id: 'CPSC 213',
	name: 'Introduction to Computer Systems',
	year: 2,
	bool: 'Yes'
},

{
	id: 'CPSC 221',
	name: 'Basic Algorithms and Data Structures',
	year: 2,
	bool: 'Yes'
},
{	
	id: 'CPSC 259',
	name: 'Data Structures and Algorithms for Electrical Engineers',
	year: 2,
	bool: 'No'
},
{	
	id: 'CPSC 261',
	name: 'Basics of Computer Systems',
	year: 2,
	bool: 'No'
},
{	
	id: 'CPSC 301',
	name: 'Computing in the Life Sciences',
	year: 3,
	bool: 'No'
},
{	
	id: 'CPSC 302',
	name: 'Numerical Computation for Algebraic Problems',
	year: 3,
	bool: 'No'
},
{	
	id: 'CPSC 303',
	name: 'Numerical Approximation and Discretization',
	year: 3,
	bool: 'No'
},
{	
	id: 'CPSC 304',
	name: 'Introduction to Relational Databases',
	year: 3,
	bool: 'No'
},
{	
	id: 'CPSC 310',
	name: 'Introduction to Software Engineering',
	year: 3,
	bool: 'Yes'
},
{
	id: 'CPSC 311',
	name: 'Definition of Programming Languages',
	year: 3,
	bool: 'No',
},
{	
	id: 'CPSC 312',
	name: 'Functional and Logic Programming',
	year: 3,
	bool: 'No'
},
{	
	id: 'CPSC 313',
	name: 'Computer Hardware and Operating Systems',
	year: 3,
	bool: 'Yes'
},
{	
	id: 'CPSC 314',
	name: 'Computer Graphics',
	year: 3,
	bool: 'No'
},
{	
	id: 'CPSC 317',
	name: 'Internet Computing',
	year: 3,
	bool: 'No'
},
{	
	id: 'CPSC 319',
	name: 'Software Engineering Project',
	year: 3,
	bool: 'No'
},
{	
	id: 'CPSC 320',
	name: 'Intermediate Algorithm Design and Analysis',
	year: 3,
	bool: 'No'
},
{	
	id: 'CPSC 322',
	name: 'Introduction to Artificial Intelligence',
	year: 3,
	bool: 'No'
},
{	
	id: 'CPSC 340',
	name: 'Machine Learning and Data Mining',
	year: 3,
	bool: 'No'
},
{	
	id: 'CPSC 344',
	name: 'Introduction to Human Computer Interaction Methods',
	year: 3,
	bool: 'No'
},
{	
	id: 'CPSC 349',
	name: 'Honours Research Seminar',
	year: 3,
	bool: 'No'
},
{	
	id: 'CPSC 404',
	name: 'Advanced Relational Databases',
	year: 4,
	bool: 'No'
},
{	
	id: 'CPSC 410',
	name: 'Advanced Software Engineering',
	year: 4,
	bool: 'No'
},
{	
	id: 'CPSC 411',
	name: 'Introduction to Compiler Construction',
	year: 4,
	bool: 'No'
},
{	
	id: 'CPSC 415',
	name: 'Advanced Operating Systems',
	year: 4,
	bool: 'No'
},
{	
	id: 'CPSC 420',
	name: 'Advanced Algorithms Design and Analysis',
	year: 4,
	bool: 'No'
},
{	
	id: 'CPSC 421',
	name: 'Introduction to Theory of Computing',
	year: 4,
	bool: 'No'
},
{	
	id: 'CPSC 422',
	name: 'Intelligent Systems',
	year: 4,
	bool: 'No'
},
{	
	id: 'CPSC 425',
	name: 'Computer Vision',
	year: 4,
	bool: 'No'
},
{	
	id: 'CPSC 430',
	name: 'Computers and Society',
	year: 4,
	bool: 'No'
},
{	
	id: 'CPSC 444',
	name: 'Advanced Methods for Human Computer Interaction',
	year: 4,
	bool: 'No'
},
{	
	id: 'CPSC 445',
	name: 'Algorithms in Bioinformatics',
	year: 4,
	bool: 'No'
}]


var courses;
var commentArray = [];

var courseDB = new Firebase('https://course-helper.firebaseio.com/courses');
var commentDB = new Firebase('https://course-helper.firebaseio.com/comments');

// courseDB.set({courses	
// });

courseDB.on('value', function(snapshot){
	courses = snapshot.val();

	$('.course-row').remove();
	$('.temp-th').remove();


	for(var i = 0; i < courses.length; i++){

	var idTD = '<td>' + courses[i].id + '</td>';
	var nameTD = '<td>' + courses[i].name + '</td>';
	var yearTD = '<td>' + courses[i].year + '</td>';
	var boolTD = '<td>' + courses[i].bool + '</td>';
	if (document.getElementById('not-logged-in')) {	
		$('<tr>').addClass('.course-row').html(idTD + nameTD + yearTD + boolTD).appendTo('#courseTable');
    }

    if (document.getElementById('logged-in')) {
    	var commentBtnTD = '<td><button class="btn-blue btn-comment" id=c' +i +'>Comment This Course</button></td>';
    	var viewBtnTD = '<td><button class="btn-blue btn-view" id=v' +i + '>View Comments</button></td>';
    	$('<tr>').addClass('.course-row').html(idTD + nameTD + yearTD + boolTD + commentBtnTD + viewBtnTD).appendTo('#courseTable');


    }

}

		if (document.getElementById('logged-in')) {
    	$('<th>').addClass('.temp-th').html("Comments").appendTo('#tableHeader');
    	$('<th>').addClass('.temp-th').html("View").appendTo('#tableHeader');
    }
});


commentDB.on('value', function(snapshot){
	console.log(snapshot.val());
	commentArray = 	[];

	snapshot.forEach(function(childSnapshot) {
    // key will be "fred" the first time and "barney" the second time
    var key = childSnapshot.key();
    // childData will be the actual contents of the child
    var childData = childSnapshot.val();
    //console.log(childData);
    commentArray.push(childData);
});

});


$('#courseTable').on('click','.btn-comment', function(e){

	for(var i = 0; i< courses.length; i++){

		if('c'+i === e.target.id){
			$('#comment-modal').modal('show');		
			$('.modal-title').text(courses[i].id+" : "+courses[i].name);		
			$('input[name="courseName"]').val(courses[i].id);

		}	
		}	

	
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


$('#courseTable').on('click','.btn-view', function(e){

	console.log(commentArray);
	$('.comment-div-name').remove();
	$('.comment-div-msg').remove();



	for(var i = 0; i< courses.length; i++){

		var hasComment = false;
		if('v'+i === e.target.id){
			$('.modal-title').text(courses[i].id+" : "+courses[i].name);
			$('#view-comment-modal').modal('show');

			for(var j = 0; j<commentArray.length; j++){
				if(commentArray[j].courseName === courses[i].id){
					hasComment = true;
					console.log(commentArray[j].message);
				$('<h4>').addClass('comment-div-name').html(commentArray[j].name + ' commented: ').appendTo('.comment-div');
				$('<p>').addClass('comment-div-msg').html(commentArray[j].message).appendTo('.comment-div');
			}

			}
			if(!hasComment){
$('<p>').addClass('comment-div-msg').html("Nobody has commented on this course. Be the first one!").appendTo('.comment-div');

			}

		}	
		}	

	
});

   