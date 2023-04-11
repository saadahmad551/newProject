// Screen blockers
{
    var target = document.querySelector("#kt_post");
    var blockUI = new KTBlockUI(target);

}
// Add : Form validation
{

// Define form element
    const addServiceForm = document.getElementById('re_add_services_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addServiceValidator = FormValidation.formValidation(
        addServiceForm,
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
    const ServiceSubmitButton = document.getElementById('re_add_services_submit');
    ServiceSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addServiceValidator) {
            addServiceValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    ServiceSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    ServiceSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        ServiceSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        ServiceSubmitButton.disabled = false;

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

                        addServiceForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });

}
// Delete Floor category
{
    function deleteService(id) {
        Swal.fire({
            html: `Are you sure you want to delete this service?`,
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
                window.location.replace("services/delete/" + id);
            }
        });
    }
}
// Edit : Form Validation
{
// Define form element
    const editServiceForm = document.getElementById('re_edit_services_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editServiceValidator = FormValidation.formValidation(
        editServiceForm,
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
    const editServiceSubmitButton = document.getElementById('re_edit_services_submit');
    editServiceSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editServiceValidator) {
            editServiceValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    editServiceSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    editServiceSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        editServiceSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        editServiceSubmitButton.disabled = false;

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
                        editServiceForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });

}
// Edit : Ajax call
{
    function editService(id) {
        console.log("coming");
        blockUI.block();
        const category = $("#edit_category");
        category.empty();
        $.ajax({
            url: "services/edit/" + id,
            type: "GET",
            success: function (data) {
                $("#name_edit").val(data.service.name);
                $("#edit_icon").val(data.service.icon);
                $("#id").val(data.service.id);

                if (data.service.category) {
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
                    if (data.service.category === "Main Features") {
                        option2.attr("selected", "selected");
                    } else if (data.service.category === "Plot Features") {
                        option3.attr("selected", "selected");
                    }else if (data.service.category === "Community Features") {
                        option4.attr("selected", "selected");
                    }else if (data.service.category === "Health and Recreational") {
                        option5.attr("selected", "selected");
                    }else if (data.service.category === "Communication and Internet") {
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

                $("#re_edit_services_modal").modal("show");
                blockUI.release();
            },
            error: function () {
                $("#re_edit_services_modal").modal("hide");
                blockUI.release();
            }
        });
    }
}


