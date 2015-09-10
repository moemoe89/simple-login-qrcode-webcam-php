<?php 

if( !session_id() )
{
    session_start();
}

session_destroy();

?>

<script>
    alert("You have successfully logged out!");
    self.location.replace("index.php");
</script>