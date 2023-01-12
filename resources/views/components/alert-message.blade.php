@if(Session::get('msg_success'))
<div class="alert alert-success d-flex align-items-center" role="alert">
  <div>
    {{Session::get('msg_success')}}
  </div>
</div>
@endif

@if(Session::get('msg_error'))
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <div>
    {{Session::get('msg_error')}}
  </div>
</div>
@endif

