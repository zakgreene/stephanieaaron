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
  methods:
    label: Methods
    type:  structure
    fields:
      title:
        label: Method
        type: text
      desc:
        label: Text
        type: textarea