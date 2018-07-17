<!-- resources/views/common/errors.blade.php -->

@if (count($errors))
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>{{ trans('message.error') }}</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
