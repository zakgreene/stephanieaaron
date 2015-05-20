<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  image:
  	label: Headshot
  	type: selector
  	mode: single
  	types:
  		- image
  text:
    label: Bio
    type:  textarea
  more:
    label: Bio - Read More
    type:  textarea
  sidebar:
  	label: Sidebar
  	type: textarea
  links:
    label: Links
    type:  structure
    fields:
      title:
        label: Title
        type: text
      link:
        label: Link
        type: text