@if (session('success'))

    <script>
        toastr.success('{!!session('success')!!}', 'نجاح!', {
            closeButton: true,
            positionClass: "toast-bottom-full-width",
        });

    </script>
@elseif(session('error'))

    <script>
        toastr.error('{!!session('error')!!}', 'خطأ!', {
            closeButton: true,
            positionClass: "toast-bottom-left"
        });

    </script>

@endif
