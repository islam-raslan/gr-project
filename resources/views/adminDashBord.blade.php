<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Bootstrap4 Templeate"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>

    <link rel="stylesheet" href="../library/fontawesome-free-5.15.2-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../library/hover/hover-min.css">
    <link rel="stylesheet" href="../library/animate+wow/animate.css">
    <link rel="stylesheet" href="/css/admin.css"> 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    



   
</head>
<body>
    
    <div class=" container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="bod row">
                    <div class="le col-sm-2  text-center d-flex flex-column justify-content-center text-light" style="background-color: rgb(53, 52, 54);">
                      <a href="#d1"> <p class="lead h1 text btn btn-dark btn-outline-primary"  id="p1">Home</p> </a>
                      <a href="#d2"> <p class="lead h1 text btn btn-dark btn-outline-primary"  id="p2">Order</p> </a>
                      <a href="#d3"> <p class="lead h1 text btn btn-dark btn-outline-primary"  id="p3">Sliders's</p> </a>
                      <!-- <a href="#d4"> <p class="lead h1 text"  id="p4">Connection</p> </a>
                      <a href="#d5"> <p class="lead h1 text"  id="p5">Help</p> </a> -->
                    </div>
                             <!-- 00000000000000 table for add &edit product 0000000000000000 -->

                    <div id="d1" class="col-sm-10  ">
                        <div class="row  flex-column justify-content-center">
                            <div class="col-12">
                                <div class="row">


                            <div class="cart container-fluid  col-12">
                                <div class="row">
                              <div class="container col-12">
                                <div class="table-responsive">
                                    <div class="table-wrapper">
                                        <div class="table-title">
                                            <div class="row">
                                                <div class="col-sm-2"><h2>Home <b>Details</b></h2></div>
                                                <div class="col-sm-6">
                                                  <div class="btn-group table1" data-toggle="buttons">
                                                      <label class="btn btn-info active">
                                                          <input type="radio" name="status" value="all" checked="checked"> All
                                                      </label>
                                                      <label class="btn btn-success">
                                                          <input type="radio" name="status" value="active"> Active
                                                      </label>
                                                      <label class="btn btn-warning">
                                                          <input type="radio" name="status" value="inactive"> Inactive
                                                      </label>
                                                      <label class="btn btn-danger">
                                                          <input type="radio" name="status" value="expired"> Expired
                                                      </label>							
                                                  </div>
                                              </div>
                                                <div class="col-sm-4">
                                                    <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ////////// -->
                                        <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1>Edit Products<h1>
