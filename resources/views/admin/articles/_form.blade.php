<form action="{{ $action }}" method="POST">
    @csrf

    @if ($method ?? false)
        @method($method)
    @endif

    <div class="row">

        <div class="col-12 col-sm-6 col-xl-7">

            @errors('title', 'subtitle', 'slug')

            @textField([
                'name' => 'title',
                'label' => 'Title',
                'details' => '',
                'value' => old('title', $article->title),
                'placeholder' => 'Title',
                'inputGroupAppendText' => '',
                'required' => true,
                'autofocus' => true,
                'error' => $errors->has('title'),
                'readonly' => false,
            ])

            @textField([
                'name' => 'subtitle',
                'label' => 'Sub-Title',
                'details' => '',
                'value' => old('subtitle', $article->subtitle),
                'placeholder' => 'Sub-Title',
                'inputGroupAppendText' => '',
                'required' => false,
                'autofocus' => false,
                'error' => $errors->has('subtitle'),
                'readonly' => false,
            ])

            @textField([
                'name' => 'slug',
                'label' => 'Slug',
                'details' => '',
                'value' => old('slug', $article->slug),
                'placeholder' => 'kabob-case-article-title-probably',
                'inputGroupAppendText' => '',
                'required' => true,
                'autofocus' => false,
                'error' => $errors->has('slug'),
                'readonly' => false,
            ])
        </div>

        <div class="col-12 col-sm-6 col-xl-5">
            <div class="card shadow-sm">
                <div class="card-body">

                    @errors('date', 'published')

                    @dateField([
                        'name' => 'date',
                        'label' => 'Date',
                        'details' => '',
                        'value' => old('date', \App\format_date($article->date)),
                        'placeholder' => '',
                        'required' => '',
                        'autofocus' => false,
                        'error' => $errors->has('date'),
                        'readonly' => false,
                    ])

                    @checkboxSwitchField([
                        'name' => 'published',
                        'id' => 'published',
                        'label' => 'Published',
                        'details' => '',
                        'checked' => old('published', $article->published),
                        'value' => '1',
                        'required' => false,
                        'error' => $errors->has('published'),
                    ])

                    <hr>

                    <strong>Author:</strong>
                    {{ $article->author->name }}

                </div>
            </div>
        </div>

    </div>

    @textareaField([
        'name' => 'summary',
        'label' => 'Summary',
        'details' => '',
        'value' => old('summary', $article->summary),
        'placeholder' => 'Preview text for website, social media, and search engines',
        'rows' => 3,
        'required' => false,
        'autofocus' => false,
        'error' => $errors->has('summary'),
        'readonly' => false,
    ])

    @textEditorField([
        'name' => 'content',
        'id' => 'article_' . $article->id . '_content',
        'label' => 'Content',
        'required' => false,
        'value' => old('content', $article->content),
        'placeholder' => 'Create something amazing',
        'description' => '',
        'toolbar' => 'full',
        'resourceType' => get_class($article),
        'resourceId' => $article->id,
    ])

    <hr>

    <button type="submit" class="btn btn-primary">
        Save
    </button>

    <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">
        Cancel
    </a>

</form>
