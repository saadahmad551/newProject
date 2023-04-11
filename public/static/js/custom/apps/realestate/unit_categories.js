// Screen blockers
{
    var target = document.querySelector("#kt_post");
    var blockUI = new KTBlockUI(target);

}
// Add : Form validation
{

// Define form element
    const addUnitCategoriesForm = document.getElementById('re_add_unit_categories_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addUnitCategoriesValidator = FormValidation.formValidation(
        addUnitCategoriesForm,
        {
            fields: {
                'name': {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
                    }
                },
                'parent': {
                    validators: {
                        notEmpty: {
                            message: 'Parent is required'
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

// Revalidate Select2 input. For more info, plase visit the official plugin site: https://select2.org/
    $("#parent").change(function () {
        // Revalidate the field when an option is chosen
        addUnitCategoriesValidator.revalidateField('parent');
    });


// Submit button handler
    const UnitCategoriesSubmitButton = document.getElementById('re_add_unit_categories_submit');
    UnitCategoriesSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addUnitCategoriesValidator) {
            addUnitCategoriesValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    UnitCategoriesSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    UnitCategoriesSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        UnitCategoriesSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        UnitCategoriesSubmitButton.disabled = false;

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

                        addUnitCategoriesForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });

}
// Delete Unit Category
{
    function deleteUnitCategories(id) {
        Swal.fire({
            html: `Are you sure you want to delete this unit category?`,
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
                window.location.replace("unit/delete/" + id);
            }
        });
    }

}
// Edit : Form Validation
{

// Define form element
    const editUnitCategoriesForm = document.getElementById('re_edit_unit_categories_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editUnitCategoriesValidator = FormValidation.formValidation(
        editUnitCategoriesForm,
        {
            fields: {
                'unit_name': {
                    validators: {
                        notEmpty: {
                            message: 'Unit Name is required'
                        }
                    }
                },

                'edit_parent': {
                    validators: {
                        notEmpty: {
                            message: 'Parent is required'
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

// Revalidate Select2 input. For more info, plase visit the official plugin site: https://select2.org/
    $("#edit_parent").change(function() {
        // Revalidate the field when an option is chosen
        editUnitCategoriesValidator.revalidateField('edit_parent');
    });

// Submit button handler
    const editUnitCategoriesSubmitButton = document.getElementById('re_edit_unit_categories_submit');
    editUnitCategoriesSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editUnitCategoriesValidator) {
            editUnitCategoriesValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    editUnitCategoriesSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    editUnitCategoriesSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        editUnitCategoriesSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        editUnitCategoriesSubmitButton.disabled = false;

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

                        editUnitCategoriesForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
}
// Edit : Ajax call
{
    function editUnitCategories(id) {
        blockUI.block();
        const selelct_parent = $("#edit_parent");
        selelct_parent.empty();
        $.ajax({
            url: "unit/edit/" + id,
            type: "GET",
            success: function (data) {
                $("#id").val(data.category.id);
                $("#unit_name").val(data.category.name);

                if (data.category.parent) {
                    // Create the options
                    var option1 = $("<option></option>").val("").text("");
                    var option2 = $("<option></option>").val("Residential").text("Residential");
                    var option3 = $("<option></option>").val("Commercial").text("Commercial");

                    // Append the options to the select element
                    selelct_parent.append(option1);
                    selelct_parent.append(option2);
                    selelct_parent.append(option3);

                    // Set the selected attribute based on the value of data.category.parent
                    if (data.category.parent === "Residential") {
                        option2.attr("selected", "selected");
                    } else if (data.category.parent === "Commercial") {
                        option3.attr("selected", "selected");
                    }
                }
                else {
                    selelct_parent.append("<option></option>");
                    selelct_parent.append("<option value='Residential'>Residential</option>");
                    selelct_parent.append("<option value='Commercial'>Commercial</option>");
                }

                $("#re_edit_unit_categories_modal").modal("show");
                blockUI.release();
            },
            error: function () {
                $("#re_edit_unit_categories_modal").modal("hide");
                blockUI.release();
            }
        });
    }
}




