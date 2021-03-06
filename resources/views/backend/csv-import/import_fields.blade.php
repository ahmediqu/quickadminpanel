

            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                  
                          @include('backend.partials._message')
                          <div class="table-responsive">
                            <form class="form-horizontal" method="POST" action="{{url('admin/import_process')}}">
                                <input type="hidden" name="csv_data_file_id" value="{{ $csv_data_file->id }}" />
    {{ csrf_field() }}

    

    <table class="table">
                                @if (isset($csv_header_fields))
                                <tr>
                                    @foreach ($csv_header_fields as $csv_header_field)
                                        <th>{{ $csv_header_field }}</th>
                                    @endforeach
                                </tr>
                                @endif
                                @foreach ($csv_data as $row)
                                    <tr>
                                    @foreach ($row as $key => $value)
                                        <td>{{ $value }}</td>
                                    @endforeach
                                    </tr>
                                @endforeach
                                <tr>
                                    @foreach ($csv_data[0] as $key => $value)
                                        <td>
                                            <select name="fields[{{ $key }}]">
                                                @foreach (config('app.db_fields') as $db_field)
                                                    <option value="{{ (\Request::has('header')) ? $db_field : $loop->index }}"
                                                        @if ($key === $db_field) selected @endif>{{ $db_field }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    @endforeach
                                </tr>
                            </table>

    <button type="submit" class="btn btn-primary">
        Import Data
    </button>
    
</form>
   </div>                         
                          
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

