@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<div class="container-fluid">
<section class="content-header">
      <h1>
        Mailbox
        <small>13 novas menssagens</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
      <br/>
    </section>
<div class="box box-primary">
<br/>

            <div class="box-header with-border">
              <h3 class="box-title">Report</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('store')}}" method="post" role="form">_
            {!! csrf_field() !!}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Informe o Email</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Relatório</label>
                  <br/>
                  <textarea class="form-control" rows="3" name="relatorio" placeholder="Informe as tarefas realizadas..." required></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Arquivo</label>
                  <input type="file" id="exampleInputFile" required>

                  <p class="help-block">Importante rever as informações antes de confirmar</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="checar" required> Confirmar
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Date picker</h3>
            </div>
            <div class="box-body">
              <!-- Date -->
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date range -->
              <div class="form-group">
                <label>Date range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date and time range -->
              <div class="form-group">
                <label>Date and time range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservationtime" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date and time range -->
              <div class="form-group">
                <label>Date range button:</label>

                <div class="input-group">
                  <button type="button" class="btn btn-default pull-right" id="daterange-btn" required>
                    <span>
                      <i class="fa fa-calendar"></i> Date range picker
                    </span>
                    <i class="fa fa-caret-down"></i>
                  </button>
                </div>
              </div>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
        

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="/inbox" class="btn btn-primary ">Compose</a>
              </div>
            </form>


            
          </div>
</div>
          
</body>
</html>
@endsection
