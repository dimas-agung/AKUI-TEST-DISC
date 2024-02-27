<!DOCTYPE html>
<html lang="en">
<head>
  <title>DISC Test</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
  <link rel="shortcut icon" type="image/png" href="logo2.svg" />
  <meta name="keywords" content="DiSC, personality, test, indonesia" />
  <meta name="robots" content="index, follow" />
  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/w3-theme-indigo.css" media="all" id="disc_css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="js/jquery.min.js"></script>
  <script src="aem.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>body,h1,h2,h3,h4,h5 {color: black; font-family: "Raleway", sans-serif}
  .w3-closebtn {text-decoration: none;float: right;font-size: 24px;font-weight: bold;color: inherit;} .w16left{padding-left:16px !important;} </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #92C7CF !important;">
  <div class="container-fluid">
    <a class="navbar-brand  text-dark" href="#">DISC TEST</a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="ms-auto" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <div class="nav-link " aria-current="page" ><img src="LOGO NO REG.png" alt="logo" style="width: 100px;"></div>
        
      </div>
    </div>
  </div>
</nav>
<!-- <div class="w3-top">
  <div class="w3-bar w3-theme-d5" style="display:flex;">
    <span class="w3-bar-item">DISC TEST</span>
    
    <div class="w3-dropdown-hover">
        <button class="w3-button">Themes</button>
        <div class="w3-dropdown-content w3-white w3-card-4" id="theme">
            <a href='#' class='w3-bar-item w3-button w3-black color' data-value='black'>
                 </a><a href='#' class='w3-bar-item w3-button w3-brown color' data-value='brown'> </a><a href='#' class='w3-bar-item w3-button w3-pink color' data-value='pink'> </a><a href='#' class='w3-bar-item w3-button w3-orange color' data-value='orange'> </a><a href='#' class='w3-bar-item w3-button w3-amber color' data-value='amber'> </a><a href='#' class='w3-bar-item w3-button w3-lime color' data-value='lime'> </a><a href='#' class='w3-bar-item w3-button w3-green color' data-value='green'> </a><a href='#' class='w3-bar-item w3-button w3-teal color' data-value='teal'> </a><a href='#' class='w3-bar-item w3-button w3-purple color' data-value='purple'> </a><a href='#' class='w3-bar-item w3-button w3-indigo color' data-value='indigo'> </a><a href='#' class='w3-bar-item w3-button w3-blue color' data-value='blue'> </a><a href='#' class='w3-bar-item w3-button w3-cyan color' data-value='cyan'> </a>   
         </div>
      </div>
   </div>
   <span class="w3-bar-item"><img src="logo2.svg" alt="logo" style="width: 100px;"></span>
