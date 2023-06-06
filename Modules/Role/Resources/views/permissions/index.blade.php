@extends('admin.layouts.layout')

@section('panel-title','دسترسی ها')
@section('panel-first-breadcrumb-title','نقش ها و دسترسی ها')
@section('panel-second-breadcrumb-subject','دسترسی ها')

@section('panel-content')
    @foreach($permissions as $permission)
        {{$permission->name}}
    @endforeach
@endsection
