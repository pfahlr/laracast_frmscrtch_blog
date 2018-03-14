@component('mail::message')
# Introduction

The body of your message.

- one
- two
- three

@component('mail::panel', ['url' => ''])
Panel

@endcomponent

@component('mail::button', ['url' => 'http://rickpfahl.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
