
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>
<?php include 'header.php'?>
<body >
  <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-5">
          
              <div class="text-center">
              <h3>Create product category</h3>
              <h1 id="data"></h1>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              
          <form role="form" id="form_id">
        
              <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Hosting Name " disabled type="text" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Product Name" type="text" name="prod_name" id="prod_name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <textarea name="mytextarea" id="mytextarea">
  
                    </textarea    >
                    <!-- <input class="form-control" placeholder="Product page link" type="text" name="page_link" id="page_link"> -->
                  </div>
                </div>
                <div class="form-group">
                 
                </div>
              
                <div class="row my-4">
                 
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary mt-4" id="submit" name="submit">Create account</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit your category Changes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" id="form_id">
        
        <div class="form-group">
            <div class="input-group input-group-merge input-group-alternative mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
              </div>
              <input class="form-control" placeholder="Hosting Name " disabled type="text" >
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-merge input-group-alternative mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
              </div>
              <input class="form-control" placeholder="Product Name" type="text" name="prod_name" id="prod_name">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-merge input-group-alternative mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
              </div>
              <textarea name="mytextarea" id="mytextarea">

              </textarea    >
              <!-- <input class="form-control" placeholder="Product page link" type="text" name="page_link" id="page_link"> -->
            </div>
          </div>
          <div class="form-group">
           
          </div>
        
          <div class="row my-4">
           
          </div>
          <div class="text-center">
            <!-- <button type="button" class="btn btn-primary mt-4" id="submit" name="submit">Create account</button> -->
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


  <!-- Button trigger modal -->
<button >
 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" >Confirmation Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2 style="text-align: center;">Are you sure to delete this product </h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>

  <div class="container-fluid">
  <div class="row">
  <div class="col-lg-3">
  </div>
  <div class="col-lg-9"  id="tableData">
  </div>
  </div>
  </div>
</body>
<script>

$(document).ready(function(){

$('#submit').click(function(){
  var prod_name=$('#prod_name').val();

  
var page_link = tinymce.get("mytextarea").getContent();
// var link1 = textarea.replace("<p>","");
// var link = link1.replace("</p>","");

   console.log(prod_name);
  
   
    $.ajax({
      url:'adminhelper.php',
      type:'POST',
      data:{action:'addprodcat',prod_name:prod_name ,page_link:page_link },
  
      success : function(data){
      
        $('#data').html(data);
      
        location.reload();
      }
  
    })
   
  });

}); 
  // $.ajax({
  //     url:'adminhelper.php',
  //     type:'POST',
  //     data:{action:'showprodlist' },
  
  //     success : function(data){
      
  //       $('#data1').html(data);
      
  
  //     }
  
  //   })
  $(document).ready(function(){
  showAllCustomer();
  //View Record
  function showAllCustomer(){
    $.ajax({
      url : "adminhelper.php",
      type: "POST",
      data : {action:"showprodlist"},
      success:function(response){
          $("#tableData").html(response);
          $("table").DataTable({
            order:[0, 'DESC']
          });
        }
      });
    }
   
  });

  

</script>

</html>