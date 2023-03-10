<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
-->
<!-- beautify ignore:start -->
<html
lang="en"
class="light-style layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="<?php echo base_url() . "assets/"; ?>"
data-template="vertical-menu-template-free"

>
<style>
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    height: 220px;
    border-radius: 1em !important;
  }

  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:hover {background-color: #ddd;}

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #696cff;
    color: white;
  }
  .syarat {
    color: #5f61e6 !important;
  }
</style>
<head>
  <meta charset="utf-8" />
  <meta
  name="viewport"
  content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
  />

  <title>Account settings - Account | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?php echo base_url() . "assets/"; ?>img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
  href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
  rel="stylesheet"
  />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="<?php echo base_url() . "assets/"; ?>vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo base_url() . "assets/"; ?>js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                width="25"
                viewBox="0 0 25 42"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                <defs>
                  <path
                  d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                  id="path-1"
                  ></path>
                  <path
                  d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                  id="path-3"
                  ></path>
                  <path
                  d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                  id="path-4"
                  ></path>
                  <path
                  d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                  id="path-5"
                  ></path>
                </defs>
                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                    <g id="Icon" transform="translate(27.000000, 15.000000)">
                      <g id="Mask" transform="translate(0.000000, 8.000000)">
                        <mask id="mask-2" fill="white">
                          <use xlink:href="#path-1"></use>
                        </mask>
                        <use fill="#696cff" xlink:href="#path-1"></use>
                        <g id="Path-3" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-3"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                        </g>
                        <g id="Path-4" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-4"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                        </g>
                      </g>
                      <g
                      id="Triangle"
                      transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                      >
                      <use fill="#696cff" xlink:href="#path-5"></use>
                      <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </span>
          <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
          <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
      </div>

      <div class="menu-inner-shadow"></div>
      <?php include 'pages/menu.php'; ?>
    </aside>
    <!-- / Menu -->

    <!-- Layout container -->
    <div class="layout-page">
      <!-- Navbar -->
      <!-- / Navbar -->

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data </span> Siswa</h4>

          <div class="row">
            <div class="card mb-4">
              <h5 class="card-header">Formulir Data Siswa</h5>
              <!-- Account -->
              <div class="card-body">
                <form id="formAccountSettings" action="<?php echo base_url() . 'Siswa/update'; ?>" method="POST" enctype="multipart/form-data" autocomplete="on">
                  <?php foreach ($siswa as $data) {
                   $foto = $data->foto;
                   ?>

                   <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <?php if ($data->foto == null) { ?>
                      <img
                      src="<?php echo base_url() . "assets/"; ?>img/avatars/user_siswa.jpg"
                      alt="user-avatar"
                      class="d-block rounded"
                      height="100"
                      width="100"
                      id="uploadedAvatar"
                      />
                    <?php  } else{ ?>

                      <img
                      src="<?php echo base_url() . "assets/file/foto_siswa/$foto"; ?>"
                      alt="user-avatar"
                      class="d-block rounded"
                      height="100"
                      width="100"
                      id="uploadedAvatar"
                      />

                    <?php } ?>
                    <div class="button-wrapper">
                      <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                        <span class="d-none d-sm-block">Upload new photo</span>
                        <i class="bx bx-upload d-block d-sm-none"></i>
                        <input
                        type="file"
                        id="upload"
                        class="account-file-input"
                        hidden
                        name="foto"

                        />
                      </label>
                      <a href="<?php echo base_url() . "assets/"; ?>file/doc/form_pendaftaran_ecc.docx" class="btn btn-outline-secondary account-image-reset mb-4">
                        <i class="bx bx-reset d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Download Formulir</span>
                      </a>

                      <p class="text-muted mb-0">Allowed JPG,JPEG or PNG. Max size of 800K</p>
                    </div>
                  </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">

                  <div class="row">
                    <label><strong>Data Diri*</strong></label>
                    <div class="mb-3 col-md-6">
                      <label for="firstName" class="form-label">Nomor Pendaftar</label>
                      <input
                      class="form-control"
                      type="text"
                      name="no_pendaftar"
                      value="<?php echo $data->no_pendaftar;?>"

                      />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="firstName" class="form-label">Nama Lengkap</label>
                      <input
                      class="form-control"
                      type="text"
                      name="nama_lengkap"
                      value="<?php echo $data->nama_lengkap;?>"
                      required
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label for="firstName" class="form-label">Tempat Lahir</label>
                      <input
                      class="form-control"
                      type="text"
                      name="tempat_lahir"
                      value="<?php echo $data->tempat_lahir;?>"
                      required
                      />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="firstName" class="form-label">Tanggal Lahir</label>
                      <input
                      class="form-control"
                      type="date"
                      name="tgl_lahir"
                      value="<?php echo $data->tgl_lahir;?>"
                      required
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-12">
                      <label for="firstName" class="form-label">Asal Sekolah / Pekerjaan</label>
                      <input
                      class="form-control"
                      type="text"
                      name="asal"
                      placeholder="Asal Sekolah / Pekerjaan"
                      value="<?php echo $data->asal;?>"
                      required
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <div class="form-group mb-2">
                        <label for="firstName" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" required>
                          <option value="<?php echo $data->jenis_kelamin;?>"> <?php echo $data->jenis_kelamin;?> </option>
                          <option value="laki-laki">Laki - Laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="firstName" class="form-label">No Handphone</label>
                      <input type="number" class="form-control" name="no_hp" value="<?php echo $data->no_hp;?>" required>
                    </div>
                  </div>
                  <div class="row">
                    <small><strong>Nama Orangtua*</strong></small>
                    <div class="mb-3 col-md-6">

                      <div class="form-group mb-2">
                        <label for="firstName" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" name="nama_ayah" value="<?php echo $data->nama_ayah;?>" required>
                      </div>
                      <div class="form-group mb-2">
                        <label for="firstName" class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" name="nama_ibu" value="<?php echo $data->nama_ibu;?>">
                      </div>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="firstName" class="form-label">Alamat</label>
                      <textarea class="form-control" name="alamat" rows="4"><?php echo $data->alamat;?></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-12">
                      <label for="firstName" class="form-label">Program Kursus</label>
                      <input
                      class="form-control"
                      type="text"
                      name="program_kursus"
                      value = "Microsoft Office"
                      readonly
                      required
                      />
                    </div>
                  </div>
                  <div class="row">
                    <small><strong>Jadwal Les*</strong></small>
                    <div class="mb-3 col-md-3">
                      <div class="form-group mb-2">
                        <label for="firstName" class="form-label">Pilih Jadwal Kursus Hari Pertama</label>
                        <select class="form-control" name="hari_pertama" id="hari" required="">
                          <option value="<?php echo $data->hari_pertama;?>"> <?php echo $data->hari_pertama;?> </option>
                          <?php foreach ($jadwal as $hari) :
                           $hari = $hari->hari;
                           ?>
                           <option value="<?php echo $hari; ?>"><?php echo $hari;?></option>
                         <?php endforeach;?>
                       </select>
                     </div>
                     <div class="form-group mb-2">
                       <label for="firstName" class="form-label">Pilih Jadwal Kursus Hari Kedua</label>
                       <select class="form-control" name="hari_kedua" id="hari_kedua" required="">
                        <option value="<?php echo $data->hari_kedua;?>"> <?php echo $data->hari_kedua;?> </option>
                        <?php foreach ($jadwal as $hari) :
                         $hari = $hari->hari;
                         ?>
                         <option value="<?php echo $hari; ?>"><?php echo $hari;?></option>
                       <?php endforeach;?>
                     </select>
                   </div>
                   <div class="form-group mb-2">
                    <label for="firstName" class="form-label">Pilih Jadwal Kursus Hari Ketiga</label>
                    <select class="form-control" name="hari_ketiga" id="hari_ketiga">
                      <option value="<?php echo $data->hari_ketiga;?>"><?php echo $data->hari_ketiga;?></option>
                      <?php foreach ($jadwal as $hari) :
                       $hari = $hari->hari;
                       ?>
                       <option value="<?php echo $hari; ?>"><?php echo $hari;?></option>
                     <?php endforeach;?>
                   </select>
                   <small style="color: #da5050">Untuk Pemilihan hari ketiga tidak wajib diisi.</small>
                 </div>
               </div>
               <div class="mb-3 col-md-3">
                <div class="form-group mb-2">
                  <label for="firstName" class="form-label">Pilih Jam Kursus Hari Pertama</label>
                  <select class="form-control" name="jam_pertama" id="jam" required="">
                    <option value="<?php echo $data->jam_pertama;?>"><?php echo $data->jam_pertama;?></option>
                  </select>
                </div>
                <div class="form-group mb-2">
                 <label for="firstName" class="form-label">Pilih Jam Kursus Hari kedua</label>
                 <select class="form-control" name="jam_kedua" id="jam_kedua" required="">
                  <option value="<?php echo $data->jam_kedua;?>"><?php echo $data->jam_kedua;?></option>
                </select>
              </div>
              <div class="form-group mb-2">
               <label for="firstName" class="form-label">Pilih Jam Kursus Hari Ketiga</label>
               <select class="form-control" name="jam_ketiga" id="jam_ketiga">
                <option value="<?php echo $data->jam_ketiga;?>"><?php echo $data->jam_ketiga;?></option>
              </select>
            </div>
          </div>
          <div class="mb-3 col-md-6">
            <table id="customers">
              <tr>
                <th>Lama Pendidikan</th>
                <th>Biaya Pendaftaran</th>
                <th>Biaya Pendidikan</th>
              </tr>
              <tr>
                <td>50 kali tatap muka (6 bulan) </td>
                <td><strong>Rp.100.000</strong>,<br>Dengan Rincian : <br>
                  <ul>
                    <li>Rp. 70.000, Biaya Pendaftaran</li>
                    <li>Rp. 30.000, Biaya Sewa Bangunan</li>
                  </ul>  
                </td>
                <td><strong>Rp.5.000 /  Hari</strong></td>
              </tr>
            </table>
          </div>
        </div>

        <div class="row">
          <label><strong>Pembuatan Akun Siswa.</strong></label>
          <div class="mb-3 col-md-6">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $data->username;?>"  required="">
          </div>
          <div class="mb-3 col-md-6">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="*****" required="">
            <small>Isikan Password Ulang*</small>
          </div>
        </div>

        <div class="row">
          <label>Pastikan Semua form sudah terisi dengan benar.</label>
          <br> 
        </div>
      <?php }?>
      <div class="mt-2">
        <button id ="submit" type="submit" class="btn btn-primary me-2">Tambah Data</button>
        <a href="<?php echo base_url('Siswa') ?>" class="btn btn-outline-secondary">Kembali</a>
      </div>
    </form>
  </div>
  <!-- /Account -->
