 <!doctype html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">

     <title>Hello, world!</title>
 </head>

 <body>
     <div class="container">
         <h1 class="text-center">Pendaftaran Pegawai </H1>
         <h2 class="text-center">di Indomaret</h2>

         <!-- Awal CARD Form -->
         <div class="card mt-3">
             <div class="card-header bg-primary text-white">
                 Form Input Data Calon Pegawai
             </div>
             <div class="card-body">
                 <Form method="post" action="">
                     <div class="form-group">
                         <label>Nim</label>
                         <input type="text" name="tnim" class="form-control" placeholder="Masukkan Nim Mahasiswa" required>
                     </div>
                     <div class="form-group">
                         <label>Nama</label>
                         <input type="text" name="tnama" class="form-control" placeholder="Masukkan Nama Mahasiswa" required>
                     </div>
                     <div class="form-group">
                         <label>Alamat</label>
                         <textarea class="form-control" placeholder="Masukkan Alamat 
Mahasiswa"></textarea>
                     </div>
                     <div class="form-group">
                         <label>Program Studi</label>
                         <select class="form-control" name="tprodi">
                             <option></option>
                             <option value="S1-SI">S1-SI</option>
                             <option value="S1-TI">S1-TI</option>
                             <option value="S2-TI">S2-TI</option>
                         </select>
                     </div>
                     <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                     <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
                 </Form>
             </div>
         </div>
         <!-- Akhir CARD Form -->

     </div>
     <script type="text/javascript" src="js\bootstrap.min.js"></script>

 </body>

 </html>