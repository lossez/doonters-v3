     <div class="social-media-footer">
         <div class="container">
             <div class="row">
                 <div class="col-md-8 mt-2">
                     <div style="font-size: 2rem;">
                         <span style="color: #100264;">DON</span><span style="color: #D74004">TEERS</span>
                     </div>
                 </div>
                 <div class="col-md-4 mt-2 mb-2">
                     <a href="#" class="scl-btn scl-crcl shadow fab fa-facebook-f"></a>
                     <a href="#" class="scl-btn scl-crcl shadow fab fa-twitter"></a>
                     <a href="#" class="scl-btn scl-crcl shadow fab fa-instagram"></a>
                     <a href="#" class="scl-btn scl-crcl shadow fab fa-youtube"></a>
                 </div>
             </div>
         </div>
     </div>
     <footer class="footer mt-auto py-3" style="background-color: #E9E9EA;">
         <div class="container">
             <br />
             <div class="row">
                 <div class="col-md-4">
                     <h5>FOOTER CONTENT</h5>
                     <br />
                     <ul class="list-unstyled">
                         <li>
                             <span class="text-footer"><span style="color: #100264;">DON</span><span style="color: #D74004">TEERS</span> adalah wadah
                                 online untuk mempertemukan relawan dan
                                 organisasi/komunitas sosial.</span>
                         </li>
                     </ul>

                     <br />
                     <br />
                 </div>
                 <div class="col-md-4" style="padding-left: 100px;">
                     <h5>ABOUT</h5>
                     <br />
                     <ul class="list-unstyled text-footer">
                         <li class="mb-1">
                             <a href="about.php" class="text-dark" style="text-decoration: none"> Tentang Kami</a>
                         </li>
                         <li class="mb-1">Donasi Sekarang</li>
                         <li>Syarat & Ketentuan</li>
                     </ul>
                 </div>
                 <div class="col-md-4">
                     <h5>CONTACT</h5>
                     <br />
                     <ul class="list-unstyled">
                         <li class="mb-1">
                             <i class="fas fa-home"></i> Indonesia, Malang
                         </li>
                         <li class="mb-1">
                             <i class="fas fa-envelope"></i> info@donteers.com
                         </li>
                         <li><i class="fas fa-phone-alt"></i> +62-85987103212</li>
                     </ul>
                 </div>
             </div>

             <hr class="footer-line">

             <div class="text-center">
                 <span style="color: #100264;">DON</span><span style="color: #D74004">TEERS</span> &copy; 2019
             </div>
         </div>
     </footer>
     </div>
     </div>


     <!-- Modal -->
     <div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content" style="padding: 30px;">
                 <form action="cek_login.php" class="inner-login" method="post">

                     <h4 class="text-center">User Login</h4>
                     <div class="modal-body">
                         <div id="not-login-msg" style="display: none">
                             <p class="text-center alert alert-danger">Anda harus login dulu untuk mengikuti kegiatan ini</p>
                         </div>
                         <div style="margin: 0 auto">
                             <div class="form-group">
                                 <input type="text" class="form-control" name="email" placeholder="Enter email address..." style="border-radius: 10rem; padding: 25px;">
                             </div>
                             <div class="form-group">
                                 <input type="password" class="form-control" name="password" placeholder="Password" style="border-radius: 10rem; padding: 25px;">
                             </div>
                         </div>

                     </div>
                     <div class="modal-footer mb-2" style="border-top: none;margin-top:-20px">

                         <input class="btn btn-primary btn-block" style="border-radius:10rem; padding:10px" type="submit" name="submit" value="LOGIN">
                         <div class="w-100 text-center mt-2">
                             <hr>
                             <a href="daftar.php">Create an Account!</a>
                         </div>
                         <!-- <tr>
                             <td colspan=3><a id='btn-register' href="daftar.php" data-toggle="modal" data-target="#modalregister">DAFTAR</a></td>
                         </tr> -->
                     </div>
                 </form>
             </div>
         </div>
     </div>

     <!-- Modal REGISTER -->
     <div class="modal fade" id="modalregister" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
                 <form action="proses_daftar.php" class="inner-register" method="post">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLongTitle">DAFTAR</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <div class="form-group">
                             <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                         </div>
                         <div class="form-group">

                             <input type="text" class="form-control" name="nama_panggilan" placeholder="Nama Panggilan">
                         </div>
                         <div class="form-group">
                             <input type="number" class="form-control" name="nik" placeholder="NIK">
                         </div>
                         <div class="form-group">
                             <input type="number" class="form-control" name="hp" placeholder="Nomor HP">
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control" name="email" placeholder="Email">
                         </div>
                         <div class="form-group">
                             <input type="password" class="form-control" name="password" placeholder="Password">
                         </div>
                     </div>
                     <div class="modal-footer">
                         <td><input type="submit" name="submit" value="DAFTAR"></td>
                     </div>
                 </form>
             </div>
         </div>
     </div>

     <!-- Modal Relawan -->

     <div class="modal fade" id="modalRelawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content bg-light" style="width: 565px;">
                 <div class="content-modal" style="width:470px;margin:0 auto;">
                     <div class="modal-header" style="border-bottom: none">
                         <h5 class="modal-title w-100 text-center" id="exampleModalLabel">
                             <p>Daftar Aktivitas</p>
                             <hr class="search-activity-line">
                         </h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <form action="" class="formulir-pendaftaran">
                         <div class="modal-body">
                             <fieldset disabled="disabled" class="bg-white" style="padding:15px;border-radius:10px; border: 1px solid gray">
                                 <div class="row ml-3">
                                     <div class="col-md-3">
                                         Kepada :
                                     </div>
                                     <div class="col-md-7">
                                         <span style="color: #100264;">DON</span><span style="color: #D74004">TEERS</span> Indonesia
                                     </div>
                                 </div>

                             </fieldset>
                             <fieldset disabled="disabled" class="bg-white mt-2" style="padding:15px;border-radius:10px; border: 1px solid gray">
                                 <div class="row ml-3">
                                     <div class="col-md-3">
                                         Subyek :
                                     </div>
                                     <div class="col-md-8">
                                         <?= $data['title'] ?>
                                     </div>
                                 </div>

                             </fieldset>

                             <div class="form-group mt-3">
                                 <label for="" style="font-weight: 400; font-size: 13px">Mengapa Anda tertarik untuk menjadi relawan pada aktivitas ini?
                                 </label>
                                 <textarea name="answer1" id="answer1" class="form-control" placeholder="Tulis Jawaban" rows="7"></textarea>
                             </div>

                             <div class="form-group mt-3">
                                 <label for="" style="font-weight: 400; font-size: 13px">Mengapa Anda adalah relawan yang tepat untuk aktivitas ini?
                                 </label>
                                 <textarea name="answer2" id="answer2" class="form-control" placeholder="Tulis Jawaban" rows="7"></textarea>
                             </div>

                             <div class="contact-relawan">
                                 <label for="" style="font-weight: 400; font-size: 13px">
                                     Masukan nomor handphone dan alamat email untuk memudahkan organisasi menghubungi Anda.
                                 </label>
                                 <div class="form-inline">
                                     <input type="number" placeholder="HP" class="form-control mr-2" name="contact_hp" style="width: 200px">
                                     <input type="email" placeholder="email" class="form-control" name="contact_email" style="width: 225px">
                                 </div>
                             </div>

                         </div>
                         <div class="modal-footer" style="border-top: none">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                             <button type="submit" class="btn btn-primary kirim">Kirim Formulir Pendaftaran</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/cb2557e918.js" crossorigin="anonymous"></script>

     <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>

     <script>
         $(document).ready(function() {
             $("#regis-btn").click(function() {
                 $("#modallogin").modal("hide");
             });

             $('#not-login').click(function() {
                 $('#not-login-msg').show();
             });
             $('.btn-auth').click(function() {
                 $('#not-login-msg').hide();
             })
         })
     </script>
     <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>

     <script>
         $(document).ready(function() {
             $('.kirim').attr('disabled', true);
                 bootstrapValidate('#answer1', 'required:Please fill out this field!')
         })
     </script>

     </body>

     </html>