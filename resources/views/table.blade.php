<table class="table table-bordered data-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
        </tr>
        
    </thead>
    <tbody>
    </tbody>
</table>
<script type="text/javascript">
    $(function () {
      var table = $('.data-table').DataTable({
          deferRender: true,
          processing: true,
          serverSide: true,
        //   "pageLength": 10,
          ajax: {
              "url": "{{ route('users') }}",
              "dataType": "json",
              "data":{id:1,name:'John'},
          },
          columns: [
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'created_at', name: 'date'},
          ]
      });
  
    });
  </script>