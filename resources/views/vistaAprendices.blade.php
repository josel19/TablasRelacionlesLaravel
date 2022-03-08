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
    <th scope="col" >Nombre Ficha</th>
    <th scope="col" >Coordinacion</th>

 </thead>
 <tbody>
    @foreach ($aprendices as $aprendiz) 
       <tr>
         <th scope="row"> {{$aprendiz->id}} </th>
         <td>  {{$aprendiz->nombre}} </td>
         <td>  {{$aprendiz->apellido}} </td>
         <td>  {{$aprendiz->telefono}} </td>
         <td>  {{$aprendiz->direccion}} </td>
         <td>  {{$aprendiz->correo}} </td>
         <td>  {{$aprendiz->edad}} </td>
         <td>  {{$aprendiz->fichas->nombre_ficha}} </td>
         <td>  {{$aprendiz->fichas->coordinacion}} </td>
     </tr>
  @endforeach