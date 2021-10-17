## operator
### 管理者テーブル

|和名|属性名|型|PK|NN|FK|備考|
|:---|:---|:---|:---:|:---:|:---:|---|
|管理者ID|operator_id|int|@|@||auto|
|管理者名|operator_name|varchar(50)||@|||
|ログインID|operator_loginId|varchar(30)||@|||
|パスワード|operator_password|varchar(30)||@|||
|病院ID|operator_hospital_id|int||@|@||
|作成日時|operator_created|datetime||@|||
|編集日時|operator_updated|datetime||@|||
|削除日時|operator_deleted|datetime|||||

CREATE TABLE `operator` (
  `operator_id` int(11) NOT NULL AUTO_INCREMENT,
  `operator_name` varchar(50) NOT NULL,
  `operator_loginId` varchar(30) NOT NULL,
  `operator_password` varchar(30) NOT NULL,
  `operator_hospital_id` int(11) NOT NULL,
  `operator_created` datetime NOT NULL DEFAULT current_timestamp(),
  `operator_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `operator_deleted` datetime DEFAULT NULL,
   PRIMARY KEY (`operator_id`),
   FOREIGN KEY (`operator_hospital_id`) REFERENCES `hospital`(`hospital_id`)
)