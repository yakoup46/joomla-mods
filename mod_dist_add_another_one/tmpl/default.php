<script>

function ShipToBillPerson(form) {
if (form.copy.checked) {
form.Billbusiness.value = form.business.value;
form.BillName.value = form.Name.value;
form.BillAddress.value = form.Address.value;
form.BillAddress2.value = form.Address2.value;
form.BillCity.value = form.City.value;
form.BillZipCode.value = form.ZipCode.value;
form.BillState.value = form.State.value;
form.BillCountry.value = form.Country.value;
form.BillTelephone.value = form.Telephone.value;
}

}

function ShipToDistBillPerson(form) {
if (form.copy.checked) {
form.shipaddr.value = form.billaddr.value;
form.shipcity.value = form.billcity.value;
form.shipzip.value = form.billzip.value;
form.shipstate.value = form.billstate.value;
form.shipcountry.value = form.billcountry.value;
}

}
function validatefields(form) {

if (!emailCheck (form.email.value)) {
    form.email.focus();
    return false;
}


if (form.business.value.length < 1) {
    alert('Business / University must be entered!');
    form.business.focus();
    return false;
}

if (form.Name.value.length < 1) {
    alert('Name must be entered!');
    form.Name.focus();
    return false;
}

if (form.Address.value.length < 1) {
    alert('Address must be entered!');
    form.Address.focus();
    return false;
}

if (form.City.value.length < 1) {
    alert('City must be entered!');
    form.City.focus();
    return false;
}

if (form.State.selectedIndex == "") {
    alert('State must be entered!');
    form.State.focus();
    return false;
}

if (form.ZipCode.value.length < 1) {
    alert('Zip Code must be entered!');
    form.ZipCode.focus();
    return false;
}



if (form.Telephone.value.length < 1) {
    alert('Telephone must be entered!');
    form.Telephone.focus();
    return false;
}

if (form.Billbusiness.value.length < 1) {
    alert('Billing Business / University must be entered!');
    form.Billbusiness.focus();
    return false;
}

if (form.BillName.value.length < 1) {
    alert('Billing Name must be entered!');
    form.BillName.focus();
    return false;
}

if (form.BillAddress.value.length < 1) {
    alert('Billing Address must be entered!');
    form.BillAddress.focus();
    return false;
}

if (form.BillCity.value.length < 1) {
    alert('Billing City must be entered!');
    form.BillCity.focus();
    return false;
}

if (form.BillState.selectedIndex == "") {
    alert('Billing State must be entered!');
    form.BillState.focus();
    return false;
}

if (form.BillZipCode.value.length < 1) {
    alert('Billing Zip Code must be entered!');
    form.BillZipCode.focus();
    return false;
}



if (form.BillTelephone.value.length < 1) {
    alert('Billing Telephone must be entered!');
    form.BillTelephone.focus();
    return false;
}

if (form.electro.value == "") {
    alert('You need to selected a Electrospinning option!');
    form.electro.focus();
    return false;
}

return true;
}


function validateContact(form) {

if (!emailCheck (form.email.value)) {
    form.email.focus();
    return false;
}

if (form.business.value.length < 1) {
    alert('Business / University must be entered!');
    form.business.focus();
    return false;
}


if (form.ZipCode.value.length < 1) {
    alert('Zip Code must be entered!');
    form.ZipCode.focus();
    return false;
}

if (form.Country.value.length < 1) {
    alert('Country must be entered!');
    form.Country.focus();
    return false;
}

if (form.electro.value == "") {
    alert('You need to selected a Electrospinning option!');
    form.electro.focus();
    return false;
}

return true;
}

function validateemails(form) {
if (!emailCheck (form.emailaddress.value)) {
    form.emailaddress.focus();
    return false;
}   
return true;    
}

