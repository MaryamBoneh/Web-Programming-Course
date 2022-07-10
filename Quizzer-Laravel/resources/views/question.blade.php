@include('../header');
    <body class="q_background">
        <div class="container d-flex justify-content-center align-items-center mt-5">
            <div class="row mt-2 w-100">
                <div class="card" style="width: 33%; background: rgba(0,0,0,0.0);">
                    <p class="card-text">
                        <form method="get" action="/add-question">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">                       
                            <button type="submit" class="btn btn-success mt-3">سوال جدید</button>
                        </form>
                    </p>    
                </div>
                <div class="card soal" style="width: 33%; margin: 10% 0">
                    <div class="card-body">
                        <!-- <h5 class="card-title my-3">سوال 1 از 24</h5> -->
                        <h6 class="card-subtitle mb-2">{{ $question->NAME }}</h6>
                        <p class="card-text">
                            <form method="post" action="/check-answer">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="question_id" value="{{ $question->id }}">
                                @foreach($question->answers as $answer)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{ $answer->TEXT }}
                                        </label>
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-success mt-3">بعدی</button>
                            </form>
                        </p>
                    </div>
                </div>
                <div class="card" style="width: 33%; background: rgba(0,0,0,0.0);">
                </div>
            </div>
        </div>
    </body>
@include('../footer');