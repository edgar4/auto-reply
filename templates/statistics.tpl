<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<link href="style.css" rel="stylesheet" type="text/css" >
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>{$smarty.const.AUTORESPONDER}::{$smarty.const.TITLE_STATISTICS} </title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<link href="../style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--

-->
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3">{include file="top.tpl.html"}</td>
  </tr>
  <tr>
    <td width="8%" valign="top">{include file="campaign.tpl.html"}</td>
    <td width="100%" valign="top" align="left"><table width="100%" align="center"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>{include file="menu.tpl.html"}</td>
      </tr>
      <tr>
        <td height="27" align="center" valign="top"><!-- InstanceBeginEditable name="EditRegion3" -->
          <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center"><br>                <table width="70%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="tblHead"><table width="100%"  border="0" cellspacing="1" cellpadding="2">
                      <tr>
                        <td bgcolor="#FFFFFF"><table width="100%" height="200" border="0" align="center" cellpadding="5" cellspacing="0">
                          <tr>
                            <td colspan="2" height="25" class="tblHead" align="center"><b>{$camp_name} {$smarty.const.AUTORESPONDER}</b></td>
                          </tr>
                          <tr>
                            <td width="70%"><font color="#000000">{$smarty.const.TOTAL_SUBSCRIBERS}</font></td>
                            <td width="30%"><font color="#000000">{$total_subscriber}</font></td>
                          </tr>
                          <tr>
                            <td><font color="#000000">{$smarty.const.ACTIVE}</font></td>
                            <td><font color="#000000">{$active_subscribers}</font></td>
                          </tr>
                          <tr>
                            <td><font color="#000000">{$smarty.const.INACTIVE}</font></td>
                            <td><font color="#000000">{$inactive_subscribers}</font></td>
                          </tr>
                          <tr>
                            <td colspan="2" class="tblHead" align="center" height="25"><strong>{$smarty.const.TODAYS_STATUS}</strong></td>
                          </tr>
                          <tr>
                            <td><font color="#000000">{$smarty.const.SUBSCRIPTIONS_BY_FORM}</font></td>
                            <td><font color="#000000">{$todays_by_form}</font></td>
                          </tr>
                          <tr>
                            <td><font color="#000000">{$smarty.const.SUBSCRIPTIONS_BY_IMPORT}</font></td>
                            <td><font color="#000000">{$todays_by_import}</font></td>
                          </tr>
                          
                        </table></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>                                
                <p>&nbsp;</p></td>
            </tr>
          </table>
          <!-- InstanceEndEditable --></td>
      </tr>
    </table></td>
    <td width="0%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">{include file="bottom.tpl.html"}</td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
