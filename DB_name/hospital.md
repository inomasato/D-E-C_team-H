## hospital
### 病院テーブル

|和名|属性名|型|PK|NN|FK|備考|
|:---|:---|:---|:---:|:---:|:---:|---|
|病院ID|hospital_id|int|@|@||auto|
|病院名|hospital_name|varchar(50)||@|||
|責任者名|hospital_master|varchar(50)||@|||
|ログインID|hospital_loginId|varchar(50)||@|||
|メールアドレス|hospital_mail|varchar(50)||@||「@」マーク無しは弾く|
|パスワード|hospital_password|varchar(30)||@||
|電話番号|hospital_tell|varchar(12)||@|||
|作成日時|hospital_created|datetime||@|||
|編集日時|hospital_updated|datetime||@|||
|削除日時|hospital_deleted|datetime||@|||


CREATE TABLE `hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(50) DEFAULT NULL,
  `hospital_master` varchar(50) DEFAULT NULL,
  `hospital_loginId` varchar(50) DEFAULT NULL,
  `hospital_mail` varchar(30) DEFAULT NULL,
  `hospital_password` varchar(30) DEFAULT NULL,
  `hospital_tell` varchar(12) DEFAULT NULL,
  `hospital_created` datetime DEFAULT current_timestamp(),
  `hospital_updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hospital_deleted` datetime DEFAULT NULL
)