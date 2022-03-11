$(document).ready(function () {

  $("#kiemtra").click(function() {
    $("form").hide("10000");
  });
  
  $("#kiemtra").dblclick(function() {
    $("form").slideDown("500");
  });

  $("#kiemtra").hover(function(){
    $(this).css("text-decoration","underline");

  });

  // $("#birthday").datetimepicker();

    
  // $("#newData").on("click", function(){
  //   var dt = $("input[type=text]").val().split('-');
      
  //   var date = dt[2] +"-"+ dt[1] +"-"+ dt[0];
      
  //   $("input[type=date]").val(date);
      
  // });


  // vaidate singin form on keyup and submit
  $("#newData").validate({
    rules:{
        profile:{
          required: true,
          minlength: 2,
          maxlength: 6,
          profile: true
      },
        student:{
          required: true,
          minlength: 2,
          maxlength: 6,
          student: true
      },
        surname:{
          required: true,
          minlength: 2,
          maxlength: 6
      },
        name:{
          required: true,
          minlength: 4,
          maxlength: 10
      },
        birthday:{
          required: true,
      },
        birthplace:{
          required: true,
          minlength: 2,
          maxlength: 35
      },
        phone:{
          required: true,
          minlength: 10,
          maxlength: 15
      },
      email:{
        required: true,
        email: true
      },
    },
    messages:{
        profile:{
          required: "Please write your profile code",
          min: "You entered too few specified characters",
          max:"You have entered more than one character"
        },
        student:{
          required: "Please write your student code",
          number: "Please enter the student code with the specified value",
          min: "You entered too few specified characters",
          max:"You have entered more than one character"
        },
        surname:{
          required: "Please write your surname code",
          min: "You entered too few specified characters",
          max:"You have entered more than one character"
        },
        name:{
          required: "Please write your name code",
          min: "You entered too few specified characters",
          max:"You have entered more than one character"
        },
        birthplace:{
          required: "Please write your birthplace code",
          min: "You entered too few specified characters",
          max:"You have entered more than one character"
        },
        birthday:"Please choose our date Time",
        checkgender:{
          required: "Please choose your checkgender information",
        },
        phone:{
          required: "Please write your number phone",
          number: "Please enter the number phone with the specified value",
          min: "You entered too few specified characters",
          max:"You have entered more than one character"
        },
        email:{
          required: "Please write email",
          email: "Please enter the correct letter of the email",
        },
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});