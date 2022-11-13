@props([
    'title',
    'message' => '初期値です。',
    'content' => '本文書記です。'
])

<div {{ $attributes->merge(['class' => 'border-2 shadow-md w-1/4 p-2']) }} class="border-2 shadow-md w-1/4 p-2">
    <div>{{ $title }}</div>
    <div>画像</div> 
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div> 