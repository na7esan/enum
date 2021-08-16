【enumとは】
Enumerated
https://ejje.weblio.jp/content/enumerated

【一言で説明すると】
関連のある複数の定数をまとめたもの

【学習内容】
enumについて学習する

【enumを使う理由】
DBにtinyInt型で保存して、負担を減らすため
tinyIntなら保存容量はたったの1バイト
https://style.potepan.com/articles/19197.html

【実装の方法】
enumを利用してモデルやconfig/const.phpでenumを定義して、これらをビュー側から利用する

【enumを記述する場所】
1．関連するモデルに直接記述する
2．特定のモデルに関連しないのであればconfig/const.phpを作成する(例えば都道府県とか)
今回は1で実装する

【作成アプリ】
・タスクアプリ
・カテゴリをセレクトボックスで入力できるようにする

【必要な機能】
CRUD

【達成目的】
カテゴリをenumを利用して数値で保存できるようになる

【URL】
リソースコントローラに従う

【モデル名】
Task

【ルーティング】
https://gyazo.com/86e7cbe9155c9af8b487fd04a6481451


【作成を終えての感想】
モデルにenumを定義する方法がわかった
さらにアクセサを定義することにより、数値を定数に対応させた文字列で取得できることもわかった
編集画面でカテゴリを出力するさいにはselectedを不要する必要があるので注意
フォームに関してはlaravel collective をインストールしたほうがよいのだろうか？