function validateDistributor(form) {

if (!emailCheck (form.email.value)) {
    form.email.focus();
    return false;
}

if (form.company_name.value.length < 1) {
    alert('Company Name must be entered!');
    form.company_name.focus();
    return false;
}


if (form.billaddr.value.length < 1) {
    alert('Billing Address must be entered!');
    form.billaddr.focus();
    return false;
}

if (form.billcity.value.length < 1) {
    alert('Billing City must be entered!');
    form.billcity.focus();
    return false;
}

if (form.billstate.selectedIndex == "") {
    alert('Billing State must be entered!');
    form.billstate.focus();
    return false;
}

if (form.billzip.value.length < 1) {
    alert('Billing Zip Code must be entered!');
    form.billzip.focus();
    return false;
}



if (form.billphone.value.length < 1) {
    alert('Billing Telephone must be entered!');
    form.billphone.focus();
    return false;
}





if (form.marketsapps.value.length < 1) {
    alert('Marketing Applications must be entered!');
    form.marketsapps.focus();
    return false;
}
if (form.marketcountries.value.length < 1) {
    alert('Marketing Countries must be entered!');
    form.marketcountries.focus();
    return false;
}
if (form.shipaddr.value.length < 1) {
    alert('Shipping Address must be entered!');
    form.shipaddr.focus();
    return false;
}
if (form.shipcity.value.length < 1) {
    alert('Shipping City must be entered!');
    form.shipcity.focus();
    return false;
}

if (form.shipzip.value.length < 1) {
    alert('Marketing Applications must be entered!');
    form.shipzip.focus();
    return false;
}
if (form.shipcountry.value.length < 1) {
    alert('Shipping Country must be entered!');
    form.mshipcountry.focus();
    return false;
}
if (form.contact.value.length < 1) {
    alert('Account Contact must be entered!');
    form.contact.focus();
    return false;
}
if (form.salesmanager.value.length < 1) {
    alert('Sales Manager must be entered!');
    form.salesmanager.focus();
    return false;
}

return true;
}


function ChkNumbers(field) {
var valid = "0123456789"
var ok = "yes";
var temp;
for (var i=0; i<field.value.length; i++) {
temp = "" + field.value.substring(i, i+1);
if (valid.indexOf(temp) == "-1") ok = "no";
}
if (ok == "no") {
alert("Invalid entry!  Only numbers are accepted!");
field.focus();
field.select();
return false;
  }
return true;
}

