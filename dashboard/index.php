<?php
// header("location: ../");
?>

<script>
if( localStorage.getItem('statusLocalStorage') === 'hr' )
{
    window.location.replace("main.php"); 
}
else
{
    window.location.replace("../");    
}

</script>