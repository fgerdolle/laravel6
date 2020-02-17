@extends('layout')

@section('title', 'USERS MVC')

@section('content')

            <table>
                @foreach ($users as $user)
                <tr>
                    <td><a href="{{url('usersMVC/'.$user->id)}}">{{$user->id}}</a></td>
                    <td>{{$user->firstName}}</td>
                    <td>{{$user->lastName}}</td>
                </tr>   
                @endforeach
            </table>

@endsection