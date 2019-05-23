<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.8 Datatables Tutorial - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">

        // $(window).on('hashchange', function() {
    
        //         if (window.location.hash) {
    
        //             var page = window.location.hash.replace('#', '');
    
        //             if (page == Number.NaN || page <= 0) {
    
        //                 return false;
    
        //             }else{
    
        //                 getData(page);
    
        //             }
    
        //         }
    
        //     });
    
    
        // getData(0);
        // $(document).ready(function()
    
        // {
            
        //      $(document).on('click', '.pagination a',function(event)
    
        //     {
        //         debugger
        //         event.preventDefault();
    
        //         $('li').removeClass('active');
    
        //         $(this).parent('li').addClass('active');
    
        //         var myurl = $(this).attr('href');
    
        //         var page=$(this).attr('href').split('page=')[1];
    
        //         getData(page);
    
        //     });
    
        // });
    
    
    
        // function getData(page){debugger;
    
        //         $.ajax(
        //         {
        //             url: '?page=' + page,
        //             type: "get",
        //             datatype: "html"
    
        //         })
        //         .done(function(data)
        //         {
        //             debugger
        //             $("#tag_container").empty().html(data);
    
    
        //             // location.hash = page;
    
        //         })
    
        //         .fail(function(jqXHR, ajaxOptions, thrownError)
    
        //         {
    
        //               alert('No response from server');
    
        //         });
    
        // }
    
    </script>
</head>
<body>
    
<div class="container">
    <h1>Datatable with 100k rows</h1>
    <div id="tag_container">
        @include('table')
    </div>
</div>
   
</body>
</html>
