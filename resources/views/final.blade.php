<html>
    <head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body class="bg-secondary">
        <center>
       <div class="container bg-dark text-light rounded-3 mt-5" style="height: 300px; width: 500px;">
      
      <h1 class="text-center ">
          Quizz Result
      </h1>
      
      <h2 class="text-center mt-5 ">Your Score is {{$user_score}} from {{$total}} question</h2>
     
       @if($user_score==$total)
       <h3 class="text-center mt-5 text-success mb-5">Exellent</h3>

       @elseif($user_score>=$total/2)
       <h3 class="text-center mt-5 text-warning mb-5">Good Job</h3>
       @else
       <h3 class="text-center mt-5 text-danger mb-5">Not Good</h3>
       @endif
</div>
</center>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>