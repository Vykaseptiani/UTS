<html>
<head>
<style>
html {
    min-height: 100%;
}
 
body {
    
    background-color: khaki; 
}
</style>
</head>
<form method="POST" action="">
 <center><table width="600" border="1" cellpadding="0" cellspacing="5">
    <br>
    <center><h2><b>Isi Data Pemantaun Covid19</b></h2></center></br>
  
                <div class="row">
        <td width="250">&ensp;&ensp;Nama Wilayah</td>
        <td>&#10142;</td>
        <td width="530"><select name="cmb_kota" id="cmb_kota">
                       <?php
                            $options = array('DKI Jakarta', 'Jawa Barat', 'Banten', 'Jawa Tengah');
                            foreach ($options as $cmb_kota) {
                              $selected = @$_POST['cmb_kota'] == $cmb_kota ? 'selected="selected"' : '';
                              echo '<option value"' . $cmb_kota . '"'. $selected . '>' . $cmb_kota . '</option>';
                            }?>
                        </select>
      </tr>
      <tr>
        <td>&ensp;&ensp;Jumlah Positif</td>
        <td>&#10142;</td>
        <td><input size="30" name="positif" type="text" id="positif" value="<?=isset($_POST['positif']) ? $_POST['positif'] : ''?>"></td>
      </tr>
      <tr>
        <td>&ensp;&ensp;Jumlah Dirawat</td>
        <td>&#10142;</td>
        <td><input size="30" name="rawat" type="text" id="rawat" value="<?=isset($_POST['rawat']) ? $_POST['rawat'] : ''?>"></td>
      </tr>
      </tr>
      <tr>
        <td>&ensp;&ensp;Jumlah Sembuh</td>
        <td>&#10142;</td>
        <td><input size="30" name="sembuh" type="text" id="sembuh" value="<?=isset($_POST['sembuh']) ? $_POST['sembuh'] : ''?>"></td>
      </tr>
 
      <tr>
        <td>&ensp;&ensp;Jumlah Meninggal</td>
        <td>&#10142;</td>
        <td><input size="30" name="meninggal" type="text" id="meninggal" value="<?=isset($_POST['meninggal']) ? $_POST['meninggal'] : ''?>"></td>
      </tr>
      <tr>
        <td>&ensp;&ensp;Nama Operator</td>
        <td>&#10142;</td>
        <td><input size="30" name="operator" type="text" id="operator" value="<?=isset($_POST['operator']) ? $_POST['operator'] : ''?>"></td>
      </tr>
      <tr>
        <td>&ensp;&ensp;NIM Mahasiswa</td>
        <td>&#10142;</td>
        <td><input size="30" name="nim" type="number" min="0" id="nim" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>"></td>
      </tr></center>
       </table>
        <td></td>
        <td></td>
        <br>
       <center><input type="reset" value="Reset">&ensp;&ensp; <td align="center"><input name="submit" type="submit" value="Simpan"></td></br><center>
        <br>
    
      </br>
      </tr>
      
   
    </form>
    <table table width="580" border="0" align="center">
      <tr>
      </tr>
    </table>
  </td>
  </tr>
</form>
 <?php
 $ip_address = gethostbyname("localhost");  
 $waktu = date_default_timezone_set('Asia/Jakarta');
     if (isset($_POST['submit'])) 
     {
        echo "<center><b> Hasil Output </b></Center><br></center>";       
        echo '<center><b> Data pemantauan Covid19 wilayah ' . $_POST['cmb_kota'] . '</center>';
        echo '<center> Per '.date ('d F Y H:i:s').'</br></center>';
        echo '<center>'. $_POST['operator'] . ' / ' . $_POST['nim'] . ' / '.$_SERVER['REMOTE_ADDR'] .'</center>';
        echo '<center>
              <table border="1">
                       <tr>
                            <th> Positif </th>
                            <th> Dirawat </th>
                            <th> Sembuh </th>
                            <th> Meninggal </th>
                       </tr>

                       <tr>
                            <th> ' . $_POST['positif']. ' </th>
                            <th> ' . $_POST['rawat']. ' </th>
                            <th> ' . $_POST['sembuh']. ' </th>
                            <th> ' . $_POST['meninggal']. ' </th>
                       </tr>
              </center>';
        
      }
    ?>
  </br>

