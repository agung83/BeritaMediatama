<?php

session_destroy();

echo "<script>
alert('anda telah logout');
window.location='index.php';
</script>";
