<?php if(!defined('SETUPINC')) die('Kwaheri!');
$url=URL;

?>    
    <div id="main">
        <h1 style="color:green;">Congratulations!</h1>
        <div id="intro">
        <p>Your Lagos State University Electronic HelpDesk installation has been completed successfully. Your next step is to fully configure your new support ticket system for use, but before you get to it please take a minute to cleanup.</p>
        
        <h2>Config file permission:</h2>
        Change permission of ost-config.php to remove write access as shown below.
        <ul>
            <li><b>CLI</b>:<br><i>chmod 0664  include/ost-config.php</i></li>
            <li><b>FTP</b>:<br>Using WS_FTP this would be right hand clicking on the file, selecting chmod, and then remove write access</li>
            <li><b>Cpanel</b>:<br>Click on the file, select change permission, and then remove write access.</li>
        </ul>
        </div>
        <p>Below, you'll find some useful links regarding your installation.</p>
        <table border="0" cellspacing="0" cellpadding="5" width="580" id="links">
            <tr>
                    <td width="50%">
                        <strong>Your osTicket URL:</strong><Br>
                        <a href="<?php echo $url; ?>"><?php echo $url; ?></a>
                    </td>
                    <td width="50%">
                        <strong>Your Staff Control Panel:</strong><Br>
                        <a href="../scp/admin.php"><?php echo $url; ?>scp</a>
                    </td>
                </tr>
               
            </table>
            <p><b>PS</b>: Don't just make customers happy, make happy customers!</p>
    </div>
    
