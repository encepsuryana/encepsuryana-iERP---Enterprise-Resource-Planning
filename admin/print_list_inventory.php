<html>
<head>
  <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
  <meta name=Generator content="Microsoft Word 14 (filtered)">
  <style>
    <!--
    /* Font Definitions */
    @font-face
    {font-family:Calibri;
     panose-1:2 15 5 2 2 2 4 3 2 4;}
     @font-face
     {font-family:Tahoma;
       panose-1:2 11 6 4 3 5 4 4 2 4;}
       /* Style Definitions */
       p.MsoNormal, li.MsoNormal, div.MsoNormal
       {margin-top:0in;
         margin-right:0in;
         margin-bottom:8.0pt;
         margin-left:0in;
         line-height:107%;
         font-size:11.0pt;
         font-family:"Calibri","sans-serif";}
         p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
         {mso-style-link:"Balloon Text Char";
         margin:0in;
         margin-bottom:.0001pt;
         font-size:8.0pt;
         font-family:"Tahoma","sans-serif";}
         span.BalloonTextChar
         {mso-style-name:"Balloon Text Char";
         mso-style-link:"Balloon Text";
         font-family:"Tahoma","sans-serif";}
         .MsoChpDefault
         {font-family:"Calibri","sans-serif";}
         .MsoPapDefault
         {margin-bottom:8.0pt;
           line-height:107%;}
           @page WordSection1
           {size:13.0in 8.5in;
             margin:48.25pt .5in .5in .75in;}
             div.WordSection1
             {page:WordSection1;}
             -->
           </style>
           <?php include('print_header.php'); ?>
           <?php include('session.php'); ?>
         </head>
         <?php $get_id = $_GET['id_location']; ?>
         <body lang=EN-US>

          <?php $location_query = mysql_query("select * from tbl_location	                     
           where id_location = '$get_id'")or die(mysql_error());
          $location_row = mysql_fetch_array($location_query);
          ?>
          
          <div class="empty">
            <?php include('navbar.php'); ?>
            <div class="container">
              <div class="row-fluid">
                <div class="col-lg-12">
                  <div class="alert alert-success alert-dismissable">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                   <i class="icon-building"></i><strong>&nbsp;<?php echo $location_row['stdev_location_name']; ?>&nbsp;Print Report</strong>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>

       <div class="container">
         <div class="row-fluid">
           <div class="block">
            <div class="row-fluid">

              <div class=WordSection1>

                <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
                font-family:"Times New Roman","serif"'><img width=356 height=130 id="Picture 1"
                src="print-list-inventory_files/image001.png"></span></b></p>

                <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal'><b><span style='font-size:14.0pt;
                font-family:"Times New Roman","serif"'>CV. CIPTA SINERGI MANUFACTURING</span></b></p>

                <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
                text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
                font-family:"Times New Roman","serif"'>Jl. Kamarung No.88 B, RT.004/RW.04, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40512</span></b></p>

                <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal'><b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

                <div class="container">
                  <div class="container-fluid">
                    <div class="row-fluid">
                      <div class="pull-left"> 
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                        normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
                        "Times New Roman","serif"'>LOCATION:&nbsp;<?php echo $location_row['stdev_location_name']; ?><o:p></o:p></span></p>

                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                        normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
                        "Times New Roman","serif"'>DATE: <?php
                        $date = new DateTime();
                        echo $date->format('l, F jS, Y');
                        ?><o:p></o:p></span></p>

                        <div class="pull-right">
                         <div class="empty">
                           <p class=MsoNormal style='margin-bottom:0in; margin-left:-110px; margin-top:-30px; margin-bottom:.0001pt;line-height:
                           normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
                           "Times New Roman","serif"'>
                           <a href="#" onclick="window.print()" class="btn btn-info" id="print" data-placement="top" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a></p>		      
                           <script type="text/javascript">
                             $(document).ready(function(){
                               $('#print').tooltip('show');
                               $('#print').tooltip('hide');
                             });
                           </script> 
                           <p class=MsoNormal style='margin-bottom:0in; margin-top:-30px; margin-bottom:.0001pt;line-height:
                           normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
                           "Times New Roman","serif"'>
                           <a id="return" data-placement="top" class="btn btn-success" title="Klik untuk kembali" href="mydevice.php<?php echo '?id_location='.$get_id; ?>"><i class="icon-arrow-left"></i> Back</a></p>		
                           <script type="text/javascript">
                             $(document).ready(function(){
                               $('#return').tooltip('show');
                               $('#return').tooltip('hide');
                             });
                           </script>       	   
                         </div>
                       </div>
                       
                       <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                       normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
                       "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
                       <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
                       style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
                       mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
                       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:23.25pt'>
                        <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;mso-border-alt:
                        solid windowtext .5pt;background:#BFBFBF;mso-background-themecolor:background1;
                        mso-background-themeshade:191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                        normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>INVENTORY
                          CODE<o:p></o:p></span></b></p>
                        </td>
                        <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;border-left:
                        none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                        background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
                        191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                        normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>TYPE<o:p></o:p></span></b></p>
                      </td>
                      <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;border-left:
                      none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                      background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
                      191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                      <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                      normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>MODEL<o:p></o:p></span></b></p>
                    </td>
                    <td width=188 style='width:140.9pt;border:solid windowtext 1.0pt;border-left:
                    none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                    background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
                    191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                    normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>BRAND<o:p></o:p></span></b></p>
                  </td>
                  <td width=188 style='width:140.95pt;border:solid windowtext 1.0pt;border-left:
                  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
                  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>DATE
                    ASSIGNED<o:p></o:p></span></b></p>
                  </td>
                  <td width=188 style='width:140.95pt;border:solid windowtext 1.0pt;border-left:
                  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
                  191;padding:0in 5.4pt 0in 5.4pt;height:23.25pt'>
                  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal'><b style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif"'>STATUS<o:p></o:p></span></b></p>
                </td>
              </tr>
              <!--NALD, ARI DI ASTA ANG IMO NA I BUTANG SULOD SA MYSQL FETCH ARRAY-->
              <?php
              $my_device = mysql_query("select * from tbl_location_details	                                                    
                LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id 
                LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
                where NOT EXISTS 
                (select * from tbl_location_details where status_asset='Dump')
                and id_location = '$get_id'		
                order by date_deployment DESC")or die(mysql_error());
              while($row = mysql_fetch_array($my_device)){
                $id = $row['id'];		                                               
                ?>
                <tr style='mso-yfti-irow:1'>
                  <td width=188 valign=top style='width:140.9pt;border:solid windowtext 1.0pt;
                  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                  padding:0in 5.4pt 0in 5.4pt'>
                  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                  normal'><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_serial']; ?><o:p></o:p></span></p>
                </td>
                <td width=188 valign=top style='width:140.9pt;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
                normal'><span style='font-family:"Times New Roman","serif"'><?php echo $row['type_asset']; ?><o:p></o:p></span></p>
              </td>
              <td width=188 valign=top style='width:140.9pt;border-top:none;border-left:
              none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
              mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
              mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
              <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
              normal'><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_model']; ?><o:p></o:p></span></p>
            </td>
            <td width=188 valign=top style='width:140.9pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
            mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
            <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
            normal'><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_brand']; ?><o:p></o:p></span></p>
          </td>
          <td width=188 valign=top style='width:140.95pt;border-top:none;border-left:
          none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
          mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
          mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
          <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
          normal'><span style='font-family:"Times New Roman","serif"'><?php echo $row['date_deployment']; ?><o:p></o:p></span></p>
        </td>
        <td width=188 valign=top style='width:140.95pt;border-top:none;border-left:
        none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
        mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
        mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
        <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
        normal'><span style='font-family:"Times New Roman","serif"'><?php echo $row['status_asset']; ?><o:p></o:p></span></p>
      </td>
    <?php } ?> 
    <!--NALD, ARI DI ASTA ANG IMO NA I BUTANG SULOD SA MYSQL FETCH ARRAY-->
  </tr>
  <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
    <td width=1127 colspan=6 valign=top style='width:845.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-family:"Times New Roman","serif"'>***NOTHING
      FOLLOWS***<o:p></o:p></span></p>
    </td>
  </tr>
