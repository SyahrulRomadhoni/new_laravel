<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}


.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

.header h1 {
  font-size: 40px;
}


.navbar {
  overflow: hidden;
  background-color: #333;
}


.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


.navbar a:hover {
  background-color: #ddd;
  color: black;
}


.row {  
  display: flex;
  flex-wrap: wrap;
}

.main {   
  flex: 70%;
  background-color: white;
  padding: 20px;
}


@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width:100%;
  }

}
</style>
</head>
<body>

<div class="header">
  <h1>Welcome to My Website</h1>
  <p>A website created by Me.</p>
</div>

<div class="navbar">
  <a href="#">HOME</a>
  <a href="artikel0198"></i> Artikel</a>
  <a href="contactus0198"></i> Contact Us</a>

</body>
</html>