"use strict";
var KTAppEcommerceCategories = (function () {
    var t,
        e,
        n = () => {
            t.querySelectorAll(
                '[data-kt-ecommerce-category-filter="delete_row"]'
            ).forEach((t) => {
                t.addEventListener("click", function (t) {
                    t.preventDefault();
                    const n = t.target.closest("tr"),
                        o = n.querySelector(
                            '[data-kt-ecommerce-category-filter="category_name"]'
                        ).innerText;
                    Swal.fire({
                        text: "Are you sure you want to delete " + o + "?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton:
                                "btn fw-bold btn-active-light-primary",
                        },
                    }).then(function (t) {
                        t.value
                            ? Swal.fire({
                                  text: "You have deleted " + o + "!.",
                                  icon: "success",
                                  buttonsStyling: !1,
                                  confirmButtonText: "Ok, got it!",
                                  customClass: {
                                      confirmButton: "btn fw-bold btn-primary",
                                  },
                              }).then(function () {
                                  e.row($(n)).remove().draw();
                              })
                            : "cancel" === t.dismiss &&
                              Swal.fire({
                                  text: o + " was not deleted.",
                                  icon: "error",
                                  buttonsStyling: !1,
                                  confirmButtonText: "Ok, got it!",
                                  customClass: {
                                      confirmButton: "btn fw-bold btn-primary",
                                  },
                              });
                    });
                });
            });
        };
    return {
        init: function () {
            (t = document.querySelector("#kt_ecommerce_category_table")) &&
                ((e = $(t).DataTable({
                    info: !1,
                    order: [],
                    pageLength: 10,
                    columnDefs: [
                        { orderable: !1, targets: 0 },
                        { orderable: !1, targets: 3 },
                    ],
                })).on("draw", function () {
                    n();
                }),
                document
                    .querySelector(
                        '[data-kt-ecommerce-category-filter="search"]'
                    )
                    .addEventListener("keyup", function (t) {
                        e.search(t.target.value).draw();
                    }),
                n());
                $("#kt_ecommerce_category_table").DataTable({
                    language: { lengthMenu: "Show _MENU_" },
                    dom: "<'row'<'col-sm-6 d-flex align-items-center justify-conten-start'l><'col-sm-6 d-flex align-items-center justify-content-end'f>><'table-responsive'tr><'row'<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i><'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>>",
                }),
                (function () {
                    var t = {
                        1: { title: "Pending", state: "primary" },
                        2: { title: "Delivered", state: "danger" },
                        3: { title: "Canceled", state: "primary" },
                        4: { title: "Success", state: "success" },
                        5: { title: "Info", state: "info" },
                        6: { title: "Danger", state: "danger" },
                        7: { title: "Warning", state: "warning" },
                    };
        },
    },
},
KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceCategories.init();
})
