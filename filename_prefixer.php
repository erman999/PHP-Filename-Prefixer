function filename_prefixer($filename, $text = '', $location = 'start'){

  $pathinfo = pathinfo($filename);

  if ($pathinfo['dirname'] === '.') { $dirname = ''; } else { $dirname = $pathinfo['dirname'] . DIRECTORY_SEPARATOR; }
  
  switch ($location) {
    case 'start':
    return $dirname . $text . $pathinfo['filename'] . '.' . $pathinfo['extension'];
    break;

    case 'beforeExt':
    return $dirname . $pathinfo['filename'] . $text . '.' . $pathinfo['extension'];
    break;

    case 'end':
    return $dirname . $pathinfo['filename'] . '.' . $pathinfo['extension'] . $text;
    break;

    default:
    return $dirname . $pathinfo['filename'] . '.' . $pathinfo['extension'];
    break;
  }
}