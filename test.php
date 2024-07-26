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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body,h1,h2,h3,h4,h5 {color: black; font-family: "Raleway", sans-serif}
        .w3-closebtn {text-decoration: none;float: right;font-size: 24px;font-weight: bold;color: inherit;} 
        .w16left{font-size: 16px;padding-left:16px !important;} 
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #92C7CF !important;">
    <div class="container-fluid">
        <a class="navbar-brand  text-dark" href="#">DISC TEST</a>
        <div class="ms-auto" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <div class="nav-link " aria-current="page" ><img src="LOGO NO REG.png" alt="logo" style="width: 100px;"></div>
            </div>
        </div>
    </div>
</nav>
<div class="w3-container">
    <form method='post' action='' name="disc">
        <div class="w3-card-4">
            <div class='w3-container'>
                <h2>&nbsp;</h2>
                <h2>DISC Personality Test</h1>
                <div class="w3-row">
                    <div class="w3-col s12">
                        <p style="font-size: 16px">
                            Tes DISC (<i>Dominance, Influence, Steadiness, Conscientiousness</i>) adalah sebuah alat untuk memahami tipe-tipe perilaku dan gaya kepribadian, yang pertama kali dikembangkan oleh <i>William Moulton Marston</i>. Dalam penerapannya di dunia bisnis dan usaha, alat ini telah membuka wawasan dan pemikiran, baik secara professional maupun secara personal.
                        </p>
                        <div class="w3-container w3-theme-l3 w3-section">
                            <span onclick="this.parentElement.style.display='none'" class="w3-closebtn" style="cursor:pointer;">x</span>
                            <h3 class='text-dark' style="margin:5px">Hai, <span id="userName"></span> <br/> Berikut ini adalah petunjuk untuk DISC Test <br/>
                                <p style="font-size: 16px">Setiap nomor di bawah ini memuat 4 (empat) kalimat. Tugas anda adalah : <br />
                                    <ol>
                                        <li style="font-size: 16px">Beri tanda/cek pada kolom di bawah huruf  [P] di samping kalimat yang PALING menggambarkan diri anda</li>
                                        <li style="font-size: 16px">Beri tanda/cek pada kolom di bawah huruf  [K] di samping kalimat yang PALING TIDAK menggambarkan diri anda</li>
                                    </ol>
                                </p>
                            </h3>
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
                                <tr>
                                    <th rowspan='4'>1</th>
                                    <td class='w16left'>Gampangan, Mudah setuju</td>
                                    <td><input type='radio' class='w3-radio' id='m_1_0' name='m[1]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_1_0' name='l[1]' value='S' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Percaya, Mudah percaya pada orang</td>
                                    <td><input type='radio' class='w3-radio' id='m_1_1' name='m[1]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_1_1' name='l[1]' value='I' required></td>
                                    </tr>
                                <tr>                                    
                                    <td class='w16left'>Petualang, Mengambil resiko</td>
                                    <td><input type='radio' class='w3-radio' id='m_1_2' name='m[1]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_1_2' name='l[1]' value='D' required></td>
                                    </tr>
                                <tr>                                    
                                    <td class='w16left'>Toleran, Menghormati</td>
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
                                <tr class="w3-theme-l3">
                                    <th rowspan='4'>2</th>
                                    <td class='w16left'>Lembut suara, Pendiam</td>
                                    <td><input type='radio' class='w3-radio' id='m_2_0' name='m[2]' value='C' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_2_0' name='l[2]' value='N' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                               
                                    <td class='w16left'>Optimistik, Visioner</td>
                                    <td><input type='radio' class='w3-radio' id='m_2_1' name='m[2]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_2_1' name='l[2]' value='D' required></td>
                                    </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Pusat perhatian, Suka gaul</td>
                                    <td><input type='radio' class='w3-radio' id='m_2_2' name='m[2]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_2_2' name='l[2]' value='I' required></td>
                                    </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Pendamai, Membawa harmoni</td>
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
                                <tr><th rowspan='4'>3</th>
                                    <td class='w16left'>Menyemangati orang</td>
                                    <td><input type='radio' class='w3-radio' id='m_3_0' name='m[3]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_3_0' name='l[3]' value='I' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Berusaha sempurna</td>
                                    <td><input type='radio' class='w3-radio' id='m_3_1' name='m[3]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_3_1' name='l[3]' value='C' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Bagian dari kelompok</td>
                                    <td><input type='radio' class='w3-radio' id='m_3_2' name='m[3]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_3_2' name='l[3]' value='S' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Ingin membuat tujuan</td>
                                    <td><input type='radio' class='w3-radio' id='m_3_3' name='m[3]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_3_3' name='l[3]' value='N' required></td>
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
                                <tr class="w3-theme-l3">
                                    <th rowspan='4'>4</th>
                                    <td class='w16left'>Menjadi frustasi</td>
                                    <td><input type='radio' class='w3-radio' id='m_4_0' name='m[4]' value='C' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_4_0' name='l[4]' value='C' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Menyimpan perasaan saya</td>
                                    <td><input type='radio' class='w3-radio' id='m_4_1' name='m[4]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_4_1' name='l[4]' value='S' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                   
                                    <td class='w16left'>Menceritakan sisi saya</td>
                                    <td><input type='radio' class='w3-radio' id='m_4_2' name='m[4]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_4_2' name='l[4]' value='I' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Siap  beroposisi</td>
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
                                <tr>
                                    <th rowspan='4'>5</th>
                                    <td class='w16left'>Hidup, Suka bicara</td>
                                    <td><input type='radio' class='w3-radio' id='m_5_0' name='m[5]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_5_0' name='l[5]' value='N' required></td>
                                </tr>
                                <tr>                                   
                                    <td class='w16left'>Gerak cepat, Tekun</td>
                                    <td><input type='radio' class='w3-radio' id='m_5_1' name='m[5]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_5_1' name='l[5]' value='D' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Usaha menjaga keseimbangan</td>
                                    <td><input type='radio' class='w3-radio' id='m_5_2' name='m[5]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_5_2' name='l[5]' value='S' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Usaha mengikuti aturan</td>
                                    <td><input type='radio' class='w3-radio' id='m_5_3' name='m[5]' value='N' required></td>
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
                                <tr class="w3-theme-l3">
                                    <th rowspan='4'>6</th>
                                    <td class='w16left'>Kelola waktu secara efisien</td>
                                    <td><input type='radio' class='w3-radio' id='m_6_0' name='m[6]' value='C' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_6_0' name='l[6]' value='N' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Sering terburu-buru, Merasa tertekan</td>
                                    <td><input type='radio' class='w3-radio' id='m_6_1' name='m[6]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_6_1' name='l[6]' value='D' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Masalah sosial itu penting</td>
                                    <td><input type='radio' class='w3-radio' id='m_6_2' name='m[6]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_6_2' name='l[6]' value='I' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Suka selesikan apa yang saya mulai</td>
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
                                <tr>
                                    <th rowspan='4'>7</th>
                                    <td class='w16left'>Tolak perubahan mendadak</td>
                                    <td><input type='radio' class='w3-radio' id='m_7_0' name='m[7]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_7_0' name='l[7]' value='N' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Cenderung janji berlebihan</td>
                                    <td><input type='radio' class='w3-radio' id='m_7_1' name='m[7]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_7_1' name='l[7]' value='I' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Tarik diri di tengah tekanan</td>
                                    <td><input type='radio' class='w3-radio' id='m_7_2' name='m[7]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_7_2' name='l[7]' value='C' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Tidak takut bertempur</td>
                                    <td><input type='radio' class='w3-radio' id='m_7_3' name='m[7]' value='N' required></td>
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
                                <tr class="w3-theme-l3">
                                    <th rowspan='4'>8</th>
                                    <td class='w16left'>Penyemangat yang baik</td>
                                    <td><input type='radio' class='w3-radio' id='m_8_0' name='m[8]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_8_0' name='l[8]' value='I' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Pendengar yang baik</td>
                                    <td><input type='radio' class='w3-radio' id='m_8_1' name='m[8]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_8_1' name='l[8]' value='S' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Penganalisa yang baik</td>
                                    <td><input type='radio' class='w3-radio' id='m_8_2' name='m[8]' value='C' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_8_2' name='l[8]' value='C' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Delegator yang baik</td>
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
                                <tr>
                                    <th rowspan='4'>9</th>
                                    <td class='w16left'>Hasil adalah penting</td>
                                    <td><input type='radio' class='w3-radio' id='m_9_0' name='m[9]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_9_0' name='l[9]' value='D' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Lakukan dengan benar, Akurasi penting</td>
                                    <td><input type='radio' class='w3-radio' id='m_9_1' name='m[9]' value='C' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_9_1' name='l[9]' value='C' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Dibuat menyenangkan</td>
                                    <td><input type='radio' class='w3-radio' id='m_9_2' name='m[9]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_9_2' name='l[9]' value='I' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Mari kerjakan bersama</td>
                                    <td><input type='radio' class='w3-radio' id='m_9_3' name='m[9]' value='N' required></td>
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
                                <tr class="w3-theme-l3">
                                    <th rowspan='4'>10</th>
                                    <td class='w16left'>Akan berjalan terus tanpa kontrol diri</td>
                                    <td><input type='radio' class='w3-radio' id='m_10_0' name='m[10]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_10_0' name='l[10]' value='C' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Akan membeli sesuai dorongan hati</td>
                                    <td><input type='radio' class='w3-radio' id='m_10_1' name='m[10]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_10_1' name='l[10]' value='D' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Akan menunggu, Tanpa tekanan</td>
                                    <td><input type='radio' class='w3-radio' id='m_10_2' name='m[10]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_10_2' name='l[10]' value='S' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Akan mengusahakan yang kuinginkan</td>
                                    <td><input type='radio' class='w3-radio' id='m_10_3' name='m[10]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_10_3' name='l[10]' value='N' required></td>
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
                                <tr>
                                    <th rowspan='4'>11</th>
                                    <td class='w16left'>Ramah, Mudah bergabung</td>
                                    <td><input type='radio' class='w3-radio' id='m_11_0' name='m[11]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_11_0' name='l[11]' value='N' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Unik, Bosan rutinitas</td>
                                    <td><input type='radio' class='w3-radio' id='m_11_1' name='m[11]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_11_1' name='l[11]' value='I' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Aktif mengubah sesuatu</td>
                                    <td><input type='radio' class='w3-radio' id='m_11_2' name='m[11]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_11_2' name='l[11]' value='D' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Ingin hal-hal yang pasti</td>
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
                                <tr class="w3-theme-l3">
                                    <th rowspan='4'>12</th>
                                    <td class='w16left'>Non-konfontrasi, Menyerah</td>
                                    <td><input type='radio' class='w3-radio' id='m_12_0' name='m[12]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_12_0' name='l[12]' value='S' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Dipenuhi hal detail</td>
                                    <td><input type='radio' class='w3-radio' id='m_12_1' name='m[12]' value='C' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_12_1' name='l[12]' value='N' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Perubahan pada menit terakhir</td>
                                    <td><input type='radio' class='w3-radio' id='m_12_2' name='m[12]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_12_2' name='l[12]' value='I' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Menuntut, Kasar</td>
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
                                <tr>
                                    <th rowspan='4'>13</th>
                                    <td class='w16left'>Ingin Kemajuan</td>
                                    <td><input type='radio' class='w3-radio' id='m_13_0' name='m[13]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_13_0' name='l[13]' value='D' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Puas dengan segalanya</td>
                                    <td><input type='radio' class='w3-radio' id='m_13_1' name='m[13]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_13_1' name='l[13]' value='N' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Terbuka memperlihatkan perasaan</td>
                                    <td><input type='radio' class='w3-radio' id='m_13_2' name='m[13]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_13_2' name='l[13]' value='N' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Rendah hati, Sederhana</td>
                                    <td><input type='radio' class='w3-radio' id='m_13_3' name='m[13]' value='N' required></td>
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
                                <tr class="w3-theme-l3">
                                    <th rowspan='4'>14</th>
                                    <td class='w16left'>Tenang, Pendiam</td>
                                    <td><input type='radio' class='w3-radio' id='m_14_0' name='m[14]' value='C' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_14_0' name='l[14]' value='C' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Bahagia, Tanpa beban</td>
                                    <td><input type='radio' class='w3-radio' id='m_14_1' name='m[14]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_14_1' name='l[14]' value='I' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Menyenangkan, Baik hati</td>
                                    <td><input type='radio' class='w3-radio' id='m_14_2' name='m[14]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_14_2' name='l[14]' value='N' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Tak gentar, Berani</td>
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
                                <tr>
                                    <th rowspan='4'>15</th>
                                    <td class='w16left'>Menggunakan waktu berkualitas dengan teman</td>
                                    <td><input type='radio' class='w3-radio' id='m_15_0' name='m[15]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_15_0' name='l[15]' value='S' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Rencanakan masa depan, Bersiap</td>
                                    <td><input type='radio' class='w3-radio' id='m_15_1' name='m[15]' value='C' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_15_1' name='l[15]' value='N' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Bepergian demi petualangan baru</td>
                                    <td><input type='radio' class='w3-radio' id='m_15_2' name='m[15]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_15_2' name='l[15]' value='I' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Menerima ganjaran atas tujuan yang dicapai</td>
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
                                <tr class="w3-theme-l3">
                                    <th rowspan='4'>16</th>
                                    <td class='w16left'>Aturan perlu ditanyakan</td>
                                    <td><input type='radio' class='w3-radio' id='m_16_0' name='m[16]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_16_0' name='l[16]' value='D' required></td>
                                    </tr>
                                <tr class="w3-theme-l3">
                                    <td class='w16left'>Aturan membuat adil</td>
                                    <td><input type='radio' class='w3-radio' id='m_16_1' name='m[16]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_16_1' name='l[16]' value='N' required></td>
                                    </tr>
                                <tr class="w3-theme-l3">
                                    <td class='w16left'>Aturan membuat bosan</td>
                                    <td><input type='radio' class='w3-radio' id='m_16_2' name='m[16]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_16_2' name='l[16]' value='I' required></td>
                                    </tr>
                                <tr class="w3-theme-l3">
                                    <td class='w16left'>Aturan membuat aman</td>
                                    <td><input type='radio' class='w3-radio' id='m_16_3' name='m[16]' value='N' required></td>
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
                                <tr>
                                    <th rowspan='4'>17</th>
                                    <td class='w16left'>Pendidikan, Kebudayaan</td>
                                    <td><input type='radio' class='w3-radio' id='m_17_0' name='m[17]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_17_0' name='l[17]' value='C' required></td>
                                    </tr>
                                <tr>
                                    <td class='w16left'>Prestasi, Ganjaran</td>
                                    <td><input type='radio' class='w3-radio' id='m_17_1' name='m[17]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_17_1' name='l[17]' value='D' required></td>
                                    </tr>
                                <tr>
                                    <td class='w16left'>Keselamatan, Keamanan</td>
                                    <td><input type='radio' class='w3-radio' id='m_17_2' name='m[17]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_17_2' name='l[17]' value='S' required></td>
                                    </tr>
                                <tr> 
                                    <td class='w16left'>Sosial, Perkumpulan kelompok</td>
                                    <td><input type='radio' class='w3-radio' id='m_17_3' name='m[17]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_17_3' name='l[17]' value='N' required></td>
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
                                <tr class="w3-theme-l3">
                                    <th rowspan='4'>18</th>
                                    <td class='w16left'>Memimpin, Pendekatan langsung</td>
                                    <td><input type='radio' class='w3-radio' id='m_18_0' name='m[18]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_18_0' name='l[18]' value='D' required></td>
                                    </tr>
                                <tr class="w3-theme-l3">
                                    <td class='w16left'>Suka bergaul, Antusias</td>
                                    <td><input type='radio' class='w3-radio' id='m_18_1' name='m[18]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_18_1' name='l[18]' value='I' required></td>
                                    </tr>
                                <tr class="w3-theme-l3">
                                    <td class='w16left'>Dapat diramal, Konsisten</td>
                                    <td><input type='radio' class='w3-radio' id='m_18_2' name='m[18]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_18_2' name='l[18]' value='S' required></td>
                                    </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Waspada, Hati-hati</td>
                                    <td><input type='radio' class='w3-radio' id='m_18_3' name='m[18]' value='C' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_18_3' name='l[18]' value='N' required></td>
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
                                <tr>
                                    <th rowspan='4'>19</th>
                                    <td class='w16left'>Tidak mudah dikalahkan</td>
                                    <td><input type='radio' class='w3-radio' id='m_19_0' name='m[19]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_19_0' name='l[19]' value='D' required></td>
                                    </tr>
                                <tr>                                    
                                    <td class='w16left'>Kerjakan sesuai perintah, Ikut pimpinan</td>
                                    <td><input type='radio' class='w3-radio' id='m_19_1' name='m[19]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_19_1' name='l[19]' value='N' required></td>
                                    </tr>
                                <tr>                                    
                                    <td class='w16left'>Mudah terangsang, Riang</td>
                                    <td><input type='radio' class='w3-radio' id='m_19_2' name='m[19]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_19_2' name='l[19]' value='I' required></td>
                                    </tr>
                                <tr>                                    
                                    <td class='w16left'>Ingin segalanya teratur, Rapi</td>
                                    <td><input type='radio' class='w3-radio' id='m_19_3' name='m[19]' value='N' required></td>
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
                                <tr class="w3-theme-l3">                                    
                                    <th rowspan='4'>20</th>
                                    <td class='w16left'>Saya akan pimpin mereka</td>
                                    <td><input type='radio' class='w3-radio' id='m_20_0' name='m[20]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_20_0' name='l[20]' value='N' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Saya akan melaksanakan</td>
                                    <td><input type='radio' class='w3-radio' id='m_20_1' name='m[20]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_20_1' name='l[20]' value='S' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Saya akan meyakinkan mereka</td>
                                    <td><input type='radio' class='w3-radio' id='m_20_2' name='m[20]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_20_2' name='l[20]' value='I' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Saya dapatkan fakta</td>
                                    <td><input type='radio' class='w3-radio' id='m_20_3' name='m[20]' value='C' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_20_3' name='l[20]' value='N' required></td>
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
                                <tr>                                    
                                    <th rowspan='4'>21</th>
                                    <td class='w16left'>Memikirkan orang dahulu</td>
                                    <td><input type='radio' class='w3-radio' id='m_21_0' name='m[21]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_21_0' name='l[21]' value='S' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Kompetitif, Suka tantangan</td>
                                    <td><input type='radio' class='w3-radio' id='m_21_1' name='m[21]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_21_1' name='l[21]' value='D' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Optimis, Positif</td>
                                    <td><input type='radio' class='w3-radio' id='m_21_2' name='m[21]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_21_2' name='l[21]' value='I' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Pemikir logis, Sistematik</td>
                                    <td><input type='radio' class='w3-radio' id='m_21_3' name='m[21]' value='N' required></td>
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
                                <tr class="w3-theme-l3">                                    
                                    <th rowspan='4'>22</th>
                                    <td class='w16left'>Menyenangkan orang, Mudah setuju</td>
                                    <td><input type='radio' class='w3-radio' id='m_22_0' name='m[22]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_22_0' name='l[22]' value='S' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Tertawa lepas, Hidup</td>
                                    <td><input type='radio' class='w3-radio' id='m_22_1' name='m[22]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_22_1' name='l[22]' value='I' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Berani, Tak gentar</td>
                                    <td><input type='radio' class='w3-radio' id='m_22_2' name='m[22]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_22_2' name='l[22]' value='D' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Tenang, Pendiam</td>
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
                                <tr>                                    
                                    <th rowspan='4'>23</th>
                                    <td class='w16left'>Ingin otoritas lebih</td>
                                    <td><input type='radio' class='w3-radio' id='m_23_0' name='m[23]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_23_0' name='l[23]' value='D' required></td>
                                    </tr>
                                <tr>                                    
                                    <td class='w16left'>Ingin kesempatan baru</td>
                                    <td><input type='radio' class='w3-radio' id='m_23_1' name='m[23]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_23_1' name='l[23]' value='N' required></td>
                                    </tr>
                                <tr>                                    
                                    <td class='w16left'>Menghindari konflik</td>
                                    <td><input type='radio' class='w3-radio' id='m_23_2' name='m[23]' value='S' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_23_2' name='l[23]' value='S' required></td>
                                </tr>
                                <tr>                                    
                                    <td class='w16left'>Ingin petunjuk yang jelas</td>
                                    <td><input type='radio' class='w3-radio' id='m_23_3' name='m[23]' value='N' required></td>
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
                                <tr class="w3-theme-l3">                                    
                                    <th rowspan='4'>24</th>
                                    <td class='w16left'>Dapat diandalkan, Dapat dipercaya</td>
                                    <td><input type='radio' class='w3-radio' id='m_24_0' name='m[24]' value='N' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_24_0' name='l[24]' value='S' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Kreatif, Unik</td>
                                    <td><input type='radio' class='w3-radio' id='m_24_1' name='m[24]' value='I' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_24_1' name='l[24]' value='I' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Garis dasar, Orientasi hasil</td>
                                    <td><input type='radio' class='w3-radio' id='m_24_2' name='m[24]' value='D' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_24_2' name='l[24]' value='N' required></td>
                                </tr>
                                <tr class="w3-theme-l3">                                    
                                    <td class='w16left'>Jalankan standar yang tinggi, Akurat</td>
                                    <td><input type='radio' class='w3-radio' id='m_24_3' name='m[24]' value='C' required></td>
                                    <td><input type='radio' class='w3-radio' id='l_24_3' name='l[24]' value='N' required></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="w3-row">
                    <div class="w3-col s12">
                    <h6>&nbsp;</h6>
                        <input type='button' style="width: 100%;" id="submitButton" value='SIMPAN' class='w3-button w3-round-large w3-theme-d1 w3-right w3-margin-8'/> 
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
        // Objek p dan k
        const p = { 'D': 0, 'I': 0, 'S': 0, 'C': 0, 'N': 0 };
        const k = { 'D': 0, 'I': 0, 'S': 0, 'C': 0, 'N': 0 };

        var hasilno = [];

        // Loop untuk memeriksa nilai input
        for (var i = 1; i <= 24; i++) {
            // Periksa nilai P
            var p_checked = $('input[name="m[' + i + ']"]:checked').val();
            if (p_checked) {
                if (p.hasOwnProperty(p_checked)) {
                    p[p_checked]++;
                }
                hasilno.push(i + p_checked);
            }

            // Periksa nilai K
            var k_checked = $('input[name="l[' + i + ']"]:checked').val();
            if (k_checked) {
                if (k.hasOwnProperty(k_checked)) {
                    k[k_checked]++;
                }
                hasilno.push(i + k_checked);
            }
        }

        // Fungsi untuk menghitung total nilai dari objek
        const calculateTotal = (obj) => {
            return Object.values(obj).reduce((total, value) => total + value, 0);
        };

        // Menghitung total untuk masing-masing properti
        let dp = p['D'];
        let ip = p['I'];
        let sp = p['S'];
        let cp = p['C'];
        let bp = p['N'];  // Mengganti * dengan N

        // Total untuk p
        let totalp = dp + ip + sp + cp + bp;

        let dk = k['D'];
        let ik = k['I'];
        let sk = k['S'];
        let ck = k['C'];
        let bk = k['N'];  // Mengganti * dengan N

        // Total untuk k
        let totalk = dk + ik + sk + ck + bk;

        let line1 = [dp, ip, sp, cp, bp, totalp];
        let line2 = [dk, ik, sk, ck, bk, totalk];

        let a1 = dp - dk;
        let a2 = ip - ik;
        let a3 = sp - sk;
        let a4 = cp - ck;

        let line3 = [a1, a2, a3, a4];

        console.log(dp);
        console.log(ip);
        console.log(sp);
        console.log(cp);
        console.log(bp);
        console.log(totalp);

        console.log(dk);
        console.log(ik);
        console.log(sk);
        console.log(ck);
        console.log(bk);
        console.log(totalk);

        console.log(a1);
        console.log(a2);
        console.log(a3);
        console.log(a4);

        // Mapping arrays for line1
        const hasil_line1dp_map = [-6, -5.3, -4, -2.5, -1.7, -1.3, 0, 0.5, 1, 2, 3, 3.5, 4, 4.7, 5.3, 6.5, 7, 7, 7, 7.5, 7.5];
        const hasil_line1ip_map = [-7, -4.6, -2.5, -1.3, 1, 3, 3.5, 5.3, 5.7, 6, 6.5, 7, 7, 7, 7, 7, 7.5, 7.5, 7.5, 7.5, 8];
        const hasil_line1sp_map = [-5.7, -4.3, -3.5, -1.5, -0.7, 0.5, 1, 2.5, 3, 4, 4.6, 5, 5.7, 6, 6.5, 6.5, 7, 7, 7, 7.5, 7.5];
        const hasil_line1cp_map = [-6, -4.7, -3.5, -1.5, 0.5, 2, 3, 5.3, 5.7, 6, 6.3, 6.5, 6.7, 7, 7.3, 7.3, 7.3, 7.5, 8, 8, 8];

        // Mapping arrays for line2
        const hasil_line2dk_map = [7.5, 6.5, 4.3, 2.5, 1.5, 0.5, 0, -1.3, -1.5, -2.5, -3, -3.5, -4.3, -5.3, -5.7, -6, -6.5, -6.7, -7, -7.3, -7.5];
        const hasil_line2ik_map = [7, 6, 4, 2.5, 0.5, 0, -2, -3.5, -4.3, -5.3, -6, -6.5, -7, -7.2, -7.2, -7.2, -7.3, -7.3, -7.3, -7.5, -8];
        const hasil_line2sk_map = [7.5, 7, 6, 4, 2.5, 1.5, 0.5, -1.3, -2, -3, -4.3, -5.3, -6, -6.5, -6.7, -6.7, -7, -7.2, -7.3, -7.5, -8];
        const hasil_line2ck_map = [7.5, 7, 5.6, 4, 2.5, 1.5, 0.5, 0, -1.3, -2.5, -3.5, -5.3, -5.7, -6, -6.5, -7, -7.3, -7.5, -7.7, -7.9, -8];

        // Mapping arrays for line3
        const hasil_line3a1_map = [-8, -7.5, -7, -6.8, -6.75, -6.7, -6.5, -6.3, -6.1, -5.9, -5.7, -5.3, -4.3, -3.5, -3.25, -3, -2.75, -2.5, -1.5, -1, -0.5, -0.25, 0, 0.5, 0.7, 1, 1.3, 1.5, 2, 2.5, 3.5, 4, 4.7, 4.85, 5, 5.5, 6, 6.3, 6.5, 6.7, 7, 7.3, 7.3, 7.5, 8];
        const hasil_line3a2_map = [-8, -8, -8, -8, -7, -6.7, -6.7, -6.7, -6.7, -6.7, -6.7, -6.7, -6.5, -6, -5.7, -4.7, -4.3, -3.5, -3, -2, -1.5, 0, 0.5, 1, 1.5, 3, 4, 4.3, 5, 5.5, 6.5, 6.7, 7, 7.3, 7.3, 7.3, 7.3, 7.3, 7.3, 7.3, 7.5, 8, 8, 8, 8];
        const hasil_line3a3_map = [-8, -8, -8, -8, -7.5, -7.3, -7.3, -7, -6.5, -6.5, -6.5, -6.5, -6, -4.7, -4.3, -3.5, -3, -2, -1.5, -1, -0.5, 0, 1, 1.5, 2, 3, 3.5, 4, , 4.7, 5, 5.5, 6, 6.2, 6.3, 6.5, 6.7, 7, 7.3, 7.3, 7.3, 7.3, 7.5, 8, 8];
        const hasil_line3a4_map = [-7.5, -7.3, -7.3, -7, -6.7, -6.7, -6.7, -6.5, -6.3, -6, -5.85, -5.85, -5.7, -4.7, -4.3, -3.5, -3, -2.5, -0.5, 0, 0.3, 0.5, 1.5, 3, 4, 4.3, 5.5, 5.7, 6, 6.3, 6.5, 6.7, 7, 7.3, 7.3, 7.3, 7.3, 7.3, 7.3, 7.5, 8, 8, 8, 8, 8];
        
        // Output variables
        let hasil_line1dp, hasil_line1ip, hasil_line1sp, hasil_line1cp;
        let hasil_line2dk, hasil_line2ik, hasil_line2sk, hasil_line2ck;
        let hasil_line3a1, hasil_line3a2, hasil_line3a3, hasil_line3a4;

        // Fungsi untuk menghitung hasil berdasarkan line1 dan index
        const getResult = (mappingArray, value) => {
            // Menentukan index dari value dalam array mapping
            let index = Math.round(value);
            // Pastikan index valid
            if (index >= 0 && index < mappingArray.length) {
                return mappingArray[index];
            }
            return 0;
        };

        // Assign values for line1
        hasil_line1dp = getResult(hasil_line1dp_map, line1[0]);
        hasil_line1ip = getResult(hasil_line1ip_map, line1[1]);
        hasil_line1sp = getResult(hasil_line1sp_map, line1[2]);
        hasil_line1cp = getResult(hasil_line1cp_map, line1[3]);

        // Assign values for line2
        hasil_line2dk = getResult(hasil_line2dk_map, line2[0]);
        hasil_line2ik = getResult(hasil_line2ik_map, line2[1]);
        hasil_line2sk = getResult(hasil_line2sk_map, line2[2]);
        hasil_line2ck = getResult(hasil_line2ck_map, line2[3]);

        // Assign values for line3
        hasil_line3a1 = getResult(hasil_line3a1_map, line3[0]);
        hasil_line3a2 = getResult(hasil_line3a2_map, line3[1]);
        hasil_line3a3 = getResult(hasil_line3a3_map, line3[2]);
        hasil_line3a4 = getResult(hasil_line3a4_map, line3[3]);

        let grafik1 = [hasil_line1dp, hasil_line1ip, hasil_line1sp, hasil_line1cp];
        let grafik2 = [hasil_line2dk, hasil_line2ik, hasil_line2sk, hasil_line2ck];
        let grafik3 = [hasil_line3a1, hasil_line3a2, hasil_line3a3, hasil_line3a4];

        function calculateBaris(grafik) {
            const [D, I, S, C] = grafik; // D, I, S, dan C adalah grafik[0], grafik[1], grafik[2], grafik[3]

            let baris;

            if (D <= 0 && I <= 0 && S <= 0 && C > 0) {
                baris = 1;
            } else if (D > 0 && I <= 0 && S <= 0 && C <= 0) {
                baris = 2;
            } else if (D > 0 && I <= 0 && S <= 0 && C > 0 && C >= D) {
                baris = 3;
            } else if (D > 0 && I > 0 && S <= 0 && C <= 0 && I >= D) {
                baris = 4;
            } else if (D > 0 && I > 0 && S <= 0 && C > 0 && I >= D && D >= C) {
                baris = 5;
            } else if (D > 0 && I > 0 && S >= 0 && C <= 0 && I >= D && D >= S) {
                baris = 6;
            } else if (D > 0 && I > 0 && S >= 0 && C <= 0 && I >= S && S >= D) {
                baris = 7;
            } else if (D > 0 && I <= 0 && S >= 0 && C > 0 && S >= D && D >= C) {
                baris = 8;
            } else if (D > 0 && I > 0 && S <= 0 && C <= 0 && D >= I) {
                baris = 9;
            } else if (D > 0 && I > 0 && S >= 0 && C <= 0 && D >= I && I >= S) {
                baris = 10;
            } else if (D > 0 && I <= 0 && S >= 0 && C <= 0 && D >= S) {
                baris = 11;
            } else if (D <= 0 && I > 0 && S >= 0 && C > 0 && C >= I && I >= S) {
                baris = 12;
            } else if (D <= 0 && I > 0 && S >= 0 && C > 0 && C >= S && S >= I) {
                baris = 13;
            } else if (D <= 0 && I > 0 && S >= 0 && C > 0 && I >= S && I >= C) {
                baris = 14;
            } else if (D <= 0 && I <= 0 && S >= 0 && C <= 0) {
                baris = 15;
            } else if (D <= 0 && I <= 0 && S >= 0 && C > 0 && C >= S) {
                baris = 16;
            } else if (D <= 0 && I <= 0 && S >= 0 && C > 0 && S >= C) {
                baris = 17;
            } else if (D > 0 && I <= 0 && S <= 0 && C > 0 && D >= C) {
                baris = 18;
            } else if (D > 0 && I > 0 && S <= 0 && C > 0 && D >= I && I >= C) {
                baris = 19;
            } else if (D > 0 && I > 0 && S >= 0 && C <= 0 && D >= S && S >= I) {
                baris = 20;
            } else if (D > 0 && I <= 0 && S >= 0 && C > 0 && D >= S && S >= C) {
                baris = 21;
            } else if (D > 0 && I > 0 && S <= 0 && C > 0 && D >= C && C >= I) {
                baris = 22;
            } else if (D > 0 && I <= 0 && S >= 0 && C > 0 && D >= C && C >= S) {
                baris = 23;
            } else if (D <= 0 && I > 0 && S <= 0 && C <= 0) {
                baris = 24;
            } else if (D <= 0 && I > 0 && S <= 0 && C > 0 && I >= S) {
                baris = 25;
            } else if (D <= 0 && I > 0 && S <= 0 && C > 0 && I >= C) {
                baris = 26;
            } else if (D > 0 && I > 0 && S <= 0 && C > 0 && I >= C && C >= D) {
                baris = 27;
            } else if (D <= 0 && I > 0 && S >= 0 && C > 0 && I >= C && C >= S) {
                baris = 28;
            } else if (D > 0 && I <= 0 && S >= 0 && C <= 0 && S >= D) {
                baris = 29;
            } else if (D <= 0 && I > 0 && S >= 0 && C <= 0 && S >= I) {
                baris = 30;
            } else if (D > 0 && I > 0 && S >= 0 && C <= 0 && S >= D && D >= I) {
                baris = 31;
            } else if (D > 0 && I > 0 && S >= 0 && C <= 0 && S >= I && I >= D) {
                baris = 32;
            } else if (D <= 0 && I > 0 && S >= 0 && C > 0 && S >= I && I >= C) {
                baris = 33;
            } else if (D > 0 && I <= 0 && S >= 0 && C > 0 && S >= C && C >= D) {
                baris = 34;
            } else if (D <= 0 && I > 0 && S >= 0 && C > 0 && S >= C && C >= I) {
                baris = 35;
            } else if (D <= 0 && I > 0 && S <= 0 && C > 0 && C >= I) {
                baris = 36;
            } else if (D > 0 && I > 0 && S <= 0 && C > 0 && C >= D && D >= I) {
                baris = 37;
            } else if (D > 0 && I <= 0 && S >= 0 && C > 0 && C >= D && D >= S) {
                baris = 38;
            } else if (D > 0 && I > 0 && S <= 0 && C > 0 && C >= I && I >= D) {
                baris = 39;
            } else if (D > 0 && I <= 0 && S >= 0 && C > 0 && C >= S && S >= D) {
                baris = 40;
            } else {
                baris = 1; // Default value when no condition matches
            }

            return baris;
        }

        var baris1 = calculateBaris(grafik1);
        var baris2 = calculateBaris(grafik2);
        var baris3 = calculateBaris(grafik3);
          
        // Collect answers
        var jawab = hasilno.map(item => item.index + item.type + item.value);

        // Fetch personality types and descriptions
        var umum = tableKepribadian[baris1].typeKepribadian;
        var kep = tableKepribadian[baris1].gambaranDiri;

        var umum2 = tableKepribadian[baris2].typeKepribadian;
        var kep2 = tableKepribadian[baris2].gambaranDiri;

        var umum3 = tableKepribadian[baris3].typeKepribadian;
        var kep3 = tableKepribadian[baris3].gambaranDiri;

        // Store relevant personality information
        var kep_umum = [umum, kep];
        var kep_tekan = [umum2, kep2];
        var kep_sembunyi = [umum3, kep3];
        var job = tableKepribadian[baris3].JOB_RELEVAN;
        var person = tableKepribadian[baris3].Personality;

        // Uncomment these lines for debugging if needed
        console.log(line1);
        console.log(line2);
        console.log(line3);
        console.log(grafik1);
        console.log(grafik2);
        console.log(grafik3);
        console.log(kep_umum);
        console.log(kep_tekan);
        console.log(kep_sembunyi);
        console.log(job);
        console.log(person);
        console.log(jawab);

        // Retrieve and parse data from localStorage
        var data = localStorage.getItem('key');
        var nik;

        if (data) {
            var parsedData = JSON.parse(data);
            if (parsedData && parsedData.nik) {
                nik = parsedData.nik;
            } else {
                console.error("Property 'nik' not found in the data structure.");
            }
        } else {
            console.error("Data not found in localStorage.");
        }

        $.ajax({
            type: 'POST',
            url: 'api/api_disc_kirim.php',
            data: {
                nik: nik,
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
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Your test answers have been successfully sent.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed || result.isDismissed) {
                        window.location.href = 'akhir.php';
                    }
                });
            },
            error: function(response) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Failed to send data to the server. Please try again.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    }
})

// <script src="sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>