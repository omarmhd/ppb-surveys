<script type="text/javascript">


    $(document).ready(function () {

        fill_datatable();

        function fill_datatable()
        {
        globalThis.table = $('#table_id').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            ajax:{
            url:"{{route('activated-surveys.needApprovalIndex')}}",
                data: function(data){

                    data.employee_id = $('select[name="employee_id"]').find(":selected").val();
                    data.evaluator_id = $('select[name="evaluator_id"]').find(":selected").val();
                    data.date_from =$('input[name="date_from"]').val();
                    data.date_to =$('input[name="date_to"]').val();

                }
            },


            language: {
                "lengthMenu": "عرض _MENU_ صف في الصفحة",
                "zeroRecords": "لم يتم إيجاد شيء",
                "info": "عرض صفحة _PAGE_ من _PAGES_",
                "infoEmpty": "لا يوجد أي بيانات متاحة",
                "infoFiltered": "(تصفية من _MAX_ العدد الكلي للصفوف)",
                "sSearch": "البحث:"

            },

            columns: [

                { data: 'DT_RowIndex'},

                {data: 'survey_id', name: 'survey_id'},
                {data: 'employee_id', name: 'employee_id'},
                {data: 'evaluator_id', name: 'evaluator_id'},

                {data: 'status_print', name: 'status_print'},

                {data: 'updated_at', name: 'updated_at'},
                {data: 'score', name: 'score'},
                {data: 'action', name: 'action'},

            ]

        });}
        $('#search_form').on('submit', function (e)  {

            table.draw();});

    });
</script>
