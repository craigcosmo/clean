@forelse ($threads as $thread)
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="level">
                <div class="flex">
                    <h4>
                        <a href="{{ $thread->path() }}">
                            @if (auth()->check() && $thread->hasUpdatesFor(auth()->user()))
                                <strong>
                                    {{ $thread->title }}
                                </strong>
                            @else
                                {{ $thread->title }}
                            @endif
                        </a>
                    </h4>

                    <h5>
                        Posted By: <a href="{{ route('profile', $thread->creator) }}">{{ $thread->creator->name }}</a>
                    </h5>
                </div>
                <div style="padding: 0 5px 0 5px;">
                    <a href="{{ $thread->path() }}">
                        {{ $thread->replies_count }} {{ str_plural('reply', $thread->replies_count) }}
                    </a>
                </div>  
                <div style="padding: 0 5px 0 5px; border: 1px solid gray;">
                    <a href="/threads/{{ $thread->channel->slug }}">
                        {{ $thread->channel->name }}
                    </a>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <div class="body">{{ $thread->body }}</div>
        </div>

        <div class="panel-footer">
            {{ $thread->visits }} Visits
        </div>
    </div>
@empty
    <p>There are no relevant results at this time.</p>
@endforelse