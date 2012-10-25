/*
Author: Mike Northrop
Date: 10/11/2012
Description:
	This javascript uses jQuery to validate the registration
	page. 

**/
$(document).ready(function() {
	$(':text')[0].focus();
	$('#form').validate({
		rules: {
			birthday: {
				date: true
			},
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				rangelength: [8,16]
			},
			confirm: {
				equalTo: '#password'
			}
		}, 
		messages: {
			birthday: {
				date: "This is not a valid date."
			},
			email: {
				required: "Please supply your e-mail address.",
				email: "This is not a valid e-mail address."
			},
			password: {
				required: "Please enter a password.",
				rangelength: "Password must be between 8 and 16 characters long."
			},
			confirm: {
				equalTo: "The two passwords do not match."
			}
		}, 
		errorPlacement: function(error, element) {
			if ( element.is(":radio") || element.is(":checkbox")) {
				error.appendTo( element.parent());
			} else {
				error.insertAfter(element);
			}
		} 
	}); 
}); 