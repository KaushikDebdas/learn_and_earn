@extends('welcome')

@section('title','Appoint')

@section('content')

<section class="mt-5">
    
        <div class="container profile">
            <div class="row">
                <div class="col-md-2 col-sm-6">
                    <div class="card bg-light" style="width: 18rem;"> {{-- upload_images/{{ $row->Image }} --}}
                        @foreach ($data as $row)
                        <img class="profile-img" src="{{ asset('path/to/asset') }}" alt="{{ $row->UserName }}" >
                        <br>
                        @endforeach
                        
                        <ul class="list-group list-group-flush">
                            <a href="{{ URL::to('undermaintanance') }}" style="text-decoration: none; text-align:center;">
                                <li class="list-group-item">Live Chat</li>
                            </a>
                            <a href="{{ URL::to('undermaintanance') }}" style="text-decoration: none; text-align:center;">
                                <li data-toggle="modal" data-target="#exampleModalCenter" class="list-group-item">Comments</li>
                            </a>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6 col-sm-6 offset-3">
                    <div class="card bg-light">
                        @foreach ($data as $row)
                        <div class="card-body">   
                            <h3 class="card-title">Profile Information</h3>
                            <p class="card-text">Name: {{ $row->UserName }}</p>
                            <p class="card-text">Email: {{ $row->Email }}</p>
                            <p class="card-text">Phone: {{ $row->PhoneNumber }}</p>
                            <p class="card-text">Strat Date: {{ date('M j, Y ', strtotime($row->Created_At)) }}</p>
                            <p class="card-text">Tutor Ratting: 50</p>
                            <form action="enrollappoint" method="post">
                                @csrf
                                <input type="hidden" name="postid" value="{{ $postid }}">
                                <input type="hidden" name="username" value="{{ $row->UserName }}">
                                <input type="submit" class="btn submitbtn" value="Appoint">
                            </form>
                            {{-- <input type="button" class="btn tt-button" name="" id="" value="Appoint"> --}}
                            {{-- <a href="#" class="btn tt-button">Appoint</a> --}}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection