<html>

<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="addQ.php">Admin Panel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <body class="bg-secondary">
    <div class="container mt-5">
      <h2>Welcome To Admin Panel</h2>
<div class="card text-white bg-dark mb-3 " style="width: 45%;">
  <div class="card-header">Add Question</div>
  <div class="card-body">
  <form action="add" method="post">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="mb-3">
                                <label class="form-label">Question</label>
                                <input type="text" class="form-control" name="text">
                            </div>

                            <button type="button" class="btn btn-success btn-sm mt-3" onclick="add_Answer()">+</button>
                            <button style="width: 30px;" type="button" class="btn btn-danger btn-sm mt-3" onclick="remove_Answer()">-</button>

                            <div id="answers">
                            <label class="form-label mt-3">Answers</label>
                                <ol id="ol-tag">
                                    <div class="mb-3">
                                        <li><input type="text" class="form-control" name="answer[]"></li>
                                    </div>
                                    <div class="mb-3">
                                        <li><input type="text" class="form-control" name="answer[]"></li>
                                    </div>
                                </ol>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">True Answer</label>
                                <input type="number" class="form-control" name="A_true" value="1" >
                            </div>

                            <button type="submit" class="btn btn-success">Add</button>
                        </form>
  </div>
</div>

<script>
  function add_Answer()
{
    var answer_div_tag = document.getElementById("answers");

    var li_tag = document.createElement("LI");
    var ol_tag = document.getElementById("ol-tag");

    var input_tag = document.createElement("INPUT");
    input_tag.classList.add("form-control");
    input_tag.setAttribute("type", "text");
    input_tag.setAttribute("name", "answer[]");

    var div_tag = document.createElement("DIV");
    div_tag.classList.add("mb-3");

    li_tag.appendChild(input_tag);
    div_tag.appendChild(li_tag);
    ol_tag.appendChild(div_tag)
    answer_div_tag.appendChild(ol_tag);
}

function remove_Answer()
{
    // var answer_div_tag = document.getElementById("answers");
    var ol_tag = document.getElementById("ol-tag");

    if(ol_tag.children.length > 2)
    {
        ol_tag.lastChild.remove();
    }
}
   </script>
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
</body>

</html>