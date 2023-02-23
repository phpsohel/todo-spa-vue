@extends('layouts.master')
@section('content')
    {{-- <home-component></home-component>
    <hr> --}}
    <router-link to="/">Home </router-link>
    <router-link to="/about">About Us</router-link>
    <hr>
    <router-view></router-view>
@endsection
