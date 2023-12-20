@extends('base')

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Document</title>

    <style>
          /* body {
            font-family: Arial, sans-serif;
            
         } */

        .title {
            /* display: flex; */
    
            align-items: center;
        }

        h2 {
            color: white;
            margin: 0;
        }

        a {
            text-decoration: none;
            color: #007bff;
            display: inline-block;
        }
        .button-container{
            text-align: left;   
            margin-left: 10px;
            
        }

        button {
            padding: 8px;
            margin-left: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color:rgb(47,79,79,0.8);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            color: white;
        }

        th {
            background-color: #f2f2f2;
            color: black;
        }

        tr:hover {
            background-color:rgb(0,0,0,0.5);
        }

       

        a.edit {
            background-color: #28a745;
        }
        .button-container {
            text-align: left;   
            margin-left: 20px;
          

        }

        a.view {
            background-color: #007bff;
        }

        .update-btn {
            background-color: #007bff;
            color: #fff;
        }

        .delete-btn {
            background-color: #dc3545;
            color: #fff;
        }
        .title h1{
            display: inline;
            color: rgb(220,220,220);
            margin-left: 34%;
            font-size: 80px;
            font-family: Arial, sans-serif;
            text-shadow: 5px 2px #0000FF;    
            }
       
    </style>
</head>
<body>
    <div class="title">
        <h1>Keyboards</h1>
        <div class="button-container">
            <a href="{{url('keyboard/create')}}"  class="btn btn-primary me-md-2" >Add new</a>
        </div>
    </div>
   
    <table>
        <thead>
            <tr>
                <th>Keyboard ID</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keyboards as $keyboard)
                <tr>
                    <td>{{ $keyboard->id }}</td>
                    <td>{{ $keyboard->brand }}</td>
                    <td>{{ $keyboard->model }}</td>
                    <td>{{ $keyboard->description }}</td>
                    <td>${{ $keyboard->price }}</td>
                    <td>  
                    <a href="{{ route('keyboard.edit', ['keyboard' => $keyboard->id]) }}" class="btn btn-primary">
                     Edit
                    </a>

                        <a href="{{ url('/keyboard/delete', $keyboard->id) }}">
                            <button class="delete-btn" onclick="return confirm('Are you sure to delete this?');">Delete</button>
                        </a> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

 @endsection 