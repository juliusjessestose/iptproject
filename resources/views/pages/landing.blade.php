@extends('layouts.app')

@section('content')
        <div class="bg-primary custom">
        <h1 class= "menu text-white"nav-items" ">Main menu</h1>
        <div class="container">
            <ul class="menu-ul">
               <li class="menu-li"><a class="nav-items text-decoration-none" href="{{url('/')">Home</a></li>
               <li class="menu-li"><a class="nav-items text-decoration-none" href="{{url('users')">Users</a></li>
               <li class="menu-li"><a class="nav-items text-decoration-none" href="{{url('accounts')">Accounts</a></li>
            </ul>

        </div>
    </div>
@endsection