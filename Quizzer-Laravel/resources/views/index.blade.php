@include('../header');
<body dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Quizzer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                <div class="card p-4" style="width: 50%;">
                    <div class="card-body">
                        <h5 class="card-title py-3">به Quizzer خوش اومدی
                            🌹
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            تعداد سوالات این آزمون 
                            ۵
                            تا می باشد
                        </h6>
                        <p class="card-text">
                            زمان آزمون: 
                           ۲
                            دقیقه
                        </p>
                        <a href="/question/1" class="btn btn-success mt-3 w-100">
                            بزن بریم!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('../footer');