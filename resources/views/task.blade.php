@extends('layouts.master')
@section('content')
    {{-- <home-component></home-component>
    <hr> --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="">TODO SPA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    {{-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> --}}
                     <router-link to="/" class="nav-link">Home <span class="sr-only">(current)</span> </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/about" class="nav-link">About Us</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/task" class="nav-link">Task</router-link>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <router-view></router-view>
@endsection
