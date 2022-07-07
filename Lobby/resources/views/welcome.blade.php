<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ url('css/style.css')}}" />
        <link rel="stylesheet" href="{{ url('css/all.css')}}">
        <link rel="stylesheet" href="{{ url('css/bootstrap.css')}}" />
        <title>Lobby</title>
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <div class="col-12">
                        @foreach($messages as $message)
                            <div class="card" style="width: 100%;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$message->NAME}}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{$message->created_at}}</h6>
                                    <p class="card-text">{{$message->MESSAGE}}</p>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <form method="post" action="/send-message">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="NAME" class="form-control" id="name" >
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Text</label>
                            <textarea class="form-control" name="MESSAGE" id="text" rows="5"></textarea>
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</html>
