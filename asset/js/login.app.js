$(document).ready(function(){    
	$("#loginform").validate({
		rules:{
            email:{
                    email: true
            },
            pass:{
                password: "required",
                minlength: 5
            },
                agree: "required"
        },
        messages:{
            email:{
                required:"Please fill to your Email",
                minlength:"Characters at least 6"
            },
            password:{
                required:"Please fill to your Password"
            },
            agree: "Please accept our policy "
        },
    submitHandler: function(form) {
        form.submit();
  }
 });
});
    

// $(document).ready(function() {
//   $("#slip").click(function() {
//     // Khai báo biến email
//     var user = $("#email").val();

//     if(user == ""){
//       $("email_error").text("Please fill to your email");
//       $("email_error").css("color","red");
//       return false;
//     }else if((email_txt.length <= 2) && (email_txt.length >= 20)){
//       $("email_error").text("Please don't enter too many characters");
//       $("email_error").css("color","red");
//       return false;
//     }
//     // Khai báo password
//     var pass = $("#password").val();

//     if(pass == ""){
//       $("password_error").html("Please fill to your password");
//       $("password_error").css("color","red");
//       return false;
//     }
//     else if((email_txt.length <= 2) && (email_txt.length >= 20)){
//       $("password_error").html("Please don't enter too many characters");
//       $("password_error").css("color","red");
//       return false;
//     }
//   });
// });


// $(document).ready(function () {
//     $("#email").keyup(function () {
      
//         var email_txt = /^([a-zA-Z]+)([0-9]+)?(@)([a-zA-Z]{5,10}(.)([a-zA-Z]+))$/i;;
//         var email_inp = $(this).val();

//         if(email_txt.test(email_inp)){
//           $("#email_error").text("Please fill to your Email");
//           $("#email_error").removeClass("text-danger");
//         }
//         else{
//           $("#email_error").addClass("text-danger");
//           $("#email_error").text("Finish");

//         }

//     });
//     $("#email").keyup(function () {
      
//       var password_txt = /^([a-zA-Z]+)([0-9]+)?(@)([a-zA-Z]{5,10}(.)([a-zA-Z]+))$/i;;
//       var password_inp = $(this).val();

//       if(password_txt.test(password_inp)){
//         $("#password_error").text("Please fill to your Email");
//         $("#password_error").removeClass("text-danger");
//       }
//       else{
//         $("#password_error").addClass("text-danger");
//         $("#password_error").text("Finish");

//       }

//   });
  
// });