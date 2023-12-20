@extends('base')

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif
<head>
   
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
            margin-left: 32%;
            font-size: 80px;
            font-family: Arial, sans-serif;
            text-shadow: 5px 2px #0000FF;    
        }
       
    </style>
</head>
<body>
    <div class="title">
        <h1>Percussions</h1>
        <div class="button-container">
            <a href="{{url('percussion/create')}}"  class="btn btn-primary me-md-2" >Add new</a>
        </div>
    </div>
   
    <table>
        <thead>
            <tr>
                <th>Percussion ID</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($percussions as $percussion)
                <tr>
                    <td>{{ $percussion->id }}</td>
                    <td>{{ $percussion->brand }}</td>
                    <td>{{ $percussion->model }}</td>
                    <td>{{ $percussion->description }}</td>
                    <td>${{ $percussion->price }}</td>
                    <td>  
                    <a href="{{ route('percussion.edit', ['percussion' => $percussion->id]) }}" class="btn btn-primary">
                     Edit
                    </a>
                       
                       
                        <a href="{{ url('/percussion/delete', $percussion->id) }}"> 
                            <button class="delete-btn" onclick="return confirm('Are you sure to delete this?');">Delete</button>
                        </a> 
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

 @endsection 