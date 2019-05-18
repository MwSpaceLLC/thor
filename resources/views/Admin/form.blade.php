@extends('Admin.app')

@section('content')

    <div class="container">
        <div class="jumbotron mt-3">
            <form method="post" action="{{$modulelink}}&formPostData">
                <h2>If u have clear install of Thor Addon, Try to insert data in demo table...</h2>
                <div class="row">
                    <div class="col-md-4">
                        <label for="exampleInputtext1">text field</label>
                        <input name="text" type="text" class="form-control" id="exampleInputtext1"
                               aria-describedby="textHelp" placeholder="Enter text" required="">
                        <small id="textHelp" class="form-text text-muted">We'll never share your text with anyone
                            else.
                        </small>
                    </div>
                    <div class="col-md-4">
                        <label for="exampleInputtext1">email field</label>
                        <input required="" name="email" type="email" class="form-control" id="exampleInputtext1"
                               aria-describedby="textHelp" placeholder="Enter text">
                        <small id="textHelp" class="form-text text-muted">We'll never share your text with anyone
                            else.
                        </small>
                    </div>
                    <div class="col-md-4">
                        <label for="exampleInputtext1">number field</label>
                        <input required="" name="number" type="number" class="form-control" id="exampleInputtext1"
                               aria-describedby="textHelp" placeholder="Enter text">
                        <small id="textHelp" class="form-text text-muted">We'll never share your text with anyone
                            else.
                        </small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleInputtext1">text field</label>
                        <textarea required="" name="textarea" class="form-control" id="exampleInputtext1"
                                  aria-describedby="textHelp" placeholder="Enter text"></textarea>
                        <small id="textHelp" class="form-text text-muted">We'll never share your text with anyone
                            else.
                        </small>
                    </div>
                </div>
                <hr>
                <div class="row text-right">
                    <a href="{{$modulelink}}&settings" type="button" class="btn btn-warning">Go Back</a>
                    <button type="submit" class="btn btn-primary">Submit Data</button>
                    <div class="form-check">
                        <input name="_dump" class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Dump data without insert in database
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection