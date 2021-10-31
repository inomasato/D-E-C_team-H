@foreach ($replys as $item)
    
<form action="?" method="POST">
    @csrf
    <div class="tweet_frame">

        <div class="afterbutton">
            <div class="tweet_head">
                <button class="icon_frame" type="submit" name="other_id" value="{{ $item['user_id'] }}">
                        <div class="icon" style="color:{{ $item['user_iconColor'] }}; background-color:{{ $item['user_iconBack'] }}; border: solid{{ $item['user_iconFrame'] }}">
                            {{ $item['user_iconText'] }}
                        </div>
                </button>
                <div class="other_name">
                    {{ $item['template_word'] }}
                </div>
                <div class="delete_btn_frame">
                    <button type="submit" class="tweet_delete" name="delete_id" value="{{ $item['user_id'] }}">
                        取り消す
                    </button>
                </div>

            </div>
        </div>

    </div>
</form>
@endforeach