<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  contacts:
    label: Contacts
    type:  structure
    fields:
      title:
        label: Title
        type: text
      link:
        label: Link
        type: text
      desc:
        label: Text (if no link)
        type: text