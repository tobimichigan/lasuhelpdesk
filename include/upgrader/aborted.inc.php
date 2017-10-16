<?php
if(!defined('OSTSCPINC') || !$thisstaff || !$thisstaff->isAdmin()) die('Access Denied');
?>    
<div id="upgrader">
   <div id="main">
    <h1 style="color:#FF7700;">Upgrade Aborted!</h1>
    <div id="intro">
        <p><strong>Upgrade aborted due to errors. Any errors at this stage are fatal.</strong></p>
        <p>Please note the error(s), if any, when <a target="_blank" href="http://osticket.com/support/">seeking help</a>.<p>
        <?php
        if($upgrader && ($errors=$upgrader->getErrors())) {
            if($errors['err'])
                echo sprintf('<b><font color="red">%s</font></b>',$errors['err']);
            echo '<ul class="error">';
            unset($errors['err']);
            foreach($errors as $k => $error)
                echo sprintf('<li>%s</li>',$error);
            echo '</ul>';
        } else {
            echo '<b><font color="red">Internal error occurred - get technical help.</font></b>';
        }
        ?>
        <p><b>For more detailed information, please view <a href="logs.php">system logs</a> or check your email.</b></p>
        <br>
        
  </div>
  <div class="clear"></div>
</div>
