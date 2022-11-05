
@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="p-4">
    <h4>Add new Polling unit</h4>
    <br>

    <div class="col-md-6">
        <form action="/question_3.store" method="POST" >
            {!! csrf_field() !!}
   
          <br>
          <br>
          <br>

          <input type="number" name="polling_unit_uniqueid" class="form-control" placeholder="polling unit id">
          <br>
   
       
          <select class="form-control inputClass" id="relation" aria-describedby="inputGroupPrepend" name="party_abbreviation" required>
            <option selected value="">Select party</option>    
            @foreach($part as $party)
            <option value="{{$party->partyid}}">{{$party->partyname}}</option>
            @endforeach
          </select> 
             <br>
          <input type="number" name="party_score" class="form-control" placeholder="Party score">
          <br>
          <input type="number" name="name" class="form-control mb-3" placeholder="Enter by user">
          <br>
          <br>
          <br>
          

          <button class="btn btn-primary" type="submit"> Create</button>
          



    </div>

    {{-- <a href="{{route('question_2.show',8)}}" class="btn btn-secondary"> get results </a> --}}

    </div>
    </div>


    
@endsection