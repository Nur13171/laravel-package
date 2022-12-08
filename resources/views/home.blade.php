@extends('first-package::layout')

@section('content')

<div class="container mt-5">
    <h2>All User List</h2>
    <br>
      <table class="table">
      <thead>
        <tr>
          <th>Nmae</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Activity</th>
          <th>Longitude</th>
          <th>Lattitude</th>
          <th>Salary Amount</th>
          <th>Cash Amount</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{ $user->User->name }}</td>
          <td>{{ $user->User->email }}</td>
          <td>{{ $user->User->phone }}</td>
          <td>{{ $user->Activity->activity_name }}</td>
          <td>{{ $user->Activity->longitude }}</td>
          <td>{{ $user->Activity->lattitude }}</td>
          <td>{{ $user->salary_amount }}</td>
          <td>{{ $user->cash_amount }}</td>
        </tr>
        @endforeach
       
        
      </tbody>
    </table>
  </div>

@endsection