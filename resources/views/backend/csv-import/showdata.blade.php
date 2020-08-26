@extends('backend.layouts.master')
@section('page-title','Partner')
@section('page-content')
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                          @include('backend.partials._message')
                        <table class="table">
                            <thead>
                                <th>Sl.</th>
                                <th>Pid</th>
                                <th>bestellnummer( {{$count_bestellnummer}} )</th>
                                <th>Tax Rate From Database</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <?php $i=0; ?>
                                @foreach($import_data as $data)
                                <?php $i++; ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$data->pid}}</td>
                                    <td>{{$data->bestellnummer}}</td>
                                    <td>{{$data->tax_rate_from_database}}</td>
                                    <td>{{$data->status}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  function deleteconfirm()
  {
    deletedata = confirm("Are you sure to delete permanently?");
    if (deletedata != true)
    {
      return false;
    }
  }
</script>
@endsection
