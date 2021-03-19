@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Visit How2Php
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
