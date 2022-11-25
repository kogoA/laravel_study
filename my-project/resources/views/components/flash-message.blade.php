@props(['status' => 'info'])

@php
if(session('status') === 'info'){$bgColor = 'bg-blue-300';}
if(session('status') === 'alert'){$bgColor = 'bg-red-500';}
@endphp

@if(session('message'))
    <div class="{{ $bgColor }} rounded w-1/2 text-center mx-auto p-2 text-white margin-bottom: 2rem;">
        {{ session('message')}}
    </div>
@endif