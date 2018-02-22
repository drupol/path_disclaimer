<?php

/**
 * A hook to register pages where the disclaimer should be enabled.
 */
function hook_path_disclaimer_path_info() {
  return array(
    'node/123',
  );
}
