<script src="../../assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="../../assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SPARKLINE JS-->
<script src="../../assets/js/jquery.sparkline.min.js"></script>

<!-- Sticky js -->
<script src="../../assets/js/sticky.js"></script>
<script src="../../assets/js/sweet.js"></script>
<script src="../../assets/js/sweet-alert.js"></script>

<!-- CHART-CIRCLE JS-->
<script src="../../assets/js/circle-progress.min.js"></script>

<!-- PIETY CHART JS-->
<script src="../../assets/plugins/peitychart/jquery.peity.min.js"></script>
<script src="../../assets/plugins/peitychart/peitychart.init.js"></script>

<!-- SIDEBAR JS -->
<script src="../../assets/plugins/sidebar/sidebar.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="../../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="../../assets/plugins/p-scroll/pscroll.js"></script>
<script src="../../assets/plugins/p-scroll/pscroll-1.js"></script>

<!-- INTERNAL CHARTJS CHART JS-->
<script src="../../assets/plugins/chart/Chart.bundle.js"></script>
<script src="../../assets/plugins/chart/rounded-barchart.js"></script>
<script src="../../assets/plugins/chart/utils.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="../../assets/plugins/select2/select2.full.min.js"></script>

<!-- INTERNAL Data tables js-->
<script src="../../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="../../assets/plugins/datatable/dataTables.responsive.min.js"></script>

<!-- INTERNAL APEXCHART JS -->
<script src="../../assets/js/apexcharts.js"></script>
<script src="../../assets/plugins/apexchart/irregular-data-series.js"></script>

<!-- INTERNAL Flot JS -->
<script src="../../assets/plugins/flot/jquery.flot.js"></script>
<script src="../../assets/plugins/flot/jquery.flot.fillbetween.js"></script>
<script src="../../assets/plugins/flot/chart.flot.sampledata.js"></script>
<script src="../../assets/plugins/flot/dashboard.sampledata.js"></script>

<!-- INTERNAL Vector js -->
<script src="../../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- SIDE-MENU JS-->
<script src="../../assets/plugins/sidemenu/sidemenu.js"></script>

<!-- TypeHead js -->
<script src="../../assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
<!-- <script src="../../assets/js/typehead.js"></script> -->
<script src="../../js/typeahead.js"></script>

<!-- INTERNAL INDEX JS -->
<script src="../../assets/js/index1.js"></script>

<!-- Color Theme js -->
<script src="../../assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="../../assets/js/custom.js"></script>

<script>
    $(function () {
        
        
    FetchNotifiedSubs()
    function FetchNotifiedSubs() {
        $.ajax({
            type: "POST",
            url: "../php/subscription.php",
            data: {action : 'FetchNotifiedSubs'},
            success: function (response) {
                if (response === 'No subscriptions yet') {
                    console.log(response);
                    $('#noted').append('')
                    $('#notified').html(response)
                }else{
                    $('#noted').append('<span class="pulse"></span>')
                    $('#notified').html(response)
                }
            }
        });
    }


    $('body').on("click", ".notificate", e=>{
            e.preventDefault()
             let data = e.currentTarget
             let Notify = $(data).attr('id')
             if (Notify) {
                $('#noted').append('')
                console.log(Notify);
                // FetchNotifiedSubs()
             }
        })
    });
</script>
