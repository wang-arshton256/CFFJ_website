<script src="{{ url('js/sweetalert@2.js') }}"></script>

@if ($errors->any())

    <script type="text/javascript">
        Swal.fire({
            title: 'An error occured, try again',
            icon: 'error',
            html: `
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    `,

            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText: '<i class="fas fa-times"></i> Close!',
            confirmButtonAriaLabel: 'Close',

        });
    </script>
@endif

@if (session('status'))

    <script type="text/javascript">
        $(function() {

            Swal.fire('Information', '{{ session('status') }}', 'success');

        });
    </script>

@endif

@if (session('ErrorOccured'))

    <script type="text/javascript">
        $(function() {

            Swal.fire('An error occured', '{{ session('ErrorOccured') }}', 'error');

        });
    </script>

@endif
