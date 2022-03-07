@extends('layout')
@section('content')
<table class="table table-hover">
  <thead class="thead-dark">
    <th scope="col" >Id</th>
    <th scope="col" >Nombre</th>
    <th scope="col" >Apellido</th>
    <th scope="col" >telefono</th>
    <th scope="col" >Direccion</th>
    <th scope="col" >Correo</th>
    <th scope="col" >Edad</th>
    <th scope="col" >Id_ficha</th>

 </thead>
 <tbody>
    @foreach ($aprendices as $aprendiz) 
       <tr>
         <th scope="row"> {{$aprendiz->id}} </th>
         <td>  {{$aprendiz->Nombre}} </td>
         <td>  {{$aprendiz->Apellido}} </td>
         <td>  {{$aprendiz->Telefono}} </td>
         <td>  {{$aprendiz->Direccion}} </td>
         <td>  {{$aprendiz->Correo}} </td>
         <td>  {{$aprendiz->Edad}} </td>
         <td>  {{$aprendiz->ficha_id}} </td>
     </tr>
  @endforeach