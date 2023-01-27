# cssのビルドコマンド
npm run build

画像のダミーデータはpublic/imagesフォルダ内に
sample1.jpg ~として保存指定rます

php artisan storage:link で
storageフォルダにリンク後、

storage/app/public/productsフォルダに保存すると表示されます。

ショップの画像も表示する場合は
storage/app/public/shopsフォルダを作成し
画像を保存してください。