<?php
    include_once '../include/connectDB.php';

    date_default_timezone_set("Asia/Jakarta");
    $today_day  = date('Y-m-d');

    $query = "SELECT * FROM timeline ORDER BY tanggal, start ASC";
    // $query = "SELECT * FROM timeline WHERE tanggal = '". $today_day . "'" . " ORDER BY start ASC";
    $result = mysqli_query($conn, $query);
    $hitung = mysqli_num_rows($result);
?>

<?php
    function potong($text, $end = '...')
    {
        $cetak = substr($text, 0, 30);
        echo $cetak . $end;
    }

?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../css/timeline.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="judul">
        <h3>Agenda Hari Ini</h3>
    </div>

    <?php
        
        if($hitung <= 0)
        {
    ?>
        <div class="no-agenda">
            <h2>Tidak ada kegiatan hari ini</h2>
        </div>
    <?php        
        }

    ?>

    <div class="container-timeline">
        <div class="timeline">
            <ul>
                <?php
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $status = null;

                        //default time zone
                        date_default_timezone_set("Asia/Jakarta");

                        // deklarasi expired date
                        $event_start_date   = $row['tanggal'];
                        $e_start  = $row['start'];
                        $e_end    = $row['end'];
                        $today_day  = date('Y-m-d');
                        $today_jam  = date('H:i:s');

                        //lalu convert data diatas ke strtotime
                        $exp_d = strtotime($event_start_date);
                        $td  = strtotime($today_day);

                        //tampil
                        $tanggal_tampil = date('d-m-Y', $exp_d);
                        $day_start = date('D' , $exp_d);
                        $jam_start = date('H:i', strtotime($e_start));
                        $jam_end = date('H:ia', strtotime($e_end));

                        if($td <= $exp_d)
                        {
                            if($today_day == $event_start_date)
                            {
                                if($today_jam >= date('H:i:s', strtotime($e_start)) and $today_jam <= date('H:i:s', strtotime($e_end)))
                                {
                                    $status = "<span style='color: rgb(6, 70, 53);'>Sedang Berlangsung</span>";
                                }
                                elseif($today_jam >= date('H:i:s', strtotime($e_end)))
                                {
                                    $status = "<span style='color: blue;'>Selesai</span>";
                                }
                            }
                        }
                        else
                        {
                            $status = "<span style='color: red;'>expired</span>";
                        }
                ?>
                <li> 
                        <div class="timeline-content">
                            <h3 class="date" style=""><?php echo $day_start . ", " . $tanggal_tampil ?></h3>
                            <h1><?php echo $row['judul']; ?></h1>
                            <h2 class="jam"><?php echo $jam_start . " - " . $jam_end?></h2>
                            <p class="status"><?php echo $status; ?></p>
                            <p class="pemateri">pemateri: <?php echo $row['pemateri']; ?></p>
                            <p class="comment"><?php echo $row['comment']; ?></p>

                            <div class="more">

                                <div class="lokasi-event">
                                    <p class="sub-j">Lokasi:</p>
                                    <p><?php echo $row['lokasi']; ?></p>
                                    <?php
                                        if($row['maps'] != null)
                                        {
                                    ?>        
                                            <a class="link" href="<?php echo $row['maps']; ?>"><?php potong($row['maps']); ?></a>
                                    <?php      
                                        }
                                    ?>
                                </div>

                                <!-- link -->
                                <?php
                                    if($row['link'] != null || $row['link2'] != null || $row['link3'] != null)
                                    {
                                ?>
                                        <p class="sub-j">Link:</p>
                                <?php
                                    }
                                ?>

                                <?php
                                    if($row['link'] != null && $row['j-link'] != null)
                                    {
                                ?>        
                                        <p class="j-link"><?php echo $row['j-link']; ?></p>
                                        <a class="link" href="<?php echo $row['link']; ?>"><?php potong($row['link']); ?></a>
                                <?php      
                                    }
                                ?>
                                <?php
                                    if($row['link2'] != null && $row['j-link2'] != null)
                                    {
                                ?>        
                                        <p class="j-link"><?php echo $row['j-link2']; ?></p>
                                        <a class="link" href="<?php echo $row['link2']; ?>"><?php potong($row['link2']); ?></a>
                                <?php      
                                    }
                                ?>
                                <?php
                                    if($row['link3'] != null && $row['j-link3'] != null)
                                    {
                                ?>        
                                        <p class="j-link"><?php echo $row['j-link3']; ?></p>
                                        <a class="link" href="<?php echo $row['link3']; ?>"><?php potong($row['link3']); ?></a>
                                <?php      
                                    }
                                ?>

                                <!-- link -->

                            </div>
                            <button class="read" type="button">read more</button>
                        </div>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $(".read").click(function(){
                $(this).prev().toggle();
            });
        });
    </script>
</body>
</html>