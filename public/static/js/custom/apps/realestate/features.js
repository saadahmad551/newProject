// Screen blockers
{
    var target = document.querySelector("#kt_post");
    var blockUI = new KTBlockUI(target);

}
// Add : Form validation
{

// Define form element
    const addFeatureForm = document.getElementById('re_add_features_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addFeatureValidator = FormValidation.formValidation(
        addFeatureForm,
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
    const FeatureSubmitButton = document.getElementById('re_add_features_submit');
    FeatureSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addFeatureValidator) {
            addFeatureValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    FeatureSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    FeatureSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        FeatureSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        FeatureSubmitButton.disabled = false;

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

                        addFeatureForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });

}
// Delete Floor category
{
    function deleteFeature(id) {
        Swal.fire({
            html: `Are you sure you want to delete this feature?`,
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
                window.location.replace("features/delete/" + id);
            }
        });
    }
}
// Edit : Form Validation
{
// Define form element
    const editFeatureForm = document.getElementById('re_edit_features_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editFeatureValidator = FormValidation.formValidation(
        editFeatureForm,
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
    const editFeatureSubmitButton = document.getElementById('re_edit_features_submit');
    editFeatureSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editFeatureValidator) {
            editFeatureValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    editFeatureSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    editFeatureSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        editFeatureSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        editFeatureSubmitButton.disabled = false;

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
                        editFeatureForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });

}
// Edit : Ajax call
{
    function editFeature(id) {
        console.log("coming");
        blockUI.block();
        const category = $("#edit_category");
        category.empty();
        $.ajax({
            url: "features/edit/" + id,
            type: "GET",
            success: function (data) {
                $("#name_edit").val(data.feature.name);
                $("#id").val(data.feature.id);
                $("#edit_icon").val(data.feature.icon);

                if (data.feature.category) {
                    // Create the options
                    var option1 = $("<option></option>").val("").text("");
                    var option2 = $("<option></option>").val("Main Features").text("Main Features");
                    var option3 = $("<option></option>").val("Plot Features").text("Plot Features");
                    var option4 = $("<option></option>").val("Community Features").text("Community Features");
                    var option5 = $("<option></option>").val("Health and Recreational").text("Health and Recreational");
                    var option6 = $("<option></option>").val("Communication and Internet").text("Communication and Internet");

                    // Append the options to the select element
                    category.append(option1);
                    category.append(option2);
                    category.append(option3);
                    category.append(option4);
                    category.append(option5);
                    category.append(option6);

                    // Set the selected attribute based on the value of data.category.parent
                    if (data.feature.category === "Main Features") {
                        option2.attr("selected", "selected");
                    } else if (data.feature.category === "Plot Features") {
                        option3.attr("selected", "selected");
                    }else if (data.feature.category === "Community Features") {
                        option4.attr("selected", "selected");
                    }else if (data.feature.category === "Health and Recreational") {
                        option5.attr("selected", "selected");
                    }else if (data.feature.category === "Communication and Internet") {
                        option6.attr("selected", "selected");
                    }

                }
                else {
                    category.append("<option></option>");
                    category.append("<option value='Main Features'>Main Features</option>");
                    category.append("<option value='Plot Features'>Plot Features</option>");
                    category.append("<option value='Community Features'>Community Features</option>");
                    category.append("<option value='Health and Recreational'>Health and Recreational</option>");
                    category.append("<option value='Communication and Internet'>Communication and Internet</option>");
                }

                $("#re_edit_features_modal").modal("show");
                blockUI.release();
            },
            error: function () {
                $("#re_edit_features_modal").modal("hide");
                blockUI.release();
            }
        });
    }
}


