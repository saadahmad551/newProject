"use strict";
var KTModalNewAddress = (function () {
    var t, e, n, o, i, r;
    return {
        init: function () {
            (r = document.querySelector("#kt_modal_new_address")) &&
                ((i = new bootstrap.Modal(r)),
                (o = document.querySelector("#kt_modal_new_address_form")),
                (t = document.getElementById("kt_modal_new_address_submit")),
                (e = document.getElementById("kt_modal_new_address_cancel")),
                $(o.querySelector('[name="Vehicle"]'))
                    .select2()
                    .on("change", function () {
                        n.revalidateField("Vehicle");
                    }),

                    $(o.querySelector('[name="Employee"]'))
                    .select2()
                    .on("change", function () {
                        n.revalidateField("Employee");
                    }),

                    $(o.querySelector('[name="Mentainence"]'))
                    .select2()
                    .on("change", function () {
                        n.revalidateField("Mentainence");
                    }),

                (n = FormValidation.formValidation(o, {
                    fields: {
                        Vehicle: {
                            validators: {
                                notEmpty: { message: "vehicle  is required" },
                            },
                        },
                        Employee: {
                            validators: {
                                notEmpty: { message: "Employee  is required" },
                            },
                        },
                        Mentainence: {
                            validators: {
                                notEmpty: { message: "Mentainence type is required" },
                            },
                        },
                        FuelQty: {
                            validators: {
                                notEmpty: { message: " Fuel Quantity is required" },
                            },
                        },
                        MentainenceCast: {
                            validators: {
                                notEmpty: { message: "Mentainence Cost  is required" },
                            },
                        },
                        mDate: {
                            validators: {
                                notEmpty: { message: "Date  is required" },
                            },
                        },
                        Garage: {
                            validators: {
                                notEmpty: { message: "Garage is required" },
                            },
                        },
                        Description: {
                            validators: {
                                notEmpty: { message: "Description is required" },
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
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTModalNewAddress.init();
});
