    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
    
        $(document).ready(function()
        {
            $('#pageDataTable').DataTable({searching: true,ordering: false,lengthChange: false,showNEntries: false});
        });
    </script>

	<script src="{{asset('admin/vendors/scripts/script.js')}}"></script>

	<div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
		<?php $year=date("Y"); ?>
		Copyright © {{$year}} RAYS AVIATION TECHNOLOGIES LLP. 
	</div>
			</div>
	</div>

<script src="{{asset('admin/src/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/src/plugins/datatables/media/js/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('admin/src/plugins/datatables/media/js/dataTables.responsive.js')}}"></script>
        <script src="{{asset('admin/src/plugins/datatables/media/js/responsive.bootstrap4.js')}}"></script>
        <!-- buttons for Export datatable -->
        <script src="{{asset('admin/src/plugins/datatables/media/js/button/dataTables.buttons.js')}}"></script>
        <script src="{{asset('admin/src/plugins/datatables/media/js/button/buttons.bootstrap4.js')}}"></script>
        <script src="{{asset('admin/src/plugins/datatables/media/js/button/buttons.print.js')}}"></script>
        <script src="{{asset('admin/src/plugins/datatables/media/js/button/buttons.html5.js')}}"></script>
        <script src="{{asset('admin/src/plugins/datatables/media/js/button/buttons.flash.js')}}"></script>
        <script src="{{asset('admin/src/plugins/datatables/media/js/button/pdfmake.min.js')}}"></script>
        <script src="{{asset('admin/src/plugins/datatables/media/js/button/vfs_fonts.js')}}"></script>
        <script>
                $('document').ready(function(){
                        $('.data-table').DataTable({
                                scrollCollapse: true,
                                autoWidth: false,
                                responsive: true,
                                columnDefs: [{
                                        targets: "datatable-nosort",
                                        orderable: false,
                                }],
                                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                                "language": {
                                        "info": "_START_-_END_ of _TOTAL_ entries",
                                        searchPlaceholder: "Search"
                                },
                        });
                        $('.data-table-export').DataTable({
                                scrollCollapse: true,
                                autoWidth: false,
                                responsive: true,
                                columnDefs: [{
                                        targets: "datatable-nosort",
                                        orderable: false,
                                }],
                                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                                "language": {
                                        "info": "_START_-_END_ of _TOTAL_ entries",
                                        searchPlaceholder: "Search"
                                },
                                dom: 'Bfrtip',
                                buttons: [
                                'copy', 'csv', 'pdf', 'print'
                                ]
                        });
                        var table = $('.select-row').DataTable();
                        $('.select-row tbody').on('click', 'tr', function () {
                                if ($(this).hasClass('selected')) {
                                        $(this).removeClass('selected');
                                }
                                else {
                                        table.$('tr.selected').removeClass('selected');
                                        $(this).addClass('selected');
                                }
                        });
                        var multipletable = $('.multiple-select-row').DataTable();
                        $('.multiple-select-row tbody').on('click', 'tr', function () {
                                $(this).toggleClass('selected');
                        });
                });
        </script>
	

	</body>
</html>