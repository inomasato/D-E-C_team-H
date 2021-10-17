## user
### ユーザーテーブル

|和名|属性名|型|PK|NN|FK|備考|
|:---|:---|:---|:---:|:---:|:---:|---|
|ユーザーID|user_id|int|@|@||auto|
|本名|user_name|varchar(50)||@|||
|ニックネーム|user_nickName|varchar(50)||@|||
|ログインID|user_loginId|varchar(30)||@|||
|パスワード|user_password|varchar(50)||@|||
|病院ID|user_hospital_id|int||@|@||
|病名|user_sick|varchar(60)||@|||
|ゲスト数|user_guestCount|int||@|||
|フォロー数|user_followCount|int||@|||
|作成日時|user_created|datetime|||@||
|編集日時|user_updated|datetime|||@||
|削除日時|user_deleted|datetime|||||

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_nickName` varchar(50) NOT NULL,
  `user_loginId` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_hospital_id` int(11) NOT NULL,
  `user_sick` varchar(60) NOT NULL,
  `user_guestCount` int(11) DEFAULT 0,
  `user_followCount` int(11) DEFAULT 0,
  `user_created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_deleted` datetime DEFAULT NULL,
   PRIMARY KEY (`user_id`),
   FOREIGN KEY (`user_hospital_id`) REFERENCES `hospital`(`hospital_id`)
)