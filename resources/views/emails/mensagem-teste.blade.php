@component('mail::message')
# Introduction

The body of your message.

- Opção 1
- Opção 2
- Opção 3

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::button', ['url' => ''])
Button Text 2
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
