@php
if($type === 'shops') {
    $path = 'storage/shops/';
} elseif($type === 'products') {
    $path = 'storage/products/';
}
@endphp
<div>
    @if(empty($filename))
    <img src="{{ asset('images/no_image.jpeg')}}">
    @else
    <img class="h-28" src="{{ asset($path . $filename)}}">
    @endempty
</div>