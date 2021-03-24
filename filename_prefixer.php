<?php

function filename_prefixer($filename, $prefix = '', $location = 'start'){

  $pathinfo = pathinfo($filename);

  if ($pathinfo['dirname'] === '.') { $dirname = ''; } else { $dirname = $pathinfo['dirname'] . DIRECTORY_SEPARATOR; }

  switch ($location) {
    case 'start':
    return $dirname . $prefix . $pathinfo['filename'] . '.' . $pathinfo['extension'];
    break;

    case 'beforeExt':
    return $dirname . $pathinfo['filename'] . $prefix . '.' . $pathinfo['extension'];
    break;

    case 'end':
    return $dirname . $pathinfo['filename'] . '.' . $pathinfo['extension'] . $prefix;
    break;

    default:
    return $dirname . $pathinfo['filename'] . '.' . $pathinfo['extension'];
    break;
  }
}

?>
