// let form = document.getElementById("frm");
// let a = 9;
// a = a + 2;

console.log(123);

// $().ready(function() {


    jQuery("#register").validate({
        // console.log(456);
        // Specify validation rules
        rules: {
          firstName: "required",
          lastName: "required",
          userName: "required",
          email: {
            required: true,
            email: true
          },
          password:{
            required : true,
            minlength:6
          },
          confirmpass:{
            required : true,
            minlength:6,
            equalTo:"#password"
          },
          mobile: {
            required: true,
            minlength: 10,
            maxlength: 10
          },
          city: "required",
          zipcode: {
            required: true,
            minlength: 6,
            maxlength: 6
          }
        },
        // Specify validation error messages
        messages: {
          firstName: "Please enter your firstname",
          lastName: "Please enter your lastname",
          userName: "Please enter your username",
          email: {
            required: "Please Enter an Email Id",
            email: "Please enter valid email"
          },
          confirmpass:{
            equalTo : "confirm password and password sould be equal"
          },
          mobile: {
            required: "Please Enter a mobile number",
            minlength: "Please enter 10 digit mobile number",
            maxlength: "Mobile number should not be more then 10 digits"
          },
          zipcode: {
            required: "Please Enter a Zipcode/pincode",
            minlength: "Please enter a 6 digit number",
            maxlength: "Zipcode not more then 6 digits!"
          }
        },
        submitHandler: function (form) {
          form.submit();
        }
      });
// });
      
console.log(234);