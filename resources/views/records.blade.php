@extends('padrao')
@section('content')
<section>
    {{-- Tela onde deve retornar o usuario e o record --}}
    <style>
      body{
        background-image: url('/img64789faa231705.85386216.jpg');
        background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed; 
      }
    </style>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Rank</th>
          <th scope="col">Usuario</th>
          <th scope="col">Record</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
         
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
        </tr>
      </tbody>
    </table>
</section>
@endsection