</div>
<!-- <div class="card">
  <h5 class="card-header">Delete Account</h5>
  <div class="card-body">
    <div class="mb-3 col-12 mb-0">
      <div class="alert alert-warning">
        <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
        <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
      </div>
    </div>
    <form id="formAccountDeactivation" onsubmit="return false">
      <div class="form-check mb-3">
        <input
        class="form-check-input"
        type="checkbox"
        name="accountActivation"
        id="accountActivation"
        />
        <label class="form-check-label" for="accountActivation"
        >I confirm my account deactivation</label
        >
      </div>
      <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
    </form>
  </div>
</div> -->
</div>
</div>
</div>
<!-- / Content -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <style type="text/css">
          .judul{
            font-size: 20px;
            font-weight: bold;
            text-align: center;
          }
          .isi{
            font-size: 16px;
            padding-bottom: 2px;
          }
        </style>
        <form>
          <p class="judul"><u>PERNYATAAN</u></p>
          <ol>
            <li class="isi">Hadir pada hari dan waktu yang telah ditentukan, kursus akan tetap berjalan dengan minimal 2 orang siswa yang hadir, kecuali pada hari-hari tertentu yang diliburkan, atau ada penyebab yang lain seperti mati lampu.  
            </li>
            <li class="isi">Wajib Memiliki Buku Panduan Belajar (Modul) dari LPK El Computer Center (ECC).</li>
            <li class="isi">Pada waktu proses pembelajaran tidak mengaktifkan HP.</li>
            <li class="isi">Tidak hadir selama 1 (satu) bulan tanpa keterangan, siap untuk di non aktifkan. </li>
          </ol>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      ??
      <script>
        document.write(new Date().getFullYear());
      </script>
      , made with ?????? by
      <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
    </div>
    <div>
      <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
      <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

      <a
      href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
      target="_blank"
      class="footer-link me-4"
      >Documentation</a
      >

      <a
      href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
      target="_blank"
      class="footer-link me-4"
      >Support</a
      >
    </div>
  </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url() . "assets/"; ?>vendor/libs/jquery/jquery.js"></script>
