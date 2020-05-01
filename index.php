<?php

  $yourls_redirect_landing = getenv('YOURLS_REDIRECT_INDEX');
  header('Location: '.$yourls_redirect_landing);

?>
