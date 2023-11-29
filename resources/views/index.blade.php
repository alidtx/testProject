<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Demo</title>
   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap.min.css" rel="stylesheet" >


  </head>
  <body>


 <div class="container"> 
 <div class="col-lg-6 ">
 <H3>Supplier</H3>
 <form action="{{route('supplier_post')}}"  method="post">
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Supplier Name</label>
    <input type="text" name="supplier_name" class="form-control" id="supplier_name"  placeholder="Supplier Name">
    <small id="emailHelp" class="form-text text-muted"> 
    @error('supplier_name')
    <div class="alert alert-danger" role="alert">
    {{$message}}		
    </div>
    @enderror
    </small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  <br>
  <br>
  <br>
  <br>
<H3>Item Name</H3>
<form action="{{route('item_post')}}"  method="post">
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Item Name</label>
    <input type="text" name="item_name" class="form-control" id="item_name"  placeholder="item_name">
    <small id="emailHelp" class="form-text text-muted">
       
    @error('item_name')
    <div class="alert alert-danger" role="alert">
    {{$message}}		
    </div>
    @enderror

    </small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 <br>
  <br>
  <br>
  <br>

<H3>Purchase Order</H3>
<form action="{{route('purchase_order')}}"  method="post">
 @csrf
  <div class="form-group">
    <label for="color">color</label>
    <select name="color" id="color" class="form-control">
              <option value="">Select Color</option>
              <option value="1">Red</option>
              <option value="2">blue</option>
              <option value="3">black</option>
    </select>
  </div>


  <div class="form-group">
    <label for="meterial_name">Material Name</label>
    <select name="meterial_name" id="meterial_name" class="form-control">
              <option value="">Select  meterials Name</option>
              <  @foreach($Material as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach()
    </select>
  </div>

  <div class="form-group">
    <label for="supplier_name">Supplier Name</label>
    <select name="supplier_name" id="supplier_name" class="form-control">
              <option value="">Supplier Name</option>
                @foreach($supplier as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach()
    </select>
  </div>
  

  <div class="form-group">
  <label for="exampleInputEmail1">Unit</label>
  <input type="text" class="form-control" id="unit" name="unit"  placeholder="Unit">    
  </div>

  
  <div class="form-group">
  <label for="exampleInputEmail1">Qty</label>
  <input type="text" class="form-control" id="qty" name="qty"  placeholder=" Qty ">    
  </div>


  <div class="form-group">
  <label for="exampleInputEmail1">Unit Price</label>
  <input type="text" class="form-control" id="unit_price" name="unit_price"  placeholder="Unit Price">    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 <div>

 <table id="example" class="table table-striped" style="width:100%">

        <thead>
            <tr>
                <th>Supplier Name</th>
                <th>Color</th>
                <th>Item Name</th>
                <th>Unit</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Total Price</th>
            </tr>
        </thead>

        <tbody>
 @foreach($unit as $item)
            <tr>
                <td>{{$item->suplpier->name}}</td>
                 @if($item->color==1)
                 <td>Red</td>
                 @elseif($item->color==2)
                 <td>Blue</td>
                 @elseif($item->color==3)
                 <td>Black</td>
                 @endif
                
                <td>{{$item->material->name}} </td>
                <td>{{$item->unit}}</td>
                <td>{{$item->qty}}</td>
                <td>{{$item->unit_price}}</td>
                <td>{{$item->unit_price * $item->qty}}</td>
            </tr>
@endforeach()
            

            
        </tbody>

    </table>

</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" ></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap.min.js" ></script>

    <script>
    new DataTable('#example');
</script>

  </body>
</html>
