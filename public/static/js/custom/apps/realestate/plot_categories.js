// Screen blockers
{
    var target = document.querySelector("#kt_post");
    var blockUI = new KTBlockUI(target);

}
// Add : Form validation
{

// Define form element
    const addPlotCategoriesForm = document.getElementById('re_add_plot_categories_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addPlotCategoriesValidator = FormValidation.formValidation(
        addPlotCategoriesForm,
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
        addPlotCategoriesValidator.revalidateField('parent');
    });


// Submit button handler
    const PlotCategoriesSubmitButton = document.getElementById('re_add_plot_categories_submit');
    PlotCategoriesSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addPlotCategoriesValidator) {
            addPlotCategoriesValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    PlotCategoriesSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    PlotCategoriesSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        PlotCategoriesSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        PlotCategoriesSubmitButton.disabled = false;

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

                        addPlotCategoriesForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });

}
// Delete Unit Category
{
    function deletePlotCategories(id) {
        Swal.fire({
            html: `Are you sure you want to delete this plot category?`,
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
                window.location.replace("plot/delete/" + id);
            }
        });
    }

}
// Edit : Form Validation
{

// Define form element
    const editPlotCategoriesForm = document.getElementById('re_edit_plot_categories_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editPlotCategoriesValidator = FormValidation.formValidation(
        editPlotCategoriesForm,
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
        editPlotCategoriesValidator.revalidateField('parent_edit');
    });

// Submit button handler
    const editPlotCategoriesSubmitButton = document.getElementById('re_edit_plot_categories_submit');
    editPlotCategoriesSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editPlotCategoriesValidator) {
            editPlotCategoriesValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    editPlotCategoriesSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    editPlotCategoriesSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        editPlotCategoriesSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        editPlotCategoriesSubmitButton.disabled = false;

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

                        editPlotCategoriesForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
}
// Edit : Ajax call
{
    function editPlotCategories(id) {
        blockUI.block();
        const selelct_parent = $("#parent_edit");
        selelct_parent.empty();
        $.ajax({
            url: "plot/edit/" + id,
            type: "GET",
            success: function (data) {
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
                $("#re_edit_plot_categories_modal").modal("show");
                blockUI.release();
            },
            error: function () {
                $("#re_edit_plot_categories_modal").modal("hide");
                blockUI.release();
            }
        });
    }
}




