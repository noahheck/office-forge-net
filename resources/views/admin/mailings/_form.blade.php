@push('scripts')
<script src="{{ mix('js/admin.mailings._form.js') }}"></script>
@endpush

<form action="{{ $action }}" method="POST">
    @csrf

    @if ($method ?? false)
        @method($method)
    @endif

    <div class="row">

        <div class="col-12 col-sm-6 col-xl-7">

            @errors('subject', 'body_html', 'body_text')

            @textField([
                'name' => 'subject',
                'label' => 'Subject',
                'details' => '',
                'value' => old('subject', $mailing->subject),
                'placeholder' => 'Email Subject',
                'inputGroupAppendText' => '',
                'required' => true,
                'autofocus' => true,
                'error' => $errors->has('subject'),
                'readonly' => false,
            ])

        </div>

    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="rich-text-tab" data-toggle="tab" href="#rich-text" role="tab" aria-controls="rich-text" aria-selected="true">Rich Text</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="plain-text-tab" data-toggle="tab" href="#plain-text" role="tab" aria-controls="plain-text" aria-selected="false">Plain Text</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">

        <div class="tab-pane show active p-2" id="rich-text" role="tabpanel" aria-labelledby="rich-text-tab">
            @textEditorField([
                'name' => 'body_html',
                'id' => 'mailing_body_html',
                'label' => 'Email Body',
                'required' => false,
                'value' => old('body_html', $mailing->body_html),
                'placeholder' => 'Create something exciting',
                'description' => '',
                'toolbar' => 'full',
                'resourceType' => get_class($mailing),
                'resourceId' => $mailing->id,
            ])
        </div>
        <div class="tab-pane p-2" id="plain-text" role="tabpanel" aria-labelledby="plain-text-tab">

            @textareaField([
                'name' => 'body_text',
                'label' => 'Email Text',
                'details' => 'We use a feature of the Trix editor to automatically update the plain text here.',
                'value' => old('body_text', $mailing->body_text),
                'placeholder' => 'Plain text content of the email',
                'rows' => 10,
                'required' => false,
                'autofocus' => false,
                'error' => $errors->has('body_text'),
                'readonly' => true,
            ])

        </div>
    </div>

    <hr>


    <button type="submit" class="btn btn-primary">
        Save
    </button>

    <a href="{{ route('admin.mailings.index') }}" class="btn btn-secondary">
        Cancel
    </a>

</form>
