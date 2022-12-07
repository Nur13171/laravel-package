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
          <th>Longitude</th>
          <th>Lattitude</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John</td>
          <td>john@example.com</td>
          <td>01858734034</td>
          <td>102983.83</td>
          <td>192723923.433</td>
        </tr>
        <tr>
          <td>Mary</td>
          <td>mary@example.com</td>
          <td>01858734034</td>
          <td>102983.83</td>
          <td>192723923.433</td>
        </tr>
        <tr>
          <td>July</td>
          <td>july@example.com</td>
          <td>01858734034</td>
          <td>102983.83</td>
          <td>192723923.433</td>
        </tr>
      </tbody>
    </table>
  </div>

@endsection