function emailCheck (emailStr) {

/* The following variable tells the rest of the function whether or not
to verify that the address ends in a two-letter country or well-known
TLD.  1 means check it, 0 means don't. */

var checkTLD=1;

/* The following is the list of known TLDs that an e-mail address must end with. */

var knownDomsPat=/^(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum)$/;

/* The following pattern is used to check if the entered e-mail address
fits the user@domain format.  It also is used to separate the username
from the domain. */

var emailPat=/^(.+)@(.+)$/;

/* The following string represents the pattern for matching all special
characters.  We don't want to allow special characters in the address. 
These characters include ( ) < > @ , ; : \ " . [ ] */

var specialChars="\\(\\)><@,;:\\\\\\\"\\.\\[\\]";

/* The following string represents the range of characters allowed in a 
username or domainname.  It really states which chars aren't allowed.*/

var validChars="\[^\\s" + specialChars + "\]";

/* The following pattern applies if the "user" is a quoted string (in
which case, there are no rules about which characters are allowed
and which aren't; anything goes).  E.g. "jiminy cricket"@disney.com
is a legal e-mail address. */

var quotedUser="(\"[^\"]*\")";

/* The following pattern applies for domains that are IP addresses,
rather than symbolic names.  E.g. joe@[123.124.233.4] is a legal
e-mail address. NOTE: The square brackets are required. */

var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;

/* The following string represents an atom (basically a series of non-special characters.) */

var atom=validChars + '+';

/* The following string represents one word in the typical username.
For example, in john.doe@somewhere.com, john and doe are words.
Basically, a word is either an atom or quoted string. */

var word="(" + atom + "|" + quotedUser + ")";

// The following pattern describes the structure of the user

var userPat=new RegExp("^" + word + "(\\." + word + ")*$");

/* The following pattern describes the structure of a normal symbolic
domain, as opposed to ipDomainPat, shown above. */

var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");

/* Finally, let's start trying to figure out if the supplied address is valid. */

/* Begin with the coarse pattern to simply break up user@domain into
different pieces that are easy to analyze. */

var matchArray=emailStr.match(emailPat);

if (matchArray==null) {

/* Too many/few @'s or something; basically, this address doesn't
even fit the general mould of a valid e-mail address. */

alert("Email address seems incorrect (check @ and .'s)");
return false;
}
var user=matchArray[1];
var domain=matchArray[2];

// Start by checking that only basic ASCII characters are in the strings (0-127).

for (i=0; i<user.length; i++) {
if (user.charCodeAt(i)>127) {
alert("Ths username contains invalid characters.");
return false;
   }
}
for (i=0; i<domain.length; i++) {
if (domain.charCodeAt(i)>127) {
alert("Ths domain name contains invalid characters.");
return false;
   }
}

// See if "user" is valid 

if (user.match(userPat)==null) {

// user is not valid

alert("The username doesn't seem to be valid.");
return false;
}

/* if the e-mail address is at an IP address (as opposed to a symbolic
host name) make sure the IP address is valid. */

var IPArray=domain.match(ipDomainPat);
if (IPArray!=null) {

// this is an IP address

for (var i=1;i<=4;i++) {
if (IPArray[i]>255) {
alert("Destination IP address is invalid!");
return false;
   }
}
return true;
}

// Domain is symbolic name.  Check if it's valid.
 
var atomPat=new RegExp("^" + atom + "$");
var domArr=domain.split(".");
var len=domArr.length;
for (i=0;i<len;i++) {
if (domArr[i].search(atomPat)==-1) {
alert("The domain name does not seem to be valid.");
return false;
   }
}

/* domain name seems valid, but now make sure that it ends in a
known top-level domain (like com, edu, gov) or a two-letter word,
representing country (uk, nl), and that there's a hostname preceding 
the domain or country. */

if (checkTLD && domArr[domArr.length-1].length!=2 && 
domArr[domArr.length-1].search(knownDomsPat)==-1) {
alert("The address must end in a well-known domain (.com, .net) and must be lowercase or a two letter " + "country.");
return false;
}

// Make sure there's a host name preceding the domain.

if (len<2) {
alert("This address is missing a hostname!");
return false;
}

// If we've gotten this far, everything's valid!
return true;
}
</script>
<?php 
// No direct access
defined('_JEXEC') or die; ?>

<?php

if (isset($_GET['Key'])) {


// first let's set some variables 

// make a note of the current working directory, relative to root. 
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); 

// make a note of the directory that will recieve the uploaded file 
$uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . 'images/'; 

// make a note of the location of the upload form in case we need it 
$uploadForm = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'insert_distributors.php'; 

// make a note of the location of the success page 
$uploadSuccess = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'dist-thank-you'; 

// fieldname used within the file <input> of the HTML form 
$fieldname = 'imgfile'; 

// Now let's deal with the upload 

// possible PHP upload errors 
$errors = array(1 => 'php.ini max file size exceeded', 
                2 => 'html form max file size exceeded', 
                3 => 'file upload was only partial', 
                4 => 'no file was attached'); 


if (isset($_POST['imgfile'])) {
    
    // check for PHP's built-in uploading errors 
    ($_FILES[$fieldname]['error'] == 0) 
        or error($errors[$_FILES[$fieldname]['error']], $uploadForm); 
     
    // check that the file we are working on really was the subject of an HTTP upload 
    @is_uploaded_file($_FILES[$fieldname]['tmp_name']) 
        or error('not an HTTP upload', $uploadForm); 
     
    // validation... since this is an image upload script we should run a check   
    // to make sure the uploaded file is in fact an image. Here is a simple check: 
    // getimagesize() returns false if the file tested is not an image. 
    @getimagesize($_FILES[$fieldname]['tmp_name']) 
        or error('only image uploads are allowed', $uploadForm); 
     
    // make a unique filename for the uploaded file and check it is not already 
    // taken... if it is already taken keep trying until we find a vacant one 
    // sample filename: 1140732936-filename.jpg     
    $now = time(); 
    while(file_exists($uploadFilename = $uploadsDirectory.$now.'-'.$_FILES[$fieldname]['name'])) 
    { 
        $now++; 
    } 

    // now let's move the file to its final location and allocate the new filename to it 
    @move_uploaded_file($_FILES[$fieldname]['tmp_name'], $uploadFilename) 
        or error('receiving directory insuffiecient permission', $uploadForm); 
    $filename = $now.'-'.$_FILES[$fieldname]['name'];
}
    
