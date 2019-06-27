jQuery(document).ready(function()
{
    var show_error=function(element)
   {
       jQuery(element).css("border","1px solid red");
       console.log("error at"+element);
   }
   var hide_error=function(element)
   {
       jQuery(element).css("border","1px solid #ccc");
       console.log("error removed  at"+element);
   }

   $(".acropolis_mobile").on("change",function()
   {
       number_validation();
   })
   $(".acropolis_email").on("change",function()
   {
       email_validation();
   })
   //validation in contac form

   var number_validation=function()
   {
       let mobile_number=jQuery(".acropolis_mobile").val();
       console.log(mobile_number);
       if(mobile_number.length <= 0 || mobile_number.length > 12)
       {
           show_error(jQuery(".acropolis_mobile"));
           return false;


       }
       else if(mobile_number.length > 0 && mobile_number.length < 10)
       {
            show_error(jQuery(".acropolis_mobile"));
           return false;
       }
       else
       {
           hide_error(jQuery(".acropolis_mobile"));
           return true;

       }
   }
   var password_validation=function()
   {
       let password=jQuery(".acropolis_password").val();
       console.log(password);
       if(password.length <= 0 || password.length > 12)
       {
           show_error(jQuery(".acropolis_password"));
           return false;


       }
       else if(password.length > 0 && password.length < 8)
       {
            show_error(jQuery(".acropolis_password"));
           return false;
       }
       else
       {
           hide_error(jQuery(".acropolis_password"));
           return true;

       }
   }
   var name_validation=function()
   {
       let first_name=jQuery(".acropolis_firstname").val();
       //let last_name=jQuery(".acropolis_lastname").val();
       let profession_name=jQuery(".acropolis_profession").val();
       console.log(first_name,profession_name);
       if(first_name.length <=0)
       {
             show_error(jQuery(".acropolis_firstname"));
               //show_error(jQuery(".acropolis_lastname"));
             show_error(jQuery(".acropolis_profession"));
           return false;

       }
       else
       {
            hide_error(jQuery(".acropolis_firstname"));
           //hide_error(jQuery(".acropolis_lastname"));
           hide_error(jQuery(".acropolis_profession"));
           return true;

       }
   }
   var email_validation=function()
   {
       let email=jQuery(".acropolis_email").val();
       console.log(email);
       let dot=email.includes(".");
       let acropolisglobal=email.includes("acropolisglobal");
       let acropolisinfotech=email.includes("acropolisinfotech");
       let at_the_rate=email.includes("@");
       console.log(dot);
       if(email.length > 0 && dot && at_the_rate && acropolisglobal || acropolisinfotech )
       {
           hide_error(jQuery(".acropolis_email"));
           return true;


       }
       else
       {
             show_error(jQuery(".acropolis_email"));
           return false;


       }
   }
   var form_validation=function()
   {
       let number_validation_status=number_validation();
       let password_validation_status=password_validation();
       let name_validation_status=name_validation();
       let email_validation_status=email_validation();
       if(name_validation_status && email_validation_status && password_validation_status && number_validation_status)
       {
           return true;
       }
       else
       {
           return false;
       }
   }

     //disable character keys

   jQuery('.acropolis_mobile').keypress(function(key) {
       if(key.charCode == 32)
       {
           return true;
       }
       else if(key.charCode == 8 || key.keyCode == 8)
       {
           return true;
           console.log("Backspace");
       }
        else if(key.charCode < 48 || key.charCode > 57)
           {
               return false

           };
       });

                  //disable number keys

   jQuery('.acropolis_firstname,.acropolis_profession').keypress(function(key) {
       if(key.charCode == 32)
           {
               return true;
               console.log("spacebar")
           }
    else if(key.charCode == 8 || key.keyCode == 8)
           {
               return true;
               console.log("Backspace");
           }
   else if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45))
           {
               return false;
           }


       });

   jQuery("form").on("submit",function(e)
      {
                    e.preventDefault();
          if(form_validation())
          {

           console.log("Welcome");
           window.location.href = "{{URL::to('')}}"
          }
          else
          {
            console.log("Fix Error");
          }

      });
})
