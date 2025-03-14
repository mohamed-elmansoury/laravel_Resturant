<x-app-layout>
   
   </x-app-layout>
   <!DOCTYPE html>
<html lang="en">
  <head>


  @include('admin.admincss')
  <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      margin: 15px 0;
      font-weight: 400;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input:hover, select:hover, textarea:hover {
      outline: none;
      border: 1px solid #095484;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #fff;
      font-size: 16px;
      color: black ;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
      .center {
  margin: auto;
  width: 30%;
  border: 3px solid green;
  padding: 10px;
  position: relative ;
  left: -50px;
}
.styled-table {
    border: 4px solid #666;
    padding: auto;
    margin: 10px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    align-items: center;
    background-color: #fff;
}
styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}


    </style>
  </head>
  <body>
  <div class="container-scroller">
   @include('admin.navbar')
   <div class="testbox center">
      <form action="{{route('upLodeFood')}}" method="POST" enctype= "multipart/form-data">
      @csrf
        <h1 class="center">FoodMenu Form</h1>
                 
        <div class="item">
          <p> title</p>
          <div>
            <input type="text" name="title" placeholder="title" require/>
           
          </div>
        </div>
        <div class="item">
          <p>price</p>
          <input type="text" name="price" placeholder="price" require/>
        </div>
        <div class="item">
          <input type="file" name="image"/>
        </div>
       <div class="item">
          <p>description</p>
          <input type="text" name="description" placeholder="description" maxlength="30" require/>
        </div>

        
        
       
       
        <div class="btn-block">
          <button type="submit" href="/">Send</button>
        </div>
      </form>
    </div>
    <div>
    <table class="styled-table">
    <thead>
        <tr  >
            <th>title</th>
            <th >price</th>
            <th>description</th>
            <th>image</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
      @foreach($data as $data)
        <tr>
            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td><img width="100" height="100" src="foodimage/{{$data->image}}" ></td>
            <td><a href="{{route('deleteFood',$data->id)}}">Delete</a></td>

        </tr>
        @endforeach
        
        <!-- and so on... -->
    </tbody>
    </table>
    </div>
  </div>
    </div>

    </div>
</div>
   @include('admin.adminjs')
    
  </body>
</html>
