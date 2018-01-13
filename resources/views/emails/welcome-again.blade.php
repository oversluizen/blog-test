@component('mail::message')
# Introduction

Thank you so much for registering our blog.
- one
- two
- three

@component('mail::button', ['url' => 'localhost:8000/home'])
Terug naar de site
@endcomponent

@component('mail::panel', ['url' => ''])
Lorem ipsum dolor est 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
