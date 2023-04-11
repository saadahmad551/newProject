// Screen blockers
{
    var target = document.querySelector("#kt_post");
    var blockUI = new KTBlockUI(target);

}
// Add : Form validation
{

// Define form element
    const addApartmentTypeForm = document.getElementById('re_add_apartment_type_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addApartmentTypeValidator = FormValidation.formValidation(
        addApartmentTypeForm,
        {
            fields: {
                'name': {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
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
    const ApartmentTypeSubmitButton = document.getElementById('re_add_apartment_type_submit');
    ApartmentTypeSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addApartmentTypeValidator) {
            addApartmentTypeValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    ApartmentTypeSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    ApartmentTypeSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        ApartmentTypeSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        ApartmentTypeSubmitButton.disabled = false;

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

                        addApartmentTypeForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });

}
// Delete Floor category
{
    function deleteApartmentType(id) {
        const button = document.getElementById('delete_categories_btn_' + id);

        Swal.fire({
            html: `Are you sure you want to delete this apartment type?`,
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
                window.location.replace("apartment-types/delete/" + id);
            }
        });
    }
}
// Edit : Form Validation
{
// Define form element
    const editApartmentTypeForm = document.getElementById('re_edit_apartment_type_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editApartmentTypeValidator = FormValidation.formValidation(
        editApartmentTypeForm,
        {
            fields: {
                'name': {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
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
    const editApartmentTypeSubmitButton = document.getElementById('re_edit_apartment_type_submit');
    editApartmentTypeSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editApartmentTypeValidator) {
            editApartmentTypeValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    editApartmentTypeSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    editApartmentTypeSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        editApartmentTypeSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        editApartmentTypeSubmitButton.disabled = false;

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
                        editApartmentTypeForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });

}
// Edit : Ajax call
{
    function editApartmentType(id) {
        console.log("coming");
        blockUI.block();
        const selelct_parent = $("#parent_edit");
        selelct_parent.empty();
        $.ajax({
            url: "apartment-types/edit/" + id,
            type: "GET",
            success: function (data) {
                $("#name_edit").val(data.type.name);
                $("#id").val(data.type.id);

                $("#re_edit_apartment_type_modal").modal("show");
                blockUI.release();
            },
            error: function () {
                $("#re_edit_apartment_type_modal").modal("hide");
                blockUI.release();
            }
        });
    }
}


