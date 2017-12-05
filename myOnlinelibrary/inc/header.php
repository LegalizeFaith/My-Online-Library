<html>
<head>
<title><?php echo "My Online Collection"; ?></title>
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<div class="header">

  <div class="wrapper">

    <h1 class="branding-title"><a href="/">My online Collectio</a></h1>

    <ul class="nav">
              <li class="books<? if ($section == "books") { echo " on "; } ?>"><a href="catalog.php?cat=books">Books</a></li>
              <li class="movies<? if ($section == "movies") { echo " on "; } ?>""><a href="catalog.php?cat=movies">Movies</a></li>
              <li class="music<? if ($section == "music") { echo " on "; } ?>""><a href="catalog.php?cat=music">Music</a></li>
              <li class="suggest<? if ($section == "suggest") { echo " on "; } ?>""><a href="suggest.php?cat=suggest">Suggest</a></li>
          </ul>

        </div>

      </div>

      <div id="content">
