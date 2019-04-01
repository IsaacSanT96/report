@extends('layouts.app')

@section('css')

@section('content')
<div class="container-fluid">
<div class="box">
<br/>
<a href="{{route('home')}}" type="submit" class="btn btn-primary"><i class="fa fa-arrow-left"></i> voltar</a>
            <div class="box-header">
            
              <h3 class="box-title">Registros</h3>

              <div class="box-tools">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">«</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">»</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Chamados</th>
                  <th>Progress</th>
                  <th style="width: 40px">Status</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Update software</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">70%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">90%</span></td>
                </tr>
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('chamado')}}" type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Criar Novo</a>
                <button type="submit" class="btn btn-danger "><i class="fa fa-trash"></i>  Excluir</button>
                
              </div>
          </div>
</div>          
@endsection
