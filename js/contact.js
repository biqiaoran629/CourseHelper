$('#btn-contact-submit').click(function (e){

	var contactData = {
	username: $('.contact-form').find('input[name="username"]').val(),
	email:$('.contact-form').find('input[name="email"]').val(),
	type:$('.contact-form').find('select[name="type"]').val(),
	message:$('.contact-form').find('textarea[name="message"]').val()
}
	$('input, textarea, select').removeClass('has-error');
	$('.error-msg').remove();

	if (contactData.username === ""){
		$('input[name="username"]').addClass('has-error');
		$('<h5>').addClass('error-msg').html('Please fill out this field').insertAfter('input[name="username"]');

	}
	if(contactData.email === ""){
		$('input[name="email"]').addClass('has-error');
		$('<h5>').addClass('error-msg').html('Please fill out this field').insertAfter('input[name="email"]');
	}

	if(contactData.message === ""){
		$('textarea[name="message"]').addClass('has-error');
		$('<h5>').addClass('error-msg').html('Please fill out this field').insertAfter('textarea[name="message"]');
	}
	
	else{
		console.log(contactData);
		var contactDB = new Firebase('https://course-helper.firebaseio.com/contact');
		contactDB.push(contactData);
		 $('.contact-form').find('input[name="username"]').val('');
		$('.contact-form').find('input[name="email"]').val('');
		$('.contact-form').find('textarea[name="message"]').val('');
		alert("Your comment has been submitted!")

	}
});