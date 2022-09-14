@props(['notif'])

@if ($notif)
    <script>
        let status = "{{ $notif['status'] }}"
        let title = "{{ $notif['title'] }}"
        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: status,
            title: title
        })
    </script>
@endif
