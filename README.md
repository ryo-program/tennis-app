
# 庭球大学 硬式テニス部 紹介サイト
私は、大学で硬式テニス部に所属しているのですが、コロナ期間中新入生に部活について知ってもらうのが難しかった経験から今回このようなサイトがあれば良いなと思い作成しました。
今後もアップデートしていく予定です。

主な機能は、以下の4つです。

- **掲示板**(現役部員から新入生に情報を提供する)
- **Q&A**(新入生が現役部員に匿名で質問できる)
- **部員紹介**
- **管理者画面とユーザー画面で機能制限をつける**

# 実装した機能の詳細
- ユーザー画面と管理者画面の分離

## ユーザー画面で出来ること
- 掲示板へのコメントの追加
- Q&Aで質問の投稿

## 管理者画面で出来ること
- ログイン、ログアウト
- 掲示板の投稿、編集、削除、コメント
- Q&Aでユーザーからの質問に回答
- Q&Aにおける不適切な質問の削除
- 部員の追加、削除
- 部員のプロフィールに画像アップロード
- 学年で自動ソート

# 開発環境
- laravel 7.15.0
- MySQL
- heroku
- MAMP




