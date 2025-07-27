@component('mail::message')
# 📩 New Contact Message

You have received a new message from your **portfolio contact form**.

---

### 👤 Name
**{{ $contact->name }}**

### 📧 Email
**{{ $contact->email }}**

@if($contact->subject)
### 📝 Subject
**{{ $contact->subject }}**
@endif

---

### 💬 Message
@component('mail::panel')
{{ $contact->message }}
@endcomponent

---

Thanks & Regards,
**{{ config('app.name') }} Team**

@endcomponent