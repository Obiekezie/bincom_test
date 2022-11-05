
@extends('layouts.app')

@section('content')

<div class="card ">
    <h4> Result for  Sapele Ward 8 PU _   pollen unit</h4>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">SN</th>
            <th scope="col">Party Abbreviation</th>
            <th scope="col">Party Score</th>
            <th scope="col">Entered By</th>
            <th scope="col">Date Entered By</th>
          </tr>
        </thead>
        <tbody>
            @foreach($anypolling as $k => $result)
          <tr>
            <th scope="row">{{ ++$k}}</th>
            <td>{{$result->party_abbreviation}}</td>
            <td>{{$result->party_score}}</td>
            <td>{{$result->entered_by_user}}</td>
            <td>{{$result->date_entered}}</td>
      
          </tr>
          @endforeach
        
        </tbody>
      </table>
    </div>


    
@endsection