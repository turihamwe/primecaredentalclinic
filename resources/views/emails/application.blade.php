@component('mail::message')
# New contact message from {{ $name }}

{{-- Name: {{ $name }}<br>
Username: {{ $username }}<br>
Email: {{ $email }}<br>
Phone: {{ $phone }}<br>
I'd like to: {{ $department }}<br>
Regarding: {{ $department2 }}<br>
Subject: {{ $subject }}<br>
Message: {{ $message }}<br> --}}

{{-- @component('mail::button', ['url' => ''])
Reply
@endcomponent --}}

{{-- Thanks,<br>
{{ config('app.name') }} --}}
@endcomponent
