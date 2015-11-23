@if (Session::has('flash_message'))
    <script>
        Materialize.toast("{{ session('flash_message') }}", 10000);
    </script>
@endif