if ($_GET['Key'] == 'A') {
            
    $target_path = __DIR__ . '/../../mod_company_select/images/';
        $target_file =  basename( $_FILES['imgfile']['name']);
        $target_file = str_replace(' ', '_', $target_file);
        $target_path = $target_path . $target_file;
        move_uploaded_file($_FILES['imgfile']['tmp_name'], $target_path);           

        $sql = "Insert into distributors values('', '$_POST[company_name]', '$_POST[billaddr]', '$_POST[billcity]', '$_POST[billstate]', '$_POST[billzip]', '$_POST[billcountry]', '$_POST[billphone]', '$_POST[billfax]', '$_POST[website]', '$_POST[marketingmethods]', '$_POST[marketsapps]', '$_POST[marketcountries]', '$_POST[shipaddr]', '$_POST[shipcity]', '$_POST[shipstate]', '$_POST[shipzip]', '$_POST[shipcountry]', '$_POST[contact]', '$_POST[email]', '$_POST[officialuse]', '$_POST[salesmanager]', '$_POST[salesemail]', '$_POST[bankname]', '$_POST[bankcontact]', '$_POST[banktitle]', '$_POST[bankcity]', '$_POST[bankaddr]', '$_POST[bankphone]', '$_POST[tr1company]', '$_POST[tr1contact]', '$_POST[tr1addr]', '$_POST[tr1phone]', '$_POST[tr1email]', '$_POST[tr2company]', '$_POST[tr2contact]', '$_POST[tr2addr]', '$_POST[tr2phone]', '$_POST[tr2email]', '$_POST[tr3company]', '$_POST[tr3contact]', '$_POST[tr3addr]', '$_POST[tr3phone]', '$_POST[tr3email]', '$_POST[dbnumber]', '$_POST[businessyears]', 'N', '$target_file', '$_pOST[information]','$_POST[worldarea]',0.00,'OURS','NO')";
    }
    $db = JFactory::getDbo();
    $db->setQuery($sql);
    $db->execute();
    //$result = mysql_query($sql);    
// If you got this far, everything has worked and the file has been successfully saved. 
// We are now going to redirect the client to a success page. 


$to = "yakoup46@gmail.com";
$subject = "Syringe Pump New Distributor";

