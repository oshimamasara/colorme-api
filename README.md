## カラーミーショップAPIのサンプル

> JSON Sample https://codecamp.o-namae.com/color_me_shop_api_demo_code03.php

1. レンタルサーバーなどにPHPファイルの設定（カラーミーFTPはPHP❌）
2. カラーミー デベロッパーで id と key を取得
3. PHPファイルの作成
4. 認証URLの確認（スコープ）
5. URLにアクセス  
6. トークンを確認
7. PHPでAPIにアクセス --> JSON
8. JavaScriptでJSON読み込み、HTML出力


#### ４の認証用URL

```
https://api.shop-pro.jp/oauth/authorize?client_id=62f3191221b851d6fc117e054b4d68d1e3f144db55aea877ff9fc2cd36817ad5&redirect_uri=https://codecamp.o-namae.com/colorme_api/01.php&response_type=code&scope=read_products%20write_products%20read_sales
```

手順：　[youtube](https://youtu.be/vLUBe7RnhA0)

+ [カラーミーデベロッパー](https://developer.shop-pro.jp/my)
+ [カラーミーデベロッパー Doc](https://developer.shop-pro.jp/my)


