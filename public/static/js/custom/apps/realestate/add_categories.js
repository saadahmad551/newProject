// Define form element
const addCategoriesForm = document.getElementById('re_add_categories_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var addCategoriesValidator = FormValidation.formValidation(
    addCategoriesForm,
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
    addCategoriesValidator.revalidateField('parent');
});


// Submit button handler
const CategoriesSubmitButton = document.getElementById('re_add_categories_submit');
CategoriesSubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (addCategoriesValidator) {
        addCategoriesValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                CategoriesSubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                CategoriesSubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    CategoriesSubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    CategoriesSubmitButton.disabled = false;

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

                    addCategoriesForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});




var target = document.querySelector("#kt_post");
var blockUI = new KTBlockUI(target);

function editCategories(id) {
    blockUI.block();
    $.ajax({
        url: "block/edit/"+id,
        type:"GET",
        success: function (data){

            $("#id").val(data.category.id);
            $("#name_edit").val(data.category.name);
            $("#re_edit_categories_modal").modal("show");
            blockUI.release();
        },
        error:function (){
            $("#re_edit_categories_modal").modal("hide");
            blockUI.release();
        }
    });
}



// Delete Record
function deleteCategories(id) {
    const button = document.getElementById('delete_categories_btn_' + id);

    Swal.fire({
        html: `Are you sure you want to delete this category?`,
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
