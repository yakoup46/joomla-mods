<?php
  $db = JFactory::getDbo();
  $target_path = __DIR__ . '/../../mod_company_select/images/';
  if (isset($_GET['key'])) {
    if ($_GET['key'] == 'U') {
      
    $target_path = __DIR__ . '/../../mod_company_select/images/';
    $target_file =  basename( $_FILES['imgfile']['name']);
    $target_file = str_replace(' ', '_', $target_file);
    $target_path = $target_path . $target_file;
    move_uploaded_file($_FILES['imgfile']['tmp_name'], $target_path);
    
    if (empty($target_file)) {
      $target_file = $_SESSION['Logo'];
    }
          
      $sql = "Update distributors set company_name =  '$_POST[company_name]', billaddr = '$_POST[billaddr]', billcity =  '$_POST[billcity]', billstate = '$_POST[billstate]', billzip = '$_POST[billzip]', billcountry = '$_POST[billcountry]', billphone = '$_POST[billphone]', billfax = '$_POST[billfax]', website = '$_POST[website]',  marketingmethods = '$_POST[marketingmethods]',  marketsapps = '$_POST[marketsapps]', marketcountries = '$_POST[marketcountries]', shipaddr = '$_POST[shipaddr]', shipcity = '$_POST[shipcity]', shipstate = '$_POST[shipstate]', shipzip = '$_POST[shipzip]', shipcountry =  '$_POST[shipcountry]', contact = '$_POST[contact]', email = '$_POST[email]', officialuse = '$_POST[officialuse]', salesmanager = '$_POST[salesmanager]',  salesemail = '$_POST[salesemail]', bankname = '$_POST[bankname]', bankcontact = '$_POST[bankcontact]', banktitle = '$_POST[banktitle]', bankcity = '$_POST[bankcity]', bankaddr =  '$_POST[bankaddr]', bankphone = '$_POST[bankphone]', tr1company = '$_POST[tr1company]',  tr1contact = '$_POST[tr1contact]', tr1addr = '$_POST[tr1addr]', tr1phone = '$_POST[tr1phone]', tr1email = '$_POST[tr1email]', tr2company = '$_POST[tr2company]', tr2contact = '$_POST[tr2contact]', tr2addr = '$_POST[tr2addr]', tr2phone = '$_POST[tr2phone]', tr2email =  '$_POST[tr2email]', tr3company = '$_POST[tr3company]', tr3contact = '$_POST[tr3contact]', tr3addr = '$_POST[tr3addr]', tr3phone = '$_POST[tr3phone]', tr3email = '$_POST[tr3email]', dbnumber = '$_POST[dbnumber]', businessyears = '$_POST[businessyears]',  active = '$_POST[active]', information = '$_POST[information]', logo = '$target_file',  billaddr2 = '$_POST[billaddr2]', Discount = $_POST[Discount], Stickers = '$_POST[Stickers]', Manual = '$_POST[Manual]' where dist_id = $_POST[dist_id]";
      $db->setQuery($sql);

      $result = $db->execute(); 
      
      $dist_id = $_POST['dist_id'];
      
      $sql = "delete from country_list_by_dist where dist_id = $dist_id";
      $db->setQuery($sql);
      $country_result = $db->execute();
      
      $sql = "Select * from countries order by countries_name";
      $db->setQuery($sql);
      $country_result = $db->loadAssocList();       
      
      while ($s_row = next($country_result)) {
        $CID = $s_row['countries_id'];
        if (isset($_POST[$CID])) {
            $sql = "insert into country_list_by_dist values($dist_id, $CID, 0)";
            $db->setQuery($sql);
            $result = $db->execute();
        }
      }
      
                                                                          
    }
    


      header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  
  $sql = "Select * from countries order by countries_name";
  $db->setQuery($sql);
  $country_result = $db->loadAssocList();
  
  $DID = $_REQUEST['edit_dist'];
  
  $sql = "Select * from distributors where dist_id = $_REQUEST[edit_dist]";
  $db->setQuery($sql);
  $row=current($db->loadAssocList());
  //$row=mysql_fetch_assoc($result);  
  //$_SESSION['Logo'] = $row['logo'];
  
?>  

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<TITLE>Syringe Pump Distributors</TITLE>
</HEAD>
<BODY>


<table border="1" cols="3" width="100%" align="center">

<tr>
<td  align="center"><h1><strong>Syringe Distributors Database Administration</strong></h1>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC" > 

<tr>
<td align="center" valign="top" bgcolor="#FFFFFF" colspan="2">DISTRIBUTOR</td>
</tr>

<form method="post" action="?edit_dist=<?= $_REQUEST[edit_dist]; ?>&key=U" enctype="multipart/form-data">
<input type="hidden" name="dist_id" value="<?php echo $_REQUEST['edit_dist']; ?>">
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Company LOGO:</td>
<td align="left" bgcolor="#FFFFFF" valign="top"><img src="<?php echo $imagepath . '/' . $row['logo']; ?>" width="102" height="45">
<input type="file" name="imgfile" value="<?php echo $row['logo']; ?>"></td>
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Company Name:</td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="company_name"  size="35" value="<?php echo $row['company_name']; ?>"></td>
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing Address: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billaddr"   size="25" value="<?php echo $row['billaddr']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing Address 2: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billaddr2"   size="25" value="<?php echo $row['billaddr2']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing City: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billcity"   size="25" value="<?php echo $row['billcity']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing State: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billstate"   size="25" value="<?php echo $row['billstate']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing Zipcode: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billzip"   size="25" value="<?php echo $row['billzip']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing Country: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billcountry"   size="25" value="<?php echo $row['billcountry']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing Telephone: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billphone"   size="25" value="<?php echo $row['billphone']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing Fax: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billfax"   size="25" value="<?php echo $row['billfax']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Company Web Site: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="website"   size="25" value="<?php echo $row['website']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Marketing Methods: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><textarea  name="marketingmethods" cols="60" rows="5"><?php echo $row['marketingmethods']; ?></textarea></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Marketing Applications: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><textarea  name="marketsapps" cols="60" rows="5"> <?php echo $row['marketsapps']; ?></textarea></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Marketing Countries: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="marketcountries"   size="25" value="<?php echo $row['marketcountries']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Shipping Address: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="shipaddr"   size="25" value="<?php echo $row['shipaddr']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Shipping City: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="shipcity"   size="25" value="<?php echo $row['shipcity']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Shipping State: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="shipstate"   size="25" value="<?php echo $row['shipstate']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Shipping Zipcode: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="shipzip"   size="25" value="<?php echo $row['shipzip']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Shipping Country: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="shipcountry"   size="25" value="<?php echo $row['shipcountry']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Contact: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="contact"   size="25" value="<?php echo $row['contact']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Email: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="email"   size="25" value="<?php echo $row['email']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Official Usage: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><textarea  name="officialuse" cols="60" rows="5"> <?php echo $row['officialuse']; ?></textarea></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Sales Manager: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="salesmanager"   size="25" value="<?php echo $row['salesmanager']; ?>"></td> 
</tr><tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Sales Email: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="salesemail"   size="25" value="<?php echo $row['salesemail']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Bank Name: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="bankname"   size="25" value="<?php echo $row['bankname']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Bank Contact: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="bankcontact"   size="25" value="<?php echo $row['bankcontact']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Bank Title: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="banktitle"   size="25" value="<?php echo $row['banktitle']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Bank Address: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="bankaddr"   size="25" value="<?php echo $row['bankaddr']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Bank City: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="bankcity"   size="25" value="<?php echo $row['bankcity']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Bank Telephone: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="bankphone"   size="25" value="<?php echo $row['bankphone']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 1 Company: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr1company"   size="25" value="<?php echo $row['tr1company']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 1 Contact: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr1contact"   size="25" value="<?php echo $row['tr1contact']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 1 Company Address: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr1addr"   size="25" value="<?php echo $row['tr1addr']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 1 Company Telephone: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr1phone"   size="25" value="<?php echo $row['tr1phone']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 1 Email: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr1email"   size="25" value="<?php echo $row['tr1email']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 2 Company: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr2company"   size="25" value="<?php echo $row['tr2company']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 2 Contact: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr2contact"   size="25" value="<?php echo $row['tr2contact']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 2 Company Address: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr2addr"   size="25" value="<?php echo $row['tr2addr']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 2 Company Telephone: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr2phone"   size="25" value="<?php echo $row['tr2phone']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 2 Email: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr2email"   size="25" value="<?php echo $row['tr2email']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 3 Company: </td> 
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr3company"   size="25" value="<?php echo $row['tr3company']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 3 Contact: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr3contact"   size="25" value="<?php echo $row['tr3contact']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 3 Company Address: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr3addr"   size="25" value="<?php echo $row['tr3addr']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 3 Company Telephone: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr3phone"   size="25" value="<?php echo $row['tr3phone']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 3 Email: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr3email"   size="25" value="<?php echo $row['tr3email']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Dun & Bradstreet: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="dbnumber"   size="25" value="<?php echo $row['dbnumber']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Years in Business: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="businessyears"   size="25" value="<?php echo $row['businessyears']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Information: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><textarea cols="60" rows="5" name="information"><?php echo $row['information']; ?></textarea></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Active: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><select name="active">
<option value="Y" <?php if ($row['active'] == "Y") echo " selected ";  ?> >YES</option>
<option value="N" <?php if ($row['active'] == "N") echo " selected "; ?> >NO</option></select></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Discount Percentage: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="Discount"   size="10" value="<?php echo $row['Discount']; ?>"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Stickers: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><select name="Stickers">
<option value="OURS" <?php if ($row['Stickers'] == "OURS") echo " selected ";  ?> >OURS</option>
<option value="THEIRS" <?php if ($row['Stickers'] == "THEIRS") echo " selected "; ?> >THEIRS</option></select></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Manual: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><select name="Manual">
<option value="Y" <?php if ($row['Manual'] == "Y") echo " selected ";  ?> >YES</option>
<option value="N" <?php if ($row['Manual'] == "N") echo " selected "; ?> >NO</option></select></td> 
</tr>

<tr>
<td align="left" bgcolor="#FFFFFF" valign="top" colspan="4">COUNTRIES:<br>
<table>
<?php
  $counter = 1;
  while ($c_row = next($country_result)) {
  
    if ($counter == 1) {
      echo "<tr>";
    }

    $sql = "Select * from  country_list_by_dist where dist_id = $DID and CID = $c_row[countries_id]";
    $db->setQuery($sql);
    $current_country = $db->loadAssocList();
    $check_on = count($current_country);
    
    echo "<td><input type='checkbox' name='$c_row[countries_id]' value='$c_row[countries_id]' ";
    if ($check_on > 0) { echo ' checked '; } else { echo ' unchecked '; }
    echo " >$c_row[countries_name]</td>";
    $counter = $counter + 1;
    if ($counter > 4) {
      $counter = 1;
      echo "</tr>";
    }
  }
?>
</table>
</td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF" valign="top" colspan="2">
<input type="submit" value="UPDATE">
</td>
</tr> 




</form>

</table>
</td>
</tr>
</table>
</BODY>
</HTML>
