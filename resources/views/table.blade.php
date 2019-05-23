<table class="table table-bordered data-table">
    <thead>
        <tr>
            {{-- <th>ID</th> --}}
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            {{-- <th width="100px">Action</th> --}}
        </tr>
        
    </thead>
    <tbody>
            {{-- @foreach ($data as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->created_at}}</td>
                </tr>
            @endforeach --}}
    </tbody>
</table>
{{-- {{ $data->links() }} --}}
{{-- {{  $data->render()}} --}}
<script type="text/javascript">
    $(function () {
      
      var table = $('.data-table').DataTable({
          deferRender: true,
          processing: true,
          serverSide: true,
          // ordering: false,
          // searching: false,
        //   paging:false,
          ajax: {
              "url": "{{ route('users') }}",
              "dataType": "json",
          },
          columns: [
              // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'created_at', name: 'date'},
              // {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
  
    });
  </script>