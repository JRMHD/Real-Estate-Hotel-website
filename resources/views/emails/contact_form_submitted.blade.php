@component('mail::message')
# New Contact Form Submission

You have received a new message from the **Ciala Residences** website contact form.

@component('mail::table')
| Field   | Details |
|:--------|:--------|
| **Name**    | {{ $data['name'] }} |
| **Email**   | {{ $data['email'] }} |
| **Phone**   | {{ $data['phone'] }} |
| **Subject** | {{ $data['subject'] ?? 'N/A' }} |
@endcomponent

**Message:**

{{ $data['message'] }}

Thanks,
{{ config('app.name') }}
@endcomponent
