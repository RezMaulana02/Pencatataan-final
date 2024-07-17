@extends('layouts.app')

@section('title', '')

@section('contents')
<div>
    @notifyCss
    <x-notify::notify />
    @notifyJs
    <h1 class="font-bold text-2xl ml-3">Dashboard</h1>
</div>
@endsection
