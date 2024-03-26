<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>

<!-- Your custom scripts -->
<script src="{{ asset('js/vendor.bundle.base.js') }}" defer></script>
<script src="{{ asset('js/off-canvas.js') }}" defer></script>
<script src="{{ asset('js/misc.js') }}" defer></script>

<script>
          var getUrl = window.location;

        
            var appurl = window.location.origin;
            console.log(appurl+ '/admin/posts');
       
     
           var userdatatable = $('.user_datatable').DataTable({
               processing: true,
               serverSide: true,
               ajax: appurl + '/admin/posts',
               columns: [{
                       data: 'id',
                       name: 'id',
                       orderable: false,
                   },
                   {
                       data: 'title',
                       name: 'title',
                       orderable: false,
                   },
                   {
                       data: 'description',
                       name: 'description',
                       orderable: false,
                   },
                   {
                       data: 'status',
                       name: 'status',
                       orderable: false,
                   },
                   {
                       data: 'created_at',
                       name: 'created_at',
                       orderable: false,
                   },
                   {
                       data: 'action',
                       name: 'action',
                       orderable: false,
                       searchable: false
                   },
               ],
               "fnRowCallback": function(nRow, aData, iDisplayIndex) {
                   $("td:first", nRow).html(iDisplayIndex + 1);
                   return nRow;
               },
           });
        </script>