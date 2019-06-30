<?php
/* Smarty version 3.1.33, created on 2018-09-17 05:23:29
  from '/var/www/html/smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5b9f3a51ecd0a1_96049920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '569f7c9bad1e95dec6a51c7c51b98d4db367f54c' => 
    array (
      0 => '/var/www/html/smarty/templates/index.tpl',
      1 => 1537161800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f3a51ecd0a1_96049920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'formatByType' => 
  array (
    'compiled_filepath' => '/var/www/html/smarty/templates_c/569f7c9bad1e95dec6a51c7c51b98d4db367f54c_0.file.index.tpl.php',
    'uid' => '569f7c9bad1e95dec6a51c7c51b98d4db367f54c',
    'call_name' => 'smarty_template_function_formatByType_9000471935b9f3a51ea7687_06036627',
  ),
));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Security Exercise</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container">
  <h2>Sensor State</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>State</th>
        <th>Alarm</th>
      </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sensors']->value, 'sensor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sensor']->value) {
?>
    <tr class="<?php if ($_smarty_tpl->tpl_vars['sensor']->value['alarm'] == 'Alarm') {?>danger<?php } else { ?>success<?php }?>"><td><?php echo $_smarty_tpl->tpl_vars['sensor']->value['name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['sensor']->value['type'];?>
</td><td><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'formatByType', array(), true);
echo $_smarty_tpl->tpl_vars['sensor']->value['units'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['sensor']->value['alarm'];?>
</td></tr>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
</div>
</body>
</html>
<?php }
/* smarty_template_function_formatByType_9000471935b9f3a51ea7687_06036627 */
if (!function_exists('smarty_template_function_formatByType_9000471935b9f3a51ea7687_06036627')) {
function smarty_template_function_formatByType_9000471935b9f3a51ea7687_06036627(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if ($_smarty_tpl->tpl_vars['sensor']->value['type'] == 'Door') {?>
       <?php echo $_smarty_tpl->tpl_vars['sensor']->value['state'];?>

    <?php } elseif ($_smarty_tpl->tpl_vars['sensor']->value['type'] == 'GlassBreak') {?>
        <?php echo number_format($_smarty_tpl->tpl_vars['sensor']->value['state'],3);?>

    <?php } else { ?>
        <?php echo number_format($_smarty_tpl->tpl_vars['sensor']->value['state'],1);?>

    <?php }
}}
/*/ smarty_template_function_formatByType_9000471935b9f3a51ea7687_06036627 */
}
