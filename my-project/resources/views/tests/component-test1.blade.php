<x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
    コンポーネント１
    <x-tests.card title="タイトル" content="本文" :message="$message"/>
    <x-tests.card title="タイトル" />
    <x-tests.card title="cssを変更したい" class="bg-red-300"/>
</x-tests.app>