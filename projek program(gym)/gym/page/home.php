<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello</title>
    <link rel="stylesheet" href="css/tampilan.css"> 
</head>
<body>
        <nav class="menu">
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="#berita">Information</a>
                    <ul>
                <li> <a href="pelatihan.php">Pelatihan</a></li>
                <li> <a href="jadwal-inst.php">Jadwal Instruktur</a></li>
                    </ul>  
                </li>
                <li><a href="#kontak">Contact</a>
                    <ul>
                <li><a href="mailto:Ditatata31397@gmail.com"><img src="gambar/gmail.png" width="30px" height="30px">Gmail</a></li>
                <li><a href="https://www.instagram.com/ro_ndutt"><img src="gambar/instagram.jpg" width="30px" height="30px">Instagram</a></li>
                <li><a href="https://web.facebook.com/roro.aryani.10"><img src="gambar/fb.jpg" width="30px" height="30px">Facebook</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=6285363430844"><img src="gambar/wa.jpg" width="30px" height="30px">Whatsapp</a></li>
                    </ul>
                </li> 
            </ul>
        </nav>
 
        <div class="banner">
            <img src="gambar/life.jpeg" >
        </div>
 
        <div class="menu-kiri">
            <div class="kotak">
               <h3>Artikel Sehat</h3>
                <nav class="menu-artikel">
                    <ul>
                        <li><a href="https://www.alodokter.com/membentuk-otot-biseps-dan-triseps-dengan-rangkaian-latihan-ini">Membentuk Otot Biseps dan Triseps dengan Rangkaian Latihan Ini</a></li>
                        <li><a href="https://www.fimela.com/lifestyle-relationship/read/4174903/daftar-menu-makanan-yang-tepat-untuk-disantap-sebelum-dan-sesudah-olahraga">Daftar Menu Makanan yang Tepat untuk Disantap Sebelum dan Sesudah Olahraga</a></li>
                        <li><a href="https://www.axe.com/id/inspirasi/culture/cara-membentuk-otot-perut.html">Cara Membentuk Otot Perut Biar Cepet Six Packs</a></li>
                        <li><a href="https://www.merdeka.com/jabar/10-cara-mengecilkan-paha-dengan-mudah-dalam-1-minggu.html">10 Cara Mengecilkan Paha dengan Mudah dalam 1 Minggu</a></li>
                        <li><a href="https://www.klikdokter.com/info-sehat/read/2698001/pola-tidur-menentukan-kesehatan-anda">Pola Tidur Menentukan Kesehatan Anda</a></li>
                    </ul>
                </nav>
            </div>
        </div>
 
        <div class="menu-tengah">
            <div class="kotak">
                <h3>Olahraga itu penting!</h3>
                <img src="gambar/sehat.jfif">
                <p>
                    Kesehatan merupakan harta yang paling berharga dan tak ternilai,oleh sebab itu agar tetap sehat orang rela melakukan apa saja dan segala cara yang di lakukan demi hidupnya sehat seumur hidup.Karena sehat itu tidak bisa di cari,lebih baik kehilangan harta daripada sakit,karena harta bisa di cari.<p>
                    Maka dari itu kita harus menjaga kesehatan dan mengubah pola hidup sehat menjadi solusi agar terhindari dari penyakit,salah satunya ialah dengan berolahraga. Ada berbagai macam jenis olahraga yang bisa dilakukan, mulai olahraga yang terpusat untuk menurunkan berat badan, membentuk masa otot, dan serta menambah berat badan menjadi lebih ideal dari sebelumnya.<p>
                    Bagi beberapa orang memiliki tubuh yang sehat dan kuat itu adalah suatu hal yang di inginkan yang berdampak positif, dengan berolahraga di rumah menjadi suatu alternatif yang mudah dan tidak mengeluarkan biaya, tetapi alat-alat olahraga tidak selengkap di tempat fitnes/GYM, ketika kita sudah berkeinginan untuk berolahraga di GYM, kita juga harus memilih tempat GYM yang nyaman, sehingga membuat kita betah dan bersemangat untuk berolahraga.
                    Kini kami hadir untuk anda dalam pelatihan nge gym yang lebih baik agar dapat memperkuat otot dan meningkatkan ketahanan fisik 
                </p>
            </div>
        </div>
 
        <div class="menu-kanan">
            <div class="kotak">
                <h3>Jadwal Buka</h3>
                <center>
                    <p>Senin-Kamis 08.00 WIB S/D 21.00 WIB</p>
                    <p>Jumat-Sabtu 08.00 WIB S/D 19.00 WIB</p>
                    <p>Minggu      07.00 WIB S/D 19.00 WIB</p>
                </center>
            </div>
 
 <div class="badan-utama">
        <div class="kotak">
            <link rel="stylesheet" type="text/css" href="css/kalender.css">
            <?php 
            echo '
                <h2>Januari 2022</h2> ';
            function draw_calendar($month,$year){

    // Draw table for Calendar 
    $calendar = '
<table cellpadding="0" cellspacing="0" class="calendar">';

    // Draw Calendar table headings 
    $headings = array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
    $calendar.= '
<tr class="calendar-row">
<td class="calendar-day-head">'.implode('</td>
<td class="calendar-day-head">',$headings).'</td>
</tr>
';

    //days and weeks variable for now ... 
    $running_day = date('w',mktime(0,0,0,$month,1,$year));
    $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
    $days_in_this_week = 1;
    $day_counter = 0;
    $dates_array = array();

    // row for week one 
    $calendar.= '
<tr class="calendar-row">';

    // Display "blank" days until the first of the current week 
    for($x = 0; $x < $running_day; $x++):
        $calendar.= '
<td class="calendar-day-np"> </td>
';
        $days_in_this_week++;
    endfor;

    // Show days.... 
    for($list_day = 1; $list_day <= $days_in_month; $list_day++):
        if($list_day==date('d') && $month==date('n'))
        {
            $currentday='currentday';
        }else
        {
            $currentday='';
        }
        $calendar.= '
<td class="calendar-day '.$currentday.'">';
        
            // Add in the day number
            if($list_day<date('d') && $month==date('n'))
            {
                $showtoday='<strong class="overday">'.$list_day.'</strong>';
            }else
            {
                $showtoday=$list_day;
            }
            $calendar.= '
<div class="day-number">'.$showtoday.'</div>
';

        // Draw table end
        $calendar.= '</td>
';
        if($running_day == 6):
            $calendar.= '</tr>
';
            if(($day_counter+1) != $days_in_month):
                $calendar.= '
<tr class="calendar-row">';
            endif;
            $running_day = -1;
            $days_in_this_week = 0;
        endif;
        $days_in_this_week++; $running_day++; $day_counter++;
    endfor;

    // Finish the rest of the days in the week
    if($days_in_this_week < 8):
        for($x = 1; $x <= (8 - $days_in_this_week); $x++):
            $calendar.= '
<td class="calendar-day-np"> </td>
';
        endfor;
    endif;

    // Draw table final row
    $calendar.= '</tr>
';

    // Draw table end the table 
    $calendar.= '</table>
';
    
    // Finally all done, return result 
    return $calendar;
};
echo draw_calendar(01,2022); 
?> 

            </div> 
        </div>
    </div>
</body>
</html>