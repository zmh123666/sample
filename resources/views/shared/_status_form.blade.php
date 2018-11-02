<form method="POST" action="{{ route('statuses.store') }}">
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea class="form-control" rows="3" placeholder="聊聊新鲜事_(:з」∠)_" name="content">{{ old('content') }}</textarea>
    <button type="submit" class="btn btn-primary pull-right">发布</button>

</form>