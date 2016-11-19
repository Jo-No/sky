<!-- <html>

<button type=submit> Upload </button>

<!-- <button type=submit action="simplexml_load_file()"> Print Array </button>  -->

<!-- </html> --> -->

<?php

$filmsArray = [];

$xml = simplexml_load_file( 'films.xml');
  foreach ($xml as $film) {
    $film = new Film($film->name, $film->mood, $film->id, $film->image);
    echo ($film->title);
    array_push($filmsArray, $film);

  }



class Film {
  var $title;
  var $mood;
  var $id;
  var $image;

  function __construct($new_title, $new_mood, $new_id, $new_image) {
			$this->title = $new_title;
      $this->mood = $new_mood;
      $this->id = $new_id;
      $this->image = $new_image;

    return $this->title;
    return $this->mood;
    return $this->id;
    return $this->image;
  }
}




 ?>
