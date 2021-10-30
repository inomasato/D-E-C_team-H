@foreach ($items as $item)

<form action="?" method="POST">
    @csrf
    <div class="tweet_frame">
        <button type="submit" formaction="myPage" name="other_id" value="{{ $item['user_id'] }}">
            <div class="tweet_head">
                <div class="icon_frame">
                    <div class="icon" style="color:{{ $item['user_iconColor'] }}; background-color:{{ $item['user_iconBack'] }}; border: solid{{ $item['user_iconFrame'] }}">
                        {{ $item['user_iconText'] }}
                    </div>
                </div>
                <div class="other_name">
                    {{ $item['template_word'] }}
                </div>
                <div class="tweet_params">
                    <div class="negaposi">{{ $item['tweet_type'] }}</div>
                    <div class="tweet_time"></div>
                </div>
            </div>
        </button>
    </div>
</form>
   
@endforeach