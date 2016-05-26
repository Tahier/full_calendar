<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<!-- fullCalendar 2.2.5-->
<link href="<?= base_url() ?>assets/AdminLTE-2.0.5/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>assets/AdminLTE-2.0.5/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Calendar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">

            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-body no-padding">
                  <!-- THE CALENDAR -->
                  <div id="calendar"></div>
                </div><!-- /.box-body -->
              </div><!-- /. box -->


            </div><!-- /.col -->
          

          </div><!-- /.row -->





        </section><!-- /.content -->
     


<?php 
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<script src="<?= base_url() ?>assets/js/moment.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/AdminLTE-2.0.5/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <!-- Page specific script -->
    <script src="<?= base_url() ?>assets/js/moment.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/AdminLTE-2.0.5/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <!-- Page specific script -->
    <script type="text/javascript">
      $(function () {

        $('#calendar').fullCalendar({
          header: {
            left: 'prev,next',
            center: 'title',
            right: ' '
          },
          buttonText: {
            today: 'Hari Ini',
            month: 'Bulan',
          },
          //Random default events
          events: [

          <?php foreach($event->result() as $r): ?>
            {
              title: '<?= $r->nama_event ?>',
              <?php 
                  $mulai = explode("-", $r->tanggal_mulai);
                  $selesai    = explode("-", $r->tanggal_selesai);
               ?>
              start: "<?= $mulai[0]."-".$mulai[1]."-".$mulai[2] ?>T00:00:00.000",
              end : "<?= $selesai[0]."-".$selesai[1]."-".$selesai[2] ?>T23:59:00.000",
              backgroundColor: "#f56954", //red
              borderColor: "#f56954" //red
            },
          <?php endforeach; ?>
          ],
          editable: false,
          droppable: false,
          timeFormat: ' '  // this allows things to be dropped onto the calendar !!!
        });
      });
    </script>
<?php
$this->load->view('template/foot');
?>