<?php
// header("location: login");
?>

<script>
if( localStorage.getItem('statusLocalStorage') === 'hr' )
{
    window.location.replace("/hrworktimev2/dashboard"); 
}
else
{
    window.location.replace("/hrworktimev2/login");    
}

</script>