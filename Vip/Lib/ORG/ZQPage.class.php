<?php
if($_SESSION[C('_l')]=='english'){
    import("@.ORG.ZQPage_en");
}else{
    import("@.ORG.ZQPage_cn");
}
?>