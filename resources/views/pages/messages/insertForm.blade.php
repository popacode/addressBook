@extends('index')

@section('content')

<form action ="/insert" method="POST" id="id-form_messages">
                
                <div class = "form-group">
                    {{ csrf_field() }}
                    <label for="name">Име: *</label>
                    <input class="form-control" placeholder="Име" name="name" type="text" id="name">
                </div>
                
                <div class="form-group">
                    <label for="email">Имейл:</label>
                    <input class="form-control" placeholder="Имейл" name="email" type="email" id="email">
                </div>
                
                 <div class="form-group">
                    <label for="phoneNumber">Телефонен номер: *</label>
                    <input class="form-control" placeholder="Телефонен номер" name="phoneNumber" type="text" id="phoneNumber">
                </div>
                
                 <div class="form-group">
                    <label for="address">Адрес:</label>
                    <input class="form-control" placeholder="Адрес" name="address" type="text" id="address">
                </div>
                
                <div class = "form-group">
                    <button class="btn btn-primary">Добави</button>
                </div>
</form>
    


<center>
    <table>
        <tr>
            <td>Име</td>
            <td>Имейл</td>
            <td>Телефонен номер</td>
            <td>Адрес</td>
            <td>Action</td>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{$value -> name}}</td>
            <td>{{$value -> email}}</td>
            <td>{{$value -> phoneNumber}}</td>
            <td>{{$value -> address}}</td>
            <td><a href="{{action('Controller@edit',$value->id)}}"><button>Edit</button></a>&nbsp;<a href="/delete/{{$value -> id}}"><button>Delete</button></a></td>
        </tr>
        @endforeach

    </table>
</center>

@endsection