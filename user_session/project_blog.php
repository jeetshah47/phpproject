<!DOCTYPE html>
<?php
include '../base.php';
//$sql = "SELECT * FROM contentdata";
//$result = mysqli_query($conn, $sql);
/*if (mysqli_num_rows($result) > 0) {

  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if($row["user_uname"] == $username && $row["passwords"] == $passwords) {
       
    } 
  }

} else {
  echo "Sorry User Not Found";
}*/
$q = $_REQUEST["q"];
echo $q;
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>McFly Family Values</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <article class="post">
    <img src="../uploads/map.jpg" alt="Back to the Future" />
      <div class="post-content">
        <h1 id="post-title">McFly Family Values</h1>
        <div class="post-meta">
          <span class="post-author">Mina Mikhail</span>
          <time class="post-published">Saturday, January 8, 2005</time>
        </div>
        <p>
          Anybody who knows me at all knows that my favorite movie of all time is <a href="http://www.imdb.com/title/tt0088763/">Back to the Future</a>. I’ve seen it literally hundreds of times and it never ceases to entertain. Beyond its entertainment value lies something more, something that the pedestrian Back to the Future watcher might not pick up on. It’s not the fact that the movie is brilliantly directed, cast (Crispin Glover and Thomas F. Wilson were the only possible choices for George and Biff, respectively) and acted, that the subject matter is, on the surface, one of those ethereal ideas that every man, woman and child muses about at some point in their life, or that in Marty McFly we find a protagonist who, by being both the average seventeen-year-old and at the same time the coolest kid in Hill Valley, is so infinitely relatable, that truly makes this a great movie. No, there is a subtext to Back to the Future that goes beyond all these things and speaks directly to the audience in the language of their lives. The first fifteen minutes of the movie are so carefully constructed it would be hard to imagine telling the story any other way. In that crucial fifteen minutes we go from title credits, which themselves contain a plethora of information that becomes important in the film, to Marty travelling back to 1955. Each piece of dialog in this sequence is not only relevant to the rest of the movie but to the rest of the trilogy. In this fifteen minute span we are presented with everything we need to know about Marty McFly, the people that impact his life and Hill Valley in general.
        </p>

        

        
      </div>
    </article>
  </body>
</html>