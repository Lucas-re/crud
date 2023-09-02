<?php
/**
 * Sessão 
 */
session_start();

if(isset($_SESSION['mensagem'])): ?>
 <script>
   window.onload = function(){
     // M.toast({html: ''});
     alert("<?php echo $_SESSION['mensagem']; ?>");
   };
 </script>
<?php 
endif;
session_unset();