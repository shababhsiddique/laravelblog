<?php
$msg = Session::get('message');
if (isset($msg)) {
    ?>                                            
    <div data-notify="container" 
         data-notify-position="bottom-right" 
         data-notify-delay='1000'
         class="col-xs-11 col-sm-4 alert alert-{{ $msg['type'] }} alert-with-icon animated fadeInDown" 
         role="alert" 
         style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out; z-index: 1031; bottom: 20px; right: 20px;">    
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">clear</i></span>
        </button>
        <i data-notify="icon" class="material-icons">notifications</i>
        <strong data-notify="title">{{ $msg['title'] }}</strong>
        <span data-notify="message">
            {{ $msg['body'] }}.
        </span>
        <a href="#" target="_blank" data-notify="url"></a>
    </div>
    <?php
    Session::forget('message');
}
?>