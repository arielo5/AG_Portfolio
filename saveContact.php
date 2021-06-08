function submitForm(){
	 $.ajax({
		type: "POST",
		url: "saveContact.php",
		cache:false,
		data: $('form#contactForm').serialize(),
		success: function(response){
			$("#contact").html(response)
			$("#contact-modal").modal('hide');
		},
		error: function(){
			alert("Error");
		}
	});
};

<?php
if (isset($_POST['ari.martinez.tiru@gmail.com'])) {
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$message = strip_tags($_POST['message']);
}
?>