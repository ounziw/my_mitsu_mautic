# My Mitsu Mautic

concrete5 のフォームの送信時に、Mauticにもデータを送るアドオン。
jQueryを利用しているので、フォームのPHP部分を編集しなくても動作する。送信後に別ページに移動する場合、画面遷移のない場合、確認画面付きフォームの場合、など、様々なフォームで導入可能。

## 設定方法
(※Mauticの導入および初期設定は完了している前提)
ブロック編集画面で、下記を設定する。

+ アクションを実行する要素(ID/class) : (必須) mauticへの送信をいつ行うかを決定する。通常はフォームの送信ボタン。
+ mauticのURL : (必須) mauticのURLをhttpsから記入する。
+ URLの末尾に付けるアルファベット : （オプション） #sent のように、mautic側で識別しやすくするために記入する。

mauticへ送るデータは、ver0.9では下記に対応。
+ firstname要素(ID/class) : 取得したいフォーム項目のID/classを設定する。
+ lastname要素(ID/class) : 取得したいフォーム項目のID/classを設定する。
+ email要素(ID/class) : 取得したいフォーム項目のID/classを設定する。

## 導入方法

パッケージディレクトリに導入して有効化する。
このパッケージは中級者向け(advanced)なので、コンクリートファイブの管理画面から検索した場合は表示されない。concrete5.org からダウンロードしてインストールする必要がある。

## 導入例

[自動計算フォーム＆見積書発行ウェブサービス「マイ見積」](https://my-mitsu.jp/)

## ライセンス
MIT。
pull request はMITライセンスのコードのみ受け付けます。
