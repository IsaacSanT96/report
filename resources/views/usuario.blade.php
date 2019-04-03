@extends('layouts.app')

@section('css')
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>


@endsection

@section('scripts')
<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>

@endsection




@section('content')


 <div class="col-xs-12">
          <div class="box">
          <a href="{{route('home')}}" type="submit" class="btn btn-primary"><i class="fa fa-arrow-left"></i> voltar</a>
            <div class="box-header">
              <h3 class="box-title">Lista de Usuarios</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="box-body table-responsive no-padding">
              <table id="example" class="table table-hover" >
                <tbody>
                <tr>
                  <th></th>
                  <th>Nome</th>
                  <th>Sobrenome</th>
                  <th>Email</th>
                  <th>Cargo</th>
                </tr>
                @foreach($users as $user)
    <tr>
    
      <td >{{{$user->id}}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->sobrenome}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->cargo}}</td>
      <td>
        <div class="tools">

        <button type="submit" class="btn btn-primary "><i class="fa fa-pencil-square-o"></i>  Editar</button>
            <a href="{{route('usuario.delete', $user->id)}}?{{time()}}" onclick="return confirm('Deseja excluir esse usuário?')">
            <button type="submit" class="btn btn-danger "><i class="fa fa-trash"></i>  Excluir</button>
            <!-- <i class="fa fa-trash" style="font-size:28px;color:red"></i> -->
            

          </a>        
        </div>

        
      </td>
    
      
    </tr>
  
      @endforeach
      <script>
    $(".delete").on("submit", function(){
        return confirm("Are you sure?");
    });
    </script>
      </tr>
              </tbody>
            </table>
            </div>
            
          </div>
          
        </div>

       

@endsection