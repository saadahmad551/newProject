// Define form element
const addLeavePolicyForm = document.getElementById('re_add_leave_policy_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var addLeavePolicyValidator = FormValidation.formValidation(
    addLeavePolicyForm,
    {
        fields: {
            'policy_name': {
                validators: {
                    notEmpty: {
                        message: 'Leave policy title is required'
                    }
                }
            },

            'description': {
                validators: {
                    notEmpty: {
                        message: 'Leave policy description title is required'
                    }
                }
            },
            'leave_type_id': {
                validators: {
                    notEmpty: {
                        message: 'Leave type is required'
                    }
                }
            },

            'allowed': {
                validators: {
                    notEmpty: {
                        message: 'Allowed value is required'
                    },
                    digits: {
                        message: 'Only whole numbers are allowed'
                    },

                }
            },

            'impact_on_pay': {
                validators: {
                    notEmpty: {
                        message: 'Impact on pay is required'
                    },
                    numeric: {
                        message: 'Only digits are allowed'
                    },
                }
            },



        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: '.fv-row',
                eleInvalidClass: '',
                eleValidClass: ''
            })
        }
    }
);

// Submit button handler
const LeavePolicySubmitButton = document.getElementById('re_add_leave_policy_submit');
LeavePolicySubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (addLeavePolicyValidator) {
        addLeavePolicyValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                LeavePolicySubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                LeavePolicySubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    LeavePolicySubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    LeavePolicySubmitButton.disabled = false;

                    // Show popup confirmation
                    // Swal.fire({
                    //     text: "Form has been successfully submitted!",
                    //     icon: "success",
                    //     buttonsStyling: false,
                    //     confirmButtonText: "Ok, got it!",
                    //     customClass: {
                    //         confirmButton: "btn btn-primary"
                    //     }
                    // });

                    addLeavePolicyForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});


