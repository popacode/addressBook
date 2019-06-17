<div class="messages">
    
   @if(!empty(@users))
        @foreach($users as $user)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">

                                    <span>{{ $user ->name }}</span>

                                    <span class="pull-right label label-info">
                                          {{$user->created_at}}
                                    </span>

                                </h3>
                            </div>

                            <div class = "panel-body">
                                {{ $user->email }}
                                <br />
                                {{ $user->phoneNumber }}
                                <br />
                                {{ $user->address }}
                                <hr/>
                                <div class="pull-right">
                                    <a class="btn btn-info" href="#">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </a>
                                    <button class="btn btn-danger" href="!">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </div>
                            </div>          
                        </div>
        @endforeach
    @endif
</div>
