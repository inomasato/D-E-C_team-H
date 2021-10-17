## post

### 投稿テーブル

|和名|属名|型|PK|NN|FK|備考|
|:---|:---|:---|:---:|:---:|:---:|---|
|ID|post_id|int(11)|@|@||auto|
|ユーザーID|post_user_id|int(11)||@|@||
|件名|post_title|varchar(100)||@|||
|本文|post_content|varchar(255)||@|||
|作成日時|post_created|datetime||@|||
|更新日時|post_updated|datetime||@|||
|いいね|post_like_count|int(11)||@||default=0|

CREATE TABLE `post_table` (
  `post_id` int(11) NOT NULL,
  `post_user_id` int(11) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `post_created` datetime NOT NULL DEFAULT current_timestamp(),
  `post_updated` datetime NOT NULL DEFAULT current_timestamp(),
  `post_like_count` int(11) DEFAULT NULL
) 