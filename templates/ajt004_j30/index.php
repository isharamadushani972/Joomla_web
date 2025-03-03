<?php /**  * @copyright	Copyright (C) 2012 AJoomlaTemplates.com - All Rights Reserved. **/ defined( '_JEXEC' ) or die( 'Restricted access' );
$jquery			= $this->params->get('jquery');
$scrolltop		= $this->params->get('scrolltop');
$superfish		= $this->params->get('superfish');
$logo			= $this->params->get('logo');
$logotype		= $this->params->get('logotype');
$sitetitle		= $this->params->get('sitetitle');
$sitedesc		= $this->params->get('sitedesc');
$app			= JFactory::getApplication();
$doc			= JFactory::getDocument();
$templateparams	= $app->getTemplate(true)->params;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />
<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<?php include "functions.php"; ?>
<?php if (isMobile()) { ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/mobile.css" type="text/css" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0;">
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/mobilemenu.js"></script>
<?php } ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/styles.css" type="text/css" />
<?php if ($jquery == 'yes' ) : ?><script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script><?php endif; ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap.min.js"></script>
<?php if ($scrolltop == 'yes' ) : ?><script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scrolltopcontrol.js"></script><?php endif; ?>
<?php if ($superfish == 'yes' ) : ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/superfish.js"></script>
<script type="text/javascript">
		jQuery(function(){
			jQuery('#nav ul').superfish({
			pathLevels	: 3,
			delay		: 300,
			animation	: {opacity:'show',height:'show',width:'show'},
			speed		: 'fast',
			autoArrows	: false,
			dropShadows : false,
			});		
		});		
</script>
<?php endif; ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/bootstrap/css/bootstrap.min.css" type="text/css" />
</head>
<?php if (isMobile()) { ?>
<?php include "mobile.php"; ?>
<?php } else { ?>
<body class="background">
<div id="scroll-top"></div>
<div id="header-w">
    <div id="header">
    <?php if ($logotype == 'image' ) : ?>
    <?php if ($logo != null ) : ?>
    <div class="logo"><a href="<?php echo $this->baseurl ?>"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" /></a></div>
    <?php else : ?>
    <div class="logo"><a href="<?php echo $this->baseurl ?>/"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png" border="0"></a></div>
    <?php endif; ?><?php endif; ?> 
    <?php if ($logotype == 'text' ) : ?>
    <div class="logo text"><a href="<?php echo $this->baseurl ?>"><?php echo htmlspecialchars($sitetitle);?></a></div>
    <?php endif; ?>
    <?php if ($sitedesc !== '' ) : ?>
    <div class="sitedescription"><?php echo htmlspecialchars($sitedesc);?></div>
    <?php endif; ?> 
        	<?php if ($this->countModules('menu')) : ?>
        	<div id="navr"><div id="navl"><div id="nav">
		    	<jdoc:include type="modules" name="menu" style="none" />  
            </div></div></div>
        	<?php endif; ?>
        	<?php if ($this->countModules('login or top')) : ?>
            <div id="top-mod">
        	<div id="login">
		    	<jdoc:include type="modules" name="login" style="none" />  
            </div>            
            <div id="top">
				<jdoc:include type="modules" name="top" style="none" />
			</div>
            </div>
        	<?php endif; ?>            
	</div>       
</div>
<div id="main"> 
	<div id="wrapper-w"><div id="wrapper">
			<?php if ($this->countModules('slideshow')) : ?> 
                <div id="slide-w">
                    <jdoc:include type="modules" name="slideshow"  style="none"/> 
                    <div class="clr"></div>          
                </div>
            <?php endif; ?>
        <div id="comp-w">        
        <?php if ($this->countModules('breadcrumbs')) : ?>
        	<jdoc:include type="modules" name="breadcrumbs"  style="none"/>
        <?php endif; ?>
					<?php if ($this->countModules('user1')) : ?>
                    <div id="user1" class="row-fluid">
                        <jdoc:include type="modules" name="user1" style="ajgrid" grid="<?php echo $user1_width; ?>" />
                        <div class="clr"></div> 
                    </div>
                    <?php endif; ?>
        <div class="row-fluid">
                    <?php if ($this->countModules('left')) : ?>
                    <div id="leftbar-w" class="span3">
                    <div id="sidebar">
                        <jdoc:include type="modules" name="left" style="ajgrid" />                     
                    </div>
                    </div>
                    <?php endif; ?>                          
                        <div id="comp" class="span<?php echo $compwidth ?>">
                            <div id="comp-i">
								<?php if ($this->countModules('user2')) : ?>
                                <div id="user2" class="row-fluid">
                                    <jdoc:include type="modules" name="user2" style="ajgrid" grid="<?php echo $user2_width; ?>" />
                                    <div class="clr"></div> 
                                </div>
                                <?php endif; ?>
                            	<jdoc:include type="message" />
                                <jdoc:include type="component" />
                                <?php include "html/template.php"; ?>
                                <div class="clr"></div>
								<?php if ($this->countModules('user3')) : ?>
                                <div id="user2" class="row-fluid">
                                    <jdoc:include type="modules" name="user3" style="ajgrid" grid="<?php echo $user3_width; ?>" />
                                    <div class="clr"></div> 
                                </div>
                                <?php endif; ?>                                
                            </div>
                        </div>                     
                    
                    <?php if ($this->countModules('right')) : ?>
                    <div id="rightbar-w" class="span3">
                    <div id="sidebar">
                        <jdoc:include type="modules" name="right" style="ajgrid" />
                    </div>
                    </div>
                    <?php endif; ?>
                    </div>
		<div class="clr"></div>
        </div>
        <div class="clr"></div>
					<?php if ($this->countModules('user4')) : ?>
                    <div id="user4w">
                    <div id="user4" class="row-fluid">
                        <jdoc:include type="modules" name="user4" style="ajgrid" grid="<?php echo $user4_width; ?>" />
                        <div class="clr"></div> 
                    </div>
                    </div>
                    <?php endif; ?>
					<?php if ($this->countModules('user5')) : ?>
                    <div id="user5w">
                    <div id="user5" class="row-fluid">
                        <jdoc:include type="modules" name="user5" style="ajgrid" grid="<?php echo $user5_width; ?>" />
                        <div class="clr"></div> 
                    </div>
                    </div>
                    <?php endif; ?>
  </div></div>
</div>
                 
<div id="footer-w"><div id="footer">
        <?php if ($this->countModules('copyright')) : ?>
            <div class="copy">
                <jdoc:include type="modules" name="copyright"/>
            </div>
        <?php endif; ?>       
<?php $app = JFactory::getApplication(); $menu = $app->getMenu(); if ($menu->getActive() == $menu->getDefault()) { ?>        
<div class="flexyr"><a href="http://ajoomlatemplates.com/joomla-3.0-templates/" target="_blank" title="joomla">Joomla 3.0 Templates</a> by <a href="http://www.reviewbuilder.com/inmotion-hosting/" target="_blank" title="InMotion">InMotion Hosting Review</a></div><?php } ?>
<div class="clr"></div>
</div></div>
<jdoc:include type="modules" name="debug" style="none" />
</body>
<?php } ?>
</html>