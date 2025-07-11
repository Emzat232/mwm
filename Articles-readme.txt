How To Add A New Article

1. Open articles.json

2. Copy this and paste above the first article:

  {
    "title": "The name of the article",
    "snippet": "Short description of the article",
    "url": "articlefile.html"
  },

3. Open notepad++ and create a new file.

4. Save the file with the extension "hypertext markup language"/"html". Foe example,
an article about Mercedes Benz can be saved as "mercedes.html"

5. Write the name of the article file on step 2, on the URL section.

6. On the html file (step 4), copy and paste the following:

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <title>Write the heading here</title>

  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
	<div class="abouthead">
  
<header>
    <p1>Write the snippet here</p1>
  </header>
  </div

  <main>
	<img src="photoname.jpg" alt="" width="480px" height="auto" id="img">

    <p><em>Published on </em></p>

    <p>Write the content of the article here</p>
  </main>
  </div>

<div class="footer">      
<footer>
   <links>
     <div class="links">
     <a href="index.html" id="id1">Home</a>
     <a href="about.html" id="id1">About</a>
     <a href="team.html">MWM Team</a>
     <a href="contact.html" id="id1">Contact Us</a>
       </div>
	<copyright>©Modern World Magazine, 2025.</copyright>
  </links>
   </footer>      
      </div>
</body>
</html>



7. Change and write the heading where it says "Write the heading here",
write the snippet where it says "write the snippet here", write the article 
where it says "write the content of the article here" and write the date near "published on".

8.Find a suitable picture for the article and check if it's a jpeg or jpg. Name 
it relevant to the article and save (e.g. Mercedes.jpeg).

9. Write the name of the picture where it says "imagename.jpg" and change to jpeg
if the picture is in jpeg.

10. Save the article.json file, then import the html file and picture to github.