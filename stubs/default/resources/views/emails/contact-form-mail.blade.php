@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Best regards,<br>
Shaung Bhone <br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent