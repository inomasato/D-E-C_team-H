<form action="?" >
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
</form>

{{-- 
<div class="tweet_frame">
    <div class="tweet_head">
        <div class="icon_frame">
            <div class="icon" style="color:{{ $tweets_data->user_iconColor }}; background-color:{{ $tweets_data->user_iconBack }} ; border: solid {{ $tweets_data->user_iconFrame }}">
                {{ $tweets_data->user_iconText }}
            </div>
        </div>
        <div class="other_name">
            {{ $tweets_data->user_nickName }}
        </div>
    </div>
    <div class="tweet_content">
        {{ $tweets->tweet_content }}
    </div>
    <div class="tweet_footer">
        <div class="tweet_likeJudge">
            {{ $likeBtn }}
        </div>
    </div>
</div> --}}
