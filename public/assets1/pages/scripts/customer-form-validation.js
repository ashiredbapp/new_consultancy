var FormValidation = function () {

    // basic validation
    var handleValidation1 = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var form1 = $('#customer_form');
            var error1 = $('.alert-danger', form1);
            var success1 = $('.alert-success', form1);

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                messages: {
                    select_multi: {
                        maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                        minlength: jQuery.validator.format("At least {0} items must be selected")
                    }
                },
                rules: {
                    name: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    country: {
                        required: true
                    },
                    city: {
                        required: true
                    },
                    zipcode: {
                        required: true,
                        number: true
                    },
                    address1: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    mobile_number: {
                        required: true,
                        number: true
                    },
                    access_checkbox: {
                        required: true,
                        minlength: 2
                    },
                    processor: {
                        required: true,
                        minlength: 1
                    }
                },

                messages: {
                    access_checkbox: {
                        required: "Please select  at least 2 types of Access",
                        minlength: jQuery.validator.format("Please select  at least {0} types of Access")
                    },
                    processor: {
                        required: "Please select  at least 1 types of Processor",
                        minlength: jQuery.validator.format("Please select  at least {0} types of Processor")
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
                    App.scrollTo(error1, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var cont = $(element).parent('.input-group');
                    if (cont.size() > 0) {
                        cont.after(error);
                    } else {
                        element.after(error);
                    }
                },

                highlight: function (element) { // hightlight error inputs

                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                    success1.show();
                    error1.hide();
                }
            });


    }

    return {
        //main function to initiate the module
        init: function () {
            handleValidation1();
        }

    };

}();

jQuery(document).ready(function() {
    FormValidation.init();
});