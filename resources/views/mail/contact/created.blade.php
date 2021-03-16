<p>New Contact submitted at {{ config('app.url') }}</p>

<hr>

<dl>
    <dt><strong>Name</strong></dt>
    <dd>{{ $contact->name }}</dd>

    <dt><strong>Organization</strong></dt>
    <dd>{{ $contact->business }}</dd>

    <dt><strong>Email</strong></dt>
    <dd>{{ $contact->email }}</dd>

    <dt><strong>Phone</strong></dt>
    <dd>{{ $contact->phone }}</dd>

    <dt><strong>Message</strong></dt>
    <dd>{!! nl2br(e($contact->message)) !!}</dd>
</dl>
