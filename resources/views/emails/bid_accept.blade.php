@component('mail::message')
    # Bid accepted

    Была принята новая заявка с сайта texmart.kg

    Имя: {{ $bid->name }}
    E-mail: {{ $bid->email }}
    Номер телефона: {{ $bid->code. ' ' .$bid->phone }}
    Заявка: {{ $bid->bid }}

@endcomponent
