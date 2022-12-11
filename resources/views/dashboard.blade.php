@extends('first-package::layout')

@section('content')

<div class="container mt-5">
  <div class="header">
    <h1 class="d-inline">All User List</h1>
    <a href="{{ route('logout') }}" class="nav-link" style="float: right; font-size:22px">Logout</a>
    <a href="{{ route('user.register') }}" class="nav-link" style="float: right; font-size:22px">Register</a>
  </div>
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