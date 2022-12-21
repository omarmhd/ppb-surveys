<script type="text/javascript">
    $(document).ready(function () {

        globalThis.table = $('#table_id').DataTable({
            processing: true,
            serverSide: true,
            searching: true,
            ajax: "{{route('activated-surveys.index')}}",
            language: {
                "lengthMenu": "عرض _MENU_ صف في الصفحة",
                "zeroRecords": "لم يتم إيجاد شيء",
                "info": "عرض صفحة _PAGE_ من _PAGES_",
                "infoEmpty": "لا يوجد أي بيانات متاحة",
                "infoFiltered": "(تصفية من _MAX_ العدد الكلي للصفوف)",
                "sSearch": "البحث:"

            },
            columns: [


                {data: 'survey_id', name: 'survey_id'},
                {data: 'employee_id', name: 'employee_id'},
                {data: 'evaluator_id', name: 'evaluator_id'},

                {data: 'status', name: 'status'},
                {data: 'is_open', name: 'is_open'},
                {data: 'is_evaluated', name: 'is_evaluated'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]

        });

    });
</script>
