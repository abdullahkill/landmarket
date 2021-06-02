<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Multiple image upload Laravel</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
   <body>
  
<div class="container">
  <h3>Multiple image upload Laravel</h3>
   @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div><br/>
                @endif
  <div class="card">
    <form name="img" id="img_upload" method="post" action="{{route('image.store')}}" enctype="multipart/form-data">
        @csrf
    <div class="card-header">Please fill up all the Field's.</div>
    <div class="card-body">
        <div class="row">
       <div class="col-md-6">
                  <label for="Business Name">Business Name :</label>
                  <input type="text" class="form-control" id="business" placeholder="Enter business name" name="business_name">
               </div>
 
               <div class="col-md-6">
                  <label for="Business Image">Upload Multiple Files :</label>
                  <input type="file" class="form-control-file" id="business_img" name="business_imgs[]"  accept="image/*" multiple>
               </div>
            </div>
 
    </div> 
    <div class="col-md-3">
            <button type="submit" class="btn btn-block btn-info btn-sm">Save</button>
         </div><br/>
   
  </div>
</form>
</div> 
</body>
</html>
