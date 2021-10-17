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
|電話番号|hospital_tell|datetime||@|||
|作成日時|hospital_created|datetime||@|||
|編集日時|hospital_updated|datetime||@|||
|削除日時|hospital_deleted|datetime||@|||