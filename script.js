$().ready(function () {

    $("#signupForm").validate({
        // in 'rules' user have to specify all the constraints for respective fields
        rules: {
            // firstname: "required",
            // lastname: "required",
            staticName: {
                required: true,
                minlength: 2 //for length of lastname
            },
            staticmobile: {
                required: true,
                minlength: 10,
                maxlenght: 10

            },
            // password: {
            //     required: true,
            //     minlength: 5
            // },
            // confirm_password: {
            //     required: true,
            //     minlength: 5,
            //     equalTo: "#password" //for checking both passwords are same or not
            // },
            staticEmail: {
                required: true,
                email: true
            },
            // staticage: {
            //     required: true

            // }

             staticage: "required"
        },
        // in 'messages' user have to specify message as per rules
        messages: {
            // firstname: " Please enter your firstname",
            // lastname: " Please enter your lastname",
            staticName: {
                required: " Please enter a name",
                minlength: " Your username must consist of at least 2 characters"
            },

            staticmobile: {
                required: " Please enter a mobile",
                minlength: " mobile number must be consist 10 characters",
                maxlength: " mobile number must be consist 10 characters"
            },
            staticEmail: {
                required: " Please enter a email id"
                
            },
            // confirm_password: {
            //     required: " Please enter a password",
            //     minlength: " Your password must be consist of at least 5 characters",
            //     equalTo: " Please enter the same password as above"
            // },
            
            staticage: "Please enter a age"
        }
    });
});
