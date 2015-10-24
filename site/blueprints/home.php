<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    buttons: false
  adjectives:
    label: Adjectives
    type:  structure
    help:  Words the animation will cycle through. Replaces the contents of &lt;span class="adjective"&gt;
    width: 1/2
    fields:
      title:
        label: Word
        type: text
  adj_speed:
    label: Adjective Speed
    help: (Milliseconds)
    type: number
    default: 1000
    width: 1/2
  people_speed:
    label: People Speed
    help: (Milliseconds)
    type: number
    default: 1000
    width: 1/2