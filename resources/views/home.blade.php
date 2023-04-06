<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9 Ajax </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
            <h1>Crud Laravel 9 and Ajax</h1>
            <button class="btn btn-primary" onclick="create()">Add New Data</button>
            <div id="read" class="mt-3"></div>
            </div>
        </div>
    </div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Input Form</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div id="page" class="p-2"></div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        // Read Database
        $.get("{{ url('read') }}". {}, function(data,status){
            $("read").html(data);
        });
        // Create Data
        function create(){
            $.get("{{url('create')}}",{},function(data,status){
                $("#exampleModalLabel").html('Create Mahasiswa');
                $("#page").html(data);
                $("#exampleModal").modal('show');

            });
        }

        // Untuk proses create data
        function store(){
            var name = $("#npm","#name","#phone","#address").val();
            $.ajax({
                type:get,
                url:"{{url('store')}}",
                data: "npm=" + npm + "&name=" + name + "&phone=" + phone + "&address=" + address,
                success:function(data){
                    $(".btn-close").click();
                }
            });
        }
    </script>
</body>
</html>