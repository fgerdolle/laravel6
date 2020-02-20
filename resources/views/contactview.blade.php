@extends('layout')

@section('title', 'Contact List')

@section('content')

            <table>
                @foreach ($contacts as $contact)
                <tr>
                    <td><a href="{{url('contactlist/'.$contact->id)}}">{{$contact->id}}</a></td>
                    <td>{{$contact->firstName}}</td>
                    <td>{{$contact->lastName}}</td>
                    <td>{{$contact->email}}</td>
                
                </tr>   
                @endforeach
            </table>

@endsection