<script src="<?php echo base_url() . "assets/"; ?>vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url() . "assets/"; ?>vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url() . "assets/"; ?>vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?php echo base_url() . "assets/"; ?>vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="<?php echo base_url() . "assets/"; ?>js/main.js"></script>

<!-- Page JS -->
<script src="<?php echo base_url() . "assets/"; ?>js/pages-account-settings-account.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script type="text/javascript">

</script>

<script type="text/javascript">
  $(document).ready(function(){

    $('#hari').change(function(){
      var hari=$(this).val();

      $.ajax({
        url : "<?php echo base_url();?>Siswa/get_jam",
        method : "POST",
        data : {hari: hari},
        async : false,
        dataType : 'json',
        success: function(data){
          var html = '';
          console.log(data);
          var i;

          for(i=0; i<data.length; i++){

            html += '<option value="'+data[i].jam+'">'+data[i].jam+'</option>';
          }
          $('#jam').html(html);

        }
      });
    });

    $('#hari_kedua').change(function(){
      var hari=$(this).val();

      $.ajax({
        url : "<?php echo base_url();?>Siswa/get_jam",
        method : "POST",
        data : {hari: hari},
        async : false,
        dataType : 'json',
        success: function(data){
          var html = '';
          console.log(data);
          var i;

          for(i=0; i<data.length; i++){

            html += '<option value="'+data[i].jam+'">'+data[i].jam+'</option>';
          }
          $('#jam_kedua').html(html);

        }
      });
    });

    $('#hari_ketiga').change(function(){
      var hari=$(this).val();

      $.ajax({
        url : "<?php echo base_url();?>Siswa/get_jam",
        method : "POST",
        data : {hari: hari},
        async : false,
        dataType : 'json',
        success: function(data){
          var html = '';
          console.log(data);
          var i;

          for(i=0; i<data.length; i++){

            html += '<option value="'+data[i].jam+'">'+data[i].jam+'</option>';
          }
          $('#jam_ketiga').html(html);

        }
      });
    });

  });


</script>
</body>
</html>