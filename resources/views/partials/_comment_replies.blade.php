@foreach($comments as $comment)
    <div class="display-comment">
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->content }}</p>
        <a href="" id="reply"></a>
        {{--<form method="post" action="{{ route('reply.add') }}">--}}
            {{--@csrf--}}
            {{--<div class="form-group">--}}
                {{--<input type="text" name="content" class="form-control" />--}}
                {{--<input type="hidden" name="review_id" value="{{ $review_id }}" />--}}
                {{--<input type="hidden" name="comment_id" value="{{ $comment->id }}" />--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<input type="submit" class="btn btn-warning" value="Reply" />--}}
            {{--</div>--}}
        {{--</form>--}}
        {{ Form::open(['method' => 'POST', 'route' => 'reply.add']) }}
        {{ Form::text('content', null, ['class' => 'form-control']) }}
        {{ Form::hidden('review_id', $review_id) }}
        {{ Form::hidden('comment_id', $comment->id) }}
        {{ Form::submit(__('Reply'), ['class' => 'btn btn-warning', 'id' => 'reply-comment-'.$comment->id]) }}
        {{ Form::close() }}
        @include('partials._comment_replies', ['comments' => $comment->replies])
    </div>
@endforeach

