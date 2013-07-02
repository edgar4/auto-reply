<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<link href="style.css" rel="stylesheet" type="text/css" >
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>{$smarty.const.AUTORESPONDER}::{$smarty.const.TITLE_HTML_CODE}</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<link href="../style.css" rel="stylesheet" type="text/css">
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
		
<script language="javascript" type="text/javascript">
{literal}
 var copytoclip=1
						
		function HighlightAll(theField)
        {
			var tempval=theField;//eval("document."+theField)
			tempval.focus()
			tempval.select()
           if (document.all&&copytoclip==1){
				therange=tempval.createTextRange()
				therange.execCommand("Copy")
				window.status="Contents highlighted and copied to clipboard!"
				setTimeout("window.status=''",1800)
			}
		 }


{/literal}
</script>

<div align="left"><br>

		  <table width="70%"  border="0" align="center" cellpadding="0" cellspacing="0">
<form name="form1" method="post" action="">
            <tr>
              <th class="tblHead" scope="col"><table width="100%"  border="0" cellspacing="1" cellpadding="2">
                <tr>
                  <td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="3" cellspacing="0">
                    <tr class="tblHead">
                      <td height="25" align="center"><strong>{$smarty.const.COPY_AND_PASTE_MESSAGE}</strong></td>
                    </tr>
                    <tr>
                      <td align="center" valign="top"><textarea name="code" cols="65" rows="15"  id="code" readonly>{$output_html}</textarea></td>
                    </tr>
                    <tr>
                      <td align="center" valign="top">                        <div align="left">
                          <input type="button" name="Submit" value="Select Code" onClick="javascript:HighlightAll(document.getElementById('code'))">
                         <font color="#000000">Press Ctrl+C to Copy the Selected Code.</font></div> 
                     </td>
                    </tr>
                  </table></td>
                </tr>
              </table></th>
            </tr>
             </form>
          </table>
		  <br>
		    <br>
		  </div>
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
