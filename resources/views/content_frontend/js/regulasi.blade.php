<script>
    $(document).ready(function() {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            scrollCollapse: true,
            columnDefs: [],
            fixedColumns: true,
            height: '400%',
            ajax: {
                url: "{{ route('front.datatables') }}",
                data: function(d) {

                    d.date = $('#date').val()
                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'nipppk',
                    name: 'nipppk'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'status',
                    name: 'status'
                }
            ]
        });

        $(document).on('click', '#filter', function(e) {
            e.preventDefault();
            table.draw();
        })

        // ]$('#order_by').select2({placeholder: 'Order By'});
        // $('#ordering').select2({placeholder: 'Ordering'});
        // $('#ord_jenis').select2({placeholder: 'Ord_jenis'});
    })
</script>