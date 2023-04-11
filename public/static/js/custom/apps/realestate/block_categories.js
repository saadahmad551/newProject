// Screen blockers
{
    var target = document.querySelector("#kt_post");
    var blockUI = new KTBlockUI(target);

}
// Add : Form validation
{

// Define form element
    const addBlockCategoriesForm = document.getElementById('re_add_block_categories_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addBlockCategoriesValidator = FormValidation.formValidation(
        addBlockCategoriesForm,
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
        addBlockCategoriesValidator.revalidateField('parent');
    });


// Submit button handler
    const BlockCategoriesSubmitButton = document.getElementById('re_add_block_categories_submit');
    BlockCategoriesSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addBlockCategoriesValidator) {
            addBlockCategoriesValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    BlockCategoriesSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    BlockCategoriesSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        BlockCategoriesSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        BlockCategoriesSubmitButton.disabled = false;

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

                        addBlockCategoriesForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });

}
// Delete Block Category
{
    function deleteBlockCategories(id) {
        const button = document.getElementById('delete_categories_btn_' + id);

        Swal.fire({
            html: `Are you sure you want to delete this block category?`,
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
                window.location.replace("block/delete/" + id);
            }
        });
    }

}
// Edit : Form Validation
{

// Define form element
    const editBlockCategoriesForm = document.getElementById('re_edit_block_categories_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editBlockCategoriesValidator = FormValidation.formValidation(
        editBlockCategoriesForm,
        {
            fields: {
                'name': {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
                    }
                },

                'parent_edit': {
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
    $("#parent_edit").change(function() {
        // Revalidate the field when an option is chosen
        editBlockCategoriesValidator.revalidateField('parent_edit');
    });

// Submit button handler
    const editBlockCategoriesSubmitButton = document.getElementById('re_edit_block_categories_submit');
    editBlockCategoriesSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editBlockCategoriesValidator) {
            editBlockCategoriesValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    editBlockCategoriesSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    editBlockCategoriesSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        editBlockCategoriesSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        editBlockCategoriesSubmitButton.disabled = false;

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

                        editBlockCategoriesForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
}
// Edit : Ajax call
{
    function editBlockCategories(id) {
        blockUI.block();
        const selelct_parent = $("#parent_edit");
        selelct_parent.empty();
        $.ajax({
            url: "block/edit/" + id,
            type: "GET",
            success: function (data) {
                console.log("success");
                $("#name_edit").val(data.category.name);
                $("#id").val(data.category.id);
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
                $("#re_edit_block_categories_modal").modal("show");
                blockUI.release();
            },
            error: function () {
                console.log("error");
                $("#re_edit_block_categories_modal").modal("hide");
                blockUI.release();
            }
        });
    }
}
