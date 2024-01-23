<!DOCTYPE html>
<html>
<head>
<style>
.row {
  width: 350px;
  height: 375px;
  background-color: #333;
  margin:0 auto;
}
.row label {
  width: 100%;
  margin:0 auto;
}
.row input[type="text"],.row input[type="email"],.row textarea {
margin: 0 auto;
}
.submit-button {
  margin-bottom: 0;
}
.top{
  background-color: blue;
  width: 350px;
  height:40px;
}
</style>
</head>

<body>

 <form action="request.php"method="post">
  <div class="row">
    <div class="top">
</div>
      <label>Full name *<br/>
        <input type="text" placeholder="Full name">
      </label>
      <p><label>Email *<br/>
        <input type="email" placeholder="Email address">
      </label>
      <p><label>Message *<br/>
        <textarea placeholder="Describe your needs" rows="3"></textarea>
      </label>
     <p> <input type="submit" class="submit-button" value="Submit"></p>
    </div>
  </form>
</body>
</html>