<?php
  ob_start('ob_gzhandler'); //Use GZIP compression from PHP, since 1and1 don't support it from Apache!
  header('Content-type: application/rss+xml');
  
  include('../engine/engine.inc');
  include('translations_branch.inc');
  
  $page = new Page;
  $status = convertXml2Array('status_branch.xml');
  printTranslationsStatusRSS($status, 'Branch', 'http://winmerge.svn.sourceforge.net/viewvc/winmerge/branches/' . $stablerelease = $page->getStableRelease()->getBranchName() . '/Src/Languages/');
?>