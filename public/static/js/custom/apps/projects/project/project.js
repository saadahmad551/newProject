"use strict";
var KTProjectOverview = (function () {
    var t = KTUtil.getCssVariableValue("--bs-primary"),
        e = KTUtil.getCssVariableValue("--bs-light-primary"),
        a = KTUtil.getCssVariableValue("--bs-success"),
        r = KTUtil.getCssVariableValue("--bs-light-success"),
        o = KTUtil.getCssVariableValue("--bs-gray-200"),
        n = KTUtil.getCssVariableValue("--bs-gray-500");

    var initialized = false; // Variable to track initialization
    var myDataTable; // Reference to the DataTable instance

    return {
        init: function () {
            if (initialized) {
                // Destroy the DataTable if already initialized
                myDataTable.destroy();
            }

            var s, i;

            // Chart initialization code...

            // ApexCharts initialization code...

            // Table initialization code...
            myDataTable = $("#kt_profile_overview_table").DataTable({
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

            myDataTable.column(0).visible(true); // Show the additional column

            // Search functionality...

            initialized = true; // Set initialized flag to true after initialization
        },
    };
})();

KTUtil.onDOMContentLoaded(function () {
    KTProjectOverview.init();
});
