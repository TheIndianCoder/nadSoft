<!doctype html>
<html lang="en">

<head>
    <title>Add Second Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
</head>

<body>
    <div class="container">
        <div class="card mb-3 mt-3">
            <div class="card-title">
                <h2 class="text-center">Add Second Product</h2>
            </div>
            <div class="card-body">
                <form  method="post" id="product_form">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="product_name" id="product_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>MRP</label>
                                <input type="number" name="mrp" id="mrp" step="0.01" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Selling price</label>
                                <input type="number" name="selling_price" id="selling_price" step="0.01" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <button class="btn btn-success mb-3" type="button" id="addProduct">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(()=>{
            $('#addProduct').on('click', function(e){
                e.preventDefault();
                var formData = $('#product_form').serialize();
                // var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{url('add-product/')}}",
                    type:'post',
                    data:formData,
                    dataType: "json",
                    success: function(response){
                        if(response){
                            window.location.replace("http://127.0.0.1:8000/welcome");
                        }
                    }
                })
            })
        })
    </script>
    
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>