</table>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
<tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=1127 colspan=8 valign=top style='width:845.5pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:14.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>RECAPITULATION</span></b><b
    style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;mso-bidi-font-size:
    11.0pt;font-family:"Times New Roman","serif"'><o:p></o:p></span></b></p>
  </td>
</tr>
<tr style='mso-yfti-irow:1'>
  <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></b></p>
</td>
<td width=174 valign=top style='width:130.5pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>TYPE<o:p></o:p></span></b></p>
</td>
<td width=186 valign=top style='width:139.5pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>TOTAL<o:p></o:p></span></b></p>
</td>
<td width=144 valign=top style='width:107.95pt;border:none;mso-border-left-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></b></p>
</td>
<td width=141 valign=top style='width:105.7pt;border:none;border-right:solid windowtext 1.0pt;
mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></b></p>
</td>
<td width=171 valign=top style='width:128.35pt;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>STATUS<o:p></o:p></span></b></p>
</td>
<td width=192 valign=top style='width:2.0in;border:solid windowtext 1.0pt;
border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>TOTAL<o:p></o:p></span></b></p>
</td>
<td width=60 valign=top style='width:44.75pt;border:none;mso-border-left-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></b></p>
</td>
</tr>
<tr style='mso-yfti-irow:2'>
  <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<?php	
