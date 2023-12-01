<x-mail::message>
{{-- # Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }} --}}
<h3>New message from : {{$contact_formData['email']}}</h3>
<p>Name : {{$contact_formData['name']}}</p>
<p>Phone : {{$contact_formData['phone']}}</p>
<p>Message : {{$contact_formData['message']}}</p>

</x-mail::message>
