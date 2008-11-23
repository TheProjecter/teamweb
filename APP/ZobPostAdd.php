<?php defined('APP_DIR') or die ('Direct Access to this location is not allowed.'); ?>
<?php FLEA::loadFile('FLEA_Helper_Html.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo RESPONSE_CHARSET; ?>" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
<!--
function fnOnBack() {
	var url = '<?php echo $this->_getBack(); ?>';
	document.location.href = url;
}

function fnOnSubmit(form) {
	form.Save.disabled = true;
	if (form.Title.value == '' || form.Body.value == '')
	{
		alert('<?php echo h(_T('ui_c_form_validation')); ?>');
		form.Save.disabled = false;
		return false;
	}

	return true;
}

// -->
</script>
</head>
<body>
<div id="content">
  <h3><?php echo h(_T('ui_c_post')); ?></h3>
  <div class="description"><?php echo t(_T('ui_c_post_description')); ?></div>
  <br />
  <p class="error-msg"><?php echo $errorMessage; ?></p>
  <form action="<?php echo $this->_url('save'); ?>" method="post" name="form1" id="form1" onsubmit="return fnOnSubmit(this);">
    <span class="error-msg">*&nbsp;</span><strong><?php echo h(_T('ui_c_title')); ?>:</strong><br />
    <?php html_textbox('Title', $comment['Title'], 80, 120); ?>
	<br />
	<br />
    <span class="error-msg">*&nbsp;</span><strong><?php echo h(_T('ui_c_body')); ?>:</strong><br />
    <?php html_textarea('Body', $comment['Body'], 60, 10); ?>
	<br />
    <br />
    <input name="Save" type="submit" id="Save" value="<?php echo h(_T('ui_g_submit')); ?>" />
	&nbsp;&nbsp;
    <input name="Cancel" type="button" id="Cancel" value="<?php echo h(_T('ui_g_cancel')); ?>" onclick="fnOnBack();" />
    <input name="<?php echo $pk; ?>" type="hidden" id="<?php echo $pk; ?>" value="<?php echo $comment[$pk]; ?>" />
    <input name="AuthorID" type="hidden" id="AuthorID" value="<?php echo $comment['AuthorID']; ?>" />
    <!-- <input name="Created" type="hidden" id="Created" value="<?php echo $comment['Created']; ?>" /> -->
  </form>
</div>
</body>
</html>