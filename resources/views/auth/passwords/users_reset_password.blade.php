@component('mail::message')
    Reset Account<br>
    Welcome {{$data['data']->name}}<br>

    @component('mail::button', ['url' => url('password/reset/'.$data['token'])])
        Button Text
    @endcomponent

    Thanks,<br>

@endcomponent
