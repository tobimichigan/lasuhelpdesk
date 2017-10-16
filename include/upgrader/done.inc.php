<?php
if(!defined('OSTSCPINC') || !$thisstaff || !$thisstaff->isAdmin()) die('Access Denied');
//Destroy the upgrader - we're done! 
$_SESSION['ost_upgrader']=null;
?> 
<div id="upgrader">
    <div id="main">
        <h1 style="color:green;">Upgrade Completed!</h1>
        <div id="intro">
        <p>Congratulations! LASU Eletronic Helpdesk upgrade has completed successfully.</p>
        <p>Please refer to <a href="http://osticket.com/wiki/Release_Notes" target="_blank">Release Notes</a> for more information about changes and/or new features.</p>
        </div>
        <p>Once again, thank you for choosing LASU Eletronic Helpdesk.</p>
        <p>Please feel free to <a target="_blank" href="http://osticket.com/support/">let us know</a> of any other improvements and features you would like to see in osTicket, so that we may add them in the future as we continue to develop better and better versions of osTicket.</p>
        <p>We take user feedback seriously and we're dedicated to making changes based on your input.</p>
        <p>Good luck.<br>
        <p><b>PS</b>: Don't just make customers happy, make happy customers!</p>
    </div>
   
   <div class="clear"></div>
</div>
