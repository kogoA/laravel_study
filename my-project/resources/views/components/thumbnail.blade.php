@php
if($type === 'shops') {
    $path = 'storage/shops/';
}
@endphp
<div>
    @if(empty($filename))
    <img src="{{ asset('images/no_image.jpeg')}}">
    @else
    <img src="{{ asset($path . $filename)}}">
    @endempty
</div>