$my_keyboard = mysql_query("select * from tbl_location_details    
 LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
 LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
 where NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Keyboard'  and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'keyboard'    and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'kyboard'   and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'kboard'      and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'kbard'      and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'kbord'       and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'kbrd'      and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(keyboard)'  and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(kbrd)'    and id_location = '$get_id' ")or die(mysql_error());
$count = mysql_num_rows($my_keyboard);
?> 
<td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>Keyboard<o:p></o:p></span></p>
</td>
<td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><?php echo $count;?><o:p></o:p></span></p>
</td>
<td width=144 valign=top style='width:107.95pt;border:none;mso-border-left-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<td width=141 valign=top style='width:105.7pt;border:none;border-right:solid windowtext 1.0pt;
mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td> 



<?php
$new = mysql_query("select * from tbl_location_details	                                                    
  LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id 
  LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
  where status_asset = 'New' and id_location = '$get_id'		
  order by date_deployment DESC")or die(mysql_error());
$count = mysql_num_rows($new);		                                               
?>
<td width=171 valign=top style='width:128.35pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>New<o:p></o:p></span></p>
</td>
<td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><?php echo $count;?><o:p></o:p></span></p>
</td>
<td width=60 valign=top style='width:44.75pt;border:none;mso-border-left-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
</tr>


<?php	
$my_mouse = mysql_query("select * from tbl_location_details    
 LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
 LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
 where NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump') 
 and type_asset = 'Mouse'        and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'mouse'      and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'muse'      and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'mose'       and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'mse'       and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'MOUSE'      and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(Mouse)'   and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Mouse/PS2'  and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Mouse/USB' and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Mouse(PS2)' and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Mouse(USB)'and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Mouse-PS2'  and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Mouse-USB' and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Mouse PS2'  and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Mouse USB' and id_location = '$get_id' 
 ")or die(mysql_error());
$count = mysql_num_rows($my_mouse);
?>

<tr style='mso-yfti-irow:3'>
  <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>Mouse<o:p></o:p></span></p>
</td>
<td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><?php echo $count;?><o:p></o:p></span></p>
</td>
<td width=144 valign=top style='width:107.95pt;border:none;mso-border-left-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<td width=141 valign=top style='width:105.7pt;border:none;border-right:solid windowtext 1.0pt;
mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>

<?php
$new = mysql_query("select * from tbl_location_details	                                                    
  LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id 
  LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
  where status_asset = 'Used' and id_location = '$get_id'		
  order by date_deployment DESC")or die(mysql_error());
$count = mysql_num_rows($new);		                                               
?>   
<td width=171 valign=top style='width:128.35pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>Used<o:p></o:p></span></p>
</td>
<td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><?php echo $count;?><o:p></o:p></span></p>
</td>
<td width=60 valign=top style='width:44.75pt;border:none;mso-border-left-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
</tr>

<?php	
$my_monitor = mysql_query("select * from tbl_location_details    
 LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
 LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
 where NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Monitor'     and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'monitor'   and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'montor'   and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'monitr'    and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'mnitor'   and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'mntr'      and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'MNTR'     and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(monitor)' and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(montor)' and id_location = '$get_id' ")or die(mysql_error());
$count = mysql_num_rows($my_monitor);
?>
<tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>Monitor<o:p></o:p></span></p>
</td>
<td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><?php echo $count;?><o:p></o:p></span></p>
</td>

<?php
$new = mysql_query("select * from tbl_location_details	                                                    
  LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id 
  LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
  where status_asset = 'Repaired' and id_location = '$get_id'		
  order by date_deployment DESC")or die(mysql_error());
$count = mysql_num_rows($new);		                                               
?>

<td width=144 valign=top style='width:107.95pt;border:none;mso-border-left-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<td width=141 valign=top style='width:105.7pt;border:none;border-right:solid windowtext 1.0pt;
mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<td width=171 valign=top style='width:128.35pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>Repaired<o:p></o:p></span></p>
</td>
<td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><?php echo $count;?><o:p></o:p></span></p>
</td>
<td width=60 valign=top style='width:44.75pt;border:none;mso-border-left-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
</tr>


<?php	
$my_cpu = mysql_query("select * from tbl_location_details    
 LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
 LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
 where NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump') 
 and type_asset = 'Central Processing unit (CPU)'   and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'central processing unit'          and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'central_processing_unit'      and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'cpu'       and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'c_p_u'                        and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'c.p.u.'                           and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'cntral prcessing unit'        and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'centrl procesing unit'            and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'central processing nit'       and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'cenRal processing unt'            and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'cetral processin unit'        and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'cetral_processin_unit'            and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'centralprocessingunit'        and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(CPU)'                            and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'CENTRAL PROCESSING UNIT'      and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(Central Processing unit (CPU))'  and id_location = '$get_id' ")or die(mysql_error());
$count = mysql_num_rows($my_cpu);
?>
<tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>CPU<o:p></o:p></span></p>
</td>
<td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><?php echo $count;?><o:p></o:p></span></p>
</td>

<?php
$new = mysql_query("select * from tbl_location_details	                                                    
  LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id 
  LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
  where status_asset = 'Damage' and id_location = '$get_id'		
  order by date_deployment DESC")or die(mysql_error());
$count = mysql_num_rows($new);		                                               
?>

<td width=144 valign=top style='width:107.95pt;border:none;mso-border-left-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<td width=141 valign=top style='width:105.7pt;border:none;border-right:solid windowtext 1.0pt;
mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<td width=171 valign=top style='width:128.35pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>Damaged<o:p></o:p></span></p>
</td>
<td width=192 valign=top style='width:2.0in;border-top:none;border-left:none;
border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><?php echo $count;?><o:p></o:p></span></p>
</td>
<td width=60 valign=top style='width:44.75pt;border:none;mso-border-left-alt:
solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
</tr>

<?php	
$my_power_supply = mysql_query("select * from tbl_location_details    
 LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
 LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
 where NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Power Supply'      and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'power supply'    and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'pwer supply'    and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'power spply'     and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'pwer suply'     and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'poer Suply'      and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'powersupply'    and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'power_supply'    and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'power.supply'   and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'pwer.spply'      and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(power supply)' and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(powersupply)'   and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(power_supply)' and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(power-supply)'  and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'POWER SUPPLY'   and id_location = '$get_id' ")or die(mysql_error());
$count = mysql_num_rows($my_power_supply);
?>	
<tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>Power Supply<o:p></o:p></span></p>
</td>
<td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><?php echo $count;?><o:p></o:p></span></p>
</td>

<?php	
$my_vga = mysql_query("select * from tbl_location_details    
 LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
 LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
 where NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Video Graphic Accelerator (VGA)'   and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'VGA'                         and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(VGA)'                          and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Video.Graphic.Accelerator'   and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Video-Graphic-Accelerator'      and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Video_Graphic_Accelerator'   and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'VideoGraphicAccelerator'        and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Video Graphic'               and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'Vedio Graphic Acelerator'       and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'VIDEO GRAPHIC ACCELATOR'     and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'VIDEO+GRAPHIC+ACCELATOR'        and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'vido grphic'                 and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'viDo gRphic Accelarator'        and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'video graphic accelarator'   and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'vedeo graphic'                  and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'video graphic accelerator'   and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'videographicaccelerator'        and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'vedio graphic accelerator'   and id_location = '$get_id'")or die(mysql_error());
$count = mysql_num_rows($my_vga);
?>	
<tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>VGA<o:p></o:p></span></p>
</td>
<td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><?php echo $count;?><o:p></o:p></span></p>
</td> 
</tr>

<?php	
$my_vga = mysql_query("select * from tbl_location_details    
 LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
 LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
 where NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump') 
 and type_asset = 'Power Cords'       and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump') 
 and type_asset = 'power cord'    and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump') 
 and type_asset = 'power_cord'     and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(power cord)'  and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'power.cord'     and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = '(pwer crd)'    and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'powr coRd'      and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'ower cord'     and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'power cordss'   and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'pwer crd'      and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'POWER CORD'     and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'poer cd'       and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'powe cor'       and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'powercord'     and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'powe cor'       and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'power-cord'    and id_location = '$get_id'")or die(mysql_error());
$count = mysql_num_rows($my_vga);
?>	
<tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>Power Cord<o:p></o:p></span></p>
</td>
<td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><?php echo $count;?><o:p></o:p></span></p>
</td> 
</tr>

<?php	
$my_avr = mysql_query("select * from tbl_location_details    
 LEFT JOIN tbl_assets ON tbl_location_details.id = tbl_assets.id
 LEFT JOIN tbl_asset_type ON tbl_assets.id_asset=tbl_asset_type.id_asset
 where NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'AVR'                           and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'A.V.R'                          and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'automatic Voltage Regulator'   and id_location = '$get_id'   
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'automatic Voltage Reactor'      and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'automatic_Voltage_Regulator'   and id_location = '$get_id'   
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'automatic-Voltage-Regulator'    and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'avrs'                          and id_location = '$get_id'   
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'automatic v.r'                  and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'automatic voltage R.'          and id_location = '$get_id'   
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'avregulator'                    and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'automatic Voltage Reactor'     and id_location = '$get_id'   
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'automatic-Voltage-Reactor'      and id_location = '$get_id' 
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'automaticVoltageReactor'       and id_location = '$get_id'   
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'automaticVoltageRegulator'      and id_location = '$get_id'
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'automtic Voltge Reactor'       and id_location = '$get_id'   
 OR NOT EXISTS 
 (select * from tbl_location_details where status_asset='Dump')
 and type_asset = 'automtic Voltge Regulator'      and id_location = '$get_id'
 ")or die(mysql_error());
$count = mysql_num_rows($my_avr);
?>	
<tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td width=60 valign=top style='width:44.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>
</td>
<td width=174 valign=top style='width:130.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>AVR<o:p></o:p></span></p>
</td>
<td width=186 valign=top style='width:139.5pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><?php echo $count;?><o:p></o:p></span></p>
</td> 
</tr>

</table>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
style='border-collapse:collapse;border:none;mso-yfti-tbllook:1184;mso-padding-alt:
0in 5.4pt 0in 5.4pt;mso-border-insideh:none;mso-border-insidev:none'>
<tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:44.85pt'>
  <td width=376 valign=top style='width:281.8pt;padding:0in 5.4pt 0in 5.4pt;
  height:44.85pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  "Times New Roman","serif"'>Prepared by:<o:p></o:p></span></p>
</td>
<td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;
height:44.85pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>Received by:<o:p></o:p></span></p>
</td>
<td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;
height:44.85pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>Check by:<o:p></o:p></span></p>
</td>
</tr>

<?php $query= mysql_query("select * from tbl_admin where id_admin = '$session_id'")or die(mysql_error());
$row = mysql_fetch_array($query);
?>
<tr style='mso-yfti-irow:1;height:17.85pt'>
  <td width=376 valign=top style='width:281.8pt;padding:0in 5.4pt 0in 5.4pt;
  height:17.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><u><span
    style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'><?php echo $row['firstname']." ".$row['lastname'];  ?><o:p></o:p></span></u></b></p>
  </td>
  <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;
  height:17.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><u><span
    style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>RANILO
    S. AMOR<o:p></o:p></span></u></b></p>
  </td>
  <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;
  height:17.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><u><span
    style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>MRS.
    ANNETTE Z. VILLALUZ<o:p></o:p></span></u></b></p>
  </td>
</tr>
<tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  <td width=376 valign=top style='width:281.8pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:12.0pt;
    mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>Technology
    Facilitator<o:p></o:p></span></p>
  </td>
  <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:12.0pt;
    mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>Property
    Custodian<o:p></o:p></span></p>
  </td>
  <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:12.0pt;
    mso-bidi-font-size:11.0pt;font-family:"Times New Roman","serif"'>VP for
    Operation<o:p></o:p></span></p>
  </td>
</tr>
</table>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'><o:p>&nbsp;</o:p></span></p>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
<?php include('script.php'); ?>
<div class="empty">
  <center>
    <hr>
    <footer>
     <p>iERP - Enterprise Resource Planning Copyright 2020</p>
     <footer>
     </center>
   </div>
   </html>