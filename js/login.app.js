$(document).ready(function(){
    $("#loginform").validate({
            rules:{
                email:{
                         email: true
                            },
                        pass:{
                            password: "required",
                            minlength: 5
                            }
                        },
                        messages:{
                            email:{
                                required:"Please fill to your Email",
                                minlength:"Characters at least 6"
                            },
                            password:{
                                required:"Please fill to your Password"
                            }
                        },
                    submitHandler: function(form) {
                        form.submit();
        }
    });
});