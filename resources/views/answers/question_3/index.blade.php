
@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="p-4">
    <h4>Store result for all parties for a new Polling unit</h4>
    <br>

    <div class="col-md-6">
        <form action="" method="POST" >
            {!! csrf_field() !!}

          <input type="number" name="party_score" class="form-control" placeholder="Score">
          <br>
          <select class="form-control inputClass" id="relation" aria-describedby="inputGroupPrepend" name="party_abbreviation" required>
            <option selected value="">Select party</option>    
            @foreach($parties as $party)
            <option value="{{$party->partyid}}">{{$party->partyname}}</option>
            @endforeach
          </select> 
          <br>
          <br>
          <select class="form-control inputClass" id="relation" aria-describedby="inputGroupPrepend" name="ward_id" required>
            <option selected value="">Ward</option>    
            @foreach($wards as $ward)
            <option value="{{$ward->ward_id}}">{{$ward->ward_name}}</option>
            @endforeach
          </select> 
          <br>
          <br>
          <select class="form-control inputClass" id="relation" aria-describedby="inputGroupPrepend" name="lga_id" required>
            <option selected value="">Select LGA</option>    
            @foreach($lgas as $lga)
            <option value="{{$lga->lga_id}}">{{$lga->lga_name}}</option>
            @endforeach
          </select> 
          <br>
          <input type="number" name="polling_unit_id" class="form-control" placeholder="polling unit id">
          <br>
          
          <br>
          <input type="text" name="entered_by_user" class="form-control" placeholder="Entered by user">
          <br>
          <br>
          <input type="text" name="polling_unit_name" class="form-control" placeholder="polling unit name">
          <br>
          <br>
          <input type="text" name="polling_unit_description" class="form-control" placeholder="polling unit description">
          <br>
          <br>
          <input type="number" name="polling_unit_number" class="form-control" placeholder="polling unit number">
          <br>
          <br>
          <input type="number" name="uniquewardid" class="form-control" placeholder="unique ward id">
          <br>
 
          <br>
          <br>

          <button class="btn btn-primary" type="submit"> Submit score</button>



    </div>

    {{-- <a href="{{route('question_2.show',8)}}" class="btn btn-secondary"> get results </a> --}}

    </div>
    </div>


    
@endsection