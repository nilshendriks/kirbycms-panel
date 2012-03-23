<?php

l::set(array(
  
  // global 
  'ok' => 'Ok',
  'cancel' => 'Annuleer',
  'nochanges' => 'Er zijn geen wijzigingen',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Uitloggen', 
  
  // subheader
  'subheader.home' => 'Home',  
  'subheader.site' => 'Jouw Site',
  'subheader.info' => 'Info',

  // tabs
  'tabs.overview' => 'Overview',
  'tabs.info' => 'Bewerk Info',
  'tabs.content' => 'Inhoud',
  'tabs.files' => 'Bestanden',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Voorvertoning',
  
  // dashboard
  'dashboard.edit' => 'Bewerk',
  'dashboard.content' => 'Inhoud',
  'dashboard.content.empty' => 'Deze pagina heeft geen inhoud',
  'dashboard.files' => 'Bestanden',
  'dashboard.template' => 'Sjabloon',
  'dashboard.stats.images' => 'Afbeeldingen', 
  'dashboard.stats.videos' => 'Videos', 
  'dashboard.stats.docs' => 'Documenten', 
  'dashboard.stats.sound' => 'Geluid', 
  'dashboard.stats.others' => 'Anders', 

  // home
  'home.siteinfo' => 'Site info',
  'home.edit' => 'Bewerk',
  'home.warning.title' => 'AUB eerst aanpassen!',
  'home.warning.permissions.title' => 'Bevoegdheden',
  'home.warning.permissions.text' => 'De bevoegdheden in je inhoud map zijn niet juist toegekend. Verander alstublieft de bevoegdheden voor alle mappen naar  <strong>0755</strong> en voor alle bestanden naar <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Blauwdrukken',
  'home.warning.blueprints.text' => 'Er zijn geen blauwdrukken aanwezig voor de volgende sjablonen<br /> Lees meer over <a href="http://getkirby.com/panel/blueprints">how to install blueprints for your templates</a>',
  'home.warning.thumbs.title' => 'Thumbnails',
  'home.warning.thumbs.text' => 'Voeg een <strong>thumbs</strong> map toe in de hoofd map van je site en verander de bevoegdheden ervan naar <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Bewaar',
  'siteinfo.errors.title' => 'AUB een titel toevoegen',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> is niet schrijfbaar. <br />Verander AUB de bevoegdheden en probeer nog eens.',
  
  // content form 
  'content.save' => 'Save',
  'content.previous' => 'Previous',
  'content.next' => 'Next',
  'content.invisible' => 'invisible',
  
  // no content available
  'nocontent.title' => 'No Content',
  'nocontent.text' => 'There\'s no content for this page available.',
    
  // pages
  'pages.title' => 'Visible pages',
  'pages.title.home' => 'Pages',
  'pages.home' => 'Home',
  'pages.sort' => 'Sort',
  'pages.add' => 'Add',
  'pages.delete' => 'Remove',
  'pages.invisible' => 'Invisible subpages',
  'pages.invisible.home' => 'Invisible pages',
  'pages.no.visible' => 'No visible pages so far',
  'pages.no.invisible' => 'No invisible pages so far',
  'pages.moved' => 'The page has been moved',
  'pages.sorted' => 'The pages have been sorted',
  'pages.show.more' => 'show more',
  'pages.show.less' => 'show less',
  'pages.errors.notfound' => 'The page could not be found',
  'pages.errors.move' => 'The page could not be moved',
  'pages.errors.sort' => 'Not all pages could be sorted',
  'pages.errors.nosort' => 'There\'s nothing to sort',

  // no subpages allowed
  'nopages.title' => 'Subpages',
  'nopages.text' => 'This page is not supposed to have subpages',  
  
  // add page
  'pages.add.title' => 'Add a new page',
  'pages.add.label.title' => 'Title',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Template',
  'pages.add.button' => 'Save',
  'pages.add.errors.title' => 'Please add a title',
  'pages.add.errors.url' => 'Please add a URL for your page',
  'pages.add.errors.characters' => 'Please only use the following characters a-z, 0-9, _, - for the URL',
  'pages.add.errors.exists' => 'A page with that url already exists',
  'pages.add.errors.permissions' => 'The directory could not be created',
  'pages.add.success' => 'The page has been created',

  // update page
  'pages.update.errors.title' => 'Please add a title',
    
  // delete page  
  'pages.delete.title' => 'Delete this page',
  'pages.delete.button' => 'Delete',
  'pages.delete.errors.homepage' => 'You cannot delete the homepage',
  'pages.delete.errors.errorpage' => 'You cannot delete the error page',
  'pages.delete.errors.subpages' => 'This page has subpages. Please delete them first.',
  'pages.delete.errors.permissions' => 'The page could not be removed',
  'pages.delete.success' => 'The page has been removed',

  // options
  'options.url' => 'URL',
  'options.button' => 'Save',
  'options.home.url' => 'URL',
  'options.home.text' => 'You cannot change the URL of the homepage',
  'options.error.text' => 'You cannot change the URL of the error page',
  'options.errors.homepage' => 'You cannot change the URL of the homepage',
  'options.errors.errorpage' => 'You cannot change the URL of the error page',
  'options.errors.characters' => 'Please only use the following characters a-z, 0-9, _, -',
  'options.errors.permissions' => 'The the content directory cannot be moved',
  'options.errors.exists' => 'The new URL already exists',
  'options.errors.move' => 'The the content directory cannot be moved',

  // files
  'files.title' => 'Files',
  'files.upload' => 'Upload a new file',
  'files.edit' => 'Edit',
  'files.replace' => 'Replace',
  'files.delete' => 'Delete',
  'files.empty' => 'No files so far',

  'nofiles.title' => 'No Files',
  'nofiles.text' => 'This page is not supposed to have files',
  
  // delete file
  'files.delete.title' => 'Delete this file',
  'files.delete.button' => 'Delete',
  'files.delete.errors.notfound' => 'The file could not be found',
  'files.delete.errors.permissions' => 'The file could not be delete',
  'files.delete.success' => 'The file has been deleted',

  // edit file
  'files.edit.title' => 'Edit file',
  'files.edit.filename' => 'Filename (without extension)',
  'files.edit.button' => 'Save',
  'files.edit.errors.notfound' => 'The file could not be found',
  'files.edit.errors.exists' => 'The the new name already exists',
  'files.edit.errors.permissions' => 'The file could not be renamed',
  'files.edit.success' => 'The file has been saved',

  // replace file
  'files.replace.title' => 'Replace this file',
  'files.replace.file' => 'File',
  'files.replace.choose' => 'Please choose a new file from your computer…',
  'files.replace.button' => 'Replace',
  'files.replace.errors.notfound' => 'The file could not be found',
  'files.replace.success' => 'The file has been replaced',

  // upload file
  'files.upload.title' => 'Upload a new file',
  'files.upload.choose' => 'Please choose a file from your computer…',
  'files.upload.button' => 'Upload',
      
  // login  
  'login.button' => 'Login',
  'login.username' => 'Username',
  'login.password' => 'Password',
  'login.error' => 'Invalid username or password',
  'login.success' => 'You have been logged in',
  'login.error.browser.title' => 'You are using an old browser',
  'login.error.browser.text' => 'Please upgrade to the latest version of Google Chrome, Firefox, Safari or Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'The file has not been found',
  'upload.errors.file-exists' => 'The file exists and cannot be overwritten',
  'upload.errors.invalid-upload' => 'The upload failed',
  'upload.errors.too-big' => 'The file is too big',
  'upload.errors.invalid-file' => 'The file type is not allowed',
  'upload.errors.move-error' => 'The file could not be moved to the server',
  'upload.success' => 'The file has been uploaded',

  // writer
  'writer.errors.permissions' => 'The file is not writable',
  'writer.errors.write' => 'The data could not be added',
  'writer.success' => 'The file has been saved',
  
));

?>