<form action="/admin" method="PUT">
@csrf
@method('put')
<input class="form-control" type="hidden" name="id">
<p class="par">image name</p>
<input class="form-control" type="text" name="image" >
<p class="par">product name</p>
<input class="form-control" type="text" name="name" >
<p class="par">states</p>
<input class="form-control" type="text" name="states" >
<p class="par">description</p>
<input class="form-control" type="text" name="description" >
<p class="par">price</p>
<input class="form-control" type="text" name="price" >
<p class="par">brand</p>
<input class="form-control" type="text" name="brand">
<p class="par">category</p>
<input class="form-control" type="text" name="category" >



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
                                        <table class="table table-one table-bordered">
                                            <thead>
                                                <tr>
                                                  <th >Image</th>
                                                    <th>Name</th>
                                                    <th>States</th>
                                                    <th>Price</th>
                                                    <th>Description</th>
                                                    <th>brand</th>
                                                    <th>Category</th>
                                                    <th >Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <form action="adminDashbord" method="POST" enctype="multipart/form-data">
                                           @csrf
                                                <tr data-status="active">
                                                  <td class="no img"><input class="form-control" type="file" name='image' ></td>
                                                    <td><input class="form-control" type="text" name='name' placeholder='name'></td>
                                                    <td><input class="form-control" type="text" name='states' placeholder='states'></td>
                                                    <td><input class="form-control" type="text" name='price' placeholder='Price'></td>
                                                    <td><input class="form-control" type="text" name='description' placeholder='description'></td>
                                                    <td><input class="form-control" type="text" name='brand' placeholder='brand'></td>
                                                    <td><input class="form-control" type="text" name='category' placeholder='category'></td>
                                                    <td  class="no d-flex flex-row justify-content-center">
                                                    <button class='addbut' type="submit" ><i class="material-icons">&#xE03B;</i></button>
                                                        <a class="add" title="Add" data-toggle="tooltip" type="submit"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                        

                                                    </td>
                                                </tr>   
                                                </form> 
                                            @foreach($products as $ProductData)
                                                <tr data-status="active">
                                                  <td class="no img"><img src="/storage/uploads/{{$ProductData['image']}}" width='130px' alt="not found"></td>
                                                    <td>{{$ProductData['name']}}</td>
                                                    <td>{{$ProductData['states']}}</td>
                                                    <td>{{$ProductData['price']}}</td>
                                                    <td>{{$ProductData['description']}}</td>
                                                    <td>{{$ProductData['brand']}}</td>
                                                    <td>{{$ProductData['category']}}</td>
                                                    <td  class="no d-flex flex-row justify-content-center">
                                                        <a class="add" title="Add" data-toggle="tooltip" type="submit"><i class="material-icons">&#xE03B;</i></a>
                                                        <a class="edit" href="{{'admin'.$ProductData['id']}}" onClick="handelData({{$ProductData}})" data-toggle="modal" data-target="#update" data-whatever="@fat" title="Edit"><i class="material-icons">&#xE254;</i></a>
                                                        <a class="titleDelete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                      

                                                    </td>
                                                </tr>
                                                @endforeach  
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>      </div> 
                            
                            </div>
                            

                            <!-- 000000000000000 end tabels for add & edit product 000000000000000 -->


                            <div id="d2"  class="cart   container-fluid  col-12 cartCss2 flex-column align-items-center justify-content-center bg-light">
                                
                              <div class="container-lg">
                                <div class="table-responsive">
                                    <div class="table-wrapper">
                                        <div class="table-title">
                                            <div class="row">
                                                <div class="col-sm-2"><h2>Order <b>List</b></h2></div>
                                                <div class="col-sm-6">
                                                  <div class="btn-group table2" data-toggle="buttons">
                                                    <label class="btn btn-info active">
                                                        <input type="radio" name="status" value="all" checked="checked"> All
                                                    </label>
                                                      <label class="btn btn-info active">
                                                          <input type="radio" name="status" value="Out-for-delivary" checked="checked"> Out-for-delivary
                                                      </label>
                                                      <label class="btn btn-success">
                                                          <input type="radio" name="status" value="on-queue"> On the Queue
                                                      </label>
                                                      						
                                                  </div>
                                              </div>
                                               
                                            </div>
                                        </div>
                                        <table class="table table-tow table-bordered">
                                            <thead>
                                                <tr>
                                                <th>customer_id</th>
                                                
                                                    <th>product_id</th>
                                                    <th>Order Date</th>
                                                    <th>Status</th>
                                                    <th>Tottel Price</th>
                                                    <th>quantity</th>
                                                    <th>Action</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                            @foreach($order as $data)
                                            <tr data-status="active">
                                                <td>{{$data['customer_id']}}</td>
                                                <td>{{$data['product_id']}}</td>
                                                <td>{{$data['order_date']}}</td>
                                                <td>{{$data['status']}}</td>
                                                <td>{{$data['total_price']}}</td>
                                                <td>{{$data['quantity']}}</td>
                                                <td  class="no d-flex flex-row justify-content-center">
                                                <a class="add" title="Add" data-toggle="tooltip" type="submit"><i class="material-icons">&#xE03B;</i></a>
                                                
                                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                             

                                                    </td>
                                            </tr>
                                                @endforeach    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>   
            
            
                            </div>

                            <!-------------------sliders tabel-------------------- -->


                            <div id="d3" class="cart container-fluid cartCss3 col-12 text-center">
                               
                                <div class="row">
                                    
                                <!--------------------------table slider 1----------------------------------------->

                                    <div class="container rounded">
                                        <div class="table-responsive">
                                            <div class="table-wrapper rounded">
                                                <div class="table-title">
                                                    <div class="row">
                                                        <div class="col-sm-2"><h2 class="text-danger"> <b>Details 1</b></h2></div>
                                                        <div class="col-sm-6">
                                                         
                                                      </div>
                                                       
                                                    </div>
                                                </div>
                                                <table class="table table-three table-bordered">
                                                    <thead>
                                                        <tr>
                                                        
                                                            <th style="width: 450px;">Image</th>
                                                            <th>ID</th>
                                                            <th>position</th>
                                                            <th>product_id</th>
                                                            <th>Action</th>
                                                          
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                      
                                                    @foreach($sliderproducts as $data)
                                                           <tr data-status="active">
                                    
                                                                 <td class="no img"><img src="public/uploads/{{$data['image']}}" width='130px' alt="not found"></td>
                                                                 <td>{{$data['id']}}</td>
                                                                 <td>{{$data['position']}}</td>
                                                                 <td>{{$data['product_id']}}</td>
                                                                 <td  class="no d-flex flex-row justify-content-center">
                                                                    <a class="add" title="Add" data-toggle="tooltip" type="submit"><i class="material-icons">&#xE03B;</i></a>
                                                                    <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                                   

                                                    </td>
                                                </tr>
                                                @endforeach  
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>   
                                           <!--------------------------table slider 2----------------------------------------->
                               

                            <!-- 000000000000000000000000000000 -->


        



                        </div>
                    </div></div>
                </div>
                </div>
            </div>
        </div>
    </div>




   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkGq6tjCCUTbCSzWF-Dute0Zlos0Lnq0w&callback=initMap">
    </script>
    <script src="/js/adminDB.js"></script>
    <script>
    function handelData(data){
        editeData = data;
        const dialogUpdateId = document.querySelector('#update input[name="id"]').value = data.id? data.id: '';
        const dialogUpdateImage = document.querySelector('#update input[name="image"]').value = data.image? data.image: '';
        const dialogUpdateName = document.querySelector('#update input[name="name"]').value = data.name? data.name: '';
        const dialogUpdateStates = document.querySelector('#update input[name="states"]').value = data.states? data.states: '';
        const dialogUpdatePrice = document.querySelector('#update input[name="price"]').value = data.price? data.price: '';
        const dialogUpdateDescription = document.querySelector('#update input[name="description"]').value = data.description? data.description: '';
        const dialogUpdateCategory = document.querySelector('#update input[name="category"]').value = data.category? data.category: '';
        const dialogUpdateBrand = document.querySelector('#update input[name="brand"]').value = data.brand? data.brand: '';
        console.log(editeData);
    }
    </script>
</body>
</html>