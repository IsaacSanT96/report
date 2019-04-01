@extends('layouts.app')

@section('css')



@section('content')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

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
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th></th>
                  <th>Nome</th>
                  <th>Sobrenome</th>
                  <th>Email</th>
                </tr>
                @foreach($users as $user)
    <tr>
    
      <th scope="row">{{{$user->id}}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->sobrenome}}</td>
      <td>{{$user->email}}</td>
      @endforeach
    </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

</body>
</html>

@endsection