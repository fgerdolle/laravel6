@extends('layout')

@section('title', 'Contact List')

@section('content')

            <table>
                @foreach ($contacts as $contact)
                <tr>
                    <td><a href="{{url('contactlist/'.$contact->id)}}">{{$contact->id}}</a></td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->adress}}</td>
                </tr>   
                @endforeach
            </table>

@endsection