<form class="ui form error" action="{{ route('register.update') }}" method="post">

    {!! csrf_field() !!}

    @include('partials.select-with-icon',
    [
        'name' => 'language',
        'placeholder' => 'Select the Default Language',
        'collection' => [
            'en' => ['English', 'us flag'],
            'cn' => ['Chinese', 'cn flag']
        ]
    ])

    @include('partials.errors')

    <button class="ui button" type="submit">Save</button>

</form>