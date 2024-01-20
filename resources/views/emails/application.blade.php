@component('mail::message')
{{-- # New contact message from {{ $name }} --}}

<p>Greetings {{ config('app.name') }},</p>
<p>{{ $message }}</p>
<p>Please find my credentials attached below.</p>
<p><a href="{{ $cv->getRealPath() }}" download>Cover letter and CV</a></p>

{{-- Name: {{ $name }}<br>
Username: {{ $username }}<br>
Email: {{ $email }}<br>
Phone: {{ $phone }}<br>
I'd like to: {{ $department }}<br>
Regarding: {{ $department2 }}<br>
Subject: {{ $subject }}<br>
Message: {{ $message }}<br> --}}

@component('mail::button', ['url' => $img_url])
Reply
@endcomponent

Thanks,<br>
{{ $name }}<br>
{{ $email }}<br>
{{ $phone }}<br>
@endcomponent
