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
            
            <div class="text-right"><b>Всички хора:</b> <i class="badge">{{ $count }}</i></div><br/>
            
            <div>
                <button id='myButton'>Виж хората</button>
                
                <script type="text/javascript">
                    document.getElementById("myButton").onclick = function(){
                        location.href = "http://127.0.0.1:8000/database";
                    };
                </script>
            </div>

@stop