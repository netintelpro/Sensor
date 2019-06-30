<?php
/* Smarty version 3.1.33, created on 2018-09-17 05:54:58
  from '/var/www/html/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5b9f41b2317624_83724776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac0d80c9f5195a4b1349fd7984fb80fa80c14534' => 
    array (
      0 => '/var/www/html/templates/index.tpl',
      1 => 1537162899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9f41b2317624_83724776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'formatByType' => 
  array (
    'compiled_filepath' => '/var/www/html/templates_c/ac0d80c9f5195a4b1349fd7984fb80fa80c14534_0.file.index.tpl.php',
    'uid' => 'ac0d80c9f5195a4b1349fd7984fb80fa80c14534',
    'call_name' => 'smarty_template_function_formatByType_14097115935b9f41b22f1ae1_29766903',
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
/* smarty_template_function_formatByType_14097115935b9f41b22f1ae1_29766903 */
if (!function_exists('smarty_template_function_formatByType_14097115935b9f41b22f1ae1_29766903')) {
function smarty_template_function_formatByType_14097115935b9f41b22f1ae1_29766903(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_formatByType_14097115935b9f41b22f1ae1_29766903 */
}