</div>   -->
<div class="w3-container">
  <form method='post' action='' name="disc">
    <div class="w3-card-4">
      <div class='w3-container'>
        <h2>&nbsp;</h2>
        <h2>DISC Personality Test</h1>
        <div class="w3-row">
          <div class="w3-col s12">
          <p>
            Tes DISC (<i>Dominance, Influence, Steadiness, Conscientiousness</i>) adalah sebuah alat untuk memahami tipe-tipe perilaku dan gaya kepribadian, yang pertama kali dikembangkan oleh <i>William Moulton Marston</i>. Dalam penerapannya di dunia bisnis dan usaha, alat ini telah membuka wawasan dan pemikiran, baik secara professional maupun secara personal.
           </p>
         <div class="w3-container w3-theme-l3 w3-section">
            <span onclick="this.parentElement.style.display='none'" class="w3-closebtn" style="cursor:pointer;">x</span>
            <h3 class='w3-theme-d2 text-dark' >Hai, <span id="userName"></span> <br/> Berikut ini adalah petunjuk untuk DISC Test</h3>
            <p>Setiap nomor di bawah ini memuat 4 (empat) kalimat. Tugas anda adalah : <br />
              <ol>
                <li>Beri tanda/cek pada kolom di bawah huruf  [P] di samping kalimat yang PALING menggambarkan diri anda</li>
                <li>Beri tanda/cek pada kolom di bawah huruf  [K] di samping kalimat yang PALING TIDAK menggambarkan diri anda</li>
              </ol>
            </p>
         </div>
          </div>
        </div>
                <div class="w3-row">
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr>                                    <th rowspan='4'>1</th>
                                    <td class='w16left'>Gampangan, Mudah setuju</td>
                  <td><input type='radio' class='w3-radio' id='m_1_0' name='m[1]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_1_0' name='l[1]' value='S' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Percaya, Mudah percaya pada orang</td>
                  <td><input type='radio' class='w3-radio' id='m_1_1' name='m[1]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_1_1' name='l[1]' value='I' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Petualang, Mengambil resiko</td>
                  <td><input type='radio' class='w3-radio' id='m_1_2' name='m[1]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_1_2' name='l[1]' value='D' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Toleran, Menghormati</td>
                  <td><input type='radio' class='w3-radio' id='m_1_3' name='m[1]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_1_3' name='l[1]' value='C' required></td>
                </tr>
                            </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr class="w3-theme-l3">                                    <th rowspan='4'>2</th>
                  <td class='w16left'>Lembut suara, Pendiam</td>
                  <td><input type='radio' class='w3-radio' id='m_2_0' name='m[2]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_2_0' name='l[2]' value='*' required></td>
              </tr>
              <tr class="w3-theme-l3">                               <td class='w16left'>Optimistik, Visioner</td>
                  <td><input type='radio' class='w3-radio' id='m_2_1' name='m[2]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_2_1' name='l[2]' value='D' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Pusat perhatian, Suka gaul</td>
                  <td><input type='radio' class='w3-radio' id='m_2_2' name='m[2]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_2_2' name='l[2]' value='I' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Pendamai, Membawa harmoni</td>
                  <td><input type='radio' class='w3-radio' id='m_2_3' name='m[2]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_2_3' name='l[2]' value='S' required></td>
                </tr>
                            </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr>                                    <th rowspan='4'>3</th>
                  <td class='w16left'>Menyemangati orang</td>
                  <td><input type='radio' class='w3-radio' id='m_3_0' name='m[3]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_3_0' name='l[3]' value='I' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Berusaha sempurna</td>
                  <td><input type='radio' class='w3-radio' id='m_3_1' name='m[3]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_3_1' name='l[3]' value='C' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Bagian dari kelompok</td>
                  <td><input type='radio' class='w3-radio' id='m_3_2' name='m[3]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_3_2' name='l[3]' value='S' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Ingin membuat tujuan</td>
                  <td><input type='radio' class='w3-radio' id='m_3_3' name='m[3]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_3_3' name='l[3]' value='*' required></td>
                </tr>
                </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr class="w3-theme-l3">                                    <th rowspan='4'>4</th>
                  <td class='w16left'>Menjadi frustasi</td>
                  <td><input type='radio' class='w3-radio' id='m_4_0' name='m[4]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_4_0' name='l[4]' value='C' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Menyimpan perasaan saya</td>
                  <td><input type='radio' class='w3-radio' id='m_4_1' name='m[4]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_4_1' name='l[4]' value='S' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Menceritakan sisi saya</td>
                  <td><input type='radio' class='w3-radio' id='m_4_2' name='m[4]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_4_2' name='l[4]' value='I' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Siap  beroposisi</td>
                  <td><input type='radio' class='w3-radio' id='m_4_3' name='m[4]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_4_3' name='l[4]' value='D' required></td>
                </tr>
                </tbody>
            </table>
                   </div>
                  </div>
                <div class="w3-row">
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr>                                    <th rowspan='4'>5</th>
                  <td class='w16left'>Hidup, Suka bicara</td>
                  <td><input type='radio' class='w3-radio' id='m_5_0' name='m[5]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_5_0' name='l[5]' value='*' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Gerak cepat, Tekun</td>
                  <td><input type='radio' class='w3-radio' id='m_5_1' name='m[5]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_5_1' name='l[5]' value='D' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Usaha menjaga keseimbangan</td>
                  <td><input type='radio' class='w3-radio' id='m_5_2' name='m[5]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_5_2' name='l[5]' value='S' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Usaha mengikuti aturan</td>
                  <td><input type='radio' class='w3-radio' id='m_5_3' name='m[5]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_5_3' name='l[5]' value='C' required></td>
                </tr>
                </tbody>
            </table>
                   </div>
                  <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr class="w3-theme-l3">                                    <th rowspan='4'>6</th>
                  <td class='w16left'>Kelola waktu secara efisien</td>
                  <td><input type='radio' class='w3-radio' id='m_6_0' name='m[6]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_6_0' name='l[6]' value='*' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Sering terburu-buru, Merasa tertekan</td>
                  <td><input type='radio' class='w3-radio' id='m_6_1' name='m[6]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_6_1' name='l[6]' value='D' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Masalah sosial itu penting</td>
                  <td><input type='radio' class='w3-radio' id='m_6_2' name='m[6]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_6_2' name='l[6]' value='I' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Suka selesikan apa yang saya mulai</td>
                  <td><input type='radio' class='w3-radio' id='m_6_3' name='m[6]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_6_3' name='l[6]' value='S' required></td>
                </tr>
                 </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr>                                    <th rowspan='4'>7</th>
                <td class='w16left'>Tolak perubahan mendadak</td>
                  <td><input type='radio' class='w3-radio' id='m_7_0' name='m[7]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_7_0' name='l[7]' value='*' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Cenderung janji berlebihan</td>
                  <td><input type='radio' class='w3-radio' id='m_7_1' name='m[7]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_7_1' name='l[7]' value='I' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Tarik diri di tengah tekanan</td>
                  <td><input type='radio' class='w3-radio' id='m_7_2' name='m[7]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_7_2' name='l[7]' value='C' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Tidak takut bertempur</td>
                  <td><input type='radio' class='w3-radio' id='m_7_3' name='m[7]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_7_3' name='l[7]' value='D' required></td>
                </tr>
                </tbody>
            </table>
                   </div>
                  <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead> 
              <tbody>
              <tr class="w3-theme-l3">                                    <th rowspan='4'>8</th>
                  <td class='w16left'>Penyemangat yang baik</td>
                  <td><input type='radio' class='w3-radio' id='m_8_0' name='m[8]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_8_0' name='l[8]' value='I' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Pendengar yang baik</td>
                  <td><input type='radio' class='w3-radio' id='m_8_1' name='m[8]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_8_1' name='l[8]' value='S' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Penganalisa yang baik</td>
                  <td><input type='radio' class='w3-radio' id='m_8_2' name='m[8]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_8_2' name='l[8]' value='C' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Delegator yang baik</td>
                  <td><input type='radio' class='w3-radio' id='m_8_3' name='m[8]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_8_3' name='l[8]' value='D' required></td>
                </tr>
                </tbody>
            </table>
                   </div>
                  </div>
                <div class="w3-row">
                  <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr>                                    <th rowspan='4'>9</th>
                  <td class='w16left'>Hasil adalah penting</td>
                  <td><input type='radio' class='w3-radio' id='m_9_0' name='m[9]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_9_0' name='l[9]' value='D' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Lakukan dengan benar, Akurasi penting</td>
                  <td><input type='radio' class='w3-radio' id='m_9_1' name='m[9]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_9_1' name='l[9]' value='C' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Dibuat menyenangkan</td>
                  <td><input type='radio' class='w3-radio' id='m_9_2' name='m[9]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_9_2' name='l[9]' value='I' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Mari kerjakan bersama</td>
                  <td><input type='radio' class='w3-radio' id='m_9_3' name='m[9]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_9_3' name='l[9]' value='S' required></td>
                </tr>
                </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr class="w3-theme-l3">                                    <th rowspan='4'>10</th>
                  <td class='w16left'>Akan berjalan terus tanpa kontrol diri</td>
                  <td><input type='radio' class='w3-radio' id='m_10_0' name='m[10]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_10_0' name='l[10]' value='C' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Akan membeli sesuai dorongan hati</td>
                  <td><input type='radio' class='w3-radio' id='m_10_1' name='m[10]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_10_1' name='l[10]' value='D' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Akan menunggu, Tanpa tekanan</td>
                  <td><input type='radio' class='w3-radio' id='m_10_2' name='m[10]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_10_2' name='l[10]' value='S' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Akan mengusahakan yang kuinginkan</td>
                  <td><input type='radio' class='w3-radio' id='m_10_3' name='m[10]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_10_3' name='l[10]' value='*' required></td>
                </tr>
                </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr>                                    <th rowspan='4'>11</th>
                  <td class='w16left'>Ramah, Mudah bergabung</td>
                  <td><input type='radio' class='w3-radio' id='m_11_0' name='m[11]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_11_0' name='l[11]' value='*' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Unik, Bosan rutinitas</td>
                  <td><input type='radio' class='w3-radio' id='m_11_1' name='m[11]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_11_1' name='l[11]' value='I' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Aktif mengubah sesuatu</td>
                  <td><input type='radio' class='w3-radio' id='m_11_2' name='m[11]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_11_2' name='l[11]' value='D' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Ingin hal-hal yang pasti</td>
                  <td><input type='radio' class='w3-radio' id='m_11_3' name='m[11]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_11_3' name='l[11]' value='C' required></td>
                </tr>
                </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr class="w3-theme-l3">                                    <th rowspan='4'>12</th>
                   <td class='w16left'>Non-konfontrasi, Menyerah</td>
                  <td><input type='radio' class='w3-radio' id='m_12_0' name='m[12]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_12_0' name='l[12]' value='S' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Dipenuhi hal detail</td>
                  <td><input type='radio' class='w3-radio' id='m_12_1' name='m[12]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_12_1' name='l[12]' value='*' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Perubahan pada menit terakhir</td>
                  <td><input type='radio' class='w3-radio' id='m_12_2' name='m[12]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_12_2' name='l[12]' value='I' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Menuntut, Kasar</td>
                  <td><input type='radio' class='w3-radio' id='m_12_3' name='m[12]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_12_3' name='l[12]' value='D' required></td>
                </tr>
                </tbody>
            </table>
                   </div>
                  </div>
                <div class="w3-row">
                  <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr>                                    <th rowspan='4'>13</th>
                  <td class='w16left'>Ingin Kemajuan</td>
                  <td><input type='radio' class='w3-radio' id='m_13_0' name='m[13]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_13_0' name='l[13]' value='D' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Puas dengan segalanya</td>
                  <td><input type='radio' class='w3-radio' id='m_13_1' name='m[13]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_13_1' name='l[13]' value='*' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Terbuka memperlihatkan perasaan</td>
                  <td><input type='radio' class='w3-radio' id='m_13_2' name='m[13]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_13_2' name='l[13]' value='*' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Rendah hati, Sederhana</td>
                  <td><input type='radio' class='w3-radio' id='m_13_3' name='m[13]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_13_3' name='l[13]' value='C' required></td>
                </tr>
                </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr class="w3-theme-l3">                                    <th rowspan='4'>14</th>
                                    <td class='w16left'>Tenang, Pendiam</td>
                  <td><input type='radio' class='w3-radio' id='m_14_0' name='m[14]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_14_0' name='l[14]' value='C' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Bahagia, Tanpa beban</td>
                  <td><input type='radio' class='w3-radio' id='m_14_1' name='m[14]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_14_1' name='l[14]' value='I' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Menyenangkan, Baik hati</td>
                  <td><input type='radio' class='w3-radio' id='m_14_2' name='m[14]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_14_2' name='l[14]' value='*' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Tak gentar, Berani</td>
                  <td><input type='radio' class='w3-radio' id='m_14_3' name='m[14]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_14_3' name='l[14]' value='D' required></td>
                </tr>
                            </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr>                                    <th rowspan='4'>15</th>
                                    <td class='w16left'>Menggunakan waktu berkualitas dengan teman</td>
                  <td><input type='radio' class='w3-radio' id='m_15_0' name='m[15]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_15_0' name='l[15]' value='S' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Rencanakan masa depan, Bersiap</td>
                  <td><input type='radio' class='w3-radio' id='m_15_1' name='m[15]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_15_1' name='l[15]' value='*' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Bepergian demi petualangan baru</td>
                  <td><input type='radio' class='w3-radio' id='m_15_2' name='m[15]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_15_2' name='l[15]' value='I' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Menerima ganjaran atas tujuan yang dicapai</td>
                  <td><input type='radio' class='w3-radio' id='m_15_3' name='m[15]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_15_3' name='l[15]' value='D' required></td>
                </tr>
                            </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr class="w3-theme-l3">                                    <th rowspan='4'>16</th>
                                    <td class='w16left'>Aturan perlu ditanyakan</td>
                  <td><input type='radio' class='w3-radio' id='m_16_0' name='m[16]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_16_0' name='l[16]' value='D' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Aturan membuat adil</td>
                  <td><input type='radio' class='w3-radio' id='m_16_1' name='m[16]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_16_1' name='l[16]' value='*' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Aturan membuat bosan</td>
                  <td><input type='radio' class='w3-radio' id='m_16_2' name='m[16]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_16_2' name='l[16]' value='I' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Aturan membuat aman</td>
                  <td><input type='radio' class='w3-radio' id='m_16_3' name='m[16]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_16_3' name='l[16]' value='S' required></td>
                </tr>
                            </tbody>
            </table>
                   </div>
                  </div>
                <div class="w3-row">
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr>                                    <th rowspan='4'>17</th>
                                    <td class='w16left'>Pendidikan, Kebudayaan</td>
                  <td><input type='radio' class='w3-radio' id='m_17_0' name='m[17]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_17_0' name='l[17]' value='C' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Prestasi, Ganjaran</td>
                  <td><input type='radio' class='w3-radio' id='m_17_1' name='m[17]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_17_1' name='l[17]' value='D' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Keselamatan, Keamanan</td>
                  <td><input type='radio' class='w3-radio' id='m_17_2' name='m[17]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_17_2' name='l[17]' value='S' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Sosial, Perkumpulan kelompok</td>
                  <td><input type='radio' class='w3-radio' id='m_17_3' name='m[17]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_17_3' name='l[17]' value='*' required></td>
                </tr>
                            </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr class="w3-theme-l3">                                    <th rowspan='4'>18</th>
                                    <td class='w16left'>Memimpin, Pendekatan langsung</td>
                  <td><input type='radio' class='w3-radio' id='m_18_0' name='m[18]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_18_0' name='l[18]' value='D' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Suka bergaul, Antusias</td>
                  <td><input type='radio' class='w3-radio' id='m_18_1' name='m[18]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_18_1' name='l[18]' value='I' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Dapat diramal, Konsisten</td>
                  <td><input type='radio' class='w3-radio' id='m_18_2' name='m[18]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_18_2' name='l[18]' value='S' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Waspada, Hati-hati</td>
                  <td><input type='radio' class='w3-radio' id='m_18_3' name='m[18]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_18_3' name='l[18]' value='*' required></td>
                </tr>
                            </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr>                                    <th rowspan='4'>19</th>
                                    <td class='w16left'>Tidak mudah dikalahkan</td>
                  <td><input type='radio' class='w3-radio' id='m_19_0' name='m[19]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_19_0' name='l[19]' value='D' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Kerjakan sesuai perintah, Ikut pimpinan</td>
                  <td><input type='radio' class='w3-radio' id='m_19_1' name='m[19]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_19_1' name='l[19]' value='*' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Mudah terangsang, Riang</td>
                  <td><input type='radio' class='w3-radio' id='m_19_2' name='m[19]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_19_2' name='l[19]' value='I' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Ingin segalanya teratur, Rapi</td>
                  <td><input type='radio' class='w3-radio' id='m_19_3' name='m[19]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_19_3' name='l[19]' value='C' required></td>
                </tr>
                            </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr class="w3-theme-l3">                                    <th rowspan='4'>20</th>
                                    <td class='w16left'>Saya akan pimpin mereka</td>
                  <td><input type='radio' class='w3-radio' id='m_20_0' name='m[20]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_20_0' name='l[20]' value='*' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Saya akan melaksanakan</td>
                  <td><input type='radio' class='w3-radio' id='m_20_1' name='m[20]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_20_1' name='l[20]' value='S' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Saya akan meyakinkan mereka</td>
                  <td><input type='radio' class='w3-radio' id='m_20_2' name='m[20]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_20_2' name='l[20]' value='I' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Saya dapatkan fakta</td>
                  <td><input type='radio' class='w3-radio' id='m_20_3' name='m[20]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_20_3' name='l[20]' value='*' required></td>
                </tr>
                            </tbody>
            </table>
                   </div>
                  </div>
                <div class="w3-row">
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr>                                    <th rowspan='4'>21</th>
                                    <td class='w16left'>Memikirkan orang dahulu</td>
                  <td><input type='radio' class='w3-radio' id='m_21_0' name='m[21]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_21_0' name='l[21]' value='S' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Kompetitif, Suka tantangan</td>
                  <td><input type='radio' class='w3-radio' id='m_21_1' name='m[21]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_21_1' name='l[21]' value='D' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Optimis, Positif</td>
                  <td><input type='radio' class='w3-radio' id='m_21_2' name='m[21]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_21_2' name='l[21]' value='I' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Pemikir logis, Sistematik</td>
                  <td><input type='radio' class='w3-radio' id='m_21_3' name='m[21]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_21_3' name='l[21]' value='C' required></td>
                </tr>
                            </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr class="w3-theme-l3">                                    <th rowspan='4'>22</th>
                                    <td class='w16left'>Menyenangkan orang, Mudah setuju</td>
                  <td><input type='radio' class='w3-radio' id='m_22_0' name='m[22]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_22_0' name='l[22]' value='S' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Tertawa lepas, Hidup</td>
                  <td><input type='radio' class='w3-radio' id='m_22_1' name='m[22]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_22_1' name='l[22]' value='I' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Berani, Tak gentar</td>
                  <td><input type='radio' class='w3-radio' id='m_22_2' name='m[22]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_22_2' name='l[22]' value='D' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Tenang, Pendiam</td>
                  <td><input type='radio' class='w3-radio' id='m_22_3' name='m[22]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_22_3' name='l[22]' value='C' required></td>
                </tr>
                            </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr>                                    <th rowspan='4'>23</th>
                                    <td class='w16left'>Ingin otoritas lebih</td>
                  <td><input type='radio' class='w3-radio' id='m_23_0' name='m[23]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_23_0' name='l[23]' value='D' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Ingin kesempatan baru</td>
                  <td><input type='radio' class='w3-radio' id='m_23_1' name='m[23]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_23_1' name='l[23]' value='*' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Menghindari konflik</td>
                  <td><input type='radio' class='w3-radio' id='m_23_2' name='m[23]' value='S' required></td>
                  <td><input type='radio' class='w3-radio' id='l_23_2' name='l[23]' value='S' required></td>
                </tr>
              <tr>                                    <td class='w16left'>Ingin petunjuk yang jelas</td>
                  <td><input type='radio' class='w3-radio' id='m_23_3' name='m[23]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_23_3' name='l[23]' value='C' required></td>
                </tr>
                            </tbody>
            </table>
                   </div>
                    <div class="w3-col m6 l3">
                  <table class='w3-table'>
              <thead>
              <tr class='w3-theme-d3'>
                <th>No</th>
                <th>Gambaran Diri</th>
                <th>P</th>
                <th>K</th>
              </tr>
              </thead>
              <tbody>
              <tr class="w3-theme-l3">                                    <th rowspan='4'>24</th>
                                    <td class='w16left'>Dapat diandalkan, Dapat dipercaya</td>
                  <td><input type='radio' class='w3-radio' id='m_24_0' name='m[24]' value='*' required></td>
                  <td><input type='radio' class='w3-radio' id='l_24_0' name='l[24]' value='S' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Kreatif, Unik</td>
                  <td><input type='radio' class='w3-radio' id='m_24_1' name='m[24]' value='I' required></td>
                  <td><input type='radio' class='w3-radio' id='l_24_1' name='l[24]' value='I' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Garis dasar, Orientasi hasil</td>
                  <td><input type='radio' class='w3-radio' id='m_24_2' name='m[24]' value='D' required></td>
                  <td><input type='radio' class='w3-radio' id='l_24_2' name='l[24]' value='*' required></td>
                </tr>
              <tr class="w3-theme-l3">                                    <td class='w16left'>Jalankan standar yang tinggi, Akurat</td>
                  <td><input type='radio' class='w3-radio' id='m_24_3' name='m[24]' value='C' required></td>
                  <td><input type='radio' class='w3-radio' id='l_24_3' name='l[24]' value='*' required></td>
                </tr>
                            </tbody>
            </table>
                   </div>
                  </div>
                <div class="w3-row">
          <div class="w3-col s12">
            <h6>&nbsp;</h6>
            <input type='button' style="width: 100%;" id="submitButton" value='PROSES' class='w3-button w3-round-large w3-theme-d1 w3-right w3-margin-8'/> 
          </div>
        </div>
        <h2>&nbsp;</h2>
      </div>
    </div>
  </form>
</div>
<div class="w3-bottom">
   <div class="w3-bar w3-theme-d4 w3-center w3-padding text-dark">
    DISC TEST PT AKUI BIRD NEST INDONESIA
   </div>
</div>
<div id="warning" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-red"> 
      <span onclick="document.getElementById('warning').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      <h2>Warning</h2>
    </header>
    <div class="w3-container">
      <p id='msg'></p>
    </div>
    <footer class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <a href='#' onclick="document.getElementById('warning').style.display='none'" class="w3-button w3-grey">close</a>
    </footer>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="aem.js"></script>
