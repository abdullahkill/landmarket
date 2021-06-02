<!DOCTYPE html>
<html lang="en">
   <head>
      <title>List Data</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <h2>List Data</h2>
         <a class="btn btn-primary" href="{{route('image.upload')}}" role="button">Add</a>
         <table class="table">
            <thead>
               <tr>
                  <th>S.no</th>
                  <th>Business Name</th>
                  <th>Business Image</th>
               </tr>
            </thead>
            <tbody>
               @foreach($data as $key => $data)
               <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{$data->business_name}}</td>
                  <td>
                     @foreach(json_decode($data->business_imgs, true) as $key => $media_gallery)
                     <a href="{{ url('/uploads/Img/MultipleImg/'.$media_gallery) }}" data-toggle="lightbox" data-title="Package Media Gallery" data-gallery="gallery">
                     <img src="{{ url('/uploads/Img/MultipleImg/'.$media_gallery) }}" class="img-fluid mb-2" alt="white sample"/ width="50" height="50">
                     </a>
                     @endforeach
                  </td>
               </tr>
            </tbody>
            @endforeach
         </table>
      </div>
   </body>
</html>