<div class="card-body">
    <p><b>{{ $review->title }}</b></p>
    <p>{{ $review->body }}</p>
    <hr />
    <h4 id="display_comments">{{ __('Display Comments') }}</h4>
    @include('partials._comment_replies', ['comments' => $review->comments, 'review_id' => $review->id])
    <hr />
    <div id="add_comment"><h4>{{ __('Add comment') }}</h4></div>
    {{ Form::open(['method' => 'POST', 'route' => 'comment.add']) }}
    {{ Form::text('content', null, ['class' => 'form-control', 'id' => 'content']) }}
    {{ Form::hidden('review_id', $review->id, ['id' => 'review_id']) }}
    {{ Form::submit(__('Add comment'), ['class' => 'btn btn-warning', 'id' => 'ajaxSubmit']) }}
    {{ Form::close() }}
</div>