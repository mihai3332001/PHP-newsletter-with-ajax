$(document).ready(function(){
	$('#formNewsletter').submit(function(e){
		e.preventDefault();
		var parents = $(this).parent().parent();
		var child = parents.siblings('.form-newsletter').children();
		var message = child.children('.messageView');
		//debugger
		 $.ajax({
            type: 'POST',
            url: '/newsletter/include/formPost.php',
            async: false, 
            data: $(this).serialize()

        })
		 .done(function(data) {
		 	message.append(data).delay(3000).fadeOut(300);
                 setTimeout(function(){
                message.empty();                
                }, 3500);
		 	message.css('display', 'block');
		 })
		.fail(function(data) {        
            // just in case posting your form failed
            alert( "Posting failed." );           
        });
          //return false;
	});

	var all = $('input#allSelect');
	$(function(){
		all.change(function(){
			if($(this).is(':checked')) {
				$('[name="oferte"]').prop('checked', true);
				$('[name="spectacole"]').prop('checked', true);
				$('[name="conferinte"]').prop('checked', true);
				$('[name="activitati"]').prop('checked', true);
				$('[name="inaugarari"]').prop('checked', true);
				$('[name="infoPublic"]').prop('checked', true);
			} else {
				$('[name="oferte"]').prop('checked', false);
				$('[name="spectacole"]').prop('checked', false);
				$('[name="conferinte"]').prop('checked', false);
				$('[name="activitati"]').prop('checked', false);
				$('[name="inaugarari"]').prop('checked', false);
				$('[name="infoPublic"]').prop('checked', false);
			}
		});

	});

});