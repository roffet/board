## カフェ情報投稿掲示板
LaravelとBootstrapで実装しました。vueとajaxは何も使ってないです。
徐々に追加していこうと考えてます。

### タグ機能
多対多のリレーションを使いました。
ただ、oldヘルパーを効かせることがまだできてないです。（投稿時と編集時）
一つのタグでの検索はできますが、複数のタグ選択で検索することはできない状態です。

### いいね機能
一人につき一回できる仕様です。
あるユーザーのいいねしたポストを検索できるようにもしてます。

### ポスト投稿
CRUDは実装しました。ログインユーザーが投稿者と一致する時のみ、編集と削除をできるようにポリシーで認可処理を実装しました。

### コメント投稿

### ユーザー検索

### デプロイ
AWSの無料枠を使って、EC2にデプロイしてます。