<script src="theme.js"></script>
<script src="js/disc.id.v3.js"></script>
<script src="js/disc.id.v2.js"></script>   
<script>
$(document).ready(function () {
    var data = localStorage.getItem('nama');
        var nama = data;

        document.getElementById('userName').innerText = nama;
 $('#submitButton').click(function (event) {
event.preventDefault();
const totalQuestions = 48;
    const answeredQuestions = $('input:radio[required]:checked').length;
    const unansweredQuestions = answeredQuestions !== totalQuestions;

    if (unansweredQuestions) {
        Swal.fire({
            title: 'Error',
            text: 'Pastikan semua pertanyaan telah dijawab.',
            icon: 'error'
        });
    } else {
        getRadioValues();
    }
});
    
$('input:radio').on('click',function(){
  var m=$(this).attr('id');
  
  if($('#'+(m.slice(0,1)=='m'?'l':'m')+'_'+m.slice(2)).is(':checked')){
      $('#msg').html('You cannot select both of `most` and `least` choice in the same term');
      $('#warning').show();
      $(this).removeAttr('checked');
  }
});

function getRadioValues() {
        var p1 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k1 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p2 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k2 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p3 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k3 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p4 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k4 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p5 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k5 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p6 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k6 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p7 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k7 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p8 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k8 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p9 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k9 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p10 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k10 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p11 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k11 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p12 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k12 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p13 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k13 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p14 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k14 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p15 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k15 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p16 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k16 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p17 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k17 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p18 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k18 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p19 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k19 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p20 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k20 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p21 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k21 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p22 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k22 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p23 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k23 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var p24 = { 'S': 0, 'I': 0, '*': 0, 'C': 0, 'D':0};
        var k24 = { 'S': 0, 'I': 0, 'D': 0, 'C': 0, '*':0};
        var hasilno1 = [];
        var hasilno2 = [];
        var hasilno3 = [];
        var hasilno4 = [];
        var hasilno5 = [];
        var hasilno6 = [];
        var hasilno7 = [];
        var hasilno8 = [];
        var hasilno9 = [];
        var hasilno10 = [];
        var hasilno11 = [];
        var hasilno12 = [];
        var hasilno13 = [];
        var hasilno14 = [];
        var hasilno15 = [];
        var hasilno16 = [];
        var hasilno17 = [];
        var hasilno18 = [];
        var hasilno19 = [];
        var hasilno20 = [];
        var hasilno21 = [];
        var hasilno22 = [];
        var hasilno23 = [];
        var hasilno24 = [];


        if ($('#m_1_0').length && $('#m_1_1').length && $('#m_1_2').length && $('#m_1_3').length) {
                if ($('#m_1_0:checked').val() == 'S') {
                    p1['S']++;
                    hasilno1.push('1S');
                }
                if ($('#m_1_1:checked').val() == 'I') {
                    p1['I']++;
                    hasilno1.push('2I');
                }
                if ($('#m_1_2:checked').val() == '*') {
                    p1['*']++;
                    hasilno1.push('3*');
                }
                if ($('#m_1_3:checked').val() == 'C') {
                    p1['C']++;
                    hasilno1.push('4C');
                }
                
        }

            if ($('#l_1_0').length && $('#l_1_1').length && $('#l_1_2').length && $('#l_1_3').length) {
                if ($('#l_1_0:checked').val() == 'S') {
                    k1['S']++;
                    hasilno1.push('1S');
                }
                if ($('#l_1_1:checked').val() == 'I') {
                    k1['I']++;
                    hasilno1.push('2I');
                }
                if ($('#l_1_2:checked').val() == 'D') {
                    k1['D']++;
                    hasilno1.push('3D');
                }
                if ($('#l_1_3:checked').val() == 'C') {
                    k1['C']++;
                    hasilno1.push('4C');
                }
                
            }

        if ($('#m_2_0').length && $('#m_2_1').length && $('#m_2_2').length && $('#m_2_3').length) {
                if ($('#m_2_0:checked').val() == 'C') {
                    p2['C']++;
                    hasilno2.push('1C');
                }
                if ($('#m_2_1:checked').val() == 'D') {
                    p2['D']++;
                    hasilno2.push('2D');
                }
                if ($('#m_2_2:checked').val() == '*') {
                    p2['*']++;
                    hasilno2.push('3*');
                }
                if ($('#m_2_3:checked').val() == 'S') {
                    p2['S']++;
                    hasilno2.push('4S');
                }
                
            }

            if ($('#l_2_0').length && $('#l_2_1').length && $('#l_2_2').length && $('#l_2_3').length) {
                if ($('#l_2_0:checked').val() == '*') {
                    k2['*']++;
                    hasilno2.push('1*');
                }
                if ($('#l_2_1:checked').val() == 'D') {
                    k2['D']++;
                    hasilno2.push('2D');
                }
                if ($('#l_2_2:checked').val() == 'I') {
                    k2['I']++;
                    hasilno2.push('3I');
                }
                if ($('#l_2_3:checked').val() == 'S') {
                    k2['S']++;
                    hasilno2.push('4S');
                }
                
            }

            if ($('#m_3_0').length && $('#m_3_1').length && $('#m_3_2').length && $('#m_3_3').length) {
                if ($('#m_3_0:checked').val() == 'I') {
                    p3['I']++;
                    hasilno3.push('1I');
                }
                if ($('#m_3_1:checked').val() == '*') {
                    p3['*']++;
                    hasilno3.push('2*');
                }
                if ($('#m_3_2:checked').val() == '*') {
                    p3['*']++;
                    hasilno3.push('3*');
                }
                if ($('#m_3_3:checked').val() == 'D') {
                    p3['D']++;
                    hasilno3.push('4D');
                }
                
            }

            if ($('#l_3_0').length && $('#l_3_1').length && $('#l_3_2').length && $('#l_3_3').length) {
                if ($('#l_3_0:checked').val() == 'I') {
                    k3['I']++;
                    hasilno3.push('1I');
                }
                if ($('#l_3_1:checked').val() == 'C') {
                    k3['C']++;
                    hasilno3.push('2C');
                }
                if ($('#l_3_2:checked').val() == 'S') {
                    k3['S']++;
                    hasilno3.push('3S');
                }
                if ($('#l_3_3:checked').val() == '*') {
                    k3['*']++;
                    hasilno3.push('4*');
                }
                
            }

            if ($('#m_4_0').length && $('#m_4_1').length && $('#m_4_2').length && $('#m_4_3').length) {
                if ($('#m_4_0:checked').val() == 'C') {
                    p4['C']++;
                    hasilno4.push('1C');
                }
                if ($('#m_4_1:checked').val() == 'S') {
                    p4['S']++;
                    hasilno4.push('2S');
                }
                if ($('#m_4_2:checked').val() == '*') {
                    p4['*']++;
                    hasilno4.push('3*');
                }
                if ($('#m_4_3:checked').val() == 'D') {
                    p4['D']++;
                    hasilno4.push('4D');
                }
                
            }

            if ($('#l_4_0').length && $('#l_4_1').length && $('#l_4_2').length && $('#l_4_3').length) {
                if ($('#l_4_0:checked').val() == 'C') {
                    k4['C']++;
                    hasilno4.push('1C');
                }
                if ($('#l_4_1:checked').val() == 'S') {
                    k4['S']++;
                    hasilno4.push('2S');
                }
                if ($('#l_4_2:checked').val() == 'I') {
                    k4['I']++;
                    hasilno4.push('3I');
                }
                if ($('#l_4_3:checked').val() == 'D') {
                    k4['D']++;
                    hasilno4.push('4D');
                }
                
            }

            if ($('#m_5_0').length && $('#m_5_1').length && $('#m_5_2').length && $('#m_5_3').length) {
                if ($('#m_5_0:checked').val() == 'I') {
                    p5['I']++;
                    hasilno5.push('1I');
                }
                if ($('#m_5_1:checked').val() == 'D') {
                    p5['D']++;
                    hasilno5.push('2D');
                }
                if ($('#m_5_2:checked').val() == 'S') {
                    p5['S']++;
                    hasilno5.push('3S');
                }
                if ($('#m_5_3:checked').val() == '*') {
                    p5['*']++;
                    hasilno5.push('4*');
                }
                
            }

            if ($('#l_5_0').length && $('#l_5_1').length && $('#l_5_2').length && $('#l_5_3').length) {
                if ($('#l_5_0:checked').val() == '*') {
                    k5['*']++;
                    hasilno5.push('1*');
                }
                if ($('#l_5_1:checked').val() == 'D') {
                    k5['D']++;
                    hasilno5.push('2D');
                }
                if ($('#l_5_2:checked').val() == 'S') {
                    k5['S']++;
                    hasilno5.push('3S');
                }
                if ($('#l_5_3:checked').val() == 'C') {
                    k5['C']++;
                    hasilno5.push('4C');
                }
                
            }

            if ($('#m_6_0').length && $('#m_6_1').length && $('#m_6_2').length && $('#m_6_3').length) {
                if ($('#m_6_0:checked').val() == 'C') {
                    p6['C']++;
                    hasilno6.push('1C');
                }
                if ($('#m_6_1:checked').val() == 'D') {
                    p6['D']++;
                    hasilno6.push('2D');
                }
                if ($('#m_6_2:checked').val() == 'I') {
                    p6['I']++;
                    hasilno6.push('3I');
                }
                if ($('#m_6_3:checked').val() == 'S') {
                    p6['S']++;
                    hasilno6.push('4S');
                }
                
            }

            if ($('#l_6_0').length && $('#l_6_1').length && $('#l_6_2').length && $('#l_6_3').length) {
                if ($('#l_6_0:checked').val() == '*') {
                    k6['*']++;
                    hasilno6.push('1*');
                }
                if ($('#l_6_1:checked').val() == 'D') {
                    k6['D']++;
                    hasilno6.push('2D');
                }
                if ($('#l_6_2:checked').val() == 'I') {
                    k6['I']++;
                    hasilno6.push('3I');
                }
                if ($('#l_6_3:checked').val() == 'S') {
                    k6['S']++;
                    hasilno6.push('4S');
                }
                
            }

            if ($('#m_7_0').length && $('#m_7_1').length && $('#m_7_2').length && $('#m_7_3').length) {
                if ($('#m_7_0:checked').val() == 'S') {
                    p7['S']++;
                    hasilno7.push('1S');
                }
                if ($('#m_7_1:checked').val() == 'I') {
                    p7['I']++;
                    hasilno7.push('2I');
                }
                if ($('#m_7_2:checked').val() == '*') {
                    p7['*']++;
                    hasilno7.push('3*');
                }
                if ($('#m_7_3:checked').val() == '*') {
                    p7['*']++;
                    hasilno7.push('4*');
                }
                
            }

            if ($('#l_7_0').length && $('#l_7_1').length && $('#l_7_2').length && $('#l_7_3').length) {
                if ($('#l_7_0:checked').val() == '*') {
                    k7['*']++;
                    hasilno7.push('1*');
                }
                if ($('#l_7_1:checked').val() == 'I') {
                    k7['I']++;
                    hasilno7.push('2I');
                }
                if ($('#l_7_2:checked').val() == 'C') {
                    k7['C']++;
                    hasilno7.push('3C');
                }
                if ($('#l_7_3:checked').val() == 'D') {
                    k7['D']++;
                    hasilno7.push('4D');
                }
                
            }

            if ($('#m_8_0').length && $('#m_8_1').length && $('#m_8_2').length && $('#m_8_3').length) {
                if ($('#m_8_0:checked').val() == 'I') {
                    p8['I']++;
                    hasilno8.push('1I');
                }
                if ($('#m_8_1:checked').val() == 'S') {
                    p8['S']++;
                    hasilno8.push('2S');
                }
                if ($('#m_8_2:checked').val() == 'C') {
                    p8['C']++;
                    hasilno8.push('3C');
                }
                if ($('#m_8_3:checked').val() == 'D') {
                    p8['D']++;
                    hasilno8.push('4D');
                }
                
            }

            if ($('#l_8_0').length && $('#l_8_1').length && $('#l_8_2').length && $('#l_8_3').length) {
                if ($('#l_8_0:checked').val() == 'I') {
                    k8['I']++;
                    hasilno8.push('1I');
                }
                if ($('#l_8_1:checked').val() == 'S') {
                    k8['S']++;
                    hasilno8.push('2S');
                }
                if ($('#l_8_2:checked').val() == 'C') {
                    k8['C']++;
                    hasilno8.push('3C');
                }
                if ($('#l_8_3:checked').val() == 'D') {
                    k8['D']++;
                    hasilno8.push('4D');
                }
                
            }

            if ($('#m_9_0').length && $('#m_9_1').length && $('#m_9_2').length && $('#m_9_3').length) {
                if ($('#m_9_0:checked').val() == 'D') {
                    p9['D']++;
                    hasilno9.push('1D');
                }
                if ($('#m_9_1:checked').val() == 'C') {
                    p9['C']++;
                    hasilno9.push('2C');
                }
                if ($('#m_9_2:checked').val() == '*') {
                    p9['*']++;
                    hasilno9.push('3*');
                }
                if ($('#m_9_3:checked').val() == '*') {
                    p9['*']++;
                    hasilno9.push('4*');
                }
                
            }

            if ($('#l_9_0').length && $('#l_9_1').length && $('#l_9_2').length && $('#l_9_3').length) {
                if ($('#l_9_0:checked').val() == 'D') {
                    k9['D']++;
                    hasilno9.push('1D');
                }
                if ($('#l_9_1:checked').val() == 'C') {
                    k9['C']++;
                    hasilno9.push('2C');
                }
                if ($('#l_9_2:checked').val() == 'I') {
                    k9['I']++;
                    hasilno9.push('3I');
                }
                if ($('#l_9_3:checked').val() == 'S') {
                    k9['S']++;
                    hasilno9.push('4S');
                }
                
            }

            if ($('#m_10_0').length && $('#m_10_1').length && $('#m_10_2').length && $('#m_10_3').length) {
                if ($('#m_10_0:checked').val() == '*') {
                    p10['*']++;
                    hasilno10.push('1*');
                }
                if ($('#m_10_1:checked').val() == 'D') {
                    p10['D']++;
                    hasilno10.push('2D');
                }
                if ($('#m_10_2:checked').val() == 'S') {
                    p10['S']++;
                    hasilno10.push('3S');
                }
                if ($('#m_10_3:checked').val() == 'I') {
                    p10['I']++;
                    hasilno10.push('4I');
                }
            }

            if ($('#l_10_0').length && $('#l_10_1').length && $('#l_10_2').length && $('#l_10_3').length) {
                if ($('#l_10_0:checked').val() == 'C') {
                    k10['C']++;
                    hasilno10.push('1C');
                }
                if ($('#l_10_1:checked').val() == 'D') {
                    k10['D']++;
                    hasilno10.push('2D');
                }
                if ($('#l_10_2:checked').val() == 'S') {
                    k10['S']++;
                    hasilno10.push('3S');
                }
                if ($('#l_10_3:checked').val() == '*') {
                    k10['*']++;
                    hasilno10.push('4*');
                }
                
            }

            if ($('#m_11_0').length && $('#m_11_1').length && $('#m_11_2').length && $('#m_11_3').length) {
                if ($('#m_11_0:checked').val() == 'S') {
                    p11['S']++;
                    hasilno11.push('1S');
                }
                if ($('#m_11_1:checked').val() == '*') {
                    p11['*']++;
                    hasilno11.push('2*');
                }
                if ($('#m_11_2:checked').val() == 'D') {
                    p11['D']++;
                    hasilno11.push('3D');
                }
                if ($('#m_11_3:checked').val() == 'C') {
                    p11['C']++;
                    hasilno11.push('4C');
                }
                
            }

            if ($('#l_11_0').length && $('#l_11_1').length && $('#l_11_2').length && $('#l_11_3').length) {
                if ($('#l_11_0:checked').val() == '*') {
                    k11['*']++;
                    hasilno11.push('1*');
                }
                if ($('#l_11_1:checked').val() == 'I') {
                    k11['I']++;
                    hasilno11.push('2I');
                }
                if ($('#l_11_2:checked').val() == 'D') {
                    k11['D']++;
                    hasilno11.push('3D');
                }
                if ($('#l_11_3:checked').val() == 'C') {
                    k11['C']++;
                    hasilno11.push('4C');
                }
                
            }

            if ($('#m_12_0').length && $('#m_12_1').length && $('#m_12_2').length && $('#m_12_3').length) {
                if ($('#m_12_0:checked').val() == '*') {
                    p12['*']++;
                    hasilno12.push('1*');
                }
                if ($('#m_12_1:checked').val() == 'C') {
                    p12['C']++;
                    hasilno12.push('2C');
                }
                if ($('#m_12_2:checked').val() == 'I') {
                    p12['I']++;
                    hasilno12.push('3I');
                }
                if ($('#m_12_3:checked').val() == 'D') {
                    p12['D']++;
                    hasilno12.push('4D');
                }
                
            }

            if ($('#l_12_0').length && $('#l_12_1').length && $('#l_12_2').length && $('#l_12_3').length) {
                if ($('#l_12_0:checked').val() == 'S') {
                    k12['S']++;
                    hasilno12.push('1S');
                }
                if ($('#l_12_1:checked').val() == '*') {
                    k12['*']++;
                    hasilno12.push('2*');
                }
                if ($('#l_12_2:checked').val() == 'I') {
                    k12['I']++;
                    hasilno12.push('3I');
                }
                if ($('#l_12_3:checked').val() == 'D') {
                    k12['D']++;
                    hasilno12.push('4D');
                }
                
            }

            if ($('#m_13_0').length && $('#m_13_1').length && $('#m_13_2').length && $('#m_13_3').length) {
                if ($('#m_13_0:checked').val() == 'D') {
                    p13['D']++;
                    hasilno13.push('1D');
                }
                if ($('#m_13_1:checked').val() == 'S') {
                    p13['S']++;
                    hasilno13.push('2S');
                }
                if ($('#m_13_2:checked').val() == 'I') {
                    p13['I']++;
                    hasilno13.push('3I');
                }
                if ($('#m_13_3:checked').val() == '*') {
                    p13['*']++;
                    hasilno13.push('4*');
                }
                
            }

            if ($('#l_13_0').length && $('#l_13_1').length && $('#l_13_2').length && $('#l_13_3').length) {
                if ($('#l_13_0:checked').val() == 'D') {
                    k13['D']++;
                    hasilno13.push('1D');
                }
                if ($('#l_13_1:checked').val() == '*') {
                    k13['*']++;
                    hasilno13.push('2*');
                }
                if ($('#l_13_2:checked').val() == '*') {
                    k13['*']++;
                    hasilno13.push('3*');
                }
                if ($('#l_13_3:checked').val() == 'C') {
                    k13['C']++;
                    hasilno13.push('4C');
                }
                
            }

            if ($('#m_14_0').length && $('#m_14_1').length && $('#m_14_2').length && $('#m_14_3').length) {
                if ($('#m_14_0:checked').val() == 'C') {
                    p14['C']++;
                    hasilno14.push('1C');
                }
                if ($('#m_14_1:checked').val() == 'I') {
                    p14['I']++;
                    hasilno14.push('2I');
                }
                if ($('#m_14_2:checked').val() == 'S') {
                    p14['S']++;
                    hasilno14.push('3S');
                }
                if ($('#m_14_3:checked').val() == 'D') {
                    p14['D']++;
                    hasilno14.push('4D');
                }
                
            }

            if ($('#l_14_0').length && $('#l_14_1').length && $('#l_14_2').length && $('#l_14_3').length) {
                if ($('#l_14_0:checked').val() == 'C') {
                    k14['C']++;
                    hasilno14.push('1C');
                }
                if ($('#l_14_1:checked').val() == 'I') {
                    k14['I']++;
                    hasilno14.push('2I');
                }
                if ($('#l_14_2:checked').val() == '*') {
                    k14['*']++;
                    hasilno14.push('3*');
                }
                if ($('#l_14_3:checked').val() == 'D') {
                    k14['D']++;
                    hasilno14.push('4D');
                }
                
            }

            if ($('#m_15_0').length && $('#m_15_1').length && $('#m_15_2').length && $('#m_15_3').length) {
                if ($('#m_15_0:checked').val() == 'S') {
                    p15['S']++;
                    hasilno15.push('1S');
                }
                if ($('#m_15_1:checked').val() == 'C') {
                    p15['C']++;
                    hasilno15.push('2C');
                }
                if ($('#m_15_2:checked').val() == 'I') {
                    p15['I']++;
                    hasilno15.push('3I');
                }
                if ($('#m_15_3:checked').val() == 'D') {
                    p15['D']++;
                    hasilno15.push('4D');
                }
                
            }

            if ($('#l_15_0').length && $('#l_15_1').length && $('#l_15_2').length && $('#l_15_3').length) {
                if ($('#l_15_0:checked').val() == 'S') {
                    k15['S']++;
                    hasilno15.push('1S');
                }
                if ($('#l_15_1:checked').val() == '*') {
                    k15['*']++;
                    hasilno15.push('2*');
                }
                if ($('#l_15_2:checked').val() == 'I') {
                    k15['I']++;
                    hasilno15.push('3I');
                }
                if ($('#l_15_3:checked').val() == 'D') {
                    k15['D']++;
                    hasilno15.push('4D');
                }
                
            }

            if ($('#m_16_0').length && $('#m_16_1').length && $('#m_16_2').length && $('#m_16_3').length) {
                if ($('#m_16_0:checked').val() == '*') {
                    p16['*']++;
                    hasilno16.push('1*');
                }
                if ($('#m_16_1:checked').val() == 'C') {
                    p16['C']++;
                    hasilno16.push('2C');
                }
                if ($('#m_16_2:checked').val() == 'I') {
                    p16['I']++;
                    hasilno16.push('3I');
                }
                if ($('#m_16_3:checked').val() == 'S') {
                    p16['S']++;
                    hasilno16.push('4S');
                }
                
            }

            if ($('#l_16_0').length && $('#l_16_1').length && $('#l_16_2').length && $('#l_16_3').length) {
                if ($('#l_16_0:checked').val() == 'D') {
                    k16['D']++;
                    hasilno16.push('1D');
                }
                if ($('#l_16_1:checked').val() == '*') {
                    k16['*']++;
                    hasilno16.push('2*');
                }
                if ($('#l_16_2:checked').val() == 'I') {
                    k16['I']++;
                    hasilno16.push('3I');
                }
                if ($('#l_16_3:checked').val() == 'S') {
                    k16['S']++;
                    hasilno16.push('4S');
                }
                
            }

            if ($('#m_17_0').length && $('#m_17_1').length && $('#m_17_2').length && $('#m_17_3').length) {
                if ($('#m_17_0:checked').val() == '*') {
                    p17['*']++;
                    hasilno17.push('1*');
                }
                if ($('#m_17_1:checked').val() == 'D') {
                    p17['D']++;
                    hasilno17.push('2D');
                }
                if ($('#m_17_2:checked').val() == 'S') {
                    p17['S']++;
                    hasilno17.push('3S');
                }
                if ($('#m_17_3:checked').val() == 'I') {
                    p17['I']++;
                    hasilno17.push('4I');
                }
                
            }

            if ($('#l_17_0').length && $('#l_17_1').length && $('#l_17_2').length && $('#l_17_3').length) {
                if ($('#l_17_0:checked').val() == 'C') {
                    k17['C']++;
                    hasilno17.push('1C');
                }
                if ($('#l_17_1:checked').val() == 'D') {
                    k17['D']++;
                    hasilno17.push('2D');
                }
                if ($('#l_17_2:checked').val() == 'S') {
                    k17['S']++;
                    hasilno17.push('3S');
                }
                if ($('#l_17_3:checked').val() == '*') {
                    k17['*']++;
                    hasilno17.push('4*');
                }
                
            }

            if ($('#m_18_0').length && $('#m_18_1').length && $('#m_18_2').length && $('#m_18_3').length) {
                if ($('#m_18_0:checked').val() == 'D') {
                    p18['D']++;
                    hasilno18.push('1D');
                }
                if ($('#m_18_1:checked').val() == '*') {
                    p18['*']++;
                    hasilno18.push('2*');
                }
                if ($('#m_18_2:checked').val() == '*') {
                    p18['*']++;
                    hasilno18.push('3*');
                }
                if ($('#m_18_3:checked').val() == 'C') {
                    p18['C']++;
                    hasilno18.push('4C');
                }
                
            }

            if ($('#l_18_0').length && $('#l_18_1').length && $('#l_18_2').length && $('#l_18_3').length) {
                if ($('#l_18_0:checked').val() == 'D') {
                    k18['D']++;
                    hasilno18.push('1D');
                }
                if ($('#l_18_1:checked').val() == 'I') {
                    k18['I']++;
                    hasilno18.push('2I');
                }
                if ($('#l_18_2:checked').val() == 'S') {
                    k18['S']++;
                    hasilno18.push('3S');
                }
                if ($('#l_18_3:checked').val() == '*') {
                    k18['*']++;
                    hasilno18.push('4*');
                }
                
            }

            if ($('#m_19_0').length && $('#m_19_1').length && $('#m_19_2').length && $('#m_19_3').length) {
                if ($('#m_19_0:checked').val() == 'D') {
                    p19['D']++;
                    hasilno19.push('1D');
                }
                if ($('#m_19_1:checked').val() == 'S') {
                    p19['S']++;
                    hasilno19.push('2S');
                }
                if ($('#m_19_2:checked').val() == 'I') {
                    p19['I']++;
                    hasilno19.push('3I');
                }
                if ($('#m_19_3:checked').val() == '*') {
                    p19['*']++;
                    hasilno19.push('4*');
                }
                
            }

            if ($('#l_19_0').length && $('#l_19_1').length && $('#l_19_2').length && $('#l_19_3').length) {
                if ($('#l_19_0:checked').val() == 'D') {
                    k19['D']++;
                    hasilno19.push('1D');
                }
                if ($('#l_19_1:checked').val() == '*') {
                    k19['*']++;
                    hasilno19.push('2*');
                }
                if ($('#l_19_2:checked').val() == 'I') {
                    k19['I']++;
                    hasilno19.push('3I');
                }
                if ($('#l_19_3:checked').val() == 'C') {
                    k19['C']++;
                    hasilno19.push('4C');
                }
                
            }

            if ($('#m_20_0').length && $('#m_20_1').length && $('#m_20_2').length && $('#m_20_3').length) {
                if ($('#m_20_0:checked').val() == 'D') {
                    p20['D']++;
                    hasilno20.push('1D');
                }
                if ($('#m_20_1:checked').val() == 'S') {
                    p20['S']++;
                    hasilno20.push('2S');
                }
                if ($('#m_20_2:checked').val() == 'I') {
                    p20['I']++;
                    hasilno20.push('3I');
                }
                if ($('#m_20_3:checked').val() == 'C') {
                    p20['C']++;
                    hasilno20.push('4C');
                }
                
            }

            if ($('#l_20_0').length && $('#l_20_1').length && $('#l_20_2').length && $('#l_20_3').length) {
                if ($('#l_20_0:checked').val() == '*') {
                    k20['*']++;
                    hasilno20.push('1*');
                }
                if ($('#l_20_1:checked').val() == 'S') {
                    k20['S']++;
                    hasilno20.push('2S');
                }
                if ($('#l_20_2:checked').val() == 'I') {
                    k20['I']++;
                    hasilno20.push('3I');
                }
                if ($('#l_20_3:checked').val() == '*') {
                    k20['*']++;
                    hasilno20.push('4*');
                }
                
            }

            if ($('#m_21_0').length && $('#m_21_1').length && $('#m_21_2').length && $('#m_21_3').length) {
                if ($('#m_21_0:checked').val() == 'S') {
                    p21['S']++;
                    hasilno21.push('1S');
                }
                if ($('#m_21_1:checked').val() == 'D') {
                    p21['D']++;
                    hasilno21.push('2D');
                }
                if ($('#m_21_2:checked').val() == 'I') {
                    p21['I']++;
                    hasilno21.push('3I');
                }
                if ($('#m_21_3:checked').val() == '*') {
                    p21['*']++;
                    hasilno21.push('4*');
                }
                
            }

            if ($('#l_21_0').length && $('#l_21_1').length && $('#l_21_2').length && $('#l_21_3').length) {
                if ($('#l_21_0:checked').val() == 'S') {
                    k21['S']++;
                    hasilno21.push('1S');
                }
                if ($('#l_21_1:checked').val() == 'D') {
                    k21['D']++;
                    hasilno21.push('2D');
                }
                if ($('#l_21_2:checked').val() == 'I') {
                    k21['I']++;
                    hasilno21.push('3I');
                }
                if ($('#l_21_3:checked').val() == 'C') {
                    k21['C']++;
                    hasilno21.push('4C');
                }
                
            }

            if ($('#m_22_0').length && $('#m_22_1').length && $('#m_22_2').length && $('#m_22_3').length) {
                if ($('#m_22_0:checked').val() == 'S') {
                    p22['S']++;
                    hasilno22.push('1S');
                }
                if ($('#m_22_1:checked').val() == '*') {
                    p22['*']++;
                    hasilno22.push('2*');
                }
                if ($('#m_22_2:checked').val() == 'D') {
                    p22['D']++;
                    hasilno22.push('3D');
                }
                if ($('#m_22_3:checked').val() == 'C') {
                    p22['C']++;
                    hasilno22.push('4C');
                }
                
            }

            if ($('#l_22_0').length && $('#l_22_1').length && $('#l_22_2').length && $('#l_22_3').length) {
                if ($('#l_22_0:checked').val() == 'S') {
                    k22['S']++;
                    hasilno22.push('1S');
                }
                if ($('#l_22_1:checked').val() == 'I') {
                    k22['I']++;
                    hasilno22.push('2I');
                }
                if ($('#l_22_2:checked').val() == 'D') {
                    k22['D']++;
                    hasilno22.push('3D');
                }
                if ($('#l_22_3:checked').val() == 'C') {
                    k22['C']++;
                    hasilno22.push('4C');
                }
                
            }

            if ($('#m_23_0').length && $('#m_23_1').length && $('#m_23_2').length && $('#m_23_3').length) {
                if ($('#m_23_0:checked').val() == '*') {
                    p23['*']++;
                    hasilno23.push('1*');
                }
                if ($('#m_23_1:checked').val() == 'I') {
                    p23['I']++;
                    hasilno23.push('2I');
                }
                if ($('#m_23_2:checked').val() == 'S') {
                    p23['S']++;
                    hasilno23.push('3S');
                }
                if ($('#m_23_3:checked').val() == '*') {
                    p23['*']++;
                    hasilno23.push('4*');
                }
                
            }

            if ($('#l_23_0').length && $('#l_23_1').length && $('#l_23_2').length && $('#l_23_3').length) {
                if ($('#l_23_0:checked').val() == 'D') {
                    k23['D']++;
                    hasilno23.push('1D');
                }
                if ($('#l_23_1:checked').val() == '*') {
                    k23['*']++;
                    hasilno23.push('2*');
                }
                if ($('#l_23_2:checked').val() == 'S') {
                    k23['S']++;
                    hasilno23.push('3S');
                }
                if ($('#l_23_3:checked').val() == 'C') {
                    k23['C']++;
                    hasilno23.push('4C');
                }
                
            }

            if ($('#m_24_0').length && $('#m_24_1').length && $('#m_24_2').length && $('#m_24_3').length) {
                if ($('#m_24_0:checked').val() == '*') {
                    p24['*']++;
                    hasilno24.push('1*');
                }
                if ($('#m_24_1:checked').val() == 'I') {
                    p24['I']++;
                    hasilno24.push('2I');
                }
                if ($('#m_24_2:checked').val() == 'D') {
                    p24['D']++;
                    hasilno24.push('3D');
                }
                if ($('#m_24_3:checked').val() == 'C') {
                    p24['C']++;
                    hasilno24.push('4C');
                }
                
            }

            if ($('#l_24_0').length && $('#l_24_1').length && $('#l_24_2').length && $('#l_24_3').length) {
                if ($('#l_24_0:checked').val() == 'S') {
                    k24['S']++;
                    hasilno24.push('1S');
                }
                if ($('#l_24_1:checked').val() == 'I') {
                    k24['I']++;
                    hasilno24.push('2I');
                }
                if ($('#l_24_2:checked').val() == '*') {
                    k24['*']++;
                    hasilno24.push('3*');
                }
                if ($('#l_24_3:checked').val() == '*') {
                    k24['*']++;
                    hasilno24.push('4*');
                }
                
            }
        

          let dp = p1['D'] + p2['D'] + p3['D'] + p4['D'] + p5['D'] + p6['D'] + p7['D'] + p8['D'] + p9['D'] + p10['D'] + p11['D'] + p12['D'] + p13['D'] + p14['D'] + p15['D'] + p16['D'] + p17['D'] + p18['D'] + p19['D'] + p20['D'] + p21['D'] + p22['D'] + p23['D'] + p24['D'];

          let ip = p1['I'] + p2['I'] + p3['I'] + p4['I'] + p5['I'] + p6['I'] + p7['I'] + p8['I'] + p9['I'] + p10['I'] + p11['I'] + p12['I'] + p13['I'] + p14['I'] + p15['I'] + p16['I'] + p17['I'] + p18['I'] + p19['I'] + p20['I'] + p21['I'] + p22['I'] + p23['I'] + p24['I'];

          let sp = p1['S'] + p2['S'] + p3['S'] + p4['S'] + p5['S'] + p6['S'] + p7['S'] + p8['S'] + p9['S'] + p10['S'] + p11['S'] + p12['S'] + p13['S'] + p14['S'] + p15['S'] + p16['S'] + p17['S'] + p18['S'] + p19['S'] + p20['S'] + p21['S'] + p22['S'] + p23['S'] + p24['S'];

          let cp = p1['C'] + p2['C'] + p3['C'] + p4['C'] + p5['C'] + p6['C'] + p7['C'] + p8['C'] + p9['C'] + p10['C'] + p11['C'] + p12['C'] + p13['C'] + p14['C'] + p15['C'] + p16['C'] + p17['C'] + p18['C'] + p19['C'] + p20['C'] + p21['C'] + p22['C'] + p23['C'] + p24['C'];

          let bp = p1['*'] + p2['*'] + p3['*'] + p4['*'] + p5['*'] + p6['*'] + p7['*'] + p8['*'] + p9['*'] + p10['*'] + p11['*'] + p12['*'] + p13['*'] + p14['*'] + p15['*'] + p16['*'] + p17['*'] + p18['*'] + p19['*'] + p20['*'] + p21['*'] + p22['*'] + p23['*'] + p24['*'];

          //total p
          let totalp = dp + ip + sp + cp + bp;

          let dk = k1['D'] + k2['D'] + k3['D'] + k4['D'] + k5['D'] + k6['D'] + k7['D'] + k8['D'] + k9['D'] + k10['D'] + k11['D'] + k12['D'] + k13['D'] + k14['D'] + k15['D'] + k16['D'] + k17['D'] + k18['D'] + k19['D'] + k20['D'] + k21['D'] + k22['D'] + k23['D'] + k24['D'];

          let ik = k1['I'] + k2['I'] + k3['I'] + k4['I'] + k5['I'] + k6['I'] + k7['I'] + k8['I'] + k9['I'] + k10['I'] + k11['I'] + k12['I'] + k13['I'] + k14['I'] + k15['I'] + k16['I'] + k17['I'] + k18['I'] + k19['I'] + k20['I'] + k21['I'] + k22['I'] + k23['I'] + k24['I'];

          let sk = k1['S'] + k2['S'] + k3['S'] + k4['S'] + k5['S'] + k6['S'] + k7['S'] + k8['S'] + k9['S'] + k10['S'] + k11['S'] + k12['S'] + k13['S'] + k14['S'] + k15['S'] + k16['S'] + k17['S'] + k18['S'] + k19['S'] + k20['S'] + k21['S'] + k22['S'] + k23['S'] + k24['S'];

          let ck = k1['C'] + k2['C'] + k3['C'] + k4['C'] + k5['C'] + k6['C'] + k7['C'] + k8['C'] + k9['C'] + k10['C'] + k11['C'] + k12['C'] + k13['C'] + k14['C'] + k15['C'] + k16['C'] + k17['C'] + k18['C'] + k19['C'] + k20['C'] + k21['C'] + k22['C'] + k23['C'] + k24['C'];

          let bk = k1['*'] + k2['*'] + k3['*'] + k4['*'] + k5['*'] + k6['*'] + k7['*'] + k8['*'] + k9['*'] + k10['*'] + k11['*'] + k12['*'] + k13['*'] + k14['*'] + k15['*'] + k16['*'] + k17['*'] + k18['*'] + k19['*'] + k20['*'] + k21['*'] + k22['*'] + k23['*'] + k24['*'];

          //total k
          let  totalk = dk + ik + sk + ck + bk;
          
          let line1 = [dp, ip, sp, cp, bp, totalp];
          let line2 = [dk, ik, sk, ck, bk, totalk];
          
          let a1 = dp-dk;
          let a2 = ip-ik;
          let a3 = sp-sk;
          let a4 = cp-ck;

          let line3 = [a1, a2, a3, a4];

          var hasil_line1dp;

        switch (line1[0]) {
            case 0:
                hasil_line1dp = -6;
                break;
            case 1:
                hasil_line1dp = -5.3;
                break;
            case 2:
                hasil_line1dp = -4;
                break;
            case 3:
                hasil_line1dp = -2.5;
                break;
            case 4:
                hasil_line1dp = -1.7;
                break;
            case 5:
                hasil_line1dp = -1.3;
                break;
            case 6:
                hasil_line1dp = 0;
                break;
            case 7:
                hasil_line1dp = 0.5;
                break;
            case 8:
                hasil_line1dp = 1;
                break;
            case 9:
                hasil_line1dp = 2;
                break;
            case 10:
                hasil_line1dp = 3;
                break;
            case 11:
                hasil_line1dp = 3.5;
                break;
            case 12:
                hasil_line1dp = 4;
                break;
            case 13:
                hasil_line1dp = 4.7;
                break;
            case 14:
                hasil_line1dp = 5.3;
                break;
            case 15:
                hasil_line1dp = 6.5;
                break;
            case 16:
                hasil_line1dp = 7;
                break;
            case 17:
            case 18:
            case 19:
                hasil_line1dp = 7;
                break;
            case 20:
                hasil_line1dp = 7.5;
                break;
            default:
                break;
        }


        var hasil_line1ip;

        switch (line1[1]) {
            case 0:
                hasil_line1ip = -7;
                break;
            case 1:
                hasil_line1ip = -4.6;
                break;
            case 2:
                hasil_line1ip = -2.5;
                break;
            case 3:
                hasil_line1ip = -1.3;
                break;
            case 4:
                hasil_line1ip = 1;
                break;
            case 5:
                hasil_line1ip = 3;
                break;
            case 6:
                hasil_line1ip = 3.5;
                break;
            case 7:
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
                hasil_line1ip = 7;
                break;
            case 16:
            case 17:
            case 18:
            case 19:
                hasil_line1ip = 7.5;
                break;
            case 20:
                hasil_line1ip = 8;
                break;
            default:
                break;
        }


        var hasil_line1sp;
        switch (line1[2]) {
            case 0:
                hasil_line1sp = -5.7;
                break;
            case 1:
                hasil_line1sp = -4.3;
                break;
            case 2:
                hasil_line1sp = -3.5;
                break;
            case 3:
                hasil_line1sp = -1.5;
                break;
            case 4:
                hasil_line1sp = -0.7;
                break;
            case 5:
                hasil_line1sp = 0.5;
                break;
            case 6:
                hasil_line1sp = 1;
                break;
            case 7:
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
                hasil_line1sp = 6.5;
                break;
            case 16:
            case 17:
            case 18:
                hasil_line1sp = 7;
                break;
            case 19:
            case 20:
                hasil_line1sp = 7.5;
                break;
            default:
                break;
        }

        var hasil_line1cp;

        switch (line1[3]) {
            case 0:
                hasil_line1cp = -6;
                break;
            case 1:
                hasil_line1cp = -4.7;
                break;
            case 2:
                hasil_line1cp = -3.5;
                break;
            case 3:
                hasil_line1cp = -1.5;
                break;
            case 4:
                hasil_line1cp = 0.5;
                break;
            case 5:
                hasil_line1cp = 2;
                break;
            case 6:
                hasil_line1cp = 3;
                break;
            case 7:
            case 8:
            case 9:
            case 10:
            case 11:
                hasil_line1cp = 6.5;
                break;
            case 12:
            case 13:
            case 14:
            case 15:
                hasil_line1cp = 7.3;
                break;
            case 16:
            case 17:
            case 18:
            case 19:
                hasil_line1cp = 8;
                break;
            case 20:
                hasil_line1cp = 8;
                break;
            default:
                break;
        }


        //line2
        var hasil_line2dk;

        switch (line2[0]) {
            case 0:
                hasil_line2dk = 7.5;
                break;
            case 1:
                hasil_line2dk = 6.5;
                break;
            case 2:
                hasil_line2dk = 4.3;
                break;
            case 3:
                hasil_line2dk = 2.5;
                break;
            case 4:
                hasil_line2dk = 1.5;
                break;
            case 5:
                hasil_line2dk = 0.5;
                break;
            case 6:
                hasil_line2dk = 0;
                break;
            case 7:
                hasil_line2dk = -1.3;
                break;
            case 8:
                hasil_line2dk = -1.5;
                break;
            case 9:
                hasil_line2dk = -2.5;
                break;
            case 10:
                hasil_line2dk = -3;
                break;
            case 11:
                hasil_line2dk = -3.5;
                break;
            case 12:
                hasil_line2dk = -4.3;
                break;
            case 13:
                hasil_line2dk = -5.3;
                break;
            case 14:
                hasil_line2dk = -5.7;
                break;
            case 15:
                hasil_line2dk = -6;
                break;
            case 16:
                hasil_line2dk = -6.5;
                break;
            case 17:
                hasil_line2dk = -6.7;
                break;
            case 18:
                hasil_line2dk = -7;
                break;
            case 19:
                hasil_line2dk = -7.3;
                break;
            case 20:
                hasil_line2dk = -7.5;
                break;
            default:
                break;
        }

        var hasil_line2ik;

        switch (line2[1]) {
            case 0:
                hasil_line2ik = 7;
                break;
            case 1:
                hasil_line2ik = 6;
                break;
            case 2:
                hasil_line2ik = 4;
                break;
            case 3:
                hasil_line2ik = 2.5;
                break;
            case 4:
                hasil_line2ik = 0.5;
                break;
            case 5:
                hasil_line2ik = 0;
                break;
            case 6:
                hasil_line2ik = -2;
                break;
            case 7:
                hasil_line2ik = -3.5;
                break;
            case 8:
                hasil_line2ik = -4.3;
                break;
            case 9:
                hasil_line2ik = -5.3;
                break;
            case 10:
                hasil_line2ik = -6;
                break;
            case 11:
                hasil_line2ik = -6.5;
                break;
            case 12:
                hasil_line2ik = -7;
                break;
            case 13:
                hasil_line2ik = -7.2;
                break;
            case 14:
                hasil_line2ik = -7.2;
                break;
            case 15:
                hasil_line2ik = -7.2;
                break;
            case 16:
                hasil_line2ik = -7.3;
                break;
            case 17:
                hasil_line2ik = -7.3;
                break;
            case 18:
                hasil_line2ik = -7.3;
                break;
            case 19:
                hasil_line2ik = -7.5;
                break;
            case 20:
                hasil_line2ik = -8;
                break;
            default:
                // Handle default case if needed
                break;
        }

        var hasil_line2sk;

        switch (line2[2]) {
            case 0:
                hasil_line2sk = 7.5;
                break;
            case 1:
                hasil_line2sk = 7;
                break;
            case 2:
                hasil_line2sk = 6;
                break;
            case 3:
                hasil_line2sk = 4;
                break;
            case 4:
                hasil_line2sk = 2.5;
                break;
            case 5:
                hasil_line2sk = 1.5;
                break;
            case 6:
                hasil_line2sk = 0.5;
                break;
            case 7:
                hasil_line2sk = -1.3;
                break;
            case 8:
                hasil_line2sk = -2;
                break;
            case 9:
                hasil_line2sk = -3;
                break;
            case 10:
                hasil_line2sk = -4.3;
                break;
            case 11:
                hasil_line2sk = -5.3;
                break;
            case 12:
                hasil_line2sk = -6;
                break;
            case 13:
                hasil_line2sk = -6.5;
                break;
            case 14:
                hasil_line2sk = -6.7;
                break;
            case 15:
                hasil_line2sk = -6.7;
                break;
            case 16:
                hasil_line2sk = -7;
                break;
            case 17:
                hasil_line2sk = -7.2;
                break;
            case 18:
                hasil_line2sk = -7.3;
                break;
            case 19:
                hasil_line2sk = -7.5;
                break;
            case 20:
                hasil_line2sk = -8;
                break;
            default:
                break;
        }

        var hasil_line2ck;

        switch (line2[3]) {
            case 0:
                hasil_line2ck = 7.5;
                break;
            case 1:
                hasil_line2ck = 7;
                break;
            case 2:
                hasil_line2ck = 5.6;
                break;
            case 3:
                hasil_line2ck = 4;
                break;
            case 4:
                hasil_line2ck = 2.5;
                break;
            case 5:
                hasil_line2ck = 1.5;
                break;
            case 6:
                hasil_line2ck = 0.5;
                break;
            case 7:
                hasil_line2ck = 0;
                break;
            case 8:
                hasil_line2ck = -1.3;
                break;
            case 9:
                hasil_line2ck = -2.5;
                break;
            case 10:
                hasil_line2ck = -3.5;
                break;
            case 11:
                hasil_line2ck = -5.3;
                break;
            case 12:
                hasil_line2ck = -5.7;
                break;
            case 13:
                hasil_line2ck = -6;
                break;
            case 14:
                hasil_line2ck = -6.5;
                break;
            case 15:
                hasil_line2ck = -7;
                break;
            case 16:
                hasil_line2ck = -7.3;
                break;
            case 17:
                hasil_line2ck = -7.5;
                break;
            case 18:
                hasil_line2ck = -7.7;
                break;
            case 19:
                hasil_line2ck = -7.9;
                break;
            case 20:
                hasil_line2ck = -8;
                break;
            default:
                // Handle default case if needed
                break;
        }


                //grafik3
                var hasil_line3a1;

        switch (line3[0]) {
            case -22:
                hasil_line3a1 = -8;
                break;
            case -21:
                hasil_line3a1 = -7.5;
                break;
            case -20:
                hasil_line3a1 = -7;
                break;
            case -19:
                hasil_line3a1 = -6.8;
                break;
            case -18:
                hasil_line3a1 = -6.75;
                break;
            case -17:
                hasil_line3a1 = -6.7;
                break;
            case -16:
                hasil_line3a1 = -6.5;
                break;
            case -15:
                hasil_line3a1 = -6.3;
                break;
            case -14:
                hasil_line3a1 = -6.1;
                break;
            case -13:
                hasil_line3a1 = -5.9;
                break;
            case -12:
                hasil_line3a1 = -5.7;
                break;
            case -11:
                hasil_line3a1 = -5.3;
                break;
            case -10:
                hasil_line3a1 = -4.3;
                break;
            case -9:
                hasil_line3a1 = -3.5;
                break;
            case -8:
                hasil_line3a1 = -3.25;
                break;
            case -7:
                hasil_line3a1 = -3;
                break;
            case -6:
                hasil_line3a1 = -2.75;
                break;
            case -5:
                hasil_line3a1 = -2.5;
                break;
            case -4:
                hasil_line3a1 = -1.5;
                break;
            case -3:
                hasil_line3a1 = -1;
                break;
            case -2:
                hasil_line3a1 = -0.5;
                break;
            case -1:
                hasil_line3a1 = -0.25;
                break;
            case 0:
                hasil_line3a1 = 0;
                break;
            case 1:
                hasil_line3a1 = 0.5;
                break;
            case 2:
                hasil_line3a1 = 0.7;
                break;
            case 3:
                hasil_line3a1 = 1;
                break;
            case 4:
                hasil_line3a1 = 1.3;
                break;
            case 5:
                hasil_line3a1 = 1.5;
                break;
            case 6:
                hasil_line3a1 = 2;
                break;
            case 7:
                hasil_line3a1 = 2.5;
                break;
            case 8:
                hasil_line3a1 = 3.5;
                break;
            case 9:
                hasil_line3a1 = 4;
                break;
            case 10:
                hasil_line3a1 = 4.7;
                break;
            case 11:
                hasil_line3a1 = 4.85;
                break;
            case 12:
                hasil_line3a1 = 5.9;
                break;
            case 13:
                hasil_line3a1 = 5.7;
                break;
            case 14:
                hasil_line3a1 = 5.3;
                break;
            case 15:
                hasil_line3a1 = 4.3;
                break;
            case 16:
                hasil_line3a1 = 3.5;
                break;
            case 17:
                hasil_line3a1 = 3.25;
                break;
            case 18:
                hasil_line3a1 = 3;
                break;
            case 19:
                hasil_line3a1 = 2.75;
                break;
            case 20:
                hasil_line3a1 = 2.5;
                break;
            case 21:
                hasil_line3a1 = 1.5;
                break;
            case 22:
                hasil_line3a1 = 1;
                break;
            default:
                hasil_line3a1 = 0; // or any other default value
        }


        var hasil_line3a2;

        switch (line3[1]) {
            case -22:
            case -21:
            case -20:
            case -19:
                hasil_line3a2 = -8;
                break;
            case -18:
                hasil_line3a2 = -7;
                break;
            case -17:
            case -16:
            case -15:
            case -14:
            case -13:
            case -12:
            case -11:
                hasil_line3a2 = -6.7;
                break;
            case -10:
                hasil_line3a2 = -6.5;
                break;
            case -9:
                hasil_line3a2 = -6;
                break;
            case -8:
                hasil_line3a2 = -5.7;
                break;
            case -7:
                hasil_line3a2 = -4.7;
                break;
            case -6:
                hasil_line3a2 = -4.3;
                break;
            case -5:
                hasil_line3a2 = -3.5;
                break;
            case -4:
                hasil_line3a2 = -3;
                break;
            case -3:
                hasil_line3a2 = -2;
                break;
            case -2:
                hasil_line3a2 = -1.5;
                break;
            case -1:
                hasil_line3a2 = 0;
                break;
            case 0:
                hasil_line3a2 = 0.5;
                break;
            case 1:
                hasil_line3a2 = 1;
                break;
            case 2:
                hasil_line3a2 = 1.5;
                break;
            case 3:
                hasil_line3a2 = 3;
                break;
            case 4:
                hasil_line3a2 = 4;
                break;
            case 5:
                hasil_line3a2 = 4.3;
                break;
            case 6:
                hasil_line3a2 = 5;
                break;
            case 7:
                hasil_line3a2 = 5.5;
                break;
            case 8:
                hasil_line3a2 = 6.5;
                break;
            case 9:
                hasil_line3a2 = 6.7;
                break;
            case 10:
                hasil_line3a2 = 7;
                break;
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
            case 17:
            case 18:
                hasil_line3a2 = 7.3;
                break;
            case 19:
                hasil_line3a2 = 7.5;
                break;
            case 20:
            case 21:
            case 22:
                hasil_line3a2 = 8;
                break;
            default:
                hasil_line3a2 = 0; // or any other default value
        }


        var hasil_line3a3;

        switch (line3[2]) {
            case -22:
            case -21:
            case -20:
            case -19:
                hasil_line3a3 = -8;
                break;
            case -18:
                hasil_line3a3 = -7.5;
                break;
            case -17:
            case -16:
            case -15:
            case -14:
            case -13:
            case -12:
            case -11:
                hasil_line3a3 = -7.3;
                break;
            case -10:
                hasil_line3a3 = -6;
                break;
            case -9:
                hasil_line3a3 = -4.7;
                break;
            case -8:
                hasil_line3a3 = -4.3;
                break;
            case -7:
                hasil_line3a3 = -3.5;
                break;
            case -6:
                hasil_line3a3 = -3;
                break;
            case -5:
                hasil_line3a3 = -2;
                break;
            case -4:
                hasil_line3a3 = -1.5;
                break;
            case -3:
                hasil_line3a3 = -1;
                break;
            case -2:
                hasil_line3a3 = -0.5;
                break;
            case -1:
                hasil_line3a3 = 0;
                break;
            case 0:
                hasil_line3a3 = 1;
                break;
            case 1:
                hasil_line3a3 = 1.5;
                break;
            case 2:
                hasil_line3a3 = 2;
                break;
            case 3:
                hasil_line3a3 = 3;
                break;
            case 4:
                hasil_line3a3 = 3.5;
                break;
            case 5:
                hasil_line3a3 = 4;
                break;
            case 6:
                hasil_line3a3 = 4.3;
                break;
            case 7:
                hasil_line3a3 = 4.7;
                break;
            case 8:
                hasil_line3a3 = 5;
                break;
            case 9:
                hasil_line3a3 = 5.5;
                break;
            case 10:
                hasil_line3a3 = 6;
                break;
            case 11:
                hasil_line3a3 = 6.2;
                break;
            case 12:
                hasil_line3a3 = 6.3;
                break;
            case 13:
                hasil_line3a3 = 6.5;
                break;
            case 14:
                hasil_line3a3 = 6.7;
                break;
            case 15:
                hasil_line3a3 = 7;
                break;
            case 16:
            case 17:
            case 18:
            case 19:
                hasil_line3a3 = 7.3;
                break;
            case 20:
                hasil_line3a3 = 7.5;
                break;
            case 21:
            case 22:
                hasil_line3a3 = 8;
                break;
            default:
                hasil_line3a3 = 0; // or any other default value
        }


        var hasil_line3a4;

        switch (line3[3]) {
            case -22:
            case -21:
            case -20:
            case -19:
                hasil_line3a4 = -7.5;
                break;
            case -18:
                hasil_line3a4 = -7.3;
                break;
            case -17:
            case -16:
            case -15:
            case -14:
            case -13:
            case -12:
            case -11:
                hasil_line3a4 = -6.7;
                break;
            case -10:
                hasil_line3a4 = -5.7;
                break;
            case -9:
                hasil_line3a4 = -4.7;
                break;
            case -8:
                hasil_line3a4 = -4.3;
                break;
            case -7:
                hasil_line3a4 = -3.5;
                break;
            case -6:
                hasil_line3a4 = -3;
                break;
            case -5:
                hasil_line3a4 = -2.5;
                break;
            case -4:
                hasil_line3a4 = -0.5;
                break;
            case -3:
                hasil_line3a4 = 0;
                break;
            case -2:
                hasil_line3a4 = 0.3;
                break;
            case -1:
                hasil_line3a4 = 0.5;
                break;
            case 0:
                hasil_line3a4 = 1.5;
                break;
            case 1:
                hasil_line3a4 = 3;
                break;
            case 2:
                hasil_line3a4 = 4;
                break;
            case 3:
                hasil_line3a4 = 4.3;
                break;
            case 4:
                hasil_line3a4 = 5.5;
                break;
            case 5:
                hasil_line3a4 = 5.7;
                break;
            case 6:
                hasil_line3a4 = 6;
                break;
            case 7:
                hasil_line3a4 = 6.3;
                break;
            case 8:
                hasil_line3a4 = 6.5;
                break;
            case 9:
                hasil_line3a4 = 6.7;
                break;
            case 10:
                hasil_line3a4 = 7;
                break;
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
            case 17:
            case 18:
                hasil_line3a4 = 7.3;
                break;
            case 19:
            case 20:
            case 21:
            case 22:
                hasil_line3a4 = 8;
                break;
            default:
                hasil_line3a4 = 0; // or any other default value
        }


            



          let grafik1 = [hasil_line1dp, hasil_line1ip, hasil_line1sp, hasil_line1cp];
          let grafik2 = [hasil_line2dk, hasil_line2ik, hasil_line2sk, hasil_line2ck];
          let grafik3 = [hasil_line3a1, hasil_line3a2, hasil_line3a3, hasil_line3a4];
            
          var baris1;

            switch (true) {
                case (grafik1[0] <= 0 && grafik1[1] <= 0 && grafik1[2] <= 0 && grafik1[3] > 0):
                    baris1 = 1;
                    break;
                case (grafik1[0] > 0 && grafik1[1] <= 0 && grafik1[2] <= 0 && grafik1[3] <= 0):
                    baris1 = 2;
                    break;
                case (grafik1[0] > 0 && grafik1[1] <= 0 && grafik1[2] <= 0 && grafik1[3] > 0 && grafik1[3] >= grafik1[0]):
                    baris1 = 3;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] <= 0 && grafik1[3] <= 0 && grafik1[1] >= grafik1[0]):
                    baris1 = 4;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] <= 0 && grafik1[3] > 0 && grafik1[1] >= grafik1[0] && grafik1[0] >= grafik1[3]):
                    baris1 = 5;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] <= 0 && grafik1[1] >= grafik1[0] && grafik1[0] >= grafik1[2]):
                    baris1 = 6;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] <= 0 && grafik1[1] >= grafik1[2] && grafik1[2] >= grafik1[0]):
                    baris1 = 7;
                    break;
                case (grafik1[0] > 0 && grafik1[1] <= 0 && grafik1[2] > 0 && grafik1[3] > 0 && grafik1[2] >= grafik1[0] && grafik1[0] >= grafik1[3]):
                    baris1 = 8;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] <= 0 && grafik1[3] <= 0 && grafik1[0] >= grafik1[1]):
                    baris1 = 9;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] <= 0 && grafik1[0] >= grafik1[1] && grafik1[1] >= grafik1[2]):
                    baris1 = 10;
                    break;
                case (grafik1[0] > 0 && grafik1[1] <= 0 && grafik1[2] > 0 && grafik1[3] <= 0 && grafik1[0] >= grafik1[2]):
                    baris1 = 11;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] > 0 && grafik1[3] >= grafik1[1] && grafik1[1] >= grafik1[2]):
                    baris1 = 12;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] > 0 && grafik1[3] >= grafik1[2] && grafik1[2] >= grafik1[1]):
                    baris1 = 13;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] > 0 && grafik1[1] >= grafik1[2] && grafik1[1] >= grafik1[3]):
                    baris1 = 14;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] <= 0 && grafik1[2] > 0 && grafik1[3] <= 0):
                    baris1 = 15;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] <= 0 && grafik1[2] > 0 && grafik1[3] > 0 && grafik1[3] >= grafik1[2]):
                    baris1 = 16;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] <= 0 && grafik1[2] > 0 && grafik1[3] > 0 && grafik1[2] >= grafik1[3]):
                    baris1 = 17;
                    break;
                case (grafik1[0] > 0 && grafik1[1] <= 0 && grafik1[2] <= 0 && grafik1[3] > 0 && grafik1[0] >= grafik1[3]):
                    baris1 = 18;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] <= 0 && grafik1[3] > 0 && grafik1[0] >= grafik1[1] && grafik1[1] >= grafik1[3]):
                    baris1 = 19;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] <= 0 && grafik1[0] >= grafik1[2] && grafik1[2] >= grafik1[1]):
                    baris1 = 20;
                    break;
                case (grafik1[0] > 0 && grafik1[1] <= 0 && grafik1[2] > 0 && grafik1[3] > 0 && grafik1[0] >= grafik1[2] && grafik1[2] >= grafik1[3]):
                    baris1 = 21;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] <= 0 && grafik1[3] > 0 && grafik1[0] >= grafik1[3] && grafik1[3] >= grafik1[1]):
                    baris1 = 22;
                    break;
                case (grafik1[0] > 0 && grafik1[1] <= 0 && grafik1[2] > 0 && grafik1[3] > 0 && grafik1[0] >= grafik1[3] && grafik1[3] >= grafik1[2]):
                    baris1 = 23;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] > 0 && grafik1[2] <= 0 && grafik1[3] <= 0):
                    baris1 = 24;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] <= 0 && grafik1[1] >= grafik1[2]):
                    baris1 = 25;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] > 0 && grafik1[2] <= 0 && grafik1[3] > 0 && grafik1[1] >= grafik1[3]):
                    baris1 = 26;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] <= 0 && grafik1[3] > 0 && grafik1[1] >= grafik1[3] && grafik1[3] >= grafik1[0]):
                    baris1 = 27;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] > 0 && grafik1[1] >= grafik1[3] && grafik1[3] >= grafik1[2]):
                    baris1 = 28;
                    break;
                case (grafik1[0] > 0 && grafik1[1] <= 0 && grafik1[2] > 0 && grafik1[3] <= 0 && grafik1[2] >= grafik1[0]):
                    baris1 = 29;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] <= 0 && grafik1[2] >= grafik1[1]):
                    baris1 = 30;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] <= 0 && grafik1[2] >= grafik1[0] && grafik1[0] >= grafik1[1]):
                    baris1 = 31;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] <= 0 && grafik1[2] >= grafik1[1] && grafik1[1] >= grafik1[0]):
                    baris1 = 32;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] > 0 && grafik1[2] >= grafik1[1] && grafik1[2] >= grafik1[3]):
                    baris1 = 33;
                    break;
                case (grafik1[0] > 0 && grafik1[1] <= 0 && grafik1[2] > 0 && grafik1[3] > 0 && grafik1[2] >= grafik1[3] && grafik1[3] >= grafik1[0]):
                    baris1 = 34;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] > 0 && grafik1[2] >= grafik1[3] && grafik1[3] >= grafik1[1]):
                    baris1 = 35;
                    break;
                case (grafik1[0] <= 0 && grafik1[1] > 0 && grafik1[2] <= 0 && grafik1[3] > 0 && grafik1[3] >= grafik1[1]):
                    baris1 = 36;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] <= 0 && grafik1[3] > 0 && grafik1[3] >= grafik1[0] && grafik1[0] >= grafik1[1]):
                    baris1 = 37;
                    break;
                case (grafik1[0] > 0 && grafik1[1] <= 0 && grafik1[2] > 0 && grafik1[3] > 0 && grafik1[3] >= grafik1[0] && grafik1[0] >= grafik1[2]):
                    baris1 = 38;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] <= 0 && grafik1[3] > 0 && grafik1[3] >= grafik1[1] && grafik1[1] >= grafik1[0]):
                    baris1 = 39;
                    break;
                case (grafik1[0] > 0 && grafik1[1] > 0 && grafik1[2] > 0 && grafik1[3] <= 0 && grafik1[2] >= grafik1[0] && grafik1[0] >= grafik1[1]):
                    baris1 = 40;
                    break;
                default:
                    // Handle the default case here
                    break;
            }
            

            var baris2;

            switch (true) {
            case (grafik2[0] <= 0 && grafik2[1] <= 0 && grafik2[2] <= 0 && grafik2[3] > 0):
                baris2 = 1;
                break;

            case (grafik2[0] > 0 && grafik2[1] <= 0 && grafik2[2] <= 0 && grafik2[3] <= 0):
                baris2 = 2;
                break;

            case (grafik2[0] > 0 && grafik2[1] <= 0 && grafik2[2] <= 0 && grafik2[3] > 0 && grafik2[3] >= grafik2[0]):
                baris2 = 3;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] <= 0 && grafik2[3] <= 0 && grafik2[1] >= grafik2[0]):
                baris2 = 4;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] <= 0 && grafik2[3] > 0 && grafik2[1] >= grafik2[0] && grafik2[0] >= grafik2[3]):
                baris2 = 5;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] <= 0 && grafik2[1] >= grafik2[0] && grafik2[0] >= grafik2[2]):
                baris2 = 6;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] <= 0 && grafik2[1] >= grafik2[2] && grafik2[2] >= grafik2[0]):
                baris2 = 7;
                break;

            case (grafik2[0] > 0 && grafik2[1] <= 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[2] >= grafik2[0] && grafik2[0] >= grafik2[3]):
                baris2 = 8;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] <= 0 && grafik2[3] <= 0 && grafik2[0] >= grafik2[1]):
                baris2 = 9;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] <= 0 && grafik2[0] >= grafik2[1] && grafik2[1] >= grafik2[2]):
                baris2 = 10;
                break;

            case (grafik2[0] > 0 && grafik2[1] <= 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[0] >= grafik2[2]):
                baris2 = 11;
                break;

            case (grafik2[0] <= 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[3] >= grafik2[1] && grafik2[1] >= grafik2[2]):
                baris2 = 12;
                break;

            case (grafik2[0] <= 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[3] >= grafik2[2] && grafik2[2] >= grafik2[1]):
                baris2 = 13;
                break;

            case (grafik2[0] <= 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[1] >= grafik2[2] && grafik2[1] >= grafik2[3]):
                baris2 = 14;
                break;

            case (grafik2[0] <= 0 && grafik2[1] <= 0 && grafik2[2] > 0 && grafik2[3] <= 0):
                baris2 = 15;
                break;

            case (grafik2[0] <= 0 && grafik2[1] <= 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[3] >= grafik2[2]):
                baris2 = 16;
                break;

            case (grafik2[0] <= 0 && grafik2[1] <= 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[2] >= grafik2[3]):
                baris2 = 17;
                break;

            case (grafik2[0] > 0 && grafik2[1] <= 0 && grafik2[2] <= 0 && grafik2[3] > 0 && grafik2[0] >= grafik2[3]):
                baris2 = 18;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] <= 0 && grafik2[3] > 0 && grafik2[0] >= grafik2[1] && grafik2[1] >= grafik2[3]):
                baris2 = 19;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] <= 0 && grafik2[0] >= grafik2[2] && grafik2[2] >= grafik2[1]):
                baris2 = 20;
                break;

            case (grafik2[0] > 0 && grafik2[1] <= 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[0] >= grafik2[2] && grafik2[2] >= grafik2[3]):
                baris2 = 21;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] <= 0 && grafik2[3] > 0 && grafik2[0] >= grafik2[3] && grafik2[3] >= grafik2[1]):
                baris2 = 22;
                break;

            case (grafik2[0] > 0 && grafik2[1] <= 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[0] >= grafik2[3] && grafik2[3] >= grafik2[2]):
                baris2 = 23;
                break;

            case (grafik2[0] <= 0 && grafik2[1] > 0 && grafik2[2] <= 0 && grafik2[3] <= 0):
                baris2 = 24;
                break;

            case (grafik2[0] <= 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] <= 0 && grafik2[1] >= grafik2[2]):
                baris2 = 25;
                break;

            case (grafik2[0] <= 0 && grafik2[1] > 0 && grafik2[2] <= 0 && grafik2[3] > 0 && grafik2[1] >= grafik2[3]):
                baris2 = 26;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] <= 0 && grafik2[3] > 0 && grafik2[1] >= grafik2[3] && grafik2[3] >= grafik2[0]):
                baris2 = 27;
                break;

            case (grafik2[0] <= 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[1] >= grafik2[3] && grafik2[3] >= grafik2[2]):
                baris2 = 28;
                break;

            case (grafik2[0] > 0 && grafik2[1] <= 0 && grafik2[2] > 0 && grafik2[3] <= 0 && grafik2[2] >= grafik2[0]):
                baris2 = 29;
                break;

            case (grafik2[0] <= 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] <= 0 && grafik2[2] >= grafik2[1]):
                baris2 = 30;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] <= 0 && grafik2[2] >= grafik2[0] && grafik2[0] >= grafik2[1]):
                baris2 = 31;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] <= 0 && grafik2[2] >= grafik2[1] && grafik2[1] >= grafik2[0]):
                baris2 = 32;
                break;

            case (grafik2[0] <= 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[2] >= grafik2[1] && grafik2[2] >= grafik2[3]):
                baris2 = 33;
                break;

            case (grafik2[0] > 0 && grafik2[1] <= 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[2] >= grafik2[3] && grafik2[3] >= grafik2[0]):
                baris2 = 34;
                break;

            case (grafik2[0] <= 0 && grafik2[1] > 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[2] >= grafik2[3] && grafik2[3] >= grafik2[1]):
                baris2 = 35;
                break;

            case (grafik2[0] <= 0 && grafik2[1] > 0 && grafik2[2] <= 0 && grafik2[3] > 0 && grafik2[3] >= grafik2[1]):
                baris2 = 36;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] <= 0 && grafik2[3] > 0 && grafik2[3] >= grafik2[0] && grafik2[0] >= grafik2[1]):
                baris2 = 37;
                break;

            case (grafik2[0] > 0 && grafik2[1] <= 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[3] >= grafik2[0] && grafik2[0] >= grafik2[2]):
                baris2 = 38;
                break;

            case (grafik2[0] > 0 && grafik2[1] > 0 && grafik2[2] <= 0 && grafik2[3] > 0 && grafik2[3] >= grafik2[1] && grafik2[1] >= grafik2[0]):
                baris2 = 39;
                break;

            case (grafik2[0] > 0 && grafik2[1] <= 0 && grafik2[2] > 0 && grafik2[3] > 0 && grafik2[3] >= grafik2[2] && grafik2[2] >= grafik2[3]):
                baris2 = 40;
                break;

            default:
                // Default case if none of the conditions are met.
                break;
            }


            var baris3;

            switch (true) {
            case (grafik3[0] <= 0 && grafik3[1] <= 0 && grafik3[2] <= 0 && grafik3[3] > 0):
                baris3 = 1;
                break;

            case (grafik3[0] > 0 && grafik3[1] <= 0 && grafik3[2] <= 0 && grafik3[3] <= 0):
                baris3 = 2;
                break;

            case (grafik3[0] > 0 && grafik3[1] <= 0 && grafik3[2] <= 0 && grafik3[3] > 0 && grafik3[3] >= grafik3[0]):
                baris3 = 3;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] <= 0 && grafik3[3] <= 0 && grafik3[1] >= grafik3[0]):
                baris3 = 4;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] <= 0 && grafik3[3] > 0 && grafik3[1] >= grafik3[0] && grafik3[0] >= grafik3[3]):
                baris3 = 5;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] <= 0 && grafik3[1] >= grafik3[0] && grafik3[0] >= grafik3[2]):
                baris3 = 6;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] <= 0 && grafik3[1] >= grafik3[2] && grafik3[2] >= grafik3[0]):
                baris3 = 7;
                break;

            case (grafik3[0] > 0 && grafik3[1] <= 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[2] >= grafik3[0] && grafik3[0] >= grafik3[3]):
                baris3 = 8;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] <= 0 && grafik3[3] <= 0 && grafik3[0] >= grafik3[1]):
                baris3 = 9;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] <= 0 && grafik3[0] >= grafik3[1] && grafik3[1] >= grafik3[2]):
                baris3 = 10;
                break;

            case (grafik3[0] > 0 && grafik3[1] <= 0 && grafik3[2] > 0 && grafik3[3] <= 0 && grafik3[0] >= grafik3[2]):
                baris3 = 11;
                break;

            case (grafik3[0] <= 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[3] >= grafik3[1] && grafik3[1] >= grafik3[2]):
                baris3 = 12;
                break;

            case (grafik3[0] <= 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[3] >= grafik3[2] && grafik3[2] >= grafik3[1]):
                baris3 = 13;
                break;

            case (grafik3[0] <= 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[1] >= grafik3[2] && grafik3[1] >= grafik3[3]):
                baris3 = 14;
                break;

            case (grafik3[0] <= 0 && grafik3[1] <= 0 && grafik3[2] > 0 && grafik3[3] <= 0):
                baris3 = 15;
                break;

            case (grafik3[0] <= 0 && grafik3[1] <= 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[3] >= grafik3[2]):
                baris3 = 16;
                break;

            case (grafik3[0] <= 0 && grafik3[1] <= 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[2] >= grafik3[3]):
                baris3 = 17;
                break;

            case (grafik3[0] > 0 && grafik3[1] <= 0 && grafik3[2] <= 0 && grafik3[3] > 0 && grafik3[0] >= grafik3[3]):
                baris3 = 18;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] <= 0 && grafik3[3] > 0 && grafik3[0] >= grafik3[1] && grafik3[1] >= grafik3[3]):
                baris3 = 19;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] <= 0 && grafik3[0] >= grafik3[2] && grafik3[2] >= grafik3[1]):
                baris3 = 20;
                break;

            case (grafik3[0] > 0 && grafik3[1] <= 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[0] >= grafik3[2] && grafik3[2] >= grafik3[3]):
                baris3 = 21;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] <= 0 && grafik3[3] > 0 && grafik3[0] >= grafik3[3] && grafik3[3] >= grafik3[1]):
                baris3 = 22;
                break;

            case (grafik3[0] > 0 && grafik3[1] <= 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[0] >= grafik3[3] && grafik3[3] >= grafik3[2]):
                baris3 = 23;
                break;

            case (grafik3[0] <= 0 && grafik3[1] > 0 && grafik3[2] <= 0 && grafik3[3] <= 0):
                baris3 = 24;
                break;

            case (grafik3[0] <= 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] <= 0 && grafik3[1] >= grafik3[2]):
                baris3 = 25;
                break;

            case (grafik3[0] <= 0 && grafik3[1] > 0 && grafik3[2] <= 0 && grafik3[3] > 0 && grafik3[1] >= grafik3[3]):
                baris3 = 26;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] <= 0 && grafik3[3] > 0 && grafik3[1] >= grafik3[3] && grafik3[3] >= grafik3[0]):
                baris3 = 27;
                break;

            case (grafik3[0] <= 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[1] >= grafik3[3] && grafik3[3] >= grafik3[2]):
                baris3 = 28;
                break;

            case (grafik3[0] > 0 && grafik3[1] <= 0 && grafik3[2] > 0 && grafik3[3] <= 0 && grafik3[2] >= grafik3[0]):
                baris3 = 29;
                break;

            case (grafik3[0] <= 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] <= 0 && grafik3[2] >= grafik3[1]):
                baris3 = 30;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] <= 0 && grafik3[2] >= grafik3[0] && grafik3[0] >= grafik3[1]):
                baris3 = 31;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] <= 0 && grafik3[2] >= grafik3[1] && grafik3[1] >= grafik3[0]):
                baris3 = 32;
                break;

            case (grafik3[0] <= 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[2] >= grafik3[1] && grafik3[2] >= grafik3[3]):
                baris3 = 33;
                break;

            case (grafik3[0] > 0 && grafik3[1] <= 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[2] >= grafik3[3] && grafik3[3] >= grafik3[0]):
                baris3 = 34;
                break;

            case (grafik3[0] <= 0 && grafik3[1] > 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[2] >= grafik3[3] && grafik3[3] >= grafik3[1]):
                baris3 = 35;
                break;

            case (grafik3[0] <= 0 && grafik3[1] > 0 && grafik3[2] <= 0 && grafik3[3] > 0 && grafik3[3] >= grafik3[1]):
                baris3 = 36;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] <= 0 && grafik3[3] > 0 && grafik3[3] >= grafik3[0] && grafik3[0] >= grafik3[1]):
                baris3 = 37;
                break;

            case (grafik3[0] > 0 && grafik3[1] <= 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[3] >= grafik3[0] && grafik3[0] >= grafik3[2]):
                baris3 = 38;
                break;

            case (grafik3[0] > 0 && grafik3[1] > 0 && grafik3[2] <= 0 && grafik3[3] > 0 && grafik3[3] >= grafik3[1] && grafik3[1] >= grafik3[0]):
                baris3 = 39;
                break;

            case (grafik3[0] > 0 && grafik3[1] <= 0 && grafik3[2] > 0 && grafik3[3] > 0 && grafik3[3] >= grafik3[2] && grafik3[2] >= grafik3[3]):
                baris3 = 40;
                break;

            default:
                // Default case if none of the conditions are met.
                break;
            }

          var jawab = [hasilno1, hasilno2, hasilno3, hasilno4, hasilno5, hasilno6, hasilno7, hasilno8, hasilno9, hasilno10, hasilno11, hasilno12, hasilno13, hasilno14, hasilno15, hasilno16, hasilno17, hasilno18, hasilno19, hasilno20, hasilno21, hasilno22, hasilno23, hasilno24];

          var umum = tableKepribadian[baris1].typeKepribadian;
          var kep = tableKepribadian[baris1].gambaranDiri;

          var umum2 = tableKepribadian[baris2].typeKepribadian;
          var kep2 = tableKepribadian[baris2].gambaranDiri;

          var umum3 = tableKepribadian[baris3].typeKepribadian;
          var kep3 = tableKepribadian[baris3].gambaranDiri;


          var kep_umum = [umum, kep];
          var kep_tekan = [umum2, kep2];
          var kep_sembunyi = [umum3, kep3]
          var job = tableKepribadian[baris3].JOB_RELEVAN;
          var person = tableKepribadian[baris3].Personality;
        // console.log(line1);
        // console.log(line2);
        // console.log(line3);
        // console.log(grafik1);
        // console.log(grafik2);
        // console.log(grafik3);
        //   console.log(kep_umum);
        //   console.log(kep_tekan);
        //   console.log(kep_sembunyi);
        //   console.log(job);
        //   console.log(person);
        //   console.log(jawab);
          

          var data = localStorage.getItem('key');

          if (data) {
            var parsedData = JSON.parse(data);
            if (parsedData && parsedData.nik) {
                var nik = parsedData.nik;
            } else {
                console.error("Properti 'nik' tidak ditemukan dalam struktur data.");
            }
        } else {
            console.error("Data tidak ditemukan di localStorage.");
        }
      

      $.ajax({
        type: 'POST',
        url: 'api/api_disc_kirim.php',
        data: {
            nik:nik,
            line1: line1,
            line2: line2,
            line3: line3,
            grafik1: grafik1,
            grafik2: grafik2,
            grafik3: grafik3,
            kep_umum: kep_umum,
            kep_tekan: kep_tekan,
            kep_sembunyi: kep_sembunyi,
            person: person,
            job: job
           
            
        },
        success: function (response) {
          Swal.fire({
            title: 'Success!',
            text: 'Your test answers have been successfully sent',
            icon: 'success',
            confirmButtonText: 'OK'
          }).then((result) => {
            if (result.isConfirmed || result.isDismissed) {
              window.location.href = 'akhir.php';
            }
          });
        },
        error: function (response) {
        Swal.fire({
          title: 'Error!',
          text: 'Failed to send data to the server. Please try again.',
          icon: 'error',
          confirmButtonText: 'OK'
        });
      }
      });
    }
  });

</script> 
<script src="sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>