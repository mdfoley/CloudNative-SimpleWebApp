<?php
echo '<section id="cta" class="wrapper style3">
           
<h2>My Application for HDP! Welcome Seattle !</h2>

<ul class="actions">
            <li><a href="#" class="button big">'.getenv("VCAP_APP_PORT").'</a></li>
</ul>
</section>';
?>
     