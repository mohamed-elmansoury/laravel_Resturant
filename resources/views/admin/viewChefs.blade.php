<x-app-layout>
   
   </x-app-layout>
   <!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.admincss')
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap");
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  display: flex;
  justify-content: left;
  align-items: left;
  height: 100vh;
  background: linear-gradient(45deg,  blue);
  font-family: "Sansita Swashed", cursive;
}
.center {
  position: relative;
  padding: 50px 50px;
  background: #fff;
  border-radius: 10px;
}
.center h1 {
  font-size: 2em;
  border-left: 5px solid dodgerblue;
  padding: 10px;
  color: black;
  letter-spacing: 5px;
  margin-bottom: 60px;
  font-weight: bold;
  padding-left: 10px;
}
.center .inputbox {
  position: relative;
  width: 300px;
  height: 50px;
  margin-bottom: 50px;
}
.center .inputbox input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  border: 2px solid #000;
  outline: none;
  background: none;
  color: #000;
  padding: 10px;
  border-radius: 10px;
  font-size: 1.2em;
}
.center .inputbox:last-child {
  margin-bottom: 0;
}
.center .inputbox span {
  position: absolute;
  top: 14px;
  left: 20px;
  font-size: 1em;
  transition: 0.6s;
  font-family: sans-serif;
}
.center .inputbox input:focus ~ span,
.center .inputbox input:valid ~ span {
  transform: translateX(-13px) translateY(-35px);
  font-size: 1em;
}
.center .inputbox [type="button"] {
  width: 50%;
  background: dodgerblue;
  color: black;
  border: black;
}
.center .inputbox:hover [type="button"] {
  background: linear-gradient(45deg, greenyellow, dodgerblue);
}
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: rgba( 71, 147, 227, 1);
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: black;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: black;
    background: #4FC3A1;
}




/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: black;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}

  </style>
  </head>
  <body>
  <div class="container-scroller">
   @include('admin.navbar')

   <div class="center">
  <h1>Our Newsletter</h1>
  <form action="{{route('upLodeChefs')}}" method="POST" enctype= "multipart/form-data">
    @csrf
    <div class="inputbox">
      <input type="text" name="name" required="required">
      <span style="color:black ;">name</span>
    </div>
    
    <div class="inputbox">
      <input type="text" name="Specialization" required="required">
      <span style="color:blue ;">Specialization</span>
    </div>
    <div class="inputbox">
      <input type="file" name="image" required="required">
      
    </div>
    <div class="inputbox">
      <input type="submit" value="submit">
    </div>
  </form>
</div>

<div>
<h2 style="color:#f8f8f8">CHAFE INFORmation</h2>
<div  class="table-wrapper">
    <table class="fl-table">
        <thead>
         
        <tr>
        
            <th>name</th>
            <th>Specialization</th>
            <th>image</th>
            <th>action 1</th>
            <th>action 2</th>
        </tr>
        </thead>
        <tbody>

        @foreach($data as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->Specialization}}</td>
            <td><img width="100" height="100" src="chafesImage/{{$data->image}}" ></td>
            <td><a href="{{route('updateChafe',$data->id)}}">UPDATE</a></td>
            <td><a href="{{route('deleteChafe',$data->id)}}">DELETE</a></td>
        </tr>
        @endforeach
        
          
        <tbody>
    </table>
</div>
</div>
  

  </div>      
   @include('admin.adminjs')
    
  </body>
</html>