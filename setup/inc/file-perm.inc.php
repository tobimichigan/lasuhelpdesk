<?php
if(!defined('SETUPINC')) die('Kwaheri!');
?>
    <div id="main">
            <h1 style="color:#FF7700;">Configuration file is not writable</h1>
            <div id="intro">
             <p>
             Lagos State University installer requires ability to write to the configuration file <b>include/ost-config.php</b>. 
             </p>
            </div>
            <h3>Solution: <font color="red"><?php echo $errors['err']; ?></font></h3>
            Please follow the instructions below to give read and write access to the web server user.
            <ul>
                <li><b>CLI</b>:<br><i>chmod 0666  include/ost-config.php</i></li>
                <li><b>FTP</b>:<br>Using WS_FTP this would be right hand clicking on the fil, selecting chmod, and then giving all permissions to the file.</li>
                <li><b>Cpanel</b>:<br>Click on the file, select change permission, and then giving all permissions to the file.</li>
            </ul>

            <p><i>Don't worry! We'll remind you to take away the write access post-install</i>.</p>
            <div id="bar">
                <form method="post" action="install.php">
                    <input type="hidden" name="s" value="config">
                    <input class="btn"  type="submit" name="submit" value="Done? Continue &raquo;">
                </form>
            </div>
    </div>
    
