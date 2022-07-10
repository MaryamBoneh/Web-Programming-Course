@include('../header');

    <body>
        <div class="container w-50">
            <div class="card" dir="rtl">
                <div class="card-header">افزودن پرسش</div>
                <div class="card-body">
                    <form action="add" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="m-3">
                            <label class="form-label">پرسش</label>
                            <input type="text" class="form-control" name="text">
                        </div>

                        <div class="m-3">
                        <label class="form-label mt-3">پاسخ ها</label>
                            <ol id="ol-tag">
                                <div class="mb-2">
                                    <li><input type="text" class="form-control" name="answer[]"></li>
                                </div>
                                <div class="mb-2">
                                    <li><input type="text" class="form-control" name="answer[]"></li>
                                </div>
                                <div class="mb-2">
                                    <li><input type="text" class="form-control" name="answer[]"></li>
                                </div>
                                <div class="mb-2">
                                    <li><input type="text" class="form-control" name="answer[]"></li>
                                </div>
                            </ol>
                        </div>
                        <div class="m-3">
                            <label class="form-label"> پاسخ درست</label>
                            <input type="number" class="form-control w-100" name="true" value="1" min="1">
                        </div>

                        <button type="submit" class="btn btn-success">ذخیره</button>
                    </form>
                </div>
            </div>      
        </div>      
    </body>
@include('../footer');
