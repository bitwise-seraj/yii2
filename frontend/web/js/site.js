$(() => {
    $("#student_registration").validate({
        rules: {
            "firstname" : {
                required: true,
                minlength: 3,
            },
            "lastname" : {
                required: true,
                minlength: 3,
            },
            "email" : {
                required: true,
                email: true,
            },
            "password": {
                required: true,
                minlength: 8,
                maxlength: 16,
            },
            "dob": {
                required: true,
                date: true,
            },
            "school": {
                required: true,
            },
            "grade": {
                required: true,
                number: true,
            },
            "country": {
                required: true
            },
            "state": {
                required: true
            },
            "city": {
                required: true
            }
        },
        message: {
            
        },
        submitHandler: function(form){

            form.submit();
        }
    });
    // $("#student_registration").on("submit", (obj) => {
    //     obj.preventDefault();
        
    // })
})