$headers = "From: ".strip_tags($_POST['email'])."\r\n";
$headers .= "Reply-To: ".strip_tags($_POST['email'])."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Company Name:</strong> </td><td>" . strip_tags($_POST['company_name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";

$message .= "</table>";
$message .= "</body></html>";

mail($to, $subject, $message, $headers);
header('Location: ' . $uploadSuccess);



}

$qs = $_SERVER['QUERY_STRING'] != '' ? $_SERVER['QUERY_STRING'] . '&' : '?';
?>  

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<TITLE>Syringe Pump Distributors</TITLE>
<script src="Order.js" type="text/javascript"></script>

</HEAD>
<BODY>
<table border="1" cols="3" width="900" align="center">
<tr>
<td align="center"><h1><strong><img src="images/Logo.png" alt="New Era Pump Systems Inc.">Distributor Information Form</strong></h1>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<form method="post" action="<?= $qs ;?>Key=A" enctype="multipart/form-data" onSubmit="return validateDistributor(this);">
<tr bgcolor="#EFEFEF">
<td class="formstyle" colspan="2" align="center"><h2>Billing Information</h2></td>
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Legal Company Name:</td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="company_name"  size="35"></td>
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing Address: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billaddr"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing City: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billcity"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing State: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billstate"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing Zipcode: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billzip"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing Country: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billcountry"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing Telephone: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billphone"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Billing Fax: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="billfax"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Accounts Payable Contact: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="contact"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Accounts Payable Contact Email: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="email"   size="25"></td> 
</tr>
<tr bgcolor="#EFEFEF">
<td class="formstyle" colspan="2" align="center"><h2>Shipping Information</h2>Check to Copy Billing Information to Shipping Information: <input type="checkbox" name="copy"
OnClick="javascript:ShipToDistBillPerson(this.form);" value="checkbox"></td>
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Shipping Address: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="shipaddr"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Shipping City: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="shipcity"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Shipping State: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="shipstate"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Shipping Zipcode: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="shipzip"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Shipping Country: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="shipcountry"   size="25"></td> 
</tr>
<tr bgcolor="#EFEFEF">
<td class="formstyle" colspan="2" align="center"><b><h2>Marketing Information</h2></b></td>
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Company Logo (JPG/GIF/PNG):</td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input id="file" type="file" name="imgfile"> </td>
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Company Web Site: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="website"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Marketing Methods to be utilized for selling New Era products: (Website, E-mail, Inside Sales, Outside Sales, etc.  Proof of promotion is required to get distributor discounts.  Please submit proof as soon as possible to ensure distributor discounts.): </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><textarea  name="marketingmethods" cols="60" rows="5"></textarea></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Markets/Applications: (I.e. Neuroscience, Biology, Physics, etc.)</td>
<td align="left" bgcolor="#FFFFFF" valign="top"><textarea  name="marketsapps" cols="60" rows="5"></textarea></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Countries you sell to: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="marketcountries"   size="25"></td> 
</tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Sales Manager: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="salesmanager"   size="25"></td> 
</tr><tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Sales Manager Email: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="salesemail"   size="25"></td> 
</tr>
<tr bgcolor="#EFEFEF">
<td class="formstyle" colspan="2" align="center"><h2>Credit Information</h2><strong>Below is credit information submission for <font color="#FF0000">US Distributors only</font>.  <br>All foreign distributors are put on 
prepayment and do not need to fill out any further information.</strong></td>
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Bank Name: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="bankname"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Bank Contact: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="bankcontact"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Bank Title: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="banktitle"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Bank Address: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="bankaddr"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Bank City: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="bankcity"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Bank Telephone: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="bankphone"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 1 Company: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr1company"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 1 Contact: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr1contact"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 1 Company Address: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr1addr"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 1 Company Telephone: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr1phone"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 1 Email: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr1email"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 2 Company: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr2company"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 2 Contact: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr2contact"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 2 Company Address: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr2addr"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 2 Company Telephone: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr2phone"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 2 Email: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr2email"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 3 Company: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr3company"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 3 Contact: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr3contact"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 3 Company Address: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr3addr"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 3 Company Telephone: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr3phone"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">TR 3 Email: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="tr3email"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Dun &amp; Bradstreet: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="dbnumber"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Years in Business: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><input type="text" name="businessyears"   size="25"></td> 
</tr>
<tr>
<td align="left" bgcolor="#FFFFFF" valign="top">Information: </td>
<td align="left" bgcolor="#FFFFFF" valign="top"><textarea cols="60" rows="5" name="information"></textarea></td> 
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF" valign="top" colspan="2">
<input type="submit" value="INSERT">
</td>
</tr> 
</form>
</table>
</td>
</tr>
</table>
</BODY>
</HTML>
<?php
// The following function is an error handler which is used 
// to output an HTML error page if the file upload fails 
function error($error, $location, $seconds = 5) 
{ 
    header("Refresh: $seconds; URL=\"$location\""); 
    echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"'."\n". 
    '"http://www.w3.org/TR/html4/strict.dtd">'."\n\n". 
    '<html lang="en">'."\n". 
    '    <head>'."\n". 
    '        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">'."\n\n". 
    '        <link rel="stylesheet" type="text/css" href="stylesheet.css">'."\n\n". 
    '    <title>Upload error</title>'."\n\n". 
    '    </head>'."\n\n". 
    '    <body>'."\n\n". 
    '    <div id="Upload">'."\n\n". 
    '        <h1>Upload failure</h1>'."\n\n". 
    '        <p>An error has occured: '."\n\n". 
    '        <span class="red">' . $error . '...</span>'."\n\n". 
    '         The upload form is reloading</p>'."\n\n". 
    '     </div>'."\n\n". 
    '</html>'; 
    exit; 
} // end error handler 

?>
