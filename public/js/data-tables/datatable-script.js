  
     
           var userdatatable = $('.user_datatable').DataTable({
               processing: true,
               serverSide: true,
               ajax: "{{ route('admin.posts.index') }}",
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

 
