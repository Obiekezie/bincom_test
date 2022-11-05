
@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="p-4">
    <h4>Get results for each pollen unit</h4>
    <br>

    <div class="col-md-6">
        <form action="{{route('question_2.show',8)}}" method="GET" >
            {!! csrf_field() !!}
        <select class="form-control inputClass" id="relation" aria-describedby="inputGroupPrepend" name="lgaId" required>
            <option selected value="">Select local government</option>    
            @foreach($lgas as $lga)
            <option value="{{$lga->uniqueid}}">{{$lga->lga_name}}</option>
            @endforeach
          </select> 
          <br>
          <br>
          <br>

          <button class="btn btn-primary" type="submit"> Get results</button>



    </div>

    {{-- <a href="{{route('question_2.show',8)}}" class="btn btn-secondary"> get results </a> --}}

    </div>
    </div>


    
@endsection