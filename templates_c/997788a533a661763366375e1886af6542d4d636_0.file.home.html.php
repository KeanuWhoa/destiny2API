<?php
/* Smarty version 3.1.31, created on 2017-12-06 18:24:05
  from "C:\Program Files (x86)\Ampps\www\destiny\destiny2API\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a287c15bde544_24429899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '997788a533a661763366375e1886af6542d4d636' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\destiny\\destiny2API\\home.html',
      1 => 1512602643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a287c15bde544_24429899 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<h2>Destiny 2 Raid Stats</h2>
	<div class="charSelect">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['charInfo']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
			<div class='charContainer'>
				<img class='emblemBG' src='https://www.bungie.net/<?php echo $_smarty_tpl->tpl_vars['i']->value['Response']['character']['data']['emblemBackgroundPath'];?>
'/>
				<img class='emblemIco' src='https://www.bungie.net/<?php echo $_smarty_tpl->tpl_vars['i']->value['Response']['character']['data']['emblemPath'];?>
'/>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</div>
</body><?php }
}
