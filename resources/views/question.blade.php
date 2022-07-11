<html>

<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
<div class="container bg-dark" style="height: 100%;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Quiz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>

        </nav>

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">

                    <div class="card">
                        <h5 class="card-header">
                            {{$question->id}}
                        </h5>
                        <div class="card-body">
                         
                            <p class="card-text">
                            {{$question->text}}

                            </p>
                            <form action="/check-answer" method="post">
                               @foreach($question->answers as $answer)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answer" id="flexRadioDefault1" value="{{$answer->id}}">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      {{$answer->text}}
                                    </label>
                                </div>
                            @endforeach
                            <input type="hidden" name="question_id" value="{{$question->id}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" class="btn btn-primary" value="Next">
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>





<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>