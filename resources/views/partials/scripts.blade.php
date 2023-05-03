<!--begin::Javascript-->
<script>
var hostUrl = "assets/";
</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('static/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('static/js/scripts.bundle.js') }}"></script>
<!-- <script src="{{ asset('static/plugins/custom/datatables/datatables.bundle.js') }}"></script> -->
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by all pages)-->

<script src="{{ asset('static/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->


<!--begin::Page Custom Javascript(used by UserList )-->
<!-- <script src="{{ asset('static/js/custom/apps/user-management/users/list/table.js') }}"></script>
<script src="{{ asset('static/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
<script src="{{ asset('static/js/custom/apps/user-management/users/list/add.js') }}"></script> -->
<script src="{{ asset('static/js/custom/widgets.js') }}"></script>
<!-- <script src="{{ asset('static/js/custom/utilities/modals/upgrade-plan.js') }}"></script> -->
<script src="{{ asset('static/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('static/js/custom/utilities/modals/users-search.js') }}"></script>

<!--begin::Page Custom Javascript(used by ViewUser)-->
<!-- <script src="{{ asset('static/js/custom/apps/user-management/users/view/update-details.js') }}"></script> -->
<script src="{{ asset('static/js/custom/apps/user-management/users/view/view.js') }}"></script>
<!-- <script src="{{ asset('static/js/custom/apps/user-management/users/view/add-task.js') }}"></script> -->
<!-- <script src="{{ asset('static/js/custom/apps/user-management/users/view/update-details.js') }}"></script> -->
<!-- <script src="{{ asset('static/js/custom/apps/user-management/users/view/update-role.js') }}"></script> -->
<script src="{{ asset('static/js/custom/apps/user-management/users/view/add-auth-app.js') }}"></script>
<script src="{{ asset('static/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('static/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('static/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('static/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('static/js/custom/utilities/modals/users-search.js') }}"></script>

<!--begin::Page Custom Javascript(used by Role List)-->
<script src="{{ asset('static/js/custom/apps/user-management/roles/list/add.js') }}"></script>
<script src="{{ asset('static/js/custom/apps/user-management/roles/list/update-role.js') }}"></script>

<!--begin::Page Custom Javascript(used by View Role)-->
<script src="{{ asset('static/js/custom/apps/user-management/roles/view/view.js') }}"></script>
<script src="{{ asset('static/js/custom/apps/user-management/roles/view/update-role.js') }}"></script>

<!--begin::Page Custom Javascript(used by permissions)-->
<script src="{{ asset('static/js/custom/apps/user-management/permissions/list.js') }}"></script>
<script src="{{ asset('static/js/custom/apps/user-management/permissions/add-permission.js') }}"></script>
<script src="{{ asset('static/js/custom/apps/user-management/permissions/update-permission.js') }}"></script>


<!--begin::Page Custom Javascript(used by dashboard)-->
<!-- <script src="https://cdn.amcharts.com/lib/4/geodata/worldLow.js"></script> -->
<!-- <script src="https://cdn.amcharts.com/lib/4/geodata/continentsLow.js"></script> -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>


<script src="{{ asset('static/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>


<!--begin::Page Custom Javascript(used by Sign-up)-->
<script src="{{ asset('static/js/custom/utilities/modals/create-account.js') }}"></script>



<script>
    const countriesSelect = document.getElementById("countries");

fetch("https://restcountries.com/v3.1/all")
  .then((response) => response.json())
  .then((data) => {
    const countries = data.map((country) => ({
      name: country.name.common,
      code: country.cca2,
    }));

    countries.forEach((country) => {
      const option = document.createElement("option");
      option.value = country.code;
      option.text = country.name;
      if (country.name === "United Arab Emirates") {
        // Set the default selected option to Dubai
        option.selected = true;
      }
      countriesSelect.appendChild(option);
    });
  })
  .catch((error) => console.log(error));
</script>


<script>
am5.ready(function() {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("kt_amcharts_3");


    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
        am5themes_Animated.new(root)
    ]);


    // Create the map chart
    // https://www.amcharts.com/docs/v5/charts/map-chart/
    var chart = root.container.children.push(am5map.MapChart.new(root, {
        panX: "rotateX",
        panY: "rotateY",
        projection: am5map.geoOrthographic(),
        paddingBottom: 20,
        paddingTop: 20,
        paddingLeft: 20,
        paddingRight: 20
    }));


    // Create main polygon series for countries
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
    var polygonSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
        geoJSON: am5geodata_worldLow
    }));

    polygonSeries.mapPolygons.template.setAll({
        tooltipText: "{name}",
        toggleKey: "active",
        interactive: true
    });

    polygonSeries.mapPolygons.template.states.create("hover", {
        fill: root.interfaceColors.get("primaryButtonHover")
    });


    // Create series for background fill
    // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/#Background_polygon
    var backgroundSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {}));
    backgroundSeries.mapPolygons.template.setAll({
        fill: root.interfaceColors.get("alternativeBackground"),
        fillOpacity: 0.1,
        strokeOpacity: 0
    });
    backgroundSeries.data.push({
        geometry: am5map.getGeoRectangle(90, 180, -90, -180)
    });


    // Create graticule series
    // https://www.amcharts.com/docs/v5/charts/map-chart/graticule-series/
    var graticuleSeries = chart.series.push(am5map.GraticuleSeries.new(root, {}));
    graticuleSeries.mapLines.template.setAll({
        strokeOpacity: 0.1,
        stroke: root.interfaceColors.get("alternativeBackground")
    })


    // Rotate animation
    chart.animate({
        key: "rotationX",
        from: 0,
        to: 360,
        duration: 30000,
        loops: Infinity
    });


    // Make stuff animate on load
    chart.appear(1000, 100);

}); // end am5.ready()
</script>


<!--end::Page Custom Javascript-->
<!--end::Javascript-->