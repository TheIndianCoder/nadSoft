<!doctype html>
<html lang="en">

<head>
    <title>Welcome Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="card mb-4 mt-4">
            <div class="card-title">
                <h3 class="text-center">Welcome Page</h3>
                <a href="{{url('destroy-session')}}" style="float: right;"><button class="btn btn-danger mr-4">Go to Home</button> </a>
            </div>
            <div class="card-body">
                <?php if($productData == ''){
                    ?>
                    <h3 class="text-center">Welcome Member</h3>
                    <?php 
                }else{
                    ?>
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped">
                                <thead>
                                    <?php $i = 1; ?>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Mrp</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productData as $item)
                                        <tr>
                                            <th scope="row">{{ $i }} </th>
                                            <td>{{ $item->product_name }} </td>
                                            <td>{{ $item->mrp }} </td>
                                            <td>{{ $item->selling_price }} </td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php 
                } ?>
            </div>
        </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
