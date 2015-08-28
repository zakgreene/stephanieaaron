<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  text
  adjectives:
    label: Adjectives
    type:  structure
    help:  Words the animation will cycle through. Replaces the contents of &lt;span class="adjective"&gt;
    width: 1/2
    fields:
      title:
        label: Word
        type: text