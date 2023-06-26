"use strict";
var KTProjectOverview = (function () {
    // ...

    var initialized = false;
    var myDataTable;

    return {
        init: function () {
            if (initialized) {
                return;
            }

            var s, i;

            // Chart initialization code...

            // ApexCharts initialization code...

            // Table initialization code...
            myDataTable = $("#myTable").DataTable({ // Use the table ID as the selector
                info: false,
                order: [],
                columns: [
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                    null,
                  

                ],
            });

            myDataTable.column(0).visible(true);

            // Search functionality
            $("#kt_filter_search").on("keyup", function () {
                myDataTable.search($(this).val()).draw();
            });

            initialized = true;
        },
    };
})();

KTUtil.onDOMContentLoaded(function () {
    KTProjectOverview.init();
});
