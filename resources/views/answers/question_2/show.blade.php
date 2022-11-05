
@extends('layouts.app')

@section('content')

<div class="card ">
    <h4> Total for this polling unit ={{$pageTitle}}</h4>
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
            @foreach($lgas as $k => $result)
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