

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ProjetStudents</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  
  <script type="text/javascript">
  $(document).ready(function() {
    $('#inscription').click(function() {
      $.ajax({
        type: "POST",
        url: 'goto.php',
        data: {
          nom: $("#nom").val(),
          email: $("#email").val(),
          password: $("#password").val(),
        }
      });
      window.location.replace('admin.php');
    });
  });
  </script>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>systeme d'attente</h1>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-4" style="margin-top:20px;">
      <div class="card">
        <div class="card-header">inscrivez-vous</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label>Non</label>
              <input type="text" name="nom" id="nom" class="form-control" />
            
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control" />
        
            </div>
            <div class="form-group">
              <label>Enter Password</label>
              <input type="password" name="password" id="password" class="form-control" />
    
            </div>
            <div class="form-group">
              <button name="inscription" id="inscription" class="btn btn-info"> inscristion</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">

    </div>
  </div>
</div>

</body>
</html>