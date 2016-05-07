<?php 
    defined( '_JEXEC' ) or die( 'Restricted access' );
    
    $doc = JFactory::getDocument();
    $doc->setHtml5(true);

    $template_path = $this->baseurl.'/templates/'.$this->template;
    $css_path = $path."/css";
    $js_path = $path."/js";
    $img_path = $path."/img";
    
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <jdoc:include type="head" />
    <script src="<?php echo $js_path.'/main.js'; ?>"></script>
    
</head>
<body>
    <jdoc:include type="module" name="breadcrumbs" title="Breadcrumbs" />
    <img src="<?php echo $template_path."/template_preview.png"; ?>" alt="">
<?php     
    echo JText::_("TPL_MYTEMPLATE_TEST");
    $div_color = $this->params->get('testColor');
    $media_file = $this->params->get('mediaFile');
    $test_text = $this->params->get('testText');
    $test_list = $this->params->get('testList');
    $test_radio = $this->params->get('testRadio');
?>
    <div style="background-color: <?php echo $div_color; ?>; width: 100px; height: 100px;"></div>

    <img src="<?php echo $media_file; ?>" alt="">
    
    <p><?php echo $test_text; ?></p>
    <p><?php echo $test_list; ?></p>
    <p><?php echo $test_radio; ?></p>
    
</body>
</html>





