# いいねのテーブル

## like_table

|和名|属名|型|PK|NN|FK|備考|
|:---|:---|:---|:---:|:---:|:---|:---|
|ライクid|like_id|int|@|@||auto|
|ユーザーid|like_user_id|int||@|@||
|投稿id|like_post_id|int||@|@||
|押した時間|create|datetime||||


CREATE TABLE `like_table` (
  `like_id` int NOT NULL,
  `like_user_id` int NOT NULL,
  `like_post_id` int NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
