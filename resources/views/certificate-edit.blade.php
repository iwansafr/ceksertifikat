@extends('dashboard')
@section('content')
    @livewire('edit-certificate',['certificateId'=>$id])
@endsection