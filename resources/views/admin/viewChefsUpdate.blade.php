<x-app-layout>
   
   </x-app-layout>
   <!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">

  @include('admin.admincss')
  <style>
    /* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: white;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
  </style>
  </head>
  <body>
  <div class="container-scroller">
   @include('admin.navbar')

   <div class="container">
  <form action="{{route('updateChefsFood',$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="fname"> Name</label>
    <input  style="color: blue;" type="text" id="fname" name="name"  value="{{$data->name}}">

    <label for="lname"></label>
    <input style="color: blue;" type="text" id="lname" name="Specialization"  value="{{$data->Specialization}}">
    
    <label for="lname">IMAGE</label>
    <img src="chafesImage/{{$data->image}}" height="300" width="300" alt="">
    
    
    <input type="FILE" id="lname" name="image" >
    

   

    
    <input type="submit" value="UPDATE">

  </form>
</div>
    

  </div>
  
   @include('admin.adminjs')
    
  </body>
</html>