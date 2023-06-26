"use strict";
var KTProjectOverview = (function () {
    var t = KTUtil.getCssVariableValue("--bs-primary"),
        e = KTUtil.getCssVariableValue("--bs-light-primary"),
        a = KTUtil.getCssVariableValue("--bs-success"),
        r = KTUtil.getCssVariableValue("--bs-light-success"),
        o = KTUtil.getCssVariableValue("--bs-gray-200"),
        n = KTUtil.getCssVariableValue("--bs-gray-500");

    var initialized = false; // Variable to track initialization
    var table; // Reference to the DataTable instance

    return {
        init: function () {
            if (initialized) {
                // DataTable is already initialized
                return;
            }

            var s, i;

            // Chart initialization code

            // ...

            // Table initialization code
            table = $("#kt_profile_overview_table").DataTable({
                info: false,
                order: [],
                columns: [
                    null, // Placeholder for the first column
                    { orderDataType: "dom-data", type: "string" }, // Custom column for sorting by date
                    null, // Placeholder for the existing columns
                    null, // Placeholder for the existing columns
                    null, // Placeholder for the existing columns
                    null, // Placeholder for the existing columns
                    null, // Placeholder for the additional column
                ],
            });

            table.column(0).visible(true); // Show the additional column

            // Search functionality
            document.getElementById("kt_filter_search").addEventListener("keyup", function (event) {
                table.search(event.target.value).draw();
            });

            initialized = true; // Set initialized flag to true after initialization
        },
    };
})();

KTUtil.onDOMContentLoaded(function () {
    KTProjectOverview.init();
});
