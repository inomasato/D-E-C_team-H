@foreach ($items as $item)

<form action="?" method="POST">
    @csrf
    <div class="tweet_frame">
        <button type="submit" formaction="myPage" value="{{ $item }}">
            <div class="tweet_head">
                <div class="icon_frame">
                    <div class="icon" style="color:#FFFFFF; background-color:#2FBEC7 ; border: solid #A8A8A8">
                        ＠
                    </div>
                </div>
                <div class="other_name">
                    ニックネーム
                </div>
                <div class="tweet_params">
                    <div class="negaposi">ポジティブ</div>
                    <div class="tweet_time">30分前</div>
                </div>
            </div>
        </button>
        <button type="submit" formaction="reply" value="投稿ID">
            <div class="tweet_content">
                これがツイートの本文です。<br>
                コンテンツは255文字までです。<br>
                改行も反映されます。
            </div>
        </button>
        <div class="tweet_footer" >
            <button type="submit" formaction="index" value="投稿ID">
            <div class="tweet_likeJudge">
                0
            </div>
        </div>
    </div>
</form>
   
@endforeach

{{-- <form action="?" method="POST">
    @csrf
    <div class="tweet_frame">
        <button type="submit" formaction="myPage" value="ユーザーID">
            <div class="tweet_head">
                <div class="icon_frame">
                    <div class="icon" style="color:#FFFFFF; background-color:#2FBEC7 ; border: solid #A8A8A8">
                        ＠
                    </div>
                </div>
                <div class="other_name">
                    ニックネーム
                </div>
                <div class="tweet_params">
                    <div class="negaposi">ポジティブ</div>
                    <div class="tweet_time">30分前</div>
                </div>
            </div>
        </button>
        <button type="submit" formaction="reply" value="投稿ID">
            <div class="tweet_content">
                これがツイートの本文です。<br>
                コンテンツは255文字までです。<br>
                改行も反映されます。
            </div>
        </button>
        <div class="tweet_footer" >
            <button type="submit" formaction="index" value="投稿ID">
            <div class="tweet_likeJudge">
                0
            </div>
        </div>
    </div>
</form> --}}

