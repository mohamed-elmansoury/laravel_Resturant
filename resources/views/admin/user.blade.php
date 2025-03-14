<x-app-layout>
   
   </x-app-layout>
   <!DOCTYPE html>
<html lang="en">
  <head>
  <style>
    table{
        width: 100%;

        border: 5px solid;
    }
    table, th, td {
  border: 5px solid;
  
  padding: 15px;
  text-align: center;

}
  </style>

  @include('admin.admincss')
  </head>
  <body>
  <div class="container-scroller">
   @include('admin.navbar')
   <div style="position:relative ; right: -200px;top: 60px;" >
      <table >
        <tr>
          <th>name</th>
          <th>email</th>
          <th>action</th>
        </tr>
        @foreach($data as $data)
        <tr>
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
         @if($data->usertype ==0)
          <td><a href="{{url('/deleteUser',$data->id)}}">Delete</a></td>
          @else
          <td><a href="">Not Allow</a></td>

          @endif
        </tr>
        @endforeach
        
      </table>
      </div>
</div>
   @include('admin.adminjs')
    
  </body>
</html>
