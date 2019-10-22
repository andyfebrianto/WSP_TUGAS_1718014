<?php
$data = file_get_contents('mhs.json');
$mhs = json_decode($data, true);
$mhs = $mhs['mahasiswa'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Profil Mahasiswa</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Web Service Profile</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Profil Mahasiswa</h1>
            </div>
        </div>

        <div class="row">
            <?php foreach ($mhs as $row) : ?>
                <div class="col-md-4" style="margin-bottom: 30px">
                    <div class="card" style="width: 350px">
                        <img src="<?php echo $row['foto']; ?>" class="card-img-top" alt="..." style="height: 350px">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $row['nama']; ?></h5>
                            <p class="card-text"><?php echo $row['status']; ?> dengan NIM <?php echo $row['nim']; ?> ini berasal dari <?php echo $row['alamat_asal']; ?>.</p>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['nim']; ?>">Lihat Profil</a>
                       
                              <!-- The Modal -->
							  <div class="modal" id="myModal<?php echo $row['nim']; ?>" >
							    <div class="modal-dialog" >
							      <div class="modal-content">
							        <!-- Modal Header -->
							        <div class="modal-header">
							          <h4 class="modal-title"><?php echo $row['nama']; ?></h4>
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							        </div>
							        <!-- Modal body -->
							        <div class="modal-body">
							        	<div class="container">
							        		<div class="row">
							        			<div class="col-md-4" >
									        		 <img src="<?php echo $row['foto']; ?>" class="card-img-top" alt="..." style="margin: 20px;height: 118px; width: 118px">
									        	</div> 
									        	<div class="col-md-8" style="text-align: justify;">
									        		<hr>
									        		<?php echo $row['status']; ?> nama <?php echo $row['nama']; ?> dengan nim <?php echo $row['nim']; ?> berasal dari <?php echo $row['alamat_asal']; ?> dan sekarang tinggal di <?php echo $row['alamat_mlg']; ?>
									        		<hr>
									        	</div> 
							        		</div>
							        	</div>
							        </div>
							        <!-- Modal footer -->
							        <div class="modal-footer">
							          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							        </div>
							        
							      </div>
							    </div>
							  </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>							
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>