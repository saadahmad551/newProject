// Screen blockers
{
    var target = document.querySelector("#kt_post");
    var blockUI = new KTBlockUI(target);

}
// Add : Form validation
{

// Define form element
    const addDeveloperForm = document.getElementById('re_add_developers_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addDeveloperValidator = FormValidation.formValidation(
        addDeveloperForm,
        {
            fields: {
                'name': {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
                    }
                },
                'email_address': {
                    validators: {
                        notEmpty: {
                            message: 'Email address is required'
                        }
                    }
                },
                'logo': {
                    validators: {
                        notEmpty: {
                            message: 'Logo is required'
                        }
                    }
                },
                'contact_number_1': {
                    validators: {
                        notEmpty: {
                            message: 'Contact number is required'
                        },
                        digits: {
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
    const DeveloperSubmitButton = document.getElementById('re_add_developers_submit');
    DeveloperSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addDeveloperValidator) {
            addDeveloperValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    DeveloperSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    DeveloperSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        DeveloperSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        DeveloperSubmitButton.disabled = false;

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

                        addDeveloperForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });

}
// Delete Developer
{
    function deleteDeveloper(id) {
        Swal.fire({
            html: `Are you sure you want to delete this developer?`,
            icon: "question",
            buttonsStyling: false,
            showCancelButton: true,
            confirmButtonText: "Yes!",
            cancelButtonText: 'Nope, cancel it',
            customClass: {
                confirmButton: "btn btn-danger",
                cancelButton: 'btn btn-primary'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.replace("developer/delete/" + id);
            }
        });
    }
}
// Edit : Form Validation
{
// Define form element
    const editDeveloperForm = document.getElementById('re_edit_developers_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editDeveloperValidator = FormValidation.formValidation(
        editDeveloperForm,
        {
            fields: {
                'edit_name': {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
                    }
                },
                'edit_email_address': {
                    validators: {
                        notEmpty: {
                            message: 'Email address is required'
                        }
                    }
                },
                'edit_contact_number_1': {
                    validators: {
                        notEmpty: {
                            message: 'Contact number is required'
                        },
                        digits: {
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
    const editDeveloperSubmitButton = document.getElementById('re_edit_developers_submit');
    editDeveloperSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editDeveloperValidator) {
            editDeveloperValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    editDeveloperSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    editDeveloperSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        editDeveloperSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        editDeveloperSubmitButton.disabled = false;

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
                        editDeveloperForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });

}
// Edit : Ajax call
{
    function editDeveloper(id) {
        console.log("coming");
        blockUI.block();
        $.ajax({
            url: "developer/edit/" + id,
            type: "GET",
            success: function (data) {

                if (data.developer.logo) {

                } else {

                }
                $("#id").val(data.developer.id);
                $("#edit_name").val(data.developer.name);
                $("#edit_email_address").val(data.developer.email_address);
                $("#edit_contact_number_1").val(data.developer.contact_number_1);
                $("#edit_contact_number_2").val(data.developer.contact_number_2);
                $("#edit_head_office_address").val(data.developer.head_office_address);
                $("#edit_description").val(data.developer.description);

                $("#re_edit_developers_modal").modal("show");
                blockUI.release();
            },
            error: function () {
                $("#re_edit_developers_modal").modal("hide");
                blockUI.release();
            }
        });
    }
}


