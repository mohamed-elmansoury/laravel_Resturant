<x-app-layout>
   
   </x-app-layout>
   <!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.admincss')
  </head>
  <body>
    <style>
        .zui-table {
    border: solid 1px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
}
.zui-table thead th {
    background-color: #DDEFEF;
    border: solid 1px #DDEEEE;
    color: #336B6B;
    padding: 10px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
}
.zui-table tbody td {
    border: solid 1px #DDEEEE;
    color: #333;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
}
    </style>
  <div class="container-scroller">
   @include('admin.navbar')
      
    
   <div>
   <table class="zui-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>phone</th>
            <th>guest</th>
            <th>time</th>
            <th>date</th>
            <th>message</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $data)
        <tr>
            

            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->guest}}</td>
            <td>{{$data->time}}</td>
            <td>{{$data->date}}</td>
            <td>{{$data->message}}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
   </div>

  
       

   </div>

   @include('admin.adminjs')
    
  </body>
</html>
