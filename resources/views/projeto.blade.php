@extends('layouts.app')

@section('css')

@section('content')
<div class="container-fluid">

<div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Donut Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height: 297px; width: 594px;" width="594" height="297"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
</div>
@endsection