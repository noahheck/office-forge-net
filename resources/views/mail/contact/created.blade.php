<p>New Contact submitted at {{ config('app.url') }}</p>

<hr>

<dl>
    <dt>Name:</dt>
    <dd>{{ $contact->name }}</dd>

    <dt>Organization:</dt>
    <dd>{{ $contact->organization }}</dd>

    <dt>Email:</dt>
    <dd>{{ $contact->email }}</dd>

    <dt>Phone:</dt>
    <dd>{{ $contact->phone }}</dd>

    <dt>Message:</dt>
    <dd>{!! nl2br(e($contact->message)) !!}</dd>
</dl>
