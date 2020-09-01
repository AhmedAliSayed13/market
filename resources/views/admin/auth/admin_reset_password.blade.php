@component('mail::message')
    Reset Account<br>
Welcome {{$data['data']->name}}<br>

@component('mail::button', ['url' => admin_url('reset/password/'.$data['token'])])
Button Text
@endcomponent

Thanks,<br>

@endcomponent
