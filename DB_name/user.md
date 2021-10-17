## user
### ユーザーテーブル

|和名|属性名|型|PK|NN|FK|備考|
|:---|:---|:---|:---:|:---:|:---:|---|
|ユーザーID|user_id|int|@|@||auto|
|管理者名|user_name|varchar(50)||@|||
|ログインID|user_loginId|varchar(50)||@|||
|パスワード||varchar(50)||@|||
|電話番号|user_tell||||@||
|作成日時|user_created||@||||
|編集日時|user_updated||@||||
|削除日時|user_deleted||||||