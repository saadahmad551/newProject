"use strict";
var KTModalDriver = (function () {
    var t, e, n, o, i, r;
    return {
        init: function () {
            (r = document.querySelector("#KTModalDriver")) &&
                ((i = new bootstrap.Modal(r)),
                (o = document.querySelector("#KTModalDriver_form")),
                (t = document.getElementById("KTModalDriver_submit")),
                (e = document.getElementById("KTModalDriver_cancel")),
                
                (n = FormValidation.formValidation(o, {
                    fields: {
                        KTModalDriver_Employee1: {
                            validators: {
                                notEmpty: { message: "Employee is required" },
                            },
                        },
                      
                        KTModalDriver_Licence: {
                            validators: {
                                notEmpty: { message: "Licence Number is required" },
                            },
                        },
                        KTModalDriver_Licence_Document: {
                            validators: {
                                notEmpty: { message: "Licence Document is required" },
                            },
                        },
                        KTModalDriver_licence_Date: {
                            validators: {
                                notEmpty: { message: "Licence Date is required" },
                            },
                        },
                        KTModalDriver_Experience: {
                            validators: {
                                notEmpty: { message: "Experience is required" },
                            },
                        },
                        KTModalDriver_Available: {
                            validators: {
                                notEmpty: { message: "Please Check The Driver Availability" },
                            },
                        },
                       
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: "",
                        }),
                    },
                })),
                t.addEventListener("click", function (e) {
                    e.preventDefault(),
                        n &&
                            n.validate().then(function (e) {
                                console.log("validated!"),
                                    "Valid" == e
                                        ? (t.setAttribute(
                                              "data-kt-indicator",
                                              "on"
                                          ),
                                          (t.disabled = !0),
                                          setTimeout(function () {
                                              t.removeAttribute(
                                                  "data-kt-indicator"
                                              ),
                                                  (t.disabled = !1),
                                                  Swal.fire({
                                                      text: "Form has been successfully submitted!",
                                                      icon: "success",
                                                      buttonsStyling: !1,
                                                      confirmButtonText:
                                                          "Ok, got it!",
                                                      customClass: {
                                                          confirmButton:
                                                              "btn btn-primary",
                                                      },
                                                  }).then(function (t) {
                                                      t.isConfirmed && i.hide();
                                                  });
                                          }, 2e3))
                                        : Swal.fire({
                                              text: "Sorry, looks like there are some errors detected, please try again.",
                                              icon: "error",
                                              buttonsStyling: !1,
                                              confirmButtonText: "Ok, got it!",
                                              customClass: {
                                                  confirmButton:
                                                      "btn btn-primary",
                                              },
                                          });
                            });
                }),
                e.addEventListener("click", function (t) {
                    t.preventDefault(),
                        Swal.fire({
                            text: "Are you sure you would like to cancel?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, cancel it!",
                            cancelButtonText: "No, return",
                            customClass: {
                                confirmButton: "btn btn-primary",
                                cancelButton: "btn btn-active-light",
                            },
                        }).then(function (t) {
                            t.value
                                ? (o.reset(), i.hide())
                                : "cancel" === t.dismiss &&
                                  Swal.fire({
                                      text: "Your form has not been cancelled!.",
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, got it!",
                                      customClass: {
                                          confirmButton: "btn btn-primary",
                                      },
                                  });
                        });
                }));
                $("#employee").change(function () {
                    // Revalidate the field when an option is chosen
                    n.revalidateField('KTModalDriver_Employee1');
                });
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTModalDriver.init();
});
