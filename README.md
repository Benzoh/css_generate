# css_generate
とりあえずラジオボタンとチェックボックスのCSSを作る


---

＃参考
http://kenz0.s201.xrea.com/weblog/2013/07/csscss_checkbox.html
http://kenz0.s201.xrea.com/weblog/2012/07/onoff_flipswitch_html5css3_generator.html

ふきだし
http://ilikepixels.co.uk/drop/bubbler/

＃仕様

## 入力値
- チェックボックス/ラジオボタンのスタイルを選択
     - それ自体にスタイルをつけておく
     - 値と
- 色選択
     - 値を渡す
- サイズ？
     - 値を渡す
     - 選択値に値をつけておいて

## ビュー
- 選択したものからコードを生成
     - コードは書いておく？
          - それぞれファイル化しておいてインクルードする
     - Gistに置いとく？
     - ソースから取得できる？
     - 色とサイズだけ入力値から設定する
- ビューに表示
     - コード表示領域必要
     - HTMLとCSS
- クリックで値取得してコード表示？
- カラーピッカー設置
- 数値設定バーの設置

---

# ファイル構成

- index.php 振り分け
- function.php 関数定義
- tmp/ ビュー表示のテンプレート格納
	- base.php べース
	- input.php 初期画面
- code/ 表示用コードの設置
	- type-A.php
	- type-B.php
	- type-C.php


＃ TODO

- カラーピッカーの置き換え＆ 調整