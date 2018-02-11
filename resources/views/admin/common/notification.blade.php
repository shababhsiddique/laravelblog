@extends('admin.master')

@section('adminNotification')
<?php
$msg = Session::get('message');

if (isset($msg)) {
    ?>                                            
    <script type="text/javascript">
        $(document).ready(function () {
            var title = "{{ $msg['title'] }}";
            var msg = "{{ $msg['body'] }}";
            var type = "{{ $msg['type'] }}";
            script.buildMessage(title, msg, type, 2000);
            console.log("from notification");
        });
    </script>
    <?php
    Session::forget('message');
}
?>

@endsection