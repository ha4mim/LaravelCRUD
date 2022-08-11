<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Proudct</title>
    <!-- FontAwsome -->
    <link rel="stylesheet" href="<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />">
    <!-- Bootstrap 5.2.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
            <form action= method="post">
                <div class="form-group">
                    <label for="pName">Product Name</label>
                    <input type="text" id="pName" name="pName" placeholder="Enter Your Product Name" class="form-control my-3" require autofocus>
                </div>
                <div class="form-group">
                    <label for="pDes">Product Description</label>
                    <input type="text" id="pDes" name="pDes" placeholder="Enter Your Product Details" class="form-control my-1">
                </div>
                <div class="form-group">
                    <label for="pCat">Product Catagory</label>
                    <input type="text" id="pCat" name="pCat" placeholder="Enter Your Product Catagory" class="form-control my-1">
                </div>
                <div class="form-group">
                    <label for="pScat">Product ubcatagory</label>
                    <input type="text" id="pScat" name="pScat" placeholder="Enter Your Product subcatagory" class="form-control my-1">
                </div>
                <div class="form-group">
                    <label for="pPrice">Product Price</label>
                    <input type="text" id="pPrice" name="pPrice" placeholder="Enter Your Product Price" class="form-control my-3">
                </div>
                <div class="form-group">
                    <label for="pStatus">Product Status</label>
                    <select name="pStatus" id="pStatus" class="form-control my-1">
                        <option value="0">---Select Status---</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <button class="btn btn-success my-1 form-control">Save</button>
            </form>
            </div>
        </div>
    